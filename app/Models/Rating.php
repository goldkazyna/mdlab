<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'page_url',
        'page_type',
        'page_id',
        'rating',
        'ip'
    ];

	// Получить средний рейтинг страницы
	public static function getAverageRating(string $pageUrl): array
	{
		$ratings = self::where('page_url', $pageUrl)->get();
		
		$count = $ratings->count();
		$average = $count > 0 ? round($ratings->avg('rating'), 2) : 0;
		
		return [
			'average' => $average,
			'count' => $count
		];
	}

    // Проверить голосовал ли пользователь
    public static function hasVoted(string $pageUrl, string $ip): bool
    {
        return self::where('page_url', $pageUrl)
            ->where('ip', $ip)
            ->exists();
    }

    // Получить оценку пользователя
    public static function getUserRating(string $pageUrl, string $ip): ?int
    {
        $rating = self::where('page_url', $pageUrl)
            ->where('ip', $ip)
            ->first();
            
        return $rating?->rating;
    }
}