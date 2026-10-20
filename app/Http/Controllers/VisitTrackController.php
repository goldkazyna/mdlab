<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Database\QueryException;
use Illuminate\Database\UniqueConstraintViolationException;
use Illuminate\Http\Request;

class VisitTrackController extends Controller
{
    // Приём данных от трекера (public/assets/js/visit-tracker.js)
    public function store(Request $request)
    {
        // Свои заходы (после входа в журнал) не пишем
        if ($request->cookie(VisitLogController::IGNORE_COOKIE)) {
            return response()->noContent();
        }

        $data = json_decode($request->getContent(), true);

        if (!is_array($data)
            || !preg_match('/^[a-z0-9-]{8,36}$/i', (string) ($data['s'] ?? ''))
            || !preg_match('/^[a-f0-9]{8,32}$/', (string) ($data['fp'] ?? ''))) {
            return response()->noContent(422);
        }

        $behavior = [
            'pages' => min(max((int) ($data['pages'] ?? 1), 1), 1000),
            'duration_sec' => min(max((int) ($data['dur'] ?? 0), 0), 86400),
            'max_scroll' => min(max((int) ($data['scroll'] ?? 0), 0), 100),
            'clicked_phone' => !empty($data['ph']),
            'clicked_whatsapp' => !empty($data['wa']),
            'clicked_telegram' => !empty($data['tg']),
            'submitted_form' => !empty($data['form']),
        ];

        try {
            $visit = Visit::where('session_id', $data['s'])->first();
        } catch (QueryException) {
            // Таблиц ещё нет — создаём, данные этого запроса пропускаем
            Visit::ensureTables();

            return response()->noContent();
        }

        if ($visit) {
            // Значения накопительные: берём максимум, флаги только включаются
            $visit->pages = max($visit->pages, $behavior['pages']);
            $visit->duration_sec = max($visit->duration_sec, $behavior['duration_sec']);
            $visit->max_scroll = max($visit->max_scroll, $behavior['max_scroll']);
            foreach (['clicked_phone', 'clicked_whatsapp', 'clicked_telegram', 'submitted_form'] as $flag) {
                $visit->$flag = $visit->$flag || $behavior[$flag];
            }
            $visit->save();

            return response()->noContent();
        }

        $url = $this->str($data['url'] ?? '', 2000);
        parse_str((string) parse_url((string) $url, PHP_URL_QUERY), $query);
        $q = fn (string $key, int $len) => is_string($query[$key] ?? null) ? $this->str($query[$key], $len) : null;

        $gclid = $q('gclid', 255) ?? $q('gbraid', 255) ?? $q('wbraid', 255);
        $utmSource = $q('utm_source', 100);
        $utmMedium = $q('utm_medium', 100);
        $isPaid = $gclid !== null
            || (str_contains(strtolower((string) $utmSource), 'google')
                && in_array(strtolower((string) $utmMedium), ['cpc', 'ppc', 'paid', 'paidsearch'], true));

        $ua = $this->str($request->userAgent() ?? '', 512);

        try {
            Visit::create(array_merge($behavior, Visit::parseUserAgent((string) $ua), [
                'session_id' => $data['s'],
                'fingerprint' => $data['fp'],
                'visitor_id' => preg_match('/^[a-z0-9-]{8,36}$/i', (string) ($data['vid'] ?? '')) ? $data['vid'] : null,
                'ip' => $request->ip(),
                'user_agent' => $ua,
                'screen' => $this->str($data['scr'] ?? '', 20),
                'language' => $this->str($data['lang'] ?? '', 20),
                'timezone' => $this->str($data['tz'] ?? '', 50),
                'landing_url' => $url,
                'referrer' => $this->str($data['ref'] ?? '', 2000),
                'is_paid' => $isPaid,
                'gclid' => $gclid,
                'utm_source' => $utmSource,
                'utm_medium' => $utmMedium,
                'utm_campaign' => $q('utm_campaign', 255),
                'utm_term' => $q('utm_term', 255),
            ]));
        } catch (UniqueConstraintViolationException) {
            // Параллельный запрос той же сессии уже создал запись
        }

        // Изредка чистим записи старше срока хранения
        if (random_int(1, 100) === 1) {
            Visit::where('created_at', '<', now()->subDays(config('services.visits.keep_days')))->delete();
        }

        return response()->noContent();
    }

    private function str(mixed $value, int $max): ?string
    {
        $value = is_scalar($value) ? trim((string) $value) : '';

        return $value === '' ? null : mb_substr($value, 0, $max);
    }
}
