@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="/assets/css/smm.css?v=1.5">
@endpush

@push('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "SMM-продвижение в Instagram в Алматы",
    "description": "Ведение и раскрутка Instagram под ключ: анализ профиля и конкурентов, оформление аккаунта, контент-план, Reels, AI-ролики и сторис, таргетированная реклама, ежемесячный отчёт. Три пакета: 350 000 ₸, 550 000 ₸ и от 750 000 ₸ в месяц.",
    "provider": {
        "@@type": "Organization",
        "name": "Modern Design Lab",
        "url": "https://mdlab.kz",
        "logo": "https://mdlab.kz/assets/img/logo.png",
        "telephone": "+77774333822",
        "address": {
            "@@type": "PostalAddress",
            "streetAddress": "ул. Назарбаева 50, офис 209",
            "addressLocality": "Алматы",
            "postalCode": "050030",
            "addressCountry": "KZ"
        }
    },
    "areaServed": [
        {"@@type": "City", "name": "Алматы"},
        {"@@type": "Country", "name": "Казахстан"}
    ],
    "serviceType": "SMM-продвижение в социальных сетях",
    "url": "https://mdlab.kz/prodvighenie-v-socialynyh-setyah",
    "offers": {
        "@@type": "AggregateOffer",
        "lowPrice": "350000",
        "highPrice": "750000",
        "priceCurrency": "KZT",
        "offerCount": "3"
    }
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
        {
            "@@type": "Question",
            "name": "Сколько стоит SMM-продвижение в Instagram в Алматы?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "У нас три пакета: «Старт» — 350 000 ₸/мес, «Стандарт» — 550 000 ₸/мес, «Профессионал» — от 750 000 ₸/мес. Рекламный бюджет на таргет оплачивается отдельно, рекомендуемый старт — от 150 000 ₸ в месяц."
            }
        },
        {
            "@@type": "Question",
            "name": "Что входит в ведение Instagram?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Аудит профиля и конкурентов, стратегия и портрет аудитории, оформление профиля, контент-план, дизайн и тексты, от 8 до 20 Reels и от 30 до 90 сторис в месяц, таргетированная реклама и отчёт о результатах. В старших пакетах — AI-ролики, собственная фото- и видеосъёмка, ответы в Direct, работа с блогерами и персональный менеджер."
            }
        },
        {
            "@@type": "Question",
            "name": "Когда появятся первые клиенты из Instagram?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Первые обращения обычно приходят после запуска таргетированной рекламы — она начинает показываться сразу после модерации, как правило в течение суток. Органический рост за счёт контента идёт постепенно, в течение нескольких месяцев."
            }
        },
        {
            "@@type": "Question",
            "name": "Можно ли заказать только фото- и видеосъёмку для Instagram?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Да. Фото- и видеосъёмку товаров, заведения или услуг с обработкой фото можно заказать отдельно от пакетов — от 25 000 ₸."
            }
        },
        {
            "@@type": "Question",
            "name": "Вы работаете только с бизнесом из Алматы?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Нет. Офис находится в Алматы, но продвижение ведём удалённо для бизнеса по всему Казахстану — среди наших проектов есть компании из Павлодара. Для съёмок на объекте в пакетах «Стандарт» и «Профессионал» выезжаем по Алматы."
            }
        }
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {"@@type": "ListItem", "position": 1, "name": "Главная", "item": "https://mdlab.kz/"},
        {"@@type": "ListItem", "position": 2, "name": "Продвижение в социальных сетях", "item": "https://mdlab.kz/prodvighenie-v-socialynyh-setyah"}
    ]
}
</script>
@endpush

