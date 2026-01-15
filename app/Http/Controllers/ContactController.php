<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
        ]);

        $name = $request->input('name');
        $phone = $request->input('phone');
        $page = $request->input('page', 'Не указана');

        // Формируем сообщение
        $message = "🔔 *Новая заявка с сайта!*\n\n";
        $message .= "👤 *Имя:* {$name}\n";
        $message .= "📞 *Телефон:* {$phone}\n";
        $message .= "📄 *Страница:* {$page}\n";
        $message .= "🕐 *Время:* " . now()->format('d.m.Y H:i');

        // Отправляем в Telegram
        $result = $this->sendToTelegram($message);

        if ($result) {
            return response()->json([
                'success' => true,
                'message' => 'Заявка отправлена! Мы скоро свяжемся с вами.'
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Ошибка отправки. Позвоните нам напрямую.'
        ], 500);
    }

private function sendToTelegram(string $message): bool
{
    $token = env('TELEGRAM_BOT_TOKEN');
    $chatId = env('TELEGRAM_CHAT_ID');

    if (!$token || !$chatId) {
        return false;
    }

    $url = "https://api.telegram.org/bot{$token}/sendMessage";

    try {
        $response = Http::withoutVerifying()->post($url, [
            'chat_id' => $chatId,
            'text' => $message,
            'parse_mode' => 'Markdown',
        ]);

        return $response->successful();
    } catch (\Exception $e) {
        \Log::error('Telegram error: ' . $e->getMessage());
        return false;
    }
}
}