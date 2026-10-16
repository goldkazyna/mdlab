@extends('layouts.app')

@php
    $pageUrl = 'https://mdlab.kz/integraciya-kaspi';
    $waUrl = 'https://wa.me/77774333822?text=' . rawurlencode('Здравствуйте! Интересует интеграция Kaspi');

    extract(require resource_path('data/kaspi.php'));

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
            'name' => 'Интеграция Kaspi терминала и Kaspi QR с 1С, iiko, CRM и сайтом',
            'description' => 'Подключение терминала Kaspi и оплаты Kaspi QR / Kaspi Pay к кассовым и учётным системам: 1С, iiko, r_keeper, Poster, amoCRM, Битрикс24, сайтам и собственному софту. Сумма передаётся на терминал автоматически, результат оплаты возвращается в систему.',
            'serviceType' => 'Интеграция платёжных терминалов Kaspi',
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
            'audience' => ['@type' => 'BusinessAudience', 'audienceType' => 'Магазины, рестораны, кафе, интернет-магазины, сервисные компании'],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => 'Интеграция Kaspi',
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
            'name' => 'Как проходит интеграция Kaspi с вашей системой',
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
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Интеграция Kaspi', 'item' => $pageUrl],
            ],
        ],
    ];
@endphp

@push('styles')
<link rel="stylesheet" href="/assets/css/mobile-landing.css?v=1.3">
@endpush

@push('schema')
<link rel="alternate" type="text/markdown" href="/integraciya-kaspi.md" title="Markdown-версия страницы для ИИ">
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
            <li><span class="breadcrumbs__sep">/</span> <span aria-current="page">Интеграция Kaspi</span></li>
        </ol>
    </div>
</nav>

<!-- HERO СЕКЦИЯ -->
<section class="home-hero">
    <div class="container">
        <div class="home-hero__wrapper">
            <div class="home-hero__content">
                <div class="home-hero__top">
                    <h1 class="home-hero__title">Интеграция Kaspi терминала и&nbsp;Kaspi&nbsp;QR с&nbsp;вашей системой</h1>
                    <p class="home-hero__subtitle">1С, iiko, r_keeper, Poster, CRM и&nbsp;сайт — без ручного ввода суммы и&nbsp;сверок</p>
                </div>
                <div class="home-hero__bottom">
                    <div class="home-hero__contact">
                        <a href="tel:+77774333822" class="btn btn_accent">Позвонить</a>
                        <a href="{{ $waUrl }}" target="_blank" rel="noopener" class="btn btn_accent btn_whatsapp1">
                            <i class="fa-brands fa-whatsapp"></i>Написать в WhatsApp
                        </a>
                    </div>
                    <p class="home-hero__description">Напишите, какая у&nbsp;вас система, — бесплатно разберём задачу и&nbsp;назовём стоимость и&nbsp;срок интеграции.</p>
                </div>
            </div>

            <div class="home-hero__img" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="1000" data-aos-delay="200">
                <img src="/assets/img/kaspi/integration-hero.svg" alt="Интеграция терминала Kaspi и Kaspi QR с 1С, iiko и CRM: сумма уходит на терминал, оплата возвращается в систему" width="600" height="520">
            </div>
        </div>
    </div>
</section>

<!-- БЛОК ПРЯМОГО ОТВЕТА -->
<section class="mobile-summary">
    <div class="container">
        <div class="summary-box">
            <p>
                <strong>Интеграция Kaspi в MD Lab</strong> — подключение терминала Kaspi и оплаты Kaspi QR / Kaspi Pay к вашей кассовой или учётной системе: 1С, iiko, r_keeper, Poster, amoCRM, Битрикс24, сайту или собственному софту.
                Кассир больше не вводит сумму на терминале вручную: она передаётся из программы автоматически, а результат оплаты сразу возвращается в систему — заказ закрывается, оплата видна в учёте.
            </p>
            <p>
                На сайте и в интернет-магазине подключаем оплату через Kaspi с автоматической сменой статуса заказа. Работаем в Алматы и удалённо по всему Казахстану. <strong>Стоимость и срок называем после бесплатного разбора задачи.</strong>
            </p>
            <div class="summary-facts">
                <div class="summary-fact">
                    <div class="summary-fact__value">1С · iiko · Poster</div>
                    <div class="summary-fact__label">и r_keeper, CRM, сайты</div>
                </div>
                <div class="summary-fact">
                    <div class="summary-fact__value">Терминал + QR</div>
                    <div class="summary-fact__label">на кассе и на сайте</div>
                </div>
                <div class="summary-fact">
                    <div class="summary-fact__value">0 ручного ввода</div>
                    <div class="summary-fact__label">сумма уходит на терминал сама</div>
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

