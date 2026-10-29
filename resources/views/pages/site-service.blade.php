@extends('layouts.app')

{{-- Общий шаблон страниц услуг: создание сайтов (лендинг, корпоративный, каталог, магазин) и дизайн (сайт, логотип, фирменный стиль, полиграфия).
     Тексты, цены и FAQ — в resources/data/{$dataFile}.php; из них же строится JSON-LD и markdown-версия. --}}

@php
    extract(require resource_path('data/' . $dataFile . '.php'));

    $pageUrl = 'https://mdlab.kz/' . $page['slug'];
    $waUrl = 'https://wa.me/77774333822?text=' . rawurlencode($page['wa_text']);
    $price = fn ($p) => ($p['from'] ? 'от ' : '') . number_format($p['price'], 0, '', ' ');
    $h = $page['headings'];

    // Родительский раздел для хлебных крошек: [slug, название], например лендинг → «Создание сайтов»
    $crumbs = [['Главная', 'https://mdlab.kz/']];
    if (!empty($page['parent'])) {
        $crumbs[] = [$page['parent'][1], 'https://mdlab.kz/' . $page['parent'][0]];
    }
    $crumbs[] = [$page['crumb'], $pageUrl];

    $schemas = [
        [
            '@context' => 'https://schema.org',
            '@type' => 'WebPage',
            '@id' => $pageUrl . '#webpage',
            'url' => $pageUrl,
            'name' => $title,
            'description' => $description,
            'inLanguage' => 'ru',
            'dateModified' => $updated,
            'mainEntity' => ['@id' => $pageUrl . '#service'],
        ],
        [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            '@id' => $pageUrl . '#service',
            'name' => $page['service_name'],
            'description' => $page['service_desc'],
            'serviceType' => $page['service_type'],
            'url' => $pageUrl,
            'provider' => [
                '@type' => 'Organization',
                'name' => 'Modern Design Lab',
                'alternateName' => 'MD Lab',
                'url' => 'https://mdlab.kz',
                'logo' => 'https://mdlab.kz/assets/img/logo.png',
                'telephone' => '+77774333822',
                'address' => [
                    '@type' => 'PostalAddress',
                    'streetAddress' => 'ул. Назарбаева 50, офис 209',
                    'addressLocality' => 'Алматы',
                    'postalCode' => '050030',
                    'addressCountry' => 'KZ',
                ],
            ],
            'areaServed' => [
                ['@type' => 'City', 'name' => 'Алматы'],
                ['@type' => 'Country', 'name' => 'Казахстан'],
            ],
            'offers' => [
                '@type' => 'AggregateOffer',
                'priceCurrency' => 'KZT',
                'lowPrice' => (string) min(array_column($packages, 'price')),
                'highPrice' => (string) max(array_column($packages, 'price')),
                'offerCount' => (string) count($packages),
            ],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => $page['catalog_name'],
                'itemListElement' => array_map(fn ($p) => [
                    '@type' => 'Offer',
                    'name' => $page['offer_prefix'] . ' «' . $p['name'] . '»',
                    'description' => $p['desc'] . ': ' . implode(', ', $p['features']) . '. Срок: ' . $p['days'] . '.',
                    'priceSpecification' => [
                        '@type' => 'PriceSpecification',
                        'priceCurrency' => 'KZT',
                        ($p['from'] ? 'minPrice' : 'price') => (string) $p['price'],
                    ],
                ], $packages),
            ],
        ],
        [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => array_map(fn ($f) => [
                '@type' => 'Question',
                'name' => $f['q'],
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
            ], $faq),
        ],
        [
            '@context' => 'https://schema.org',
            '@type' => 'HowTo',
            'name' => $page['howto_name'],
            'totalTime' => $page['howto_time'],
            'step' => array_map(fn ($s, $i) => [
                '@type' => 'HowToStep',
                'position' => $i + 1,
                'name' => $s['name'],
                'text' => $s['text'],
            ], $steps, array_keys($steps)),
        ],
        [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => array_map(fn ($c, $i) => [
                '@type' => 'ListItem',
                'position' => $i + 1,
                'name' => $c[0],
                'item' => $c[1],
            ], $crumbs, array_keys($crumbs)),
        ],
    ];
@endphp

@push('styles')
<link rel="stylesheet" href="/assets/css/mobile-landing.css?v=1.5">
@endpush

@push('schema')
<link rel="alternate" type="text/markdown" href="/{{ $page['slug'] }}.md" title="Markdown-версия страницы для ИИ">
@foreach($schemas as $schema)
<script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}</script>
@endforeach
@endpush

@section('content')

<!-- ХЛЕБНЫЕ КРОШКИ -->
<nav class="breadcrumbs" aria-label="Хлебные крошки">
    <div class="container">
        <ol class="breadcrumbs__list">
            <li><a href="https://mdlab.kz">Главная</a></li>
            @if(!empty($page['parent']))
            <li><span class="breadcrumbs__sep">/</span> <a href="/{{ $page['parent'][0] }}">{{ $page['parent'][1] }}</a></li>
            @endif
            <li><span class="breadcrumbs__sep">/</span> <span aria-current="page">{{ $page['crumb'] }}</span></li>
        </ol>
    </div>
</nav>

<!-- HERO СЕКЦИЯ -->
<section class="home-hero">
    <div class="container">
        <div class="home-hero__wrapper">
            <div class="home-hero__content">
                <div class="home-hero__top">
                    <h1 class="home-hero__title">{!! $page['h1'] !!}</h1>
                    <p class="home-hero__subtitle">{!! $page['subtitle'] !!}</p>
                </div>
                <div class="home-hero__bottom">
                    <div class="home-hero__contact">
                        <a href="tel:+77774333822" class="btn btn_accent">Позвонить</a>
                        <a href="{{ $waUrl }}" target="_blank" rel="noopener" class="btn btn_accent btn_whatsapp1">
                            <i class="fa-brands fa-whatsapp"></i>Написать в WhatsApp
                        </a>
                    </div>
                    <p class="home-hero__description">{!! $page['hero_note'] !!}</p>
                </div>
            </div>

            <div class="home-hero__img" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="1000" data-aos-delay="200">
                <img src="{{ $page['hero_img'] }}" alt="{{ $page['hero_alt'] }}" width="600" height="520">
            </div>
        </div>
    </div>
</section>

<!-- БЛОК ПРЯМОГО ОТВЕТА -->
<section class="mobile-summary">
    <div class="container">
        <div class="summary-box">
            @foreach($page['summary'] as $paragraph)
            <p>{!! $paragraph !!}</p>
            @endforeach
            <div class="summary-facts">
                @foreach($page['facts'] as [$value, $label])
                <div class="summary-fact">
                    <div class="summary-fact__value">{!! $value !!}</div>
                    <div class="summary-fact__label">{{ $label }}</div>
                </div>
                @endforeach
            </div>
            <p class="summary-date">
                Обновлено: <time datetime="{{ $updated }}">{{ \Illuminate\Support\Carbon::parse($updated)->locale('ru')->translatedFormat('j F Y') }}</time>
            </p>
        </div>
    </div>
</section>

