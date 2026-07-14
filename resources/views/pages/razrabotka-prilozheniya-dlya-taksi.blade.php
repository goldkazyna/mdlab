@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="/assets/css/mobile-landing.css?v=1.0">
@endpush

@push('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "Разработка приложения для такси в Алматы",
    "description": "Создание приложения для такси и сервиса заказа поездок под ключ: приложение пассажира и водителя, геолокация, расчёт стоимости, онлайн-оплата, админ-панель диспетчерской. Срок от 45 дней.",
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
    "areaServed": {
        "@@type": "City",
        "name": "Алматы"
    },
    "serviceType": "Разработка приложения для такси",
    "url": "https://mdlab.kz/razrabotka-prilozheniya-dlya-taksi",
    "offers": {
        "@@type": "AggregateOffer",
        "lowPrice": "1500000",
        "highPrice": "6000000",
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
            "name": "Сколько стоит разработка приложения для такси?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Стоимость зависит от набора функций и начинается от 1 500 000 тенге за стартовый комплект (приложение пассажира и водителя с базовой геолокацией и заказом поездки). Полноценный сервис с онлайн-оплатой, рейтингами и админ-панелью диспетчерской — от 3 000 000 тенге. Масштабный агрегатор с несколькими тарифами, аналитикой и высокой нагрузкой — от 6 000 000 тенге. Точную смету подготовим после обсуждения вашей задачи."
            }
        },
        {
            "@@type": "Question",
            "name": "Из чего состоит приложение для такси?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Полноценный сервис заказа поездок включает три части: приложение пассажира для вызова машины и оплаты, приложение водителя для приёма заказов и навигации, а также веб-панель диспетчерской для управления заказами, водителями и тарифами. Все компоненты работают через единый сервер с картами, расчётом стоимости и подбором ближайшего водителя."
            }
        },
        {
            "@@type": "Question",
            "name": "Какие карты и геолокация используются?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Мы интегрируем Google Maps, 2GIS или Mapbox — выбираем оптимальный вариант под ваш регион и бюджет. Реализуем построение маршрута, отслеживание автомобиля в реальном времени, определение адреса подачи по GPS и расчёт расстояния для тарификации. Карты покрывают Алматы, Астану и другие города Казахстана."
            }
        },
        {
            "@@type": "Question",
            "name": "Как работает онлайн-оплата и расчёт стоимости поездки?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Стоимость рассчитывается автоматически по тарифу: базовая подача, цена за километр и минуту, повышающий коэффициент в час пик. Подключаем платёжные системы (Kaspi, банковские карты, эквайринг) для безналичной оплаты прямо в приложении. Поддерживаем и оплату наличными водителю — пассажир выбирает удобный способ при заказе."
            }
        },
        {
            "@@type": "Question",
            "name": "Что входит в поддержку после запуска сервиса?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Гарантийная поддержка включает: исправление ошибок, обновление под новые версии iOS и Android, мониторинг работы сервера и карт, консультации по работе диспетчерской. По отдельному договору добавляем новые тарифы и функции, масштабируем систему под рост числа заказов, настраиваем маркетинг и продвижение."
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
        {
            "@@type": "ListItem",
            "position": 1,
            "name": "Главная",
            "item": "https://mdlab.kz"
        },
        {
            "@@type": "ListItem",
            "position": 2,
            "name": "Разработка мобильных приложений",
            "item": "https://mdlab.kz/razrabotka-mobilnyh-prilozheniy"
        },
        {
            "@@type": "ListItem",
            "position": 3,
            "name": "Разработка приложения для такси",
            "item": "https://mdlab.kz/razrabotka-prilozheniya-dlya-taksi"
        }
    ]
}
</script>

<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "HowTo",
    "name": "Этапы разработки приложения для такси",
    "description": "Полный цикл создания сервиса заказа поездок под ключ в студии Modern Design Lab.",
    "totalTime": "P45D",
    "step": [
        {
            "@@type": "HowToStep",
            "position": 1,
            "name": "Бриф и проектирование сервиса",
            "text": "Изучаем бизнес-модель, тарифы и город работы. Определяем функционал приложений пассажира и водителя, логику подбора машин и оплаты. Составляем ТЗ и смету."
        },
        {
            "@@type": "HowToStep",
            "position": 2,
            "name": "Прототип и дизайн двух приложений",
            "text": "Создаём прототипы экранов пассажира, водителя и диспетчерской. Разрабатываем UI-дизайн карты, заказа, оплаты и профилей. Согласовываем и вносим правки."
        },
        {
            "@@type": "HowToStep",
            "position": 3,
            "name": "Разработка и интеграция карт",
            "text": "Программируем клиентские приложения, сервер и админ-панель. Подключаем карты, геолокацию, расчёт стоимости и платёжные системы. Показываем прогресс еженедельно."
        },
        {
            "@@type": "HowToStep",
            "position": 4,
            "name": "Тестирование поездок",
            "text": "Проверяем сценарии заказа, подбора водителя, оплаты и рейтингов. Тестируем на реальных маршрутах и устройствах. Исправляем ошибки и оптимизируем нагрузку."
        },
        {
            "@@type": "HowToStep",
            "position": 5,
            "name": "Запуск и поддержка",
            "text": "Публикуем приложения в App Store и Google Play. Запускаем диспетчерскую, настраиваем аналитику и push-уведомления. Обучаем команду и передаём документацию."
        }
    ]
}
</script>
@endpush

@section('content')

<!-- ХЛЕБНЫЕ КРОШКИ -->
<nav class="breadcrumbs" aria-label="Хлебные крошки">
    <div class="container">
        <ol class="breadcrumbs__list">
            <li><a href="https://mdlab.kz">Главная</a></li>
            <li><span class="breadcrumbs__sep">/</span> <a href="https://mdlab.kz/razrabotka-mobilnyh-prilozheniy">Разработка мобильных приложений</a></li>
            <li><span class="breadcrumbs__sep">/</span> <span aria-current="page">Разработка приложения для такси</span></li>
        </ol>
    </div>
</nav>

<!-- HERO СЕКЦИЯ -->
<section class="home-hero">
    <div class="container">
        <div class="home-hero__wrapper">
            <div class="home-hero__content">
                <div class="home-hero__top">
                    <h1 class="home-hero__title">Разработка приложения для такси в&nbsp;Алматы</h1>
                    <p class="home-hero__subtitle">Приложение пассажира и&nbsp;водителя, карты, онлайн-оплата и&nbsp;диспетчерская под ключ</p>
                </div>
                <div class="home-hero__bottom">
                    <div class="home-hero__contact">
                        <a href="tel:+77774333822" class="btn btn_accent">Позвонить</a>
                        <a href="https://wa.me/77774333822" class="btn btn_accent btn_whatsapp1">
                            <i class="fa-brands fa-whatsapp"></i>Написать в WhatsApp
                        </a>
                    </div>
                    <p class="home-hero__description">Оставьте заявку сегодня — получите бесплатную консультацию и&nbsp;расчёт стоимости вашего сервиса заказа поездок!</p>
                </div>
            </div>

            <div class="home-hero__img" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="1000" data-aos-delay="200">
                <!-- Место для изображения: смартфоны с приложениями такси -->
                <img src="/assets/img/mobile-app-hero.png" alt="Разработка приложения для такси и сервиса заказа поездок в Алматы">
                <div class="particle-container">
                    <div class="bottom-particles">
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-info">
        <div class="container">
            <div class="home-info__wrapper">
                <div class="partner">
                    <div class="partner__img"><img src="/assets/img/google-ads.png" alt="Сертифицированный партнёр Google Ads"></div>
                    <div class="partner__content">
                        <div class="partner__title">Партнер Google Ads.</div>
                        <div class="partner__text">Работаем с Google Ads более 10-ти лет. Регулярно сдаем необходимые экзамены и аттестации.</div>
                    </div>
                </div>
                <div class="home-benefits">
                    <div class="home-benefits__item">
                        <div class="home-benefits__num"><span data-from="0" data-to="50" data-dp="0">0</span>+</div>
                        <div class="home-benefits__name">мобильных приложений разработано</div>
                    </div>
                    <div class="home-benefits__item">
                        <div class="home-benefits__num"><span data-from="0" data-to="10" data-dp="0">0</span>+</div>
                        <div class="home-benefits__name">лет опыта на рынке<br>разработки</div>
                    </div>
                    <div class="home-benefits__item">
                        <div class="home-benefits__num"><span data-from="0" data-to="98" data-dp="0">0</span>%</div>
                        <div class="home-benefits__name">клиентов довольны результатом</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- БЛОК ПРЯМОГО ОТВЕТА -->
<section class="mobile-summary">
    <div class="container">
        <div class="summary-box">
            <p>
                <strong>Разработка приложения для такси в Алматы</strong> — это создание сервиса заказа поездок под ключ: приложение пассажира для вызова машины, приложение водителя для приёма заказов и админ-панель диспетчерской. С геолокацией и картами, расчётом стоимости поездки, подбором ближайшего водителя, онлайн-оплатой и рейтингами. Студия Modern Design Lab разрабатывает мобильные сервисы с 2014 года.
            </p>
            <p>
                Стоимость — <strong>от 1 500 000 ₸</strong> за стартовый комплект пассажир + водитель, <strong>от 3 000 000 ₸</strong> за сервис с оплатой и диспетчерской, <strong>от 6 000 000 ₸</strong> за масштабный агрегатор такси. Срок разработки — <strong>от 45 дней</strong> (1,5–6 месяцев в зависимости от функционала).
            </p>
            <div class="summary-facts">
                <div class="summary-fact">
                    <div class="summary-fact__value">от 1 500 000 ₸</div>
                    <div class="summary-fact__label">стартовая стоимость</div>
                </div>
                <div class="summary-fact">
                    <div class="summary-fact__value">1,5–6 мес.</div>
                    <div class="summary-fact__label">срок разработки</div>
                </div>
                <div class="summary-fact">
                    <div class="summary-fact__value">Пассажир + водитель</div>
                    <div class="summary-fact__label">два приложения</div>
                </div>
                <div class="summary-fact">
                    <div class="summary-fact__value">Карты + онлайн-оплата</div>
                    <div class="summary-fact__label">под ключ</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ТИПЫ ПРИЛОЖЕНИЙ -->
