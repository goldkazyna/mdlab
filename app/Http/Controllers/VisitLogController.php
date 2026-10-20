<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use App\Models\VisitDevice;
use App\Models\VisitIpInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;

class VisitLogController extends Controller
{
    // Cookie, по которой трекер не пишет заходы владельца
    public const IGNORE_COOKIE = 'vl_ignore';

    private const PERIODS = [1, 7, 30, 90];

    public function loginForm()
    {
        return response()->view('visits.login')->header('X-Robots-Tag', 'noindex, nofollow');
    }

    public function login(Request $request)
    {
        $password = (string) config('services.visits.password');
        $key = 'visit-log-login:' . $request->ip();

        if (RateLimiter::tooManyAttempts($key, 5)) {
            return back()->withErrors(['password' => 'Слишком много попыток, подождите минуту.']);
        }

        if ($password === '' || !hash_equals($password, (string) $request->input('password'))) {
            RateLimiter::hit($key, 60);

            return back()->withErrors(['password' => $password === '' ? 'VISITS_PASSWORD не задан в .env' : 'Неверный пароль']);
        }

        RateLimiter::clear($key);
        $request->session()->regenerate();
        $request->session()->put('visit_log_auth', true);

        return redirect()->route('visits.index')
            ->withCookie(cookie()->forever(self::IGNORE_COOKIE, '1'));
    }

    public function logout(Request $request)
    {
        $request->session()->forget('visit_log_auth');

        return redirect()->route('visits.login');
    }

    public function index(Request $request)
    {
        $days = in_array((int) $request->query('days'), self::PERIODS, true) ? (int) $request->query('days') : 7;
        $paidOnly = $request->query('paid', '1') === '1';
        $tab = $request->query('tab') === 'visits' ? 'visits' : 'devices';
        $since = now()->subDays($days);

        $blocked = VisitDevice::where('blocked', true)->pluck('fingerprint');
        $blockedIps = Visit::whereIn('fingerprint', $blocked)->distinct()->orderBy('ip')->pluck('ip');

        $view = compact('days', 'paidOnly', 'tab', 'blocked', 'blockedIps') + ['periods' => self::PERIODS];

        if ($tab === 'visits') {
            $visits = Visit::where('created_at', '>=', $since)
                ->when($paidOnly, fn ($q) => $q->where('is_paid', true))
                ->latest('id')
                ->paginate(100)
                ->withQueryString();

            return view('visits.index', $view + [
                'visits' => $visits,
                'ipInfo' => VisitIpInfo::forIps($visits->pluck('ip')->all()),
            ]);
        }

        $devices = $this->devices($since, $paidOnly);
        $ipsByDevice = Visit::where('created_at', '>=', $since)
            ->whereIn('fingerprint', $devices->pluck('fingerprint'))
            ->distinct()
            ->get(['fingerprint', 'ip'])
            ->groupBy('fingerprint')
            ->map(fn ($rows) => $rows->pluck('ip'));

        return view('visits.index', $view + [
            'devices' => $devices,
            'ipsByDevice' => $ipsByDevice,
            'ipInfo' => VisitIpInfo::forIps($ipsByDevice->flatten()->all()),
        ]);
    }

    public function device(Request $request, string $fingerprint)
    {
        $visits = Visit::where('fingerprint', $fingerprint)->latest('id')->limit(500)->get();
        abort_if($visits->isEmpty(), 404);

        return view('visits.device', [
            'fingerprint' => $fingerprint,
            'visits' => $visits,
            'device' => VisitDevice::firstOrNew(['fingerprint' => $fingerprint]),
            'ipInfo' => VisitIpInfo::forIps($visits->pluck('ip')->all()),
        ]);
    }

    public function updateDevice(Request $request, string $fingerprint)
    {
        abort_unless(Visit::where('fingerprint', $fingerprint)->exists(), 404);

        $data = $request->validate([
            'blocked' => 'required|boolean',
            'note' => 'nullable|string|max:500',
        ]);

        VisitDevice::updateOrCreate(['fingerprint' => $fingerprint], $data);

        return back();
    }

    // Сводка по устройствам за период с признаком «подозрительное»
    private function devices($since, bool $paidOnly)
    {
        $paid = (int) config('services.visits.suspicious_paid');
        $avgSec = (int) config('services.visits.suspicious_avg_sec');
        $action = 'clicked_phone = 1 or clicked_whatsapp = 1 or clicked_telegram = 1 or submitted_form = 1';
        $suspicious = "case when sum(case when is_paid = 1 then 1 else 0 end) >= {$paid}"
            . " and (sum(case when {$action} then 1 else 0 end) = 0 or avg(duration_sec) < {$avgSec}) then 1 else 0 end";

        return Visit::where('created_at', '>=', $since)
            ->groupBy('fingerprint')
            ->selectRaw("fingerprint,
                count(*) as sessions,
                sum(case when is_paid = 1 then 1 else 0 end) as paid,
                count(distinct date(created_at)) as days,
                count(distinct ip) as ip_count,
                avg(duration_sec) as avg_duration,
                max(max_scroll) as max_scroll,
                sum(case when {$action} then 1 else 0 end) as actions,
                max(created_at) as last_seen,
                max(device_type) as device_type,
                max(os) as os,
                max(browser) as browser,
                {$suspicious} as suspicious")
            ->when($paidOnly, fn ($q) => $q->havingRaw('sum(case when is_paid = 1 then 1 else 0 end) > 0'))
            ->orderByRaw("{$suspicious} desc")
            ->orderByDesc('paid')
            ->orderByDesc('last_seen')
            ->limit(300)
            ->get();
    }
}
