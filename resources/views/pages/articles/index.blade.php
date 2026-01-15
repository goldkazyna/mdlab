@extends('layouts.app')

@push('styles')
<style>
.articles-page {
    padding: 140px 0 80px;
    background: #f8f9fa;
    min-height: 100vh;
}

@media (max-width: 992px) {
    .articles-page {
        padding: 110px 0 60px;
    }
}

.articles-header {
    margin-bottom: 50px;
    text-align: center;
}

.articles-header h1 {
    font-size: 42px;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 15px;
}

.articles-header p {
    font-size: 18px;
    color: #666;
    max-width: 600px;
    margin: 0 auto;
}

/* Карточка статьи */
.article-card {
    display: flex;
    gap: 35px;
    background: #fff;
    border-radius: 16px;
    padding: 30px;
    margin-bottom: 25px;
    transition: all 0.3s ease;
    border: 1px solid #eee;
}

.article-card:hover {
    box-shadow: 0 15px 40px rgba(0, 152, 214, 0.1);
    border-color: #0098D6;
    transform: translateX(5px);
}

.article-card__image {
    width: 220px;
    height: 150px;
    flex-shrink: 0;
    border-radius: 12px;
    overflow: hidden;
    background: linear-gradient(135deg, #d6f3ff 0%, #f0f0f0 100%);
    display: flex;
    align-items: center;
    justify-content: center;
}

.article-card__image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.article-card:hover .article-card__image img {
    transform: scale(1.05);
}

.article-card__image--default {
    padding: 30px;
}

.article-card__image--default img {
    object-fit: contain;
    opacity: 0.5;
    width: 80%;
    height: auto;
}

.article-card__content {
    flex: 1;
    display: flex;
    flex-direction: column;
}

.article-card__date {
    font-size: 13px;
    color: #0098D6;
    font-weight: 500;
    margin-bottom: 12px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.article-card__date i {
    font-size: 12px;
}

.article-card__title {
    font-size: 22px;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 12px;
    text-decoration: none;
    display: block;
    transition: color 0.3s;
    line-height: 1.4;
}

.article-card__title:hover {
    color: #0098D6;
}

.article-card__desc {
    font-size: 15px;
    color: #666;
    line-height: 1.7;
    margin: 0 0 15px 0;
    flex: 1;
}

.article-card__link {
    font-size: 14px;
    font-weight: 600;
    color: #0098D6;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: gap 0.3s;
}

.article-card__link:hover {
    gap: 12px;
}

.article-card__link i {
    font-size: 12px;
}

@media (max-width: 768px) {
    .articles-header h1 {
        font-size: 32px;
    }
    
    .article-card {
        flex-direction: column;
        gap: 20px;
        padding: 20px;
    }
    
    .article-card__image {
        width: 100%;
        height: 200px;
    }
    
    .article-card__title {
        font-size: 20px;
    }
}

/* Пагинация */
.pagination-wrapper {
    margin-top: 50px;
    display: flex;
    justify-content: center;
}

.pagination {
    display: flex;
    align-items: center;
    gap: 8px;
    list-style: none;
    padding: 0;
    margin: 0;
}

.pagination li {
    display: inline-block;
}

.pagination .page-link {
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 45px;
    height: 45px;
    padding: 0 15px;
    border-radius: 10px;
    border: 2px solid #eee;
    background: #fff;
    color: #333;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.3s;
}

.pagination .page-link:hover {
    border-color: #0098D6;
    color: #0098D6;
}

.pagination .page-item.active .page-link {
    background: #0098D6;
    border-color: #0098D6;
    color: #fff;
}

.pagination .page-item.disabled .page-link {
    opacity: 0.4;
    pointer-events: none;
}

/* Пустое состояние */
.articles-empty {
    text-align: center;
    padding: 80px 20px;
    background: #fff;
    border-radius: 16px;
}

.articles-empty i {
    font-size: 60px;
    color: #ddd;
    margin-bottom: 20px;
}

.articles-empty p {
    font-size: 18px;
    color: #999;
}
</style>
@endpush

@section('content')
<section class="articles-page">
    <div class="container">
        <div class="articles-header">
            <h1>Статьи</h1>
            <p>Полезные материалы о создании сайтов, SEO-продвижении и digital-маркетинге</p>
        </div>

        <div class="articles-list">
            @forelse($articles as $article)
            <article class="article-card">
                <div class="article-card__image {{ !$article->image ? 'article-card__image--default' : '' }}">
                    <img src="{{ $article->image_url }}" alt="{{ $article->title }}">
                </div>
                <div class="article-card__content">
                    <div class="article-card__date">
                        <i class="fa-regular fa-calendar"></i>
                        {{ $article->published_at->format('d.m.Y') }}
                    </div>
                    <a href="/articles/{{ $article->slug }}" class="article-card__title">
                        {{ $article->title }}
                    </a>
                    <p class="article-card__desc">
                        {{ Str::limit($article->description, 200) }}
                    </p>
                    <a href="/articles/{{ $article->slug }}" class="article-card__link">
                        Читать статью <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </article>
            @empty
            <div class="articles-empty">
                <i class="fa-regular fa-newspaper"></i>
                <p>Статьи пока не добавлены</p>
            </div>
            @endforelse
        </div>

        @if($articles->hasPages())
        <div class="pagination-wrapper">
            {{ $articles->links() }}
        </div>
        @endif
    </div>
</section>

@include('partials.rateit')
@endsection