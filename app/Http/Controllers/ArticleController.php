<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    // Список статей
    public function index()
    {
        $articles = Article::active()
            ->published()
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        return view('pages.articles.index', [
            'title' => 'Статьи о создании сайтов и продвижении | MD Lab',
            'description' => 'Полезные статьи о разработке сайтов, SEO, SMM и digital-маркетинге от веб-студии MD Lab',
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
            'description' => $article->meta_description ?? $article->description,
            'article' => $article
        ]);
    }
}