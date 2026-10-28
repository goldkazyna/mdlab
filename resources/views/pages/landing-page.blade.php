@extends('layouts.app')

@php
    $pageUrl = 'https://mdlab.kz/landing-page';
    $waUrl = 'https://wa.me/77774333822?text=' . rawurlencode('Здравствуйте! Интересует создание лендинга');
    $price = fn ($p) => ($p['from'] ? 'от ' : '') . number_format($p['price'], 0, '', ' ');

    extract(require resource_path('data/landing-page.php'));

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
            'name' => 'Создание Landing Page (лендинга) под ключ',
            'description' => 'Разработка продающих одностраничных сайтов: анализ конкурентов, структура, тексты, уникальный дизайн, адаптивная вёрстка, формы и WhatsApp, аналитика и цели для рекламы. Срок 5–10 рабочих дней.',
            'serviceType' => 'Разработка лендинга',
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
                'name' => 'Пакеты создания Landing Page',
                'itemListElement' => array_map(fn ($p) => [
                    '@type' => 'Offer',
                    'name' => 'Landing Page «' . $p['name'] . '»',
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
            'name' => 'Как создаётся Landing Page в MD Lab',
            'totalTime' => 'P10D',
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
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Главная', 'item' => 'https://mdlab.kz/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Создание Landing Page', 'item' => $pageUrl],
            ],
        ],
    ];
@endphp

@push('styles')
<link rel="stylesheet" href="/assets/css/mobile-landing.css?v=1.4">
@endpush

@push('schema')
<link rel="alternate" type="text/markdown" href="/landing-page.md" title="Markdown-версия страницы для ИИ">
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
            <li><span class="breadcrumbs__sep">/</span> <span aria-current="page">Создание Landing Page</span></li>
        </ol>
    </div>
</nav>

<!-- HERO СЕКЦИЯ -->
<section class="home-hero">
    <div class="container">
        <div class="home-hero__wrapper">
            <div class="home-hero__content">
                <div class="home-hero__top">
                    <h1 class="home-hero__title">Создание Landing Page в&nbsp;Алматы</h1>
                    <p class="home-hero__subtitle">Продающий лендинг под рекламу: структура, тексты, дизайн и&nbsp;запуск — от&nbsp;200&nbsp;000&nbsp;₸ за&nbsp;5–10&nbsp;дней</p>
                </div>
                <div class="home-hero__bottom">
                    <div class="home-hero__contact">
                        <a href="tel:+77774333822" class="btn btn_accent">Позвонить</a>
                        <a href="{{ $waUrl }}" target="_blank" rel="noopener" class="btn btn_accent btn_whatsapp1">
                            <i class="fa-brands fa-whatsapp"></i>Написать в WhatsApp
                        </a>
                    </div>
                    <p class="home-hero__description">Расскажите о&nbsp;бизнесе и&nbsp;рекламе — предложим структуру лендинга и&nbsp;назовём точную стоимость за&nbsp;15&nbsp;минут.</p>
                </div>
            </div>

            <div class="home-hero__img" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="1000" data-aos-delay="200">
                <img src="/assets/img/landing-page/hero.svg" alt="Создание Landing Page: продающий лендинг на компьютере и телефоне с формой заявки и кнопкой WhatsApp" width="600" height="520">
            </div>
        </div>
    </div>
</section>

<!-- БЛОК ПРЯМОГО ОТВЕТА -->
<section class="mobile-summary">
    <div class="container">
        <div class="summary-box">
            <p>
                <strong>Landing Page (лендинг)</strong> — одностраничный сайт под одну услугу, товар или акцию, который ведёт посетителя к одному действию: заявке, звонку или сообщению в WhatsApp.
                Веб-студия MD Lab создаёт лендинги под ключ с 2014 года: анализ конкурентов, структура, продающие тексты, уникальный дизайн, адаптив под телефоны, аналитика и цели для рекламы.
            </p>
            <p>
                <strong>Стоимость — от 200 000 ₸, срок — 5–10 рабочих дней.</strong>
                Пакеты: «Базовый» 200 000 ₸ (до 5 экранов), «Стандарт» 350 000 ₸ (до 8 экранов), «Премиум» от 500 000 ₸ (до 12 экранов, квиз, CRM). Работаем в Алматы и удалённо по всему Казахстану.
            </p>
            <div class="summary-facts">
                <div class="summary-fact">
                    <div class="summary-fact__value">от&nbsp;200&nbsp;000&nbsp;₸</div>
                    <div class="summary-fact__label">лендинг под ключ</div>
                </div>
                <div class="summary-fact">
                    <div class="summary-fact__value">5–10 дней</div>
                    <div class="summary-fact__label">от брифа до запуска</div>
                </div>
                <div class="summary-fact">
                    <div class="summary-fact__value">Тексты и дизайн</div>
                    <div class="summary-fact__label">делаем сами, без шаблонов</div>
                </div>
                <div class="summary-fact">
                    <div class="summary-fact__value">30 дней</div>
                    <div class="summary-fact__label">гарантии после запуска</div>
                </div>
            </div>
            <p class="summary-date">
                Обновлено: <time datetime="{{ $updated }}">{{ \Illuminate\Support\Carbon::parse($updated)->locale('ru')->translatedFormat('j F Y') }}</time>
            </p>
        </div>
    </div>
</section>

<!-- ВИДЫ ЛЕНДИНГОВ -->
<section class="mobile-types">
    <div class="container">
        <div class="section-header">
            <h2>Какие лендинги мы делаем</h2>
            <p>Под рекламу, соцсети, товар, услугу или мероприятие</p>
        </div>

        <div class="types-grid">
            @foreach($types as $item)
            <div class="type-card">
                <div class="type-card__icon">
                    <i class="{{ $item['icon'] }}"></i>
                </div>
                <h3>{{ $item['name'] }}</h3>
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
            <h2>Почему заказывают лендинг у&nbsp;нас</h2>
            <p>300+ проектов и 10+ лет опыта в разработке сайтов для бизнеса в Казахстане</p>
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
            <h2>Что входит в создание лендинга</h2>
            <p>Полный цикл под ключ — от анализа конкурентов до запуска</p>
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
            <h2>Стоимость создания Landing Page</h2>
            <p>Выберите пакет или закажите индивидуальный расчёт</p>
        </div>

        <div class="pricing-grid">
            @foreach($packages as $p)
            <div class="pricing-card @if(!empty($p['featured'])) featured @endif">
                <h3>{{ $p['name'] }}</h3>
                <div class="pricing-card__price">{{ $price($p) }} <span>₸</span></div>
                <p class="pricing-card__desc">{{ $p['desc'] }}</p>
                <ul class="pricing-card__features">
                    @foreach($p['features'] as $feature)
                    <li><i class="fa-solid fa-check"></i> {{ $feature }}</li>
                    @endforeach
                    <li><i class="fa-solid fa-check"></i> Срок: {{ $p['days'] }}</li>
                </ul>
                <a href="https://wa.me/77774333822?text={{ rawurlencode('Здравствуйте! Интересует лендинг «' . $p['name'] . '» (' . $price($p) . ' ₸)') }}" target="_blank" rel="noopener" class="btn-primary-mobile btn-whatsapp">
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
            <h2>Этапы создания лендинга</h2>
            <p>Прозрачный процесс — вы согласуете каждый шаг</p>
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
<section class="mobile-portfolio">
    <div class="container">
        <div class="section-header">
            <h2>Примеры наших лендингов</h2>
            <p>Работы, которые мы сделали для клиентов</p>
        </div>

        <div class="portfolio-grid">
            @foreach($portfolio as $item)
            <a class="portfolio-item" data-fancybox="landing-portfolio" data-caption="{{ $item['name'] }}" href="/images/gallery/land/{{ $item['img'] }}big.jpg">
                <img src="/images/gallery/land/{{ $item['img'] }}.jpg" alt="Пример лендинга: {{ $item['name'] }}" width="319" height="221" loading="lazy">
                <span class="portfolio-item__caption">{{ $item['name'] }}</span>
            </a>
            @endforeach
        </div>

        <div class="portfolio-more">
            <a href="/gallery" class="btn-outline-mobile">Смотреть все работы</a>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="mobile-faq">
    <div class="container">
        <div class="section-header">
            <h2>Частые вопросы о создании лендинга</h2>
            <p>Цены, сроки, мобильная версия, реклама и поддержка</p>
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
        <h2>Закажите продающий лендинг</h2>
        <p>Напишите, что продаёте и откуда планируете трафик, — предложим структуру и назовём точную стоимость</p>
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
            <h2>Что ещё понадобится для заявок</h2>
            <p>Реклама, дизайн и сайты, которые работают вместе с лендингом</p>
        </div>

        <div class="related-grid">
            <a href="/kontekstnaya-reklama" class="related-link"><i class="fa-brands fa-google"></i> Контекстная реклама</a>
            <a href="/prodvighenie-v-socialynyh-setyah" class="related-link"><i class="fa-brands fa-instagram"></i> SMM-продвижение Instagram</a>
            <a href="/korporativnyy-sayt" class="related-link"><i class="fa-solid fa-building"></i> Корпоративный сайт</a>
            <a href="/internet-magazin" class="related-link"><i class="fa-solid fa-cart-shopping"></i> Интернет-магазин</a>
            <a href="/razrabotka-logotipa-v-almaty" class="related-link"><i class="fa-solid fa-pen-ruler"></i> Разработка логотипа</a>
            <a href="/podklyuchenie-ekvayringa" class="related-link"><i class="fa-solid fa-credit-card"></i> Онлайн-оплата на сайте</a>
        </div>
    </div>
