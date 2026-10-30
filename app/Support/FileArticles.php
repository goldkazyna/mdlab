<?php

namespace App\Support;

use App\Models\Article;
use Illuminate\Support\Collection;

/**
 * Статьи, которые хранятся в коде (resources/articles/{slug}.php), а не в базе:
 * публикуются пушем, без доступа к базе на сервере. В списке, карте сайта и на странице
 * статьи выглядят так же, как статьи из базы.
 */
class FileArticles
{
    public static function all(): Collection
    {
        return collect(glob(resource_path('articles/*.php')))
            ->map(fn ($file) => self::make(basename($file, '.php'), require $file))
            ->filter(fn (Article $article) => $article->published_at <= now())
            ->values();
    }

    public static function find(string $slug): ?Article
    {
        if (! preg_match('/^[a-z0-9-]+$/', $slug) || ! is_file($file = resource_path("articles/{$slug}.php"))) {
            return null;
        }

        $article = self::make($slug, require $file);

        return $article->published_at <= now() ? $article : null;
    }

    private static function make(string $slug, array $data): Article
    {
        $article = new Article();
        $article->forceFill([
            'slug' => $slug,
            'title' => $data['title'],
            'description' => $data['description'],
            'content' => $data['content'],
            'image' => $data['image'] ?? null,
            'meta_title' => $data['meta_title'] ?? null,
            'meta_description' => $data['meta_description'] ?? null,
            'is_active' => true,
            'published_at' => $data['published_at'],
            'updated_at' => $data['updated_at'] ?? $data['published_at'],
        ]);
        $article->faq = $data['faq'] ?? [];
        $article->fromFile = true;

        return $article;
    }
}