<section class="mobile-types">
    <div class="container">
        <div class="section-header">
            <h2>Какие сервисы такси мы разрабатываем</h2>
            <p>Выберите формат под вашу бизнес-модель перевозок</p>
        </div>

        <div class="types-grid">
            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-taxi"></i>
                </div>
                <h3>Городское такси</h3>
                <p>Классический сервис заказа поездок по городу: вызов машины, расчёт стоимости по тарифу и оплата в приложении. Быстрый подбор ближайшего водителя.</p>
                <div class="type-card__price">от 1 500 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-road"></i>
                </div>
                <h3>Межгород и трансфер</h3>
                <p>Приложение для дальних поездок и трансферов в аэропорт. Предварительный заказ, фиксированная стоимость маршрута и выбор класса автомобиля.</p>
                <div class="type-card__price">от 1 800 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-briefcase"></i>
                </div>
                <h3>Корпоративное такси</h3>
                <p>Сервис поездок для сотрудников компаний с безналичным расчётом, лимитами и отчётами. Единый счёт и выгрузка поездок для бухгалтерии.</p>
                <div class="type-card__price">от 2 500 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-truck-fast"></i>
                </div>
                <h3>Грузоперевозки и доставка</h3>
                <p>Приложение для заказа грузового транспорта и курьеров. Выбор типа кузова, грузчиков, расчёт по расстоянию и отслеживание груза на карте.</p>
                <div class="type-card__price">от 2 200 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-car-side"></i>
                </div>
                <h3>Каршеринг</h3>
                <p>Поминутная аренда автомобилей с открытием машины по смартфону, картой свободных авто и тарификацией по времени использования.</p>
                <div class="type-card__price">от 4 000 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-network-wired"></i>
                </div>
                <h3>Агрегатор такси</h3>
                <p>Масштабная платформа с несколькими тарифами, парками и высокой нагрузкой. Диспетчерская, аналитика и балансировка заказов между водителями.</p>
                <div class="type-card__price">от 6 000 000 <span>₸</span></div>
            </div>
        </div>
    </div>
</section>

<!-- ПРЕИМУЩЕСТВА -->
<section class="mobile-advantages">
    <div class="container">
        <div class="section-header">
            <h2>Почему выбирают нас</h2>
            <p>Создаём сервисы такси, которые работают стабильно под нагрузкой</p>
        </div>

        <div class="advantages-grid">
            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <h3>Точная геолокация</h3>
                <p>Определяем адрес подачи по GPS, строим маршруты и показываем машину на карте в реальном времени. Работаем с Google Maps и 2GIS.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-calculator"></i>
                </div>
                <h3>Гибкая тарификация</h3>
                <p>Настраиваем базовую подачу, цену за километр и минуту, коэффициент в час пик. Стоимость поездки рассчитывается автоматически.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-credit-card"></i>
                </div>
                <h3>Онлайн-оплата</h3>
                <p>Подключаем Kaspi, банковские карты и эквайринг. Безналичный расчёт прямо в приложении и оплата наличными на выбор пассажира.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-gauge-high"></i>
                </div>
                <h3>Устойчивость к нагрузке</h3>
                <p>Проектируем сервер, который выдерживает тысячи одновременных заказов. Быстрый подбор ближайшего водителя без задержек.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-star"></i>
                </div>
                <h3>Рейтинги и доверие</h3>
                <p>Система рейтингов водителей и пассажиров, отзывы после поездок и история заказов. Повышаем качество и безопасность сервиса.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-headset"></i>
                </div>
                <h3>Поддержка и развитие</h3>
                <p>Техническая поддержка после запуска, обновления, добавление тарифов и функций по мере роста числа заказов и водителей.</p>
            </div>
        </div>
    </div>
</section>

<!-- ЧТО ВХОДИТ -->
<section class="mobile-includes">
    <div class="container">
        <div class="section-header">
            <h2>Что входит в разработку сервиса такси</h2>
            <p>Полный цикл создания приложения для заказа поездок под ключ</p>
        </div>

        <div class="includes-grid">
            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-mobile-screen"></i>
                </div>
                <div>
                    <h4>Приложение пассажира</h4>
                    <p>Вызов машины, выбор адреса на карте, тариф, оплата, отслеживание автомобиля и история поездок.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-user-tie"></i>
                </div>
                <div>
                    <h4>Приложение водителя</h4>
                    <p>Приём и распределение заказов, навигация к пассажиру, статус смены, заработок и рейтинг.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-map-location-dot"></i>
                </div>
                <div>
                    <h4>Карты и геолокация</h4>
                    <p>Интеграция Google Maps, 2GIS или Mapbox. Построение маршрута, отслеживание в реальном времени.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-route"></i>
                </div>
                <div>
                    <h4>Подбор водителя</h4>
                    <p>Алгоритм поиска ближайшего свободного водителя и назначения заказа с учётом рейтинга и загрузки.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-money-bill-transfer"></i>
                </div>
                <div>
                    <h4>Оплата и тарификация</h4>
                    <p>Расчёт стоимости поездки, онлайн-оплата, эквайринг и безналичный расчёт с водителем.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-sliders"></i>
                </div>
                <div>
                    <h4>Админ-панель диспетчерской</h4>
                    <p>Управление заказами, водителями, тарифами и парками. Мониторинг поездок в реальном времени.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-bell"></i>
                </div>
                <div>
                    <h4>Push-уведомления</h4>
                    <p>Оповещения о статусе заказа, приезде машины, новых поездках для водителя и акциях.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-store"></i>
                </div>
                <div>
                    <h4>Публикация и поддержка</h4>
                    <p>Размещение в App Store и Google Play, настройка аналитики и гарантийная поддержка сервиса.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ЭТАПЫ РАБОТЫ -->
<section class="mobile-steps">
    <div class="container">
        <div class="section-header">
            <h2>Этапы разработки</h2>
            <p>Прозрачный процесс — вы всегда в курсе статуса проекта</p>
        </div>

        <div class="steps-timeline">
            <div class="step-item">
                <div class="step-item__number">1</div>
                <div class="step-item__content">
                    <h4>Бриф и проектирование сервиса</h4>
                    <p>Изучаем бизнес-модель, тарифы и город работы. Определяем функционал приложений пассажира и водителя, логику подбора машин и оплаты. Составляем ТЗ и смету.</p>
                    <span class="step-item__time">5-7 дней</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">2</div>
                <div class="step-item__content">
                    <h4>Прототип и дизайн двух приложений</h4>
                    <p>Создаём прототипы экранов пассажира, водителя и диспетчерской. Разрабатываем UI-дизайн карты, заказа, оплаты и профилей. Согласовываем и вносим правки.</p>
                    <span class="step-item__time">3-4 недели</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">3</div>
                <div class="step-item__content">
                    <h4>Разработка и интеграция карт</h4>
                    <p>Программируем клиентские приложения, сервер и админ-панель. Подключаем карты, геолокацию, расчёт стоимости и платёжные системы. Показываем прогресс еженедельно.</p>
                    <span class="step-item__time">1,5-4 месяца</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">4</div>
                <div class="step-item__content">
                    <h4>Тестирование поездок</h4>
                    <p>Проверяем сценарии заказа, подбора водителя, оплаты и рейтингов. Тестируем на реальных маршрутах и устройствах. Исправляем ошибки и оптимизируем нагрузку.</p>
                    <span class="step-item__time">2-3 недели</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">5</div>
                <div class="step-item__content">
                    <h4>Запуск и поддержка</h4>
                    <p>Публикуем приложения в App Store и Google Play. Запускаем диспетчерскую, настраиваем аналитику и push-уведомления. Обучаем команду и передаём документацию.</p>
                    <span class="step-item__time">1-2 недели</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ТАРИФЫ -->
<section class="mobile-pricing" id="pricing">
    <div class="container">
        <div class="section-header">
            <h2>Стоимость разработки</h2>
            <p>Выберите подходящий пакет или закажите индивидуальный расчёт</p>
        </div>
        <div class="pricing-grid">
            <div class="pricing-card">
                <h3>Старт</h3>
                <div class="pricing-card__price">от 1 500 000 <span>₸</span></div>
                <p class="pricing-card__desc">Базовый сервис заказа поездок</p>
                <ul class="pricing-card__features">
                    <li><i class="fa-solid fa-check"></i> Приложение пассажира и водителя</li>
                    <li><i class="fa-solid fa-check"></i> iOS + Android</li>
                    <li><i class="fa-solid fa-check"></i> Геолокация и карты</li>
                    <li><i class="fa-solid fa-check"></i> Заказ и подбор водителя</li>
                    <li><i class="fa-solid fa-check"></i> Расчёт стоимости по тарифу</li>
                    <li><i class="fa-solid fa-check"></i> Оплата наличными</li>
                    <li><i class="fa-solid fa-check"></i> 1 месяц поддержки</li>
                </ul>
                <a href="https://wa.me/77774333822?text=Здравствуйте!%20Интересует%20пакет%20Старт%20(от%201%20500%20000%20₸)%20для%20приложения%20такси" target="_blank" class="btn-primary-mobile btn-whatsapp">
                    <i class="fa-brands fa-whatsapp"></i> Написать в WhatsApp
                </a>
            </div>
            <div class="pricing-card featured">
                <h3>Бизнес</h3>
                <div class="pricing-card__price">от 3 000 000 <span>₸</span></div>
                <p class="pricing-card__desc">Полноценный сервис с диспетчерской</p>
                <ul class="pricing-card__features">
                    <li><i class="fa-solid fa-check"></i> Всё из пакета «Старт»</li>
                    <li><i class="fa-solid fa-check"></i> Онлайн-оплата и эквайринг</li>
                    <li><i class="fa-solid fa-check"></i> Рейтинги водителей и пассажиров</li>
                    <li><i class="fa-solid fa-check"></i> История поездок</li>
                    <li><i class="fa-solid fa-check"></i> Push-уведомления</li>
                    <li><i class="fa-solid fa-check"></i> Админ-панель диспетчерской</li>
                    <li><i class="fa-solid fa-check"></i> 3 месяца поддержки</li>
                </ul>
                <a href="https://wa.me/77774333822?text=Здравствуйте!%20Интересует%20пакет%20Бизнес%20(от%203%20000%20000%20₸)%20для%20приложения%20такси" target="_blank" class="btn-primary-mobile btn-whatsapp">
                    <i class="fa-brands fa-whatsapp"></i> Написать в WhatsApp
                </a>
            </div>
            <div class="pricing-card">
                <h3>Премиум</h3>
                <div class="pricing-card__price">от 6 000 000 <span>₸</span></div>
                <p class="pricing-card__desc">Агрегатор такси под нагрузкой</p>
                <ul class="pricing-card__features">
                    <li><i class="fa-solid fa-check"></i> Всё из пакета «Бизнес»</li>
                    <li><i class="fa-solid fa-check"></i> Несколько тарифов и классов авто</li>
                    <li><i class="fa-solid fa-check"></i> Работа с парками и диспетчерами</li>
                    <li><i class="fa-solid fa-check"></i> Аналитика и отчёты</li>
                    <li><i class="fa-solid fa-check"></i> Высоконагруженный сервер</li>
                    <li><i class="fa-solid fa-check"></i> Программы лояльности и промокоды</li>
                    <li><i class="fa-solid fa-check"></i> 6 месяцев поддержки</li>
                </ul>
                <a href="https://wa.me/77774333822?text=Здравствуйте!%20Интересует%20пакет%20Премиум%20(от%206%20000%20000%20₸)%20для%20приложения%20такси" target="_blank" class="btn-primary-mobile btn-whatsapp">
                    <i class="fa-brands fa-whatsapp"></i> Написать в WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ТЕХНОЛОГИИ -->
<section class="mobile-tech">
    <div class="container">
        <div class="section-header">
            <h2>Технологии</h2>
            <p>Используем современный стек для надёжных решений</p>
        </div>

        <div class="tech-grid">
            <div class="tech-item">
                <div class="tech-item__logo">
                    <svg viewBox="0 0 24 24" fill="#F05138" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Swift"><path d="M7.508 0c-.287 0-.573 0-.86.002-.241.002-.483.003-.724.01-.132.003-.263.009-.395.015A9.154 9.154 0 0 0 4.348.15 5.492 5.492 0 0 0 2.85.645 5.04 5.04 0 0 0 .645 2.848c-.245.48-.4.972-.495 1.5-.093.52-.122 1.05-.136 1.576a35.2 35.2 0 0 0-.012.724C0 6.935 0 7.221 0 7.508v8.984c0 .287 0 .575.002.862.002.24.005.481.012.722.014.526.043 1.057.136 1.576.095.528.25 1.02.495 1.5a5.03 5.03 0 0 0 2.205 2.203c.48.244.97.4 1.498.495.52.093 1.05.124 1.576.138.241.007.483.009.724.01.287.002.573.002.86.002h8.984c.287 0 .573 0 .86-.002.241-.001.483-.003.724-.01a10.523 10.523 0 0 0 1.578-.138 5.322 5.322 0 0 0 1.498-.495 5.035 5.035 0 0 0 2.203-2.203c.245-.48.4-.972.495-1.5.093-.52.124-1.05.138-1.576.007-.241.009-.481.01-.722.002-.287.002-.575.002-.862V7.508c0-.287 0-.573-.002-.86a33.662 33.662 0 0 0-.01-.724 10.5 10.5 0 0 0-.138-1.576 5.328 5.328 0 0 0-.495-1.5A5.039 5.039 0 0 0 21.152.645 5.32 5.32 0 0 0 19.654.15a10.493 10.493 0 0 0-1.578-.138 34.98 34.98 0 0 0-.722-.01C17.067 0 16.779 0 16.492 0H7.508zm6.035 3.41c4.114 2.47 6.545 7.162 5.549 11.131-.024.093-.05.181-.076.272l.002.001c2.062 2.538 1.5 5.258 1.236 4.745-1.072-2.086-3.066-1.568-4.088-1.043a6.803 6.803 0 0 1-.281.158l-.02.012-.002.002c-2.115 1.123-4.957 1.205-7.812-.022a12.568 12.568 0 0 1-5.64-4.838c.649.48 1.35.902 2.097 1.252 3.019 1.414 6.051 1.311 8.197-.002C9.651 12.73 7.101 9.67 5.146 7.191a10.628 10.628 0 0 1-1.005-1.384c2.34 2.142 6.038 4.83 7.365 5.576C8.69 8.408 6.208 4.743 6.324 4.86c4.436 4.47 8.528 6.996 8.528 6.996.154.085.27.154.36.213.085-.215.16-.437.224-.668.708-2.588-.09-5.548-1.893-7.992z"/></svg>
                </div>
                <span>Swift</span>
            </div>
            <div class="tech-item">
                <div class="tech-item__logo">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Kotlin"><defs><linearGradient id="kotlinGrad" x1="0" y1="24" x2="24" y2="0" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#0095D5"/><stop offset="0.3" stop-color="#238AD9"/><stop offset="0.62" stop-color="#557BDE"/><stop offset="0.86" stop-color="#7472E2"/><stop offset="1" stop-color="#7C68E7"/></linearGradient></defs><path fill="url(#kotlinGrad)" d="M24 24H0V0h24L12 12Z"/></svg>
                </div>
                <span>Kotlin</span>
            </div>
            <div class="tech-item">
                <div class="tech-item__logo">
                    <svg viewBox="0 0 24 24" fill="#61DAFB" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="React Native"><path d="M14.23 12.004a2.236 2.236 0 0 1-2.235 2.236 2.236 2.236 0 0 1-2.236-2.236 2.236 2.236 0 0 1 2.235-2.236 2.236 2.236 0 0 1 2.236 2.236zm2.648-10.69c-1.346 0-3.107.96-4.888 2.622-1.78-1.653-3.542-2.602-4.887-2.602-.41 0-.783.093-1.106.278-1.375.793-1.683 3.264-.973 6.365C1.98 8.917 0 10.42 0 12.004c0 1.59 1.99 3.097 5.043 4.03-.704 3.113-.39 5.588.988 6.38.32.187.69.275 1.102.275 1.345 0 3.107-.96 4.888-2.624 1.78 1.654 3.542 2.603 4.887 2.603.41 0 .783-.09 1.106-.275 1.374-.792 1.683-3.263.973-6.365C22.02 15.096 24 13.59 24 12.004c0-1.59-1.99-3.097-5.043-4.032.704-3.11.39-5.587-.988-6.38-.318-.184-.688-.277-1.092-.278zm-.005 1.09v.006c.225 0 .406.044.558.127.666.382.955 1.835.73 3.704-.054.46-.142.945-.25 1.44-.96-.236-2.006-.417-3.107-.534-.66-.905-1.345-1.727-2.035-2.447 1.592-1.48 3.087-2.292 4.105-2.295zm-9.77.02c1.012 0 2.514.808 4.11 2.28-.686.72-1.37 1.537-2.02 2.442-1.107.117-2.154.298-3.113.538-.112-.49-.195-.964-.254-1.42-.23-1.868.054-3.32.714-3.707.19-.09.4-.127.563-.132zm4.882 3.05c.455.468.91.992 1.36 1.564-.44-.02-.89-.034-1.345-.034-.46 0-.915.01-1.36.034.44-.572.895-1.096 1.345-1.565zM12 8.1c.74 0 1.477.034 2.202.093.406.582.802 1.203 1.183 1.86.372.64.71 1.29 1.018 1.946-.308.655-.646 1.31-1.013 1.95-.38.66-.773 1.288-1.18 1.87-.728.063-1.466.098-2.21.098-.74 0-1.477-.035-2.202-.093-.406-.582-.802-1.204-1.183-1.86-.372-.64-.71-1.29-1.018-1.946.303-.657.646-1.313 1.013-1.954.38-.66.773-1.286 1.18-1.868.728-.064 1.466-.098 2.21-.098zm-3.635.254c-.24.377-.48.763-.704 1.16-.225.39-.435.782-.635 1.174-.265-.656-.49-1.31-.676-1.947.64-.15 1.315-.283 2.015-.386zm7.26 0c.695.103 1.365.23 2.006.387-.18.632-.405 1.282-.66 1.933-.2-.39-.41-.783-.64-1.174-.225-.392-.465-.774-.705-1.146zm3.063.675c.484.15.944.317 1.375.498 1.732.74 2.852 1.708 2.852 2.476-.005.768-1.125 1.74-2.857 2.475-.42.18-.88.342-1.355.493-.28-.958-.646-1.956-1.1-2.98.45-1.017.81-2.01 1.085-2.964zm-13.395.004c.278.96.645 1.957 1.1 2.98-.45 1.017-.812 2.01-1.086 2.964-.484-.15-.944-.318-1.37-.5-1.732-.737-2.852-1.706-2.852-2.474 0-.768 1.12-1.742 2.852-2.476.42-.18.88-.342 1.356-.494zm11.678 4.28c.265.657.49 1.312.676 1.948-.64.157-1.316.29-2.016.39.24-.375.48-.762.705-1.158.225-.39.435-.788.636-1.18zm-9.945.02c.2.392.41.783.64 1.175.23.39.465.772.705 1.143-.695-.102-1.365-.23-2.006-.386.18-.63.406-1.282.66-1.933zM17.92 16.32c.112.493.2.968.254 1.423.23 1.868-.054 3.32-.714 3.708-.147.09-.338.128-.563.128-1.012 0-2.514-.807-4.11-2.28.686-.72 1.37-1.536 2.02-2.44 1.107-.118 2.154-.3 3.113-.54zm-11.83.01c.96.234 2.006.415 3.107.532.66.905 1.345 1.727 2.035 2.446-1.595 1.483-3.092 2.295-4.11 2.295-.22-.005-.406-.05-.553-.132-.666-.38-.955-1.834-.73-3.703.054-.46.142-.944.25-1.438zm4.56.64c.44.02.89.034 1.345.034.46 0 .915-.01 1.36-.034-.44.572-.895 1.095-1.345 1.565-.455-.47-.91-.993-1.36-1.565z"/></svg>
                </div>
                <span>React Native</span>
            </div>
            <div class="tech-item">
                <div class="tech-item__logo">
                    <svg viewBox="0 0 24 24" fill="#02569B" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Flutter"><path d="M14.314 0L2.3 12 6 15.7 21.684.013h-7.357zm.014 11.072L7.857 17.53l6.47 6.47H21.7l-6.46-6.468 6.46-6.46h-7.37z"/></svg>
                </div>
                <span>Flutter</span>
            </div>
            <div class="tech-item">
                <div class="tech-item__logo">
                    <svg viewBox="0 0 24 24" fill="#4285F4" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Google Maps"><path d="M12 0C7.802 0 4.398 3.403 4.398 7.602 4.398 11.8 12 24 12 24s7.602-12.2 7.602-16.398C19.602 3.403 16.199 0 12 0zm0 11.5a3.9 3.9 0 1 1 0-7.8 3.9 3.9 0 0 1 0 7.8z"/></svg>
                </div>
                <span>Google Maps</span>
            </div>
            <div class="tech-item">
                <div class="tech-item__logo">
                    <svg viewBox="0 0 24 24" fill="#339933" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Node.js"><path d="M11.998,24c-0.321,0-0.641-0.084-0.922-0.247l-2.936-1.737c-0.438-0.245-0.224-0.332-0.08-0.383 c0.585-0.203,0.703-0.25,1.328-0.604c0.065-0.037,0.151-0.023,0.218,0.017l2.256,1.339c0.082,0.045,0.197,0.045,0.272,0l8.795-5.076 c0.082-0.047,0.134-0.141,0.134-0.238V6.921c0-0.099-0.053-0.192-0.137-0.242l-8.791-5.072c-0.081-0.047-0.189-0.047-0.271,0 L3.075,6.68C2.99,6.729,2.936,6.825,2.936,6.921v10.15c0,0.097,0.054,0.189,0.139,0.235l2.409,1.392 c1.307,0.654,2.108-0.116,2.108-0.89V7.787c0-0.142,0.114-0.253,0.256-0.253h1.115c0.139,0,0.255,0.112,0.255,0.253v10.021 c0,1.745-0.95,2.745-2.604,2.745c-0.508,0-0.909,0-2.026-0.551L2.28,18.675c-0.57-0.329-0.922-0.945-0.922-1.604V6.921 c0-0.659,0.353-1.275,0.922-1.603l8.795-5.082c0.557-0.315,1.296-0.315,1.848,0l8.794,5.082c0.57,0.329,0.924,0.944,0.924,1.603 v10.15c0,0.659-0.354,1.273-0.924,1.604l-8.794,5.078C12.643,23.916,12.324,24,11.998,24z M19.099,13.993 c0-1.9-1.284-2.406-3.987-2.763c-2.731-0.361-3.009-0.548-3.009-1.187c0-0.528,0.235-1.233,2.258-1.233 c1.807,0,2.473,0.389,2.747,1.607c0.024,0.115,0.129,0.199,0.247,0.199h1.141c0.071,0,0.138-0.031,0.186-0.081 c0.048-0.054,0.074-0.123,0.067-0.196c-0.177-2.098-1.571-3.076-4.388-3.076c-2.508,0-4.004,1.058-4.004,2.833 c0,1.925,1.488,2.457,3.895,2.695c2.88,0.282,3.103,0.703,3.103,1.269c0,0.983-0.789,1.402-2.642,1.402 c-2.327,0-2.839-0.584-3.011-1.742c-0.02-0.124-0.126-0.215-0.253-0.215h-1.137c-0.141,0-0.254,0.112-0.254,0.253 c0,1.482,0.806,3.248,4.655,3.248C17.501,17.007,19.099,15.91,19.099,13.993z"/></svg>
                </div>
                <span>Node.js</span>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="mobile-faq">
    <div class="container">
        <div class="section-header">
            <h2>Частые вопросы</h2>
            <p>Ответы на популярные вопросы о разработке приложений для такси</p>
        </div>

        <div class="faq-list">
            <div class="faq-item active">
                <div class="faq-item__question">
                    <h4>Сколько стоит разработка приложения для такси?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Стоимость зависит от набора функций и начинается от 1 500 000 тенге за стартовый комплект (приложение пассажира и водителя с базовой геолокацией и заказом поездки). Полноценный сервис с онлайн-оплатой, рейтингами и админ-панелью диспетчерской — от 3 000 000 тенге. Масштабный агрегатор с несколькими тарифами, аналитикой и высокой нагрузкой — от 6 000 000 тенге. Точную смету подготовим после обсуждения вашей задачи.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Из чего состоит приложение для такси?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Полноценный сервис заказа поездок включает три части: приложение пассажира для вызова машины и оплаты, приложение водителя для приёма заказов и навигации, а также веб-панель диспетчерской для управления заказами, водителями и тарифами. Все компоненты работают через единый сервер с картами, расчётом стоимости и подбором ближайшего водителя.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Какие карты и геолокация используются?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Мы интегрируем Google Maps, 2GIS или Mapbox — выбираем оптимальный вариант под ваш регион и бюджет. Реализуем построение маршрута, отслеживание автомобиля в реальном времени, определение адреса подачи по GPS и расчёт расстояния для тарификации. Карты покрывают Алматы, Астану и другие города Казахстана.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Как работает онлайн-оплата и расчёт стоимости поездки?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Стоимость рассчитывается автоматически по тарифу: базовая подача, цена за километр и минуту, повышающий коэффициент в час пик. Подключаем платёжные системы (Kaspi, банковские карты, эквайринг) для безналичной оплаты прямо в приложении. Поддерживаем и оплату наличными водителю — пассажир выбирает удобный способ при заказе.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Что входит в поддержку после запуска сервиса?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Гарантийная поддержка включает: исправление ошибок, обновление под новые версии iOS и Android, мониторинг работы сервера и карт, консультации по работе диспетчерской. По отдельному договору добавляем новые тарифы и функции, масштабируем систему под рост числа заказов, настраиваем маркетинг и продвижение.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="mobile-cta">
    <div class="container">
        <h2>Готовы запустить своё такси?</h2>
        <p>Оставьте заявку и получите бесплатную консультацию и расчёт стоимости сервиса заказа поездок за 24 часа</p>
        <div class="mobile-cta__buttons">
            <a href="https://t.me/Mdlabkz" target="_blank" class="btn btn_accent btn_telegram">
				<i class="fa-brands fa-telegram"></i>Написать в Telegram
			</a>
            <a href="https://wa.me/77774333822" target="_blank" class="btn-primary-mobile btn-whatsapp">
                <i class="fa-brands fa-whatsapp"></i> WhatsApp
            </a>
        </div>
    </div>
</section>

<!-- SEO КОНТЕНТ -->
<section class="seo-content">
    <div class="container">
        <h2>Разработка приложения для такси в Алматы</h2>
        <p>
            Компания Modern Design Lab создаёт приложения для такси и сервисы заказа поездок под ключ в Алматы.
            Мы разрабатываем сразу два приложения — для пассажира и для водителя — вместе с админ-панелью диспетчерской,
            картами, тарификацией и онлайн-оплатой. Это часть нашего направления
            <a href="https://mdlab.kz/razrabotka-mobilnyh-prilozheniy">разработки мобильных приложений</a>: по той же технологии мы делаем
            <a href="https://mdlab.kz/razrabotka-prilozheniya-dlya-dostavki">приложения для доставки</a> и
            <a href="https://mdlab.kz/razrabotka-prilozheniya-dlya-biznesa">приложения для бизнеса</a>.
        </p>

        <h3>Как устроен сервис заказа поездок</h3>
        <p>
            Современное такси — это цифровая платформа из трёх связанных частей. Пассажир вызывает машину и оплачивает поездку
            в своём приложении, водитель принимает заказ и едет по маршруту в приложении водителя, а диспетчерская управляет
            всем процессом через веб-панель. Ключевые функции сервиса:
        </p>
        <ul>
            <li>Геолокация и карты с отслеживанием автомобиля в реальном времени</li>
            <li>Автоматический расчёт стоимости поездки и гибкая тарификация</li>
            <li>Подбор ближайшего свободного водителя за секунды</li>
            <li>Онлайн-оплата, эквайринг и безналичный расчёт</li>
            <li>Рейтинги водителей и пассажиров, история поездок и push-уведомления</li>
        </ul>

        <h3>Наш подход к разработке такси-сервиса</h3>
        <p>
            Мы работаем по методологии Agile с еженедельными демонстрациями результатов. Вы всегда видите прогресс и можете
            корректировать функционал на любом этапе. Для клиентских приложений используем Swift, Kotlin, React Native и Flutter,
            для сервера — Node.js, а карты подключаем через Google Maps, 2GIS или Mapbox в зависимости от региона.
        </p>
        <p>
            Особое внимание уделяем производительности и устойчивости под нагрузкой: сервис такси должен обрабатывать сотни и
            тысячи одновременных заказов без задержек. Мы проектируем архитектуру заранее, чтобы платформа легко масштабировалась
            вместе с ростом вашего автопарка и числа пассажиров.
        </p>

        <h3>Стоимость разработки приложения для такси в Казахстане</h3>
        <p>
            Цена зависит от набора функций, количества тарифов, интеграций и ожидаемой нагрузки. Стартовый комплект из приложений
            пассажира и водителя с базовой геолокацией стоит от 1 500 000 тенге. Полноценный сервис с онлайн-оплатой, рейтингами и
            диспетчерской — от 3 000 000 тенге. Масштабный агрегатор такси с несколькими тарифами и высокой нагрузкой — от 6 000 000 тенге.
        </p>
        <p>
            Мы предлагаем прозрачное ценообразование с фиксированной стоимостью в договоре. Возможна поэтапная оплата:
            50% предоплата, 50% после сдачи проекта.
        </p>

        <h3>Как заказать разработку приложения для такси</h3>
        <p>
            Заказать создание приложения для такси в Modern Design Lab просто: оставьте заявку по телефону, в WhatsApp или Telegram —
            и мы бесплатно проконсультируем и рассчитаем стоимость за 24 часа. Сделать сервис заказа поездок можно под ключ:
            мы берём на себя весь процесс — от бизнес-модели и технического задания до публикации приложений в App Store и Google Play,
            запуска диспетчерской и последующей поддержки. Разработку ведём по методологии Agile, поэтому вы видите результат на
            каждом этапе и можете вносить правки.
        </p>
        <p class="seo-content__source">
            Источник статистики: Sensor Tower (ранее data.ai / App Annie),
            <a href="https://sensortower.com/state-of-mobile-2025" target="_blank" rel="nofollow noopener">отчёт «State of Mobile»</a>.
            Материал обновлён 14 июля 2026 года.
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

        // Закрыть все
        document.querySelectorAll('.faq-item').forEach(faq => {
            faq.classList.remove('active');
        });

        // Открыть текущий (если не был активен)
        if (!wasActive) {
            parent.classList.add('active');
        }
    });
});
</script>
@endpush
