<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    // Список статей
    public function index()
    {
        $articles = Article::active()
            ->published()
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        // Несуществующая страница пагинации — 404, а не пустой дубль списка
        if ($articles->currentPage() > max(1, $articles->lastPage())) {
            abort(404);
        }

        $page = $articles->currentPage();

        return view('pages.articles.index', [
            'title' => 'Статьи о создании сайтов и продвижении' . ($page > 1 ? " — страница {$page}" : '') . ' | MD Lab',
            'description' => 'Полезные статьи о разработке сайтов, SEO, SMM и digital-маркетинге от веб-студии MD Lab' . ($page > 1 ? " (страница {$page})." : '.'),
            'canonical' => 'https://mdlab.kz/articles' . ($page > 1 ? "?page={$page}" : ''),
            'articles' => $articles
        ]);
    }

    // Отдельная статья
    public function show($slug)
    {
        $article = Article::where('slug', $slug)
            ->active()
            ->published()
            ->firstOrFail();

        return view('pages.articles.show', [
            'title' => $article->meta_title ?? $article->title,
            'description' => self::cleanDescription($article->meta_description ?? $article->description),
            'ogType' => 'article',
            'article' => $article
        ]);
    }

    // Карта сайта статей /sitemap-articles.xml — строится из базы, поэтому новые статьи попадают в неё сами
    public function sitemap()
    {
        $articles = Article::active()
            ->published()
            ->orderBy('published_at', 'desc')
            ->get();

        $lines = ['<?xml version="1.0" encoding="UTF-8"?>', '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'];

        foreach ($articles as $article) {
            $date = $article->updated_at ?? $article->published_at;
            $lines[] = '<url>';
            $lines[] = '    <loc>' . htmlspecialchars('https://mdlab.kz/articles/' . $article->slug, ENT_XML1) . '</loc>';
            if ($date) {
                $lines[] = '    <lastmod>' . $date->toDateString() . '</lastmod>';
            }
            $lines[] = '    <changefreq>monthly</changefreq>';
            $lines[] = '    <priority>0.6</priority>';
            $lines[] = '</url>';
        }

        $lines[] = '</urlset>';

        return response(implode(PHP_EOL, $lines) . PHP_EOL)
            ->header('Content-Type', 'application/xml; charset=UTF-8');
    }

    // Description из базы бывает началом текста статьи, обрезанным посреди слова: убираем теги и переносы
    // и обрезаем по концу предложения, чтобы в выдаче не было «...»
    private static function cleanDescription(?string $text): string
    {
        $text = trim(preg_replace('/\s+/u', ' ', strip_tags(html_entity_decode((string) $text))));

        if (mb_strlen($text) <= 200) {
            return $text;
        }

        $cut = mb_substr($text, 0, 200);
        $end = max(mb_strrpos($cut, '. ') ?: 0, mb_strrpos($cut, '! ') ?: 0, mb_strrpos($cut, '? ') ?: 0);

        return $end >= 80 ? mb_substr($cut, 0, $end + 1) : Str::limit($text, 160, '…');
    }
}
