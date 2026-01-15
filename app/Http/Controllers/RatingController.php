<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'page_url' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'page_type' => 'nullable|string|max:50',
            'page_id' => 'nullable|integer',
        ]);

        $ip = $request->ip();
        $pageUrl = $request->page_url;

        // Проверяем, не голосовал ли уже
        if (Rating::hasVoted($pageUrl, $ip)) {
            // Обновляем существующую оценку
            Rating::where('page_url', $pageUrl)
                ->where('ip', $ip)
                ->update(['rating' => $request->rating]);
        } else {
            // Создаём новую
            Rating::create([
                'page_url' => $pageUrl,
                'page_type' => $request->page_type,
                'page_id' => $request->page_id,
                'rating' => $request->rating,
                'ip' => $ip,
            ]);
        }

        $stats = Rating::getAverageRating($pageUrl);

        return response()->json([
            'success' => true,
            'average' => $stats['average'],
            'count' => $stats['count'],
            'message' => 'Спасибо за вашу оценку!'
        ]);
    }

    public function get(Request $request)
    {
        $pageUrl = $request->get('page_url');
        $ip = $request->ip();

        $stats = Rating::getAverageRating($pageUrl);
        $userRating = Rating::getUserRating($pageUrl, $ip);

        return response()->json([
            'average' => $stats['average'],
            'count' => $stats['count'],
            'user_rating' => $userRating
        ]);
    }
}