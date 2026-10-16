@extends('layouts.app')

@php
    $pageUrl = 'https://mdlab.kz/podklyuchenie-ekvayringa';
    $waUrl = 'https://wa.me/77774333822?text=' . rawurlencode('Здравствуйте! Интересует подключение онлайн-оплаты');

    extract(require resource_path('data/ekvayring.php'));

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
            'name' => 'Подключение эквайринга и онлайн-оплаты на сайт, в приложение и Telegram-бот',
            'description' => 'Подключение онлайн-оплаты картами и через Kaspi Pay к сайтам, интернет-магазинам, мобильным приложениям и Telegram-ботам: Kaspi Pay, Halyk ePay, Freedom Pay, CloudPayments и другие банки. Помощь с договором, онлайн-чеки, подписки, связка с 1С и CRM.',
            'serviceType' => 'Подключение интернет-эквайринга',
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
            'audience' => ['@type' => 'BusinessAudience', 'audienceType' => 'Интернет-магазины, сайты услуг, онлайн-школы, мобильные приложения, Telegram-боты'],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => 'Подключение онлайн-оплаты',
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
            'name' => 'Как подключить онлайн-оплату на сайт или в приложение',
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
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Подключение эквайринга', 'item' => $pageUrl],
            ],
        ],
    ];
@endphp

@push('styles')
<link rel="stylesheet" href="/assets/css/mobile-landing.css?v=1.3">
@endpush

@push('schema')
<link rel="alternate" type="text/markdown" href="/podklyuchenie-ekvayringa.md" title="Markdown-версия страницы для ИИ">
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
            <li><span class="breadcrumbs__sep">/</span> <span aria-current="page">Подключение эквайринга</span></li>
        </ol>
    </div>
</nav>

<!-- HERO СЕКЦИЯ -->
<section class="home-hero">
    <div class="container">
        <div class="home-hero__wrapper">
            <div class="home-hero__content">
                <div class="home-hero__top">
                    <h1 class="home-hero__title">Подключение эквайринга и&nbsp;онлайн-оплаты на&nbsp;сайт и&nbsp;в&nbsp;приложение</h1>
                    <p class="home-hero__subtitle">Kaspi Pay, Halyk ePay, Freedom Pay, CloudPayments — для сайтов, приложений и&nbsp;Telegram-ботов</p>
                </div>
                <div class="home-hero__bottom">
                    <div class="home-hero__contact">
                        <a href="tel:+77774333822" class="btn btn_accent">Позвонить</a>
                        <a href="{{ $waUrl }}" target="_blank" rel="noopener" class="btn btn_accent btn_whatsapp1">
                            <i class="fa-brands fa-whatsapp"></i>Написать в WhatsApp
                        </a>
                    </div>
                    <p class="home-hero__description">Напишите, на&nbsp;чём сделан сайт или приложение, — бесплатно разберём задачу, поможем выбрать платёжную систему и&nbsp;назовём стоимость.</p>
                </div>
            </div>

            <div class="home-hero__img" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="1000" data-aos-delay="200">
                <img src="/assets/img/ekvayring/payment-hero.svg" alt="Подключение онлайн-оплаты на сайт и в приложение: оплата картой и через Kaspi Pay, Halyk ePay, Freedom Pay, CloudPayments" width="600" height="520">
            </div>
        </div>
    </div>
</section>

<!-- БЛОК ПРЯМОГО ОТВЕТА -->
<section class="mobile-summary">
    <div class="container">
        <div class="summary-box">
            <p>
                <strong>Подключение эквайринга в MD Lab</strong> — настройка приёма онлайн-оплаты картами и через Kaspi Pay на сайте, в интернет-магазине, мобильном приложении или Telegram-боте.
                Работаем с Kaspi Pay, Halyk ePay, Freedom Pay, CloudPayments и другими банками Казахстана, подключаем к WordPress, Tilda, 1С-Битрикс, OpenCart, Laravel и самописным сайтам.
            </p>
            <p>
                Помогаем с договором и проверкой сайта банком, настраиваем автоматические статусы заказов, онлайн-чеки, подписки и связку с 1С или CRM. Работаем в Алматы и удалённо по всему Казахстану. <strong>Стоимость и срок называем после бесплатного разбора задачи.</strong>
            </p>
            <div class="summary-facts">
                <div class="summary-fact">
                    <div class="summary-fact__value">Kaspi · Halyk</div>
                    <div class="summary-fact__label">Freedom Pay, CloudPayments и банки</div>
                </div>
                <div class="summary-fact">
                    <div class="summary-fact__value">Сайт · бот</div>
                    <div class="summary-fact__label">и мобильные приложения</div>
                </div>
                <div class="summary-fact">
                    <div class="summary-fact__value">Под ключ</div>
                    <div class="summary-fact__label">от договора до чеков</div>
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

<!-- КАКИЕ ОПЛАТЫ ПОДКЛЮЧАЕМ -->
<section class="mobile-types">
    <div class="container">
        <div class="section-header">
            <h2>Какую оплату подключаем</h2>
            <p>Карты, Kaspi, подписки — на сайте, в приложении и в боте</p>
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

<!-- ПЛАТЁЖНЫЕ СИСТЕМЫ -->
<section class="mobile-tech">
    <div class="container">
        <div class="section-header">
            <h2>Платёжные системы и банки</h2>
            <p>Подключаем популярные платёжки Казахстана и любой банк с API</p>
        </div>

        <div class="tech-grid">
            @foreach($providers as $item)
            <div class="tech-item">
                <div class="tech-item__icon"><i class="{{ $item['icon'] }}"></i></div>
                <span>{{ $item['name'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ЧТО ВХОДИТ -->
<section class="mobile-advantages">
    <div class="container">
        <div class="section-header">
            <h2>Что входит в подключение</h2>
            <p>Не просто кнопка «Оплатить», а рабочий процесс от договора до чека</p>
        </div>

        <div class="advantages-grid">
            @foreach($included as $item)
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

<!-- ПЛАТФОРМЫ -->
<section class="mobile-tech">
    <div class="container">
        <div class="section-header">
            <h2>На какие платформы подключаем оплату</h2>
            <p>Готовые модули там, где они есть, и интеграция по API — там, где нет</p>
        </div>

        <div class="tech-grid">
            @foreach($platforms as $item)
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
            <h2>Как подключаем онлайн-оплату</h2>
            <p>От выбора платёжной системы до первого платежа</p>
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
            <h2>Частые вопросы о подключении эквайринга</h2>
            <p>Стоимость, выбор платёжки, документы и безопасность</p>
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
        <h2>Подключим оплату к вашему сайту или приложению</h2>
        <p>Напишите, на чём сделан проект и какие способы оплаты нужны, — бесплатно разберём задачу и назовём стоимость</p>
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
        <h2>Подключение онлайн-оплаты на сайт в Алматы</h2>
        <p>
            Покупатели в Казахстане привыкли платить сразу: картой или через Kaspi. Если на сайте нет онлайн-оплаты,
            часть клиентов уходит к конкурентам, а менеджеры тратят время на выставление счетов и проверку переводов.
            Интернет-эквайринг решает обе задачи: покупатель оплачивает заказ в пару касаний, а сайт сам узнаёт об оплате,
            меняет статус заказа и отправляет чек.
        </p>

        <h3>Кому нужно подключение эквайринга</h3>
        <ul>
            @foreach($audience as $item)
            <li>{{ $item }}</li>
            @endforeach
        </ul>

        <h3>Оплата в приложении и на кассе</h3>
        <p>
            Если приложение ещё только планируется, посмотрите
            <a href="https://mdlab.kz/razrabotka-prilozheniya-s-oplatoy">разработку приложения с онлайн-оплатой</a>.
            Для офлайн-продаж подключаем терминал Kaspi к 1С, iiko, r_keeper и Poster —
            подробнее на странице <a href="https://mdlab.kz/integraciya-kaspi">интеграции Kaspi</a>.
            Нужен магазин с оплатой с нуля — <a href="https://mdlab.kz/internet-magazin">разработаем интернет-магазин</a>,
            а существующий сайт подготовим к приёму платежей в рамках <a href="https://mdlab.kz/dorabotka-sayta">доработки сайта</a>.
        </p>

        <h3>Как заказать подключение оплаты</h3>
        <p>
            Напишите нам в WhatsApp или позвоните: расскажите, на какой платформе сделан сайт или приложение, какие способы
            оплаты нужны и есть ли договор с банком. Бесплатно разберём задачу, назовём стоимость и срок, а после запуска
            останемся на связи.
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
