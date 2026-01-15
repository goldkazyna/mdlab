@extends('layouts.app')

@push('styles')
<style>
.article-page {
    padding: 140px 0 80px;
    background: #f8f9fa;
    min-height: 100vh;
}

@media (max-width: 992px) {
    .article-page {
        padding: 110px 0 60px;
    }
}

.article-container {
    background: #fff;
    border-radius: 20px;
    padding: 60px 80px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.06);
}

@media (max-width: 992px) {
    .article-container {
        padding: 40px;
    }
}

@media (max-width: 576px) {
    .article-container {
        padding: 25px 20px;
        border-radius: 15px;
    }
}

/* Верхняя навигация */
.article-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 35px;
    padding-bottom: 25px;
    border-bottom: 1px solid #eee;
}

.article-back {
    font-size: 14px;
    font-weight: 500;
    color: #0098D6;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    transition: gap 0.3s;
}

.article-back:hover {
    gap: 15px;
}

.article-date {
    font-size: 14px;
    color: #999;
    display: flex;
    align-items: center;
    gap: 8px;
}

.article-date i {
    color: #0098D6;
}

/* Заголовок */
.article-title {
    font-size: 38px;
    font-weight: 700;
    color: #1a1a2e;
    margin-bottom: 35px;
    line-height: 1.3;
}

@media (max-width: 768px) {
    .article-title {
        font-size: 28px;
        margin-bottom: 25px;
    }
}

/* Картинка */
.article-image {
    width: 100%;
    border-radius: 16px;
    margin-bottom: 40px;
    overflow: hidden;
}

.article-image img {
    width: 100%;
    height: auto;
    display: block;
}

/* Контент статьи */
.article-content {
    font-size: 17px;
    line-height: 1.9;
    color: #444;
}

.article-content h2 {
    font-size: 28px;
    font-weight: 700;
    color: #1a1a2e;
    margin: 45px 0 20px;
}

.article-content h3 {
    font-size: 22px;
    font-weight: 600;
    color: #1a1a2e;
    margin: 35px 0 15px;
}

.article-content h4 {
    font-size: 18px;
    font-weight: 600;
    color: #1a1a2e;
    margin: 30px 0 15px;
}

.article-content p {
    margin-bottom: 20px;
}

.article-content ul,
.article-content ol {
    margin: 25px 0;
    padding-left: 0;
    list-style: none;
}

.article-content ul li,
.article-content ol li {
    position: relative;
    padding-left: 30px;
    margin-bottom: 12px;
}

.article-content ul li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 10px;
    width: 8px;
    height: 8px;
    background: #0098D6;
    border-radius: 50%;
}

.article-content ol {
    counter-reset: item;
}

.article-content ol li::before {
    content: counter(item);
    counter-increment: item;
    position: absolute;
    left: 0;
    top: 0;
    width: 24px;
    height: 24px;
    background: #0098D6;
    color: #fff;
    border-radius: 50%;
    font-size: 13px;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
}

.article-content a {
    color: #0098D6;
    text-decoration: none;
    border-bottom: 1px solid transparent;
    transition: border-color 0.3s;
}

.article-content a:hover {
    border-color: #0098D6;
}

.article-content img {
    max-width: 100%;
    border-radius: 12px;
    margin: 30px 0;
}

.article-content blockquote {
    border-left: 4px solid #0098D6;
    padding: 20px 30px;
    margin: 30px 0;
    background: #f8f9fa;
    border-radius: 0 12px 12px 0;
    font-style: italic;
    color: #555;
}

.article-content table {
    width: 100%;
    border-collapse: collapse;
    margin: 30px 0;
}

.article-content table th,
.article-content table td {
    padding: 12px 15px;
    border: 1px solid #eee;
    text-align: left;
}

.article-content table th {
    background: #f8f9fa;
    font-weight: 600;
}

.article-content code {
    background: #f0f0f0;
    padding: 3px 8px;
    border-radius: 4px;
    font-size: 15px;
}

.article-content pre {
    background: #1a1a2e;
    color: #fff;
    padding: 25px;
    border-radius: 12px;
    overflow-x: auto;
    margin: 30px 0;
}

.article-content pre code {
    background: none;
    padding: 0;
    color: inherit;
}

/* Нижняя навигация */
.article-bottom {
    margin-top: 50px;
    padding-top: 30px;
    border-top: 1px solid #eee;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
}

.article-bottom__back {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 15px 30px;
    background: #f8f9fa;
    color: #333;
    text-decoration: none;
    border-radius: 10px;
    font-weight: 500;
    transition: all 0.3s;
}

.article-bottom__back:hover {
    background: #0098D6;
    color: #fff;
}

.article-share {
    display: flex;
    align-items: center;
    gap: 15px;
}

.article-share span {
    font-size: 14px;
    color: #999;
}

.article-share a {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #f8f9fa;
    border-radius: 10px;
    color: #666;
    text-decoration: none;
    transition: all 0.3s;
}

.article-share a:hover {
    background: #0098D6;
    color: #fff;
}
</style>
@endpush

@push('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Article",
    "headline": "{{ $article->title }}",
    "description": "{{ $article->description }}",
    "datePublished": "{{ $article->published_at->toIso8601String() }}",
    "dateModified": "{{ $article->updated_at->toIso8601String() }}",
    "author": {
        "@@type": "Organization",
        "name": "Modern Design Lab"
    },
    "publisher": {
        "@@type": "Organization",
        "name": "Modern Design Lab",
        "logo": {
            "@@type": "ImageObject",
            "url": "https://mdlab.kz/assets/img/logo.png"
        }
    }
}
</script>
@endpush

@section('content')
<section class="article-page">
    <div class="container">
        <div class="article-container">
            <div class="article-top">
                <a href="/articles" class="article-back">
                    <i class="fa-solid fa-arrow-left"></i> Все статьи
                </a>
                <div class="article-date">
                    <i class="fa-regular fa-calendar"></i>
                    {{ $article->published_at->format('d.m.Y') }}
                </div>
            </div>

            <h1 class="article-title">{{ $article->title }}</h1>

            @if($article->image)
            <div class="article-image">
                <img src="{{ $article->image_url }}" alt="{{ $article->title }}">
            </div>
            @endif

            <div class="article-content">
                {!! $article->content !!}
            </div>

            <div class="article-bottom">
                <a href="/articles" class="article-bottom__back">
                    <i class="fa-solid fa-arrow-left"></i> Вернуться к статьям
                </a>
                <div class="article-share">
                    <span>Поделиться:</span>
                    <a href="https://wa.me/?text={{ urlencode($article->title . ' ' . url()->current()) }}" target="_blank" title="WhatsApp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                    <a href="https://t.me/share/url?url={{ urlencode(url()->current()) }}&text={{ urlencode($article->title) }}" target="_blank" title="Telegram">
                        <i class="fa-brands fa-telegram"></i>
                    </a>
                    <a href="https://vk.com/share.php?url={{ urlencode(url()->current()) }}" target="_blank" title="VK">
                        <i class="fa-brands fa-vk"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.rateit')
@endsection