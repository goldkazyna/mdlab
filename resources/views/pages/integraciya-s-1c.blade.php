@extends('layouts.app')

@php
    $pageUrl = 'https://mdlab.kz/integraciya-s-1c';
    $waUrl = 'https://wa.me/77774333822?text=' . rawurlencode('Здравствуйте! Интересует интеграция с 1С');

    extract(require resource_path('data/integraciya-1c.php'));

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
            'name' => 'Интеграция 1С с сайтом, Kaspi Магазином, маркетплейсами, приложением и CRM',
            'description' => 'Двусторонний обмен 1С с интернет-магазином, Kaspi Магазином, Wildberries, Ozon, мобильными приложениями, Telegram-ботами, amoCRM и Битрикс24: товары, цены, остатки, заказы, клиенты и оплаты. Доработка 1С: обработки, расширения, HTTP-сервисы.',
            'serviceType' => 'Интеграция 1С',
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
            'audience' => ['@type' => 'BusinessAudience', 'audienceType' => 'Интернет-магазины, продавцы на маркетплейсах, оптовые и розничные компании'],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => 'Интеграция 1С',
                'itemListElement' => array_map(fn ($t) => [
                    '@type' => 'Offer',
                    'itemOffered' => ['@type' => 'Service', 'name' => $t['name'], 'description' => $t['text']],
                ], $types),
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
            'name' => 'Как проходит интеграция 1С с сайтом или другой системой',
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
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Интеграция с 1С', 'item' => $pageUrl],
            ],
        ],
    ];
@endphp

@push('styles')
<link rel="stylesheet" href="/assets/css/mobile-landing.css?v=1.5">
@endpush

@push('schema')
<link rel="alternate" type="text/markdown" href="/integraciya-s-1c.md" title="Markdown-версия страницы для ИИ">
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
            <li><span class="breadcrumbs__sep">/</span> <span aria-current="page">Интеграция с 1С</span></li>
        </ol>
    </div>
</nav>

<!-- HERO СЕКЦИЯ -->
<section class="home-hero">
    <div class="container">
        <div class="home-hero__wrapper">
            <div class="home-hero__content">
                <div class="home-hero__top">
                    <h1 class="home-hero__title">Интеграция 1С с&nbsp;сайтом, Kaspi Магазином, приложением и&nbsp;CRM</h1>
                    <p class="home-hero__subtitle">Товары, цены, остатки и&nbsp;заказы синхронизируются сами — без ручного ввода и&nbsp;выгрузок</p>
                </div>
                <div class="home-hero__bottom">
                    <div class="home-hero__contact">
                        <a href="tel:+77774333822" class="btn btn_accent">Позвонить</a>
                        <a href="{{ $waUrl }}" target="_blank" rel="noopener" class="btn btn_accent btn_whatsapp1">
                            <i class="fa-brands fa-whatsapp"></i>Написать в WhatsApp
                        </a>
                    </div>
                    <p class="home-hero__description">Напишите, какая у&nbsp;вас 1С и&nbsp;что с&nbsp;чем нужно связать, — бесплатно разберём задачу и&nbsp;назовём стоимость и&nbsp;срок.</p>
                </div>
            </div>

            <div class="home-hero__img" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="1000" data-aos-delay="200">
                <img src="/assets/img/integraciya-1c/hero.svg" alt="Интеграция 1С с сайтом, Kaspi Магазином, мобильным приложением и CRM: обмен товарами, ценами, остатками и заказами" width="600" height="520">
            </div>
        </div>
    </div>
</section>

<!-- БЛОК ПРЯМОГО ОТВЕТА -->
<section class="mobile-summary">
    <div class="container">
        <div class="summary-box">
            <p>
                <strong>Интеграция 1С в MD Lab</strong> — настройка автоматического обмена между 1С и интернет-магазином, Kaspi Магазином, Wildberries, Ozon, мобильным приложением, Telegram-ботом, amoCRM или Битрикс24.
                Товары, цены и остатки выгружаются из 1С, а заказы, клиенты и оплаты возвращаются в 1С — без ручного ввода и пересылки файлов.
            </p>
            <p>
                Работаем с 1С:Управление торговлей, УНФ, Бухгалтерией, Розницей, ERP и нетиповыми конфигурациями, при необходимости дорабатываем саму 1С. Работаем в Алматы и удалённо по всему Казахстану. <strong>Стоимость и срок называем после бесплатного разбора задачи.</strong>
            </p>
            <div class="summary-facts">
                <div class="summary-fact">
                    <div class="summary-fact__value">Сайт · Kaspi</div>
                    <div class="summary-fact__label">маркетплейсы, приложения, CRM</div>
                </div>
                <div class="summary-fact">
                    <div class="summary-fact__value">В обе стороны</div>
                    <div class="summary-fact__label">товары из 1С, заказы в 1С</div>
                </div>
                <div class="summary-fact">
                    <div class="summary-fact__value">Любая 1С</div>
                    <div class="summary-fact__label">и доработки внутри</div>
                </div>
                <div class="summary-fact">
                    <div class="summary-fact__value">Бесплатно</div>
                    <div class="summary-fact__label">разбор задачи и расчёт</div>
                </div>
            </div>
            <p class="summary-date">
                Обновлено: <time datetime="{{ $updated }}">{{ \Illuminate\Support\Carbon::parse($updated)->locale('ru')->translatedFormat('j F Y') }}</time>
            </p>
        </div>
    </div>