@section('content')
@php
    $packets = [
        [
            'name' => 'Старт',
            'info' => 'Для бизнеса, которому нужен регулярный профессиональный Instagram и стабильный поток заявок с рекламы.',
            'hit' => false,
            'bg' => 'pc-1-bg.png',
            'price' => '350 000 тг/мес',
            'items' => [
                'Аудит профиля и анализ 3-х конкурентов',
                'Стратегия продвижения и портрет целевой аудитории',
                'Оформление профиля <br> (шапка, аватар, Highlights с обложками)',
                'Контент-план на месяц, рубрикатор и система #хештегов',
                'от 8 Reels в месяц: сценарий, съемка, монтаж',
                '30 сторис в месяц',
                'Дизайн обложек и тексты к Reels',
                'Настройка и ведение таргетированной рекламы <br> <span class="opacity-50">(1 рекламная кампания)</span>',
                'Ежемесячный отчет с рекомендациями',
            ],
        ],
        [
            'name' => 'Стандарт',
            'info' => 'Полное ведение под ключ: контент с собственной съемкой, реклама на несколько аудиторий и работа с подписчиками.',
            'hit' => true,
            'bg' => null,
            'price' => '550 000 тг/мес',
            'items' => [
                'Аудит профиля и анализ 5-ти конкурентов',
                'Стратегия, портрет аудитории и tone of voice бренда',
                'Оформление профиля и фирменный стиль Reels и сторис',
                'Контент-план на месяц, рубрикатор и система #хештегов',
                'от 12 Reels в месяц: сценарий, съемка, монтаж',
                'от 4 AI-роликов в месяц <br> <span class="color-primary">(нейросетевые видео, AI-аватары, анимация)</span>',
                '60 сторис в месяц с интерактивами <br> <span class="color-primary">(опросы, викторины, вопросы)</span>',
                'Фото и видеосъемка 1 раз в месяц (до 2-х часов)',
                'Двуязычное ведение (русский и казахский)',
                'Таргетированная реклама: до 3-х кампаний, A/B-тесты креативов',
                'Модерация комментариев и ответы в Direct в рабочее время',
                'Организация розыгрышей для набора подписчиков',
                'Ежемесячный отчет и созвон по результатам',
            ],
        ],
        [
            'name' => 'Профессионал',
            'info' => 'Для брендов и сетей: максимальный объем контента, продакшн и продвижение в нескольких каналах. Итоговая цена зависит от объема работ.',
            'hit' => false,
            'bg' => 'pc-3-bg.png',
            'price' => 'от 750 000 тг/мес',
            'items' => [
                'Все из пакета «Стандарт»',
                'Анализ до 10-ти конкурентов, маркетинговая стратегия на квартал',
                'от 20 Reels в месяц: сценарий, съемка, монтаж',
                'от 8 AI-роликов в месяц: AI-аватары, нейросетевые видео и анимация',
                'Ежедневные сторис (до 90 в месяц)',
                'Фото и видеосъемка 2 раза в месяц, выезд на объект (до 3-х часов)',
                'Адаптация Reels для TikTok и YouTube Shorts',
                'Работа с блогерами: подбор, переговоры, контроль размещений',
                'Таргет без ограничений по кампаниям: ретаргетинг, лид-формы, look-alike',
                'Ответы в Direct и комментариях 7 дней в неделю',
                'Персональный менеджер проекта',
                'Еженедельный отчет и стратегическая встреча раз в месяц',
            ],
        ],
    ];

    $businesses = [
        'Косметология, медицина, косметика, бьюти-процедуры',
        'Рестораны, кафе, бары, кофейни',
        'Клубы, караоке, мероприятия',
        'Отдых, турагентства, путешествия',
        'Гостиничный бизнес',
        'Спорт, фитнес',
        'Одежда, аксессуары',
        'Товары и услуги для детей',
        'Химчистка, уборка',
        'Парикмахерские, барбершопы',
        'Товары и услуги',
        'Обучение, курсы',
    ];

    $works = [
        [
            'name' => 'Shymbulak Medeu Camp',
            'logo' => 'lgs2.png',
            'info' => 'Глэмпинг с эко-шатрами в 15 минутах от центра Алматы. Ведём Instagram: показываем площадку, активности и отдых на природе, ведём гостей к бронированию через Highlights и ссылку в профиле.',
        ],
        [
            'name' => 'МАКБУХ',
            'logo' => 'lgs3.png',
            'info' => 'Личный бренд бухгалтера Анастасии Маковой: 15 лет практики, обучение и консультации по налогам. Фирменные шаблоны постов, анонсы семинаров и курсов, понятный экспертный контент.',
        ],
        [
            'name' => 'Kamkor Pavlodar',
            'logo' => 'lgs1.png',
            'info' => 'Официальный дилер Kia в Павлодаре: продажа автомобилей, сервисное обслуживание и запасные части. Контент о моделях в едином стиле, сторис и акции дилерского центра.',
        ],
        [
            'name' => 'Webtours.kz',
            'logo' => 'lgs4.png',
            'info' => 'Турагентство «Горящие туры Алматы». Карточки туров с ценами и датами вылета, Highlights по направлениям и отзывам, оперативные публикации горящих предложений.',
        ],
    ];

    $tasks = [
        'Создание уникального контента: Reels и сторис',
        'Разработка графических визуалов, обработка фото',
        'Постоянное взаимодействие с подписчиками',
    ];

    $faq = [
        [
            'q' => 'Сколько стоит SMM-продвижение в Instagram в Алматы?',
            'a' => 'У нас три пакета: «Старт» — 350 000 ₸/мес, «Стандарт» — 550 000 ₸/мес, «Профессионал» — от 750 000 ₸/мес. Рекламный бюджет на таргет оплачивается отдельно, рекомендуемый старт — от 150 000 ₸ в месяц.',
        ],
        [
            'q' => 'Что входит в ведение Instagram?',
            'a' => 'Аудит профиля и конкурентов, стратегия и портрет аудитории, оформление профиля, контент-план, дизайн и тексты, от 8 до 20 Reels и от 30 до 90 сторис в месяц, таргетированная реклама и отчёт о результатах. В старших пакетах — AI-ролики, собственная фото- и видеосъёмка, ответы в Direct, работа с блогерами и персональный менеджер.',
        ],
        [
            'q' => 'Когда появятся первые клиенты из Instagram?',
            'a' => 'Первые обращения обычно приходят после запуска таргетированной рекламы — она начинает показываться сразу после модерации, как правило в течение суток. Органический рост за счёт контента идёт постепенно, в течение нескольких месяцев.',
        ],
        [
            'q' => 'Можно ли заказать только фото- и видеосъёмку для Instagram?',
            'a' => 'Да. Фото- и видеосъёмку товаров, заведения или услуг с обработкой фото можно заказать отдельно от пакетов — от 25 000 ₸.',
        ],
        [
            'q' => 'Вы работаете только с бизнесом из Алматы?',
            'a' => 'Нет. Офис находится в Алматы, но продвижение ведём удалённо для бизнеса по всему Казахстану — среди наших проектов есть компании из Павлодара. Для съёмок на объекте в пакетах «Стандарт» и «Профессионал» выезжаем по Алматы.',
        ],
    ];
