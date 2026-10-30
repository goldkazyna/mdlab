<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Support\FileArticles;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    // Список статей
    public function index()
    {
        $all = self::allArticles();
        $current = LengthAwarePaginator::resolveCurrentPage();
        $articles = new LengthAwarePaginator(
            $all->forPage($current, 10)->values(),
            $all->count(),
            10,
            $current,
            ['path' => '/articles']
        );

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
        $article = FileArticles::find($slug) ?? Article::where('slug', $slug)
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

    // Основная карта сайта /sitemap.xml: страницы услуг из resources/sitemap-pages.xml + все статьи,
    // поэтому новые статьи (из базы и из resources/articles) попадают в неё сами
    public function sitemapMain()
    {
        $xml = str_replace('<!-- ARTICLES -->', implode(PHP_EOL, self::articleUrls()), file_get_contents(resource_path('sitemap-pages.xml')));

        return response($xml)->header('Content-Type', 'application/xml; charset=UTF-8');
    }

    // Отдельная карта статей /sitemap-articles.xml — оставлена, т.к. могла быть добавлена в вебмастерах
    public function sitemap()
    {
        $lines = array_merge(
            ['<?xml version="1.0" encoding="UTF-8"?>', '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'],
            self::articleUrls(),
            ['</urlset>']
        );

        return response(implode(PHP_EOL, $lines) . PHP_EOL)
            ->header('Content-Type', 'application/xml; charset=UTF-8');
    }

    private static function articleUrls(): array
    {
        $lines = [];

        foreach (self::allArticles() as $article) {
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

        return $lines;
    }

    // Статьи из базы и из кода вместе, новые сверху
    private static function allArticles(): Collection
    {
        return Article::active()->published()->get()
            ->concat(FileArticles::all())
            ->sortByDesc('published_at')
            ->values();
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
