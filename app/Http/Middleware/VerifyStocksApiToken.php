<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class VerifyStocksApiToken
{
    public function handle(Request $request, Closure $next): Response
    {
        $expected = config('services.stocks_api.token');

        if (empty($expected)) {
            Log::error('[stocks-api] STOCKS_API_TOKEN не настроен в .env');

            return response()->json([
                'success' => false,
                'code' => 'not_configured',
                'message' => 'Сервис не настроен на стороне сервера. Обратитесь к разработчикам.',
            ], 503);
        }

        $provided = $this->extractToken($request);

        if ($provided === null) {
            Log::warning('[stocks-api] Запрос без токена', [
                'ip' => $request->ip(),
            ]);

            return response()->json([
                'success' => false,
                'code' => 'unauthorized',
                'message' => 'Не передан токен. Добавьте заголовок "Authorization: Bearer <ваш_токен>".',
            ], 401);
        }

        if (!hash_equals($expected, $provided)) {
            Log::warning('[stocks-api] Запрос с неверным токеном', [
                'ip' => $request->ip(),
            ]);

            return response()->json([
                'success' => false,
                'code' => 'unauthorized',
                'message' => 'Неверный токен.',
            ], 401);
        }

        return $next($request);
    }

    private function extractToken(Request $request): ?string
    {
        $header = $request->header('Authorization');

        if (is_string($header) && preg_match('/^Bearer\s+(.+)$/i', trim($header), $m)) {
            return trim($m[1]);
        }

        return null;
    }
}