</section>

<!-- ЧТО СВЯЗЫВАЕМ -->
<section class="mobile-types">
    <div class="container">
        <div class="section-header">
            <h2>Что связываем с 1С</h2>
            <p>Сайт, маркетплейсы, приложения, боты и CRM — с вашей учётной базой</p>
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

<!-- КАКИЕ ДАННЫЕ -->
<section class="mobile-tech">
    <div class="container">
        <div class="section-header">
            <h2>Какие данные передаём</h2>
            <p>Из 1С — каталог и остатки, обратно в 1С — заказы и оплаты</p>
        </div>

        <div class="tech-grid">
            @foreach($sync as $item)
            <div class="tech-item">
                <div class="tech-item__icon"><i class="{{ $item['icon'] }}"></i></div>
                <span>{{ $item['name'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ЧТО ДАЁТ -->
<section class="mobile-advantages">
    <div class="container">
        <div class="section-header">
            <h2>Что даёт интеграция с 1С</h2>
            <p>Одна база вместо десятка таблиц и ручных выгрузок</p>
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

<!-- КОНФИГУРАЦИИ -->
<section class="mobile-tech">
    <div class="container">
        <div class="section-header">
            <h2>С какими конфигурациями 1С работаем</h2>
            <p>Типовые, редакции для Казахстана и доработанные</p>
        </div>

        <div class="tech-grid">
            @foreach($configs as $item)
            <div class="tech-item">
                <div class="tech-item__icon"><i class="{{ $item['icon'] }}"></i></div>
                <span>{{ $item['name'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ЭТАПЫ РАБОТЫ -->
<section class="mobile-steps">
    <div class="container">
        <div class="section-header">
            <h2>Как проходит интеграция</h2>
            <p>От разбора задачи до работающего обмена</p>
        </div>

        <div class="steps-timeline">
            @foreach($steps as $i => $step)
            <div class="step-item">
                <div class="step-item__number">{{ $i + 1 }}</div>
                <div class="step-item__content">
                    <h4>{{ $step['name'] }}</h4>
                    <p>{{ $step['text'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="mobile-faq">
    <div class="container">
        <div class="section-header">
            <h2>Частые вопросы об интеграции 1С</h2>
            <p>Стоимость, конфигурации, скорость обмена и безопасность</p>
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
        <h2>Свяжем 1С с вашим сайтом и сервисами</h2>
        <p>Напишите, какая у вас конфигурация 1С и что нужно подключить, — бесплатно разберём задачу и назовём стоимость</p>
        <div class="mobile-cta__buttons">
            <a href="{{ $waUrl }}" target="_blank" rel="noopener" class="btn-primary-mobile btn-whatsapp">
                <i class="fa-brands fa-whatsapp"></i> Написать в WhatsApp
            </a>
        </div>
    </div>
</section>

<!-- SEO КОНТЕНТ -->
<section class="seo-content">
    <div class="container">
        <h2>Интеграция 1С в Алматы</h2>
        <p>
            В большинстве компаний Казахстана учёт ведётся в 1С, а продажи идут через сайт, Kaspi Магазин, маркетплейсы,
            мессенджеры и CRM. Без интеграции менеджеры вручную переносят заказы, обновляют прайсы и остатки в нескольких
            местах — отсюда ошибки, продажи товара, которого нет, и потерянные заказы. Интеграция 1С связывает все каналы
            с одной учётной базой: данные вводятся один раз и расходятся автоматически.
        </p>

        <h3>Кому нужна интеграция с 1С</h3>
        <ul>
            @foreach($audience as $item)
            <li>{{ $item }}</li>
            @endforeach
        </ul>

        <h3>Как устроен обмен</h3>
        <p>
            Используем стандартный обмен CommerceML там, где он есть у сайта, а также HTTP-сервисы, OData и REST API
            для маркетплейсов, приложений и CRM. Доработки в 1С делаем через расширения конфигурации, чтобы не мешать
            обновлениям. Нужен новый магазин — <a href="https://mdlab.kz/internet-magazin">разработаем интернет-магазин</a>
            сразу с обменом с 1С; нужно приложение — посмотрите
            <a href="https://mdlab.kz/razrabotka-prilozheniya-dlya-biznesa">корпоративные приложения</a> и
            <a href="https://mdlab.kz/razrabotka-telegram-botov">Telegram-ботов</a>.
        </p>

        <h3>Оплаты и 1С</h3>
        <p>
            Терминал Kaspi на кассе связываем с 1С так, чтобы сумма уходила на терминал автоматически, — подробнее на странице
            <a href="https://mdlab.kz/integraciya-kaspi">интеграции Kaspi</a>. Онлайн-оплату картами и через Kaspi Pay на
            сайте подключаем в рамках <a href="https://mdlab.kz/podklyuchenie-ekvayringa">подключения эквайринга</a> —
            оплаченные заказы тоже попадают в 1С.
        </p>

        <h3>Как заказать интеграцию 1С</h3>
        <p>
            Напишите нам в WhatsApp или позвоните: расскажите, какая у вас конфигурация 1С, что нужно с ней связать и какие
            данные передавать. Бесплатно разберём задачу, назовём стоимость и срок, а после запуска останемся на связи.
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
