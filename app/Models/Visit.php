<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'is_paid' => 'boolean',
        'clicked_phone' => 'boolean',
        'clicked_whatsapp' => 'boolean',
        'clicked_telegram' => 'boolean',
        'submitted_form' => 'boolean',
    ];

    // Было ли хоть одно целевое действие
    public function hasAction(): bool
    {
        return $this->clicked_phone || $this->clicked_whatsapp || $this->clicked_telegram || $this->submitted_form;
    }

    // 75 → «1:15»
    public static function formatDuration(int|float|null $seconds): string
    {
        $seconds = (int) round((float) $seconds);

        return intdiv($seconds, 60) . ':' . str_pad((string) ($seconds % 60), 2, '0', STR_PAD_LEFT);
    }

    // Путь страницы входа без домена и рекламных меток
    public function landingPath(): string
    {
        return (string) (parse_url((string) $this->landing_url, PHP_URL_PATH) ?: '/');
    }

    // Грубый разбор User-Agent: браузер, ОС, тип устройства
    public static function parseUserAgent(string $ua): array
    {
        $browser = match (true) {
            str_contains($ua, 'YaBrowser') => 'Yandex',
            str_contains($ua, 'Edg/') => 'Edge',
            str_contains($ua, 'OPR/') || str_contains($ua, 'Opera') => 'Opera',
            str_contains($ua, 'SamsungBrowser') => 'Samsung',
            str_contains($ua, 'Firefox/') || str_contains($ua, 'FxiOS') => 'Firefox',
            str_contains($ua, 'Chrome/') || str_contains($ua, 'CriOS') => 'Chrome',
            str_contains($ua, 'Safari/') => 'Safari',
            default => 'Другой',
        };

        $os = match (true) {
            str_contains($ua, 'Windows') => 'Windows',
            str_contains($ua, 'Android') => 'Android',
            str_contains($ua, 'iPhone') || str_contains($ua, 'iPad') || str_contains($ua, 'iPod') => 'iOS',
            str_contains($ua, 'Mac OS X') => 'macOS',
            str_contains($ua, 'Linux') => 'Linux',
            default => 'Другая',
        };

        $device = match (true) {
            str_contains($ua, 'iPad') || (str_contains($ua, 'Android') && !str_contains($ua, 'Mobile')) => 'tablet',
            str_contains($ua, 'Mobile') || str_contains($ua, 'iPhone') => 'mobile',
            default => 'desktop',
        };

        return ['browser' => $browser, 'os' => $os, 'device_type' => $device];
    }
}
