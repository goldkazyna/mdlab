<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class VisitIpInfo extends Model
{
    protected $fillable = ['ip', 'country', 'city', 'isp', 'is_proxy', 'is_hosting'];

    protected $casts = ['is_proxy' => 'boolean', 'is_hosting' => 'boolean'];

    // Вернуть геоданные по списку IP, недостающие подтянуть из ip-api.com (батч до 100 IP)
    public static function forIps(array $ips)
    {
        $ips = array_values(array_unique(array_filter($ips)));
        $known = self::whereIn('ip', $ips)->get()->keyBy('ip');
        $missing = array_slice(array_values(array_diff($ips, $known->keys()->all())), 0, 100);

        if ($missing) {
            try {
                $response = Http::timeout(4)->post(
                    'http://ip-api.com/batch?fields=status,query,countryCode,city,isp,proxy,hosting',
                    $missing
                );

                foreach ((array) $response->json() as $row) {
                    if (($row['status'] ?? '') !== 'success') {
                        continue;
                    }
                    $known[$row['query']] = self::updateOrCreate(['ip' => $row['query']], [
                        'country' => $row['countryCode'] ?? null,
                        'city' => $row['city'] ?? null,
                        'isp' => mb_substr($row['isp'] ?? '', 0, 255) ?: null,
                        'is_proxy' => (bool) ($row['proxy'] ?? false),
                        'is_hosting' => (bool) ($row['hosting'] ?? false),
                    ]);
                }
            } catch (\Throwable $e) {
                Log::warning('[visits] Не удалось получить геоданные IP: ' . $e->getMessage());
            }
        }

        return $known;
    }
}