<!-- ЧТО ПОДКЛЮЧАЕМ -->
<section class="mobile-types">
    <div class="container">
        <div class="section-header">
            <h2>Что подключаем к Kaspi</h2>
            <p>Терминал на кассе, оплата на сайте или в CRM — под вашу систему</p>
        </div>

        <div class="types-grid">
            @foreach($types as $item)
            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid {{ $item['icon'] }}"></i>
                </div>
                <h3>{{ $item['name'] }}</h3>
                <p>{{ $item['text'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ЧТО ДАЁТ ИНТЕГРАЦИЯ -->
<section class="mobile-advantages">
    <div class="container">
        <div class="section-header">
            <h2>Что даёт интеграция Kaspi бизнесу</h2>
            <p>Меньше ручной работы на кассе и в бухгалтерии</p>
        </div>

        <div class="advantages-grid">
            @foreach($advantages as $item)
            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid {{ $item['icon'] }}"></i>
                </div>
                <h3>{{ $item['name'] }}</h3>
                <p>{{ $item['text'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- С КАКИМИ СИСТЕМАМИ -->
<section class="mobile-tech">
    <div class="container">
        <div class="section-header">
            <h2>С какими системами интегрируем Kaspi</h2>
            <p>И с любой другой системой, у которой есть API или доступ к базе</p>
        </div>

        <div class="tech-grid">
            @foreach($systems as $item)
            <div class="tech-item">
                <div class="tech-item__icon"><i class="fa-solid {{ $item['icon'] }}"></i></div>
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
            <p>От первого сообщения до работающей кассы</p>
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
            <h2>Частые вопросы об интеграции Kaspi</h2>
            <p>Коротко о стоимости, системах и подключении</p>
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
        <h2>Подключим Kaspi к вашей системе</h2>
        <p>Напишите, какая у вас программа и сколько терминалов, — бесплатно разберём задачу и назовём стоимость</p>
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
        <h2>Интеграция Kaspi в Алматы</h2>
        <p>
            Kaspi — самый популярный способ оплаты в Казахстане, но во многих магазинах и заведениях терминал до сих пор
            работает отдельно от кассовой программы. Кассир дважды вводит сумму: сначала в 1С, iiko или Poster, потом на
            терминале. Отсюда ошибки, очереди и ежедневная ручная сверка оплат с выпиской. Интеграция Kaspi убирает этот
            разрыв: программа сама отправляет сумму на терминал и сама узнаёт, прошла ли оплата. Если нужно связать 1С
            ещё и с сайтом, Kaspi Магазином или CRM, посмотрите <a href="https://mdlab.kz/integraciya-s-1c">интеграцию с 1С</a>.
        </p>

        <h3>Кому нужна интеграция Kaspi</h3>
        <ul>
            @foreach($audience as $item)
            <li>{{ $item }}</li>
            @endforeach
        </ul>

        <h3>Оплата Kaspi на сайте и в приложении</h3>
        <p>
            Для онлайн-продаж подключаем оплату через Kaspi к сайту или
            <a href="https://mdlab.kz/internet-magazin">интернет-магазину</a>: заказ автоматически отмечается оплаченным,
            а менеджер получает уведомление. Если нужна оплата внутри мобильного приложения, посмотрите
            <a href="https://mdlab.kz/razrabotka-prilozheniya-s-oplatoy">разработку приложения с онлайн-оплатой</a>.
            Оплату картами через Halyk ePay, Freedom Pay или CloudPayments подключаем в рамках
            <a href="https://mdlab.kz/podklyuchenie-ekvayringa">подключения эквайринга</a>, а доработать существующий сайт
            под приём оплаты можно в рамках <a href="https://mdlab.kz/dorabotka-sayta">доработки сайта</a>.
        </p>

        <h3>Как заказать интеграцию Kaspi</h3>
        <p>
            Напишите нам в WhatsApp или позвоните: расскажите, какая у вас система, сколько касс и терминалов и где нужна
            оплата. Бесплатно разберём задачу, назовём стоимость и срок, а после запуска останемся на связи, если понадобятся
            доработки.
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