<!-- ВИДЫ -->
<section class="mobile-types">
    <div class="container">
        <div class="section-header">
            <h2>{!! $h['types'][0] !!}</h2>
            <p>{{ $h['types'][1] }}</p>
        </div>

        <div class="types-grid">
            @foreach($types as $item)
            <div class="type-card">
                <div class="type-card__icon">
                    <i class="{{ $item['icon'] }}"></i>
                </div>
                <h3>@if(!empty($item['url']))<a href="/{{ $item['url'] }}">{{ $item['name'] }}</a>@else{{ $item['name'] }}@endif</h3>
                <p>{{ $item['text'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ПРЕИМУЩЕСТВА -->
<section class="mobile-advantages">
    <div class="container">
        <div class="section-header">
            <h2>{!! $h['advantages'][0] !!}</h2>
            <p>{{ $h['advantages'][1] }}</p>
        </div>

        <div class="advantages-grid">
            @foreach($advantages as $item)
            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="{{ $item['icon'] }}"></i>
                </div>
                <h3>{{ $item['name'] }}</h3>
                <p>{{ $item['text'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ЧТО ВХОДИТ -->
<section class="mobile-includes">
    <div class="container">
        <div class="section-header">
            <h2>{!! $h['includes'][0] !!}</h2>
            <p>{{ $h['includes'][1] }}</p>
        </div>

        <div class="includes-grid">
            @foreach($includes as $item)
            <div class="include-item">
                <div class="include-item__icon">
                    <i class="{{ $item['icon'] }}"></i>
                </div>
                <div>
                    <h4>{{ $item['name'] }}</h4>
                    <p>{{ $item['text'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ТАРИФЫ -->
<section class="mobile-pricing" id="pricing">
    <div class="container">
        <div class="section-header">
            <h2>{!! $h['pricing'][0] !!}</h2>
            <p>{{ $h['pricing'][1] }}</p>
        </div>

        <div class="pricing-grid">
            @foreach($packages as $p)
            <div class="pricing-card @if(!empty($p['featured'])) featured @endif">
                <h3>{{ $p['name'] }}</h3>
                <div class="pricing-card__price">{{ ($p['from'] ? 'от ' : '') . number_format($p['price'], 0, '', "\u{A0}") }} <span>₸</span></div>
                <p class="pricing-card__desc">{{ $p['desc'] }}</p>
                <ul class="pricing-card__features">
                    @foreach($p['features'] as $feature)
                    <li><i class="fa-solid fa-check"></i> {{ $feature }}</li>
                    @endforeach
                    <li><i class="fa-solid fa-check"></i> Срок: {{ $p['days'] }}</li>
                </ul>
                <a href="https://wa.me/77774333822?text={{ rawurlencode('Здравствуйте! Интересует ' . $page['wa_package'] . ' «' . $p['name'] . '» (' . $price($p) . ' ₸)') }}" target="_blank" rel="noopener" class="btn-primary-mobile btn-whatsapp">
                    <i class="fa-brands fa-whatsapp"></i> Написать в WhatsApp
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ЭТАПЫ РАБОТЫ -->
<section class="mobile-steps">
    <div class="container">
        <div class="section-header">
            <h2>{!! $h['steps'][0] !!}</h2>
            <p>{{ $h['steps'][1] }}</p>
        </div>

        <div class="steps-timeline">
            @foreach($steps as $i => $step)
            <div class="step-item">
                <div class="step-item__number">{{ $i + 1 }}</div>
                <div class="step-item__content">
                    <h4>{{ $step['name'] }}</h4>
                    <p>{{ $step['text'] }}</p>
                    <span class="step-item__time">{{ $step['time'] }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ПОРТФОЛИО -->
@if(!empty($portfolio))
<section class="mobile-portfolio">
    <div class="container">
        <div class="section-header">
            <h2>{!! $h['portfolio'][0] !!}</h2>
            <p>{{ $h['portfolio'][1] }}</p>
        </div>

        <div class="portfolio-grid">
            @foreach($portfolio as $item)
            <a class="portfolio-item" data-fancybox="portfolio" data-caption="{{ $item['name'] }}" href="/images/gallery/{{ $item['big'] ?? $item['img'] . 'big' }}.jpg">
                <img src="/images/gallery/{{ $item['img'] }}.jpg" alt="{{ $page['crumb'] }} — пример: {{ $item['name'] }}" width="319" height="221" loading="lazy">
                <span class="portfolio-item__caption">{{ $item['name'] }}</span>
            </a>
            @endforeach
        </div>

        <div class="portfolio-more">
            <a href="/gallery" class="btn-outline-mobile">Смотреть все работы</a>
        </div>
    </div>
</section>
@endif

<!-- FAQ -->
<section class="mobile-faq">
    <div class="container">
        <div class="section-header">
            <h2>{!! $h['faq'][0] !!}</h2>
            <p>{{ $h['faq'][1] }}</p>
        </div>

        <div class="faq-list">
            @foreach($faq as $i => $item)
            <div class="faq-item @if($i === 0) active @endif">
                <div class="faq-item__question">
                    <h4>{{ $item['q'] }}</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>{{ $item['a'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA -->
<section class="mobile-cta">
    <div class="container">
        <h2>{!! $h['cta'][0] !!}</h2>
        <p>{{ $h['cta'][1] }}</p>
        <div class="mobile-cta__buttons">
            <a href="{{ $waUrl }}" target="_blank" rel="noopener" class="btn-primary-mobile btn-whatsapp">
                <i class="fa-brands fa-whatsapp"></i> Написать в WhatsApp
            </a>
        </div>
    </div>
</section>

<!-- СВЯЗАННЫЕ УСЛУГИ -->
<section class="related-services">
    <div class="container">
        <div class="section-header">
            <h2>{!! $h['related'][0] !!}</h2>
            <p>{{ $h['related'][1] }}</p>
        </div>

        <div class="related-grid">
            @foreach($page['related'] as [$slug, $icon, $name])
            <a href="/{{ $slug }}" class="related-link"><i class="{{ $icon }}"></i> {{ $name }}</a>
            @endforeach
        </div>
    </div>
</section>

<!-- SEO КОНТЕНТ -->
<section class="seo-content">
    <div class="container">
        <h2>{{ $page['seo_title'] }}</h2>
        <p>{!! $page['seo_intro'] !!}</p>

        <h3>{{ $h['audience'] }}</h3>
        <ul>
            @foreach($audience as $item)
            <li>{{ $item }}</li>
            @endforeach
        </ul>

        @foreach($page['seo_sections'] as [$heading, $text])
        <h3>{{ $heading }}</h3>
        <p>{!! $text !!}</p>
        @endforeach
    </div>
</section>

@include('partials.rateit')

@endsection

@push('scripts')
<script>
// FAQ аккордеон
document.querySelectorAll('.faq-item__question').forEach(item => {
    item.addEventListener('click', () => {
        const parent = item.parentElement;
        const wasActive = parent.classList.contains('active');

        document.querySelectorAll('.faq-item').forEach(faq => {
            faq.classList.remove('active');
        });

        if (!wasActive) {
            parent.classList.add('active');
        }
    });
});
</script>
@endpush
