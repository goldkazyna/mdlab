<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StocksController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $body = $request->getContent();

        if ($body === '' || $body === false) {
            Log::warning('[stocks-api] Пустое тело запроса', [
                'ip' => $request->ip(),
            ]);

            return response()->json([
                'success' => false,
                'code' => 'empty_body',
                'message' => 'Пустое тело запроса. Отправьте JSON в теле POST-запроса с заголовком "Content-Type: application/json".',
            ], 400);
        }

        json_decode($body);
        if (json_last_error() !== JSON_ERROR_NONE) {
            $parseError = json_last_error_msg();

            Log::warning('[stocks-api] Невалидный JSON', [
                'ip' => $request->ip(),
                'parse_error' => $parseError,
                'body_preview' => Str::limit($body, 200),
            ]);

            return response()->json([
                'success' => false,
                'code' => 'invalid_json',
                'message' => 'Невалидный JSON: ' . $parseError,
                'parse_error' => $parseError,
            ], 400);
        }

        $filename = now()->format('Y-m-d_His') . '_' . Str::random(8) . '.json';
        $path = '1c/stocks/' . $filename;

        try {
            Storage::disk('local')->put($path, $body);
        } catch (\Throwable $e) {
            Log::error('[stocks-api] Не удалось сохранить файл', [
                'ip' => $request->ip(),
                'path' => $path,
                'error' => $e->getMessage(),
            ]);

            return response()->json([
                'success' => false,
                'code' => 'save_failed',
                'message' => 'Ошибка сохранения файла на сервере. Обратитесь к разработчикам.',
            ], 500);
        }

        $size = strlen($body);

        Log::info('[stocks-api] Файл принят', [
            'ip' => $request->ip(),
            'path' => $path,
            'size' => $size,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Файл принят.',
            'file' => $path,
            'size' => $size,
            'received_at' => now()->toIso8601String(),
        ], 200);
    }
}