</section>

<!-- SEO КОНТЕНТ -->
<section class="seo-content">
    <div class="container">
        <h2>Создание и разработка лендинга в Алматы</h2>
        <p>
            <strong>Landing Page</strong> (лендинг пейдж, посадочная или продающая страница) — одностраничный сайт, на который
            ведут рекламу. В отличие от многостраничного сайта, лендинг рассказывает об одном предложении и не отвлекает
            лишними ссылками: посетитель читает оффер, видит выгоды, отзывы и цены и сразу оставляет заявку. Поэтому заказать
            лендинг — самый быстрый способ начать получать клиентов из Google Ads, Яндекс Директа и Instagram.
        </p>

        <h3>Когда нужен лендинг</h3>
        <ul>
            @foreach($audience as $item)
            <li>{{ $item }}</li>
            @endforeach
        </ul>

        <h3>Лендинг или многостраничный сайт</h3>
        <p>
            Лендинг дешевле и быстрее в разработке, его проще тестировать в рекламе. Когда услуг становится много и нужен
            трафик из поиска по десяткам запросов, лучше подходит <a href="/korporativnyy-sayt">корпоративный сайт</a>,
            а для каталога с корзиной — <a href="/internet-magazin">интернет-магазин</a>. Часто делают и то и другое:
            основной сайт для поиска и отдельные лендинги под рекламные кампании.
        </p>

        <h3>Сколько стоит сделать лендинг</h3>
        <p>
            Цена зависит от количества экранов, сложности дизайна и интеграций. Создание простого лендинга до 5 экранов —
            200 000 ₸, лендинг до 8 экранов с уникальным дизайном и текстами — 350 000 ₸, сложный лендинг до 12 экранов
            с квизом, CRM и онлайн-оплатой — от 500 000 ₸. Срок разработки — от 5 до 10 рабочих дней.
        </p>

        <h3>Как заказать лендинг в MD Lab</h3>
        <p>
            Напишите в WhatsApp или позвоните: расскажите, что продаёте, кто ваши клиенты и где планируете рекламу.
            Предложим структуру лендинга, назовём стоимость и срок, а после запуска поможем с
            <a href="/kontekstnaya-reklama">настройкой контекстной рекламы</a>. Работаем с бизнесом из Алматы,
            Астаны, Шымкента и других городов Казахстана.
        </p>
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