@endphp

<div class="smm-page">

    <section class="main inner-page">
        <div class="obj">
            <img src="/assets/img/smm/squad-bg.svg" alt="">
        </div>
        <div class="container">
            <nav class="breadcrumbs fs-14" aria-label="Хлебные крошки">
                <a href="/">Главная</a> <span>/</span> <span>Продвижение в социальных сетях</span>
            </nav>
            <div class="row">
                <div class="col-12 col-md-7 col-xl-8">
                    <div class="m-block">
                        <div class="for-title">
                            <h1 class="title fs-xl-50 fs-md-40 fs-20 ff-headings fw-bold">
                                Продвижение Инстаграм <br> в Алматы и Казахстане (SMM)
                            </h1>
                            <p class="sub-title fs-xl-35 fs-md-27 fs-20 fw-bold color-gray d-none d-md-block mt-3">
                                Заказать SMM c конверсией до 150% <br> Получите первых клиентов уже на следующий день
                            </p>
                        </div>
                        <div class="ok-list color-gray d-none d-md-block fs-21">
                            <div class="row gx-xl-5 gy-3">
                                <div class="col-12 col-md-auto">
                                    <div class="o-block">
                                        <div class="icon">
                                            <img src="/assets/img/smm/quotes.png" alt="">
                                        </div>
                                        <p>Время реакции <br> от 15 минут</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-auto">
                                    <div class="o-block">
                                        <div class="icon">
                                            <img src="/assets/img/smm/quotes.png" alt="">
                                        </div>
                                        <p>Тарифы ниже <br> рынка на 20%</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-auto">
                                    <div class="o-block">
                                        <div class="icon">
                                            <img src="/assets/img/smm/quotes.png" alt="">
                                        </div>
                                        <p>Бесплатная консультация <br> на любом этапе</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="for-btn fs-xl-30 fs-md-25 fs-20 fw-semi d-none d-md-block">
                            <a class="cl-btn" href="https://wa.me/77774333822" target="_blank" rel="noopener">
                                Получить предложение
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-xl-4">
                    <div class="pic">
                        <img src="/assets/img/smm/main-pic.webp" alt="Продвижение Instagram в Алматы — SMM от MD Lab" width="1100" height="1146" fetchpriority="high">
                    </div>
                </div>
            </div>
            <div class="txt fs-14 d-md-none text-center fw-bold">
                <p>Заказать SMM c конверсией до 150% <br> Получите первых клиентов уже на следующий день</p>
                <div class="for-btn fs-17 mt-3">
                    <a class="cl-btn" href="https://wa.me/77774333822" target="_blank" rel="noopener">Получить предложение</a>
                </div>
                <div class="line"></div>
            </div>
        </div>
    </section>

    <section class="summary">
        <div class="container">
            <div class="summary-block">
                <p>
                    <b>SMM-продвижение в MD Lab</b> — ведение и раскрутка Instagram под ключ для бизнеса в Алматы и по Казахстану:
                    анализ профиля и конкурентов, оформление аккаунта, контент-план, от 8 до 20 Reels, AI-ролики и до 90 сторис в месяц,
                    таргетированная реклама и ежемесячный отчёт. Стоимость — <b>от 350 000 ₸ в месяц</b>
                    (пакеты 350 000 / 550 000 / от 750 000 ₸), рекламный бюджет оплачивается отдельно.
                </p>
            </div>
        </div>
    </section>

    <section class="packets">
        <div class="for-title">
            <div class="container">
                <h2 class="title fs-xl-40 fs-md-35 fs-30 ff-headings fw-semi d-none d-md-block mb-3">
                    Создаем <br> сбалансированные <br> и безопасные решения
                </h2>
                <h3 class="sub-title fs-xl-30 fs-md-25 fs-17 fw-bold color-gray">
                    Пакеты продвижения Instagram
                </h3>
            </div>
        </div>
        <div class="packets-row">
            <div class="container big">
                <div class="row gy-3">
                    @foreach($packets as $i => $packet)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="packet-block pcb-{{ $i + 1 }} @if($packet['hit']) hit @endif">
                            @if($packet['hit'])
                            <div class="labe labe-blue">
                                100% ХИТ!
                            </div>
                            <div class="recomend">
                                <img src="/assets/img/smm/recommend.png" alt="">
                            </div>
                            @endif
                            <div class="packet-head">
                                <div class="for-name">
                                    <div class="number">
                                        <p>Пакет №{{ $i + 1 }}</p>
                                        <div class="icon">
                                            <img src="/assets/img/smm/ic-{{ $i + 1 }}.png" alt="">
                                        </div>
                                    </div>
                                    <div class="name">“{{ $packet['name'] }}”</div>
                                </div>
                                <div class="info">
                                    {{ $packet['info'] }}
                                </div>
                            </div>
                            <div class="packet-body">
                                @if($packet['bg'])
                                <div class="obj">
                                    <img src="/assets/img/smm/{{ $packet['bg'] }}" alt="">
                                </div>
                                @endif
                                <div class="sign-list">
                                    @foreach($packet['items'] as $item)
                                    <p>{!! $item !!}</p>
                                    @endforeach
                                </div>
                            </div>
                            <div class="packet-bottom">
                                <div class="for-price">
                                    <p>Стоимость пакета</p>
                                    <div class="price">{{ $packet['price'] }}</div>
                                </div>
                                <div class="for-btn">
                                    <a class="cl-btn" href="https://wa.me/77774333822" target="_blank" rel="noopener">
                                        Написать нам
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <p class="packets-note">
                    Рекламный бюджет на таргет оплачивается отдельно, напрямую в рекламный кабинет, и не входит в стоимость пакетов.
                    Рекомендуемый стартовый бюджет — от 150 000 ₸ в месяц.
                </p>
            </div>
        </div>
    </section>

    <section class="more-services">
        <div class="line d-md-none"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 d-none d-xl-block">
                    <div class="pic">
                        <img src="/assets/img/smm/services-pic.jpg" alt="Фото и видеосъемка для Instagram" loading="lazy">
                    </div>
                </div>
                <div class="col-12 col-md">
                    <div class="s-block">
                        <div class="for-title text-md-end text-center">
                            <h2 class="title fs-xl-40 fs-md-30 fs-17 ff-headings fw-semi">
                                Дополнительные услуги
                            </h2>
                            <div class="sub-title fs-xl-30 fs-md-22 fs-17 fw-bold">
                                Фото и видеосъемка для Instagram
                            </div>
                        </div>
                        <div class="services-inner">
                            <div class="service-line">
                                <div class="icon d-none d-md-block">
                                    <img src="/assets/img/smm/ok.png" alt="">
                                </div>
                                <div class="text">
                                    <p>Если у вас множество товаров или уютное заведение с вкусной кухней и вы не знаете, как красиво все это показать потенциальным клиентам, предлагаем вам услугу фото и видео съемки для уникального контента</p>
                                    <p class="fw-bold color-primary">+ обработка фото</p>
                                </div>
                                <div class="price-block">
                                    <div class="icon d-md-none">
                                        <img src="/assets/img/smm/ok.png" alt="">
                                    </div>
                                    <div class="for-price">
                                        <div class="price">от 25 000 тг</div>
                                        <div class="link">
                                            <a class="bd-link" href="https://wa.me/77774333822" target="_blank" rel="noopener">Заказать</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-line">
                                <div class="icon d-none d-md-block">
                                    <img src="/assets/img/smm/ok.png" alt="">
                                </div>
                                <div class="text">
                                    <p>Каждый новый пост или история в вашем Instagram автоматически начнет собирать лайки, просмотры и комментарии</p>
                                    <p class="fw-bold color-primary">+ лайки, комментарии, просмотры или все разом</p>
                                </div>
                                <div class="price-block">
                                    <div class="icon d-md-none">
                                        <img src="/assets/img/smm/ok.png" alt="">
                                    </div>
                                    <div class="for-price">
                                        <div class="price">от 20 000 тг</div>
                                        <div class="link">
                                            <a class="bd-link" href="https://wa.me/77774333822" target="_blank" rel="noopener">Заказать</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="analysis ff-headings d-none d-xl-block">
        <div class="container">
            <div class="obj">
                <img src="/assets/img/smm/facebook.png" alt="" loading="lazy">
            </div>
            <h2 class="title fs-xl-30 fs-md-25 fs-20 fw-semi text-center">
                Проанализируем вашу ситуацию и дадим персональные рекомендации
            </h2>
            <div class="a-row">
                <div class="row align-items-center">
                    <div class="col-12 col-xl-auto text-center">
                        <div class="for-phone">
                            <div class="tit fs-xl-25 fs-md-20 fs-18 fw-semi mb-2">Звоните</div>
                            <div class="phone d-flex align-items-center">
                                <div class="icon flex-shrink-0 me-2">
                                    <img src="/assets/img/smm/phone-big.png" alt="">
                                </div>
                                <a class="fs-xl-30 fs-md-25 fs-20 fw-bold" href="tel:+77774333822">+7 (777) 433 38 22</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl d-xl-flex align-items-center">
                        <div class="for-tit fw-semi fs-xl-25 fs-md-22 fs-18 me-xl-5 mb-4 mb-xl-0 lh-1 py-3">
                            или <br> напишите <br> в WhatsApp
                        </div>
                        <div class="flex-grow-1">
                            <a class="cl-btn wa-btn w-100" href="https://wa.me/77774333822" target="_blank" rel="noopener">
                                <i class="fa-brands fa-whatsapp"></i> Написать в WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="business ff-headings">
        <div class="line"></div>
        <div class="container big">
            <h2 class="title fs-xl-40 fs-md-35 fs-17 fw-semi text-center">
                В каких бизнесах отлично работает реклама в Instagram
            </h2>
            <div class="b-row">
                <div class="row g-2 g-md-4">
                    @foreach($businesses as $i => $business)
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="b-block">
                            <p>{!! $business !!}</p>
                            <div class="icon">
                                <img src="/assets/img/smm/b{{ $i + 1 }}.jpg" alt="" loading="lazy">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="link text-center d-none d-md-block">
                <a href="https://wa.me/77774333822" target="_blank" rel="noopener" class="bd-link">Заказать аналитику бесплатно</a>
            </div>
        </div>
    </section>

    <section class="works">
        <div class="line mb-4 d-md-none"></div>
        <div class="container">
            <h2 class="title fs-xl-35 fs-md-30 fs-17 ff-headings fw-semi text-center">
                Примеры наших работ
            </h2>
            <!-- Desktop -->
            <div class="desktop-works d-none d-md-block" id="desktop-works">
                <div class="row flex-nowrap gx-md-2 gx-xl-4">
                    <div class="col-auto">
                        <div class="pic-collapses">
                            @foreach($works as $i => $work)
                            <div class="collapse work-{{ $i + 1 }} @if($i === 0) show @endif" data-bs-parent="#desktop-works">
                                <div class="card">
                                    <div class="pic">
                                        <img src="/assets/img/smm/wp-{{ $i + 1 }}.webp" alt="Instagram {{ $work['name'] }} — пример SMM-продвижения" loading="lazy">
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col">
                        <div class="works-inner">
                            <div class="frame">
                                <img class="mw-100" src="/assets/img/smm/frame.webp" alt="" loading="lazy">
                            </div>
                            <div class="logo">
                                <img src="/assets/img/smm/logo.png" alt="" loading="lazy">
                            </div>
                            <div class="w-block">
                                <div class="slider">
                                    <div class="swiper swiper-works-desktop">
                                        <div class="swiper-wrapper">
                                            @foreach($works as $i => $work)
                                            <div class="swiper-slide">
                                                <button class="work-btn @if($i > 0) collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target=".work-{{ $i + 1 }}" aria-label="{{ $work['name'] }}">
                                                    <img src="/assets/img/smm/{{ $work['logo'] }}" alt="{{ $work['name'] }}">
                                                </button>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="swiper-button">
                                        <div class="swiper-button-next works-desktop-next"></div>
                                        <div class="swiper-button-prev works-desktop-prev"></div>
                                    </div>
                                </div>
                                <div class="work-info">
                                    @foreach($works as $i => $work)
                                    <div class="collapse work-{{ $i + 1 }} @if($i === 0) show @endif" data-bs-parent="#desktop-works">
                                        <div class="card">
                                            <div class="name">{{ $work['name'] }}</div>
                                            <div class="text">
                                                <p>{{ $work['info'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile -->
            <div class="mobile-works d-md-none">
                <div class="slider">
                    <div class="swiper swiper-works-mobile">
                        <div class="swiper-wrapper">
                            @foreach($works as $i => $work)
                            <div class="swiper-slide">
                                <div class="pic">
                                    <img src="/assets/img/smm/wp-{{ $i + 1 }}.webp" alt="Instagram {{ $work['name'] }} — пример SMM-продвижения" loading="lazy">
                                </div>
                                <div class="content">
                                    <div class="name">{{ $work['name'] }}</div>
                                    <div class="main-info">
                                        SMM-продвижение под ключ в Instagram.
                                    </div>
                                    <ul class="list">
                                        @foreach($tasks as $task)
                                        <li>{{ $task }}</li>
                                        @endforeach
                                    </ul>
                                    <div class="text">
                                        <p>{{ $work['info'] }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="swiper-button">
                        <div class="swiper-button-next works-mobile-next"></div>
                        <div class="swiper-button-prev works-mobile-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="effective d-none d-xl-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-7">
                    <div class="e-block">
                        <h2 class="title fs-xl-35 fs-md-30 fs-25 ff-headings fw-semi">
                            Эффективное продвижение профиля <br class="d-none d-xl-inline"> или бренда в Instagram.
                        </h2>
                        <div class="sign-list fw-bold">
                            <p>Без риска</p>
                            <p>Без усилий</p>
                            <p>На 65% больше продаж <br class="d-none d-xl-inline"> с инстаграм уже завтра</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="pic">
                        <img src="/assets/img/smm/effective-pic.jpg" alt="Эффективное продвижение бренда в Instagram" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="subscribers">
        <div class="line mb-3 d-md-none"></div>
        <div class="container">
            <h2 class="title fs-xl-40 fs-md-35 fs-20 ff-headings fw-semi text-center">
                Привлечение подписчиков по вашим критериям
            </h2>
            <div class="s-row fs-xl-18">
                <div class="row gy-md-5">
                    <div class="col-12 col-md-6">
                        <div class="s-block">
                            <div class="icon">
                                <img src="/assets/img/smm/sb1.png" alt="" loading="lazy">
                            </div>
                            <div class="for-text">
                                <div class="tit">По гендеру</div>
                                <p>Нужны только девушки? Пройдемся по подписчикам тематических аккаунтов для женщин.</p>
                            </div>
                        </div>
                        <div class="s-block">
                            <div class="icon">
                                <img src="/assets/img/smm/sb3.png" alt="" loading="lazy">
                            </div>
                            <div class="for-text">
                                <div class="tit">По подписчикам конкурента</div>
                                <p>Расскажем о вас тем, кто уже пользуется вашим продуктом или услугой и переманим к вам!</p>
                            </div>
                        </div>
                        <div class="s-block">
                            <div class="icon">
                                <img src="/assets/img/smm/sb5.png" alt="" loading="lazy">
                            </div>
                            <div class="for-text">
                                <div class="tit">По лайкам <br> и комментариям</div>
                                <p>Если вам нужна самая активная аудитория, мы возьмем только тех, кто ставит лайки и задает вопросы в комментариях на страничках с вашей тематикой</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="s-block">
                            <div class="icon">
                                <img src="/assets/img/smm/sb2.png" alt="" loading="lazy">
                            </div>
                            <div class="for-text">
                                <div class="tit">По тегам</div>
                                <p>Ваши клиенты представители определенного рода деятельности? Соберем людей, которые ставят под фото теги #фотограф #дизайнер #шоумен и так далее.</p>
                            </div>
                        </div>
                        <div class="s-block">
                            <div class="icon">
                                <img src="/assets/img/smm/sb4.png" alt="" loading="lazy">
                            </div>
                            <div class="for-text">
                                <div class="tit">По GEO-локации</div>
                                <p>Нужны жители конкретного района? Соберем всех, кто отмечал свои фото GEO-отметками в непосредственной близости от вашего офиса</p>
                            </div>
                        </div>
                        <div class="s-block">
                            <div class="icon">
                                <img src="/assets/img/smm/sb6.png" alt="" loading="lazy">
                            </div>
                            <div class="for-text">
                                <div class="tit">По интересам</div>
                                <p>Брендовая одежда? Салон красоты? Свадебное агентство? Скомбинируем несколько способов поиска заинтересованных людей для максимального отклика.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq">
        <div class="container">
            <h2 class="title fs-xl-40 fs-md-35 fs-20 ff-headings fw-semi text-center">
                Частые вопросы о SMM-продвижении
            </h2>
            <div class="faq-list">
                @foreach($faq as $i => $item)
                <details class="faq-item" @if($i === 0) open @endif>
                    <summary class="ff-headings fw-semi">{{ $item['q'] }}</summary>
                    <p>{{ $item['a'] }}</p>
                </details>
                @endforeach
            </div>
        </div>
    </section>

    <section class="incredible">
        <div class="container big">
            <div class="for-title text-center ff-headings">
                <h2 class="title fs-xl-45 fs-md-35 fs-17 fw-bold text-uppercase">
                    НЕВЕРОЯТНЫЙ ЭФФЕКТ ЗА МИНИМАЛЬНУЮ ЦЕНУ!
                </h2>
                <div class="sub-title fs-xl-27 fs-md-22 fs-15 fw-semi mt-2">
                    Не откладывайте продвижение <br class="d-none d-md-inline d-xl-none"> в Instagram, получайте заказы <span class="lines">уже завтра.</span>
                </div>
            </div>
        </div>
    </section>

</div>

@include('partials.rateit')
@endsection

@push('scripts')
<script defer src="/assets/js/smm.js?v=1.0"></script>
@endpush
