@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="/assets/css/mobile-landing.css?v=1.0">
@endpush

@push('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "Разработка приложений для Android в Алматы",
    "description": "Нативная разработка Android-приложений на Kotlin и Jetpack Compose под ключ: Material Design, публикация в Google Play, интеграция Google Pay и push через FCM. Срок от 30 дней.",
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
    "serviceType": "Разработка приложений для Android",
    "url": "https://mdlab.kz/razrabotka-prilozheniya-dlya-android",
    "offers": {
        "@@type": "AggregateOffer",
        "lowPrice": "900000",
        "highPrice": "3500000",
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
            "name": "Сколько стоит разработка приложения для Android?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Стоимость зависит от сложности проекта и начинается от 900 000 тенге за простое Android-приложение на Kotlin с базовым функционалом. Приложение среднего уровня с админ-панелью, онлайн-оплатой и интеграциями — от 1 800 000 тенге. Сложные проекты с машинным обучением, картами и микросервисами — от 3 500 000 тенге. Точную смету составим после обсуждения задачи."
            }
        },
        {
            "@@type": "Question",
            "name": "Почему вы разрабатываете на Kotlin и Jetpack Compose?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Kotlin — официальный язык Google для Android, он делает код короче, безопаснее и надёжнее, чем Java. Jetpack Compose — современный декларативный UI-фреймворк, который ускоряет разработку интерфейсов и упрощает поддержку. Этот стек обеспечивает высокую производительность, плавные анимации и лёгкое масштабирование приложения в будущем."
            }
        },
        {
            "@@type": "Question",
            "name": "Как вы адаптируете приложение под разные устройства Android?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Экосистема Android — это тысячи моделей смартфонов и планшетов с разными диагоналями экранов, плотностью пикселей и версиями ОС. Мы проектируем адаптивные интерфейсы по гайдлайнам Material Design, поддерживаем актуальные версии Android и тестируем сборку на реальных устройствах и эмуляторах, чтобы приложение одинаково корректно работало у всех пользователей."
            }
        },
        {
            "@@type": "Question",
            "name": "Вы публикуете приложение в Google Play?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Да, публикацию в Google Play берём на себя полностью. Регистрируем аккаунт разработчика при необходимости, готовим иконку, скриншоты, описание и графические материалы, настраиваем подпись приложения и App Bundle. Помогаем пройти проверку Google с первого раза и соблюсти все требования площадки."
            }
        },
        {
            "@@type": "Question",
            "name": "Можно ли интегрировать оплату и push-уведомления?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Да. Мы подключаем Google Pay и локальные платёжные шлюзы Казахстана для оплаты внутри приложения, а также настраиваем push-уведомления через Firebase Cloud Messaging (FCM). Дополнительно интегрируем аналитику, карты, авторизацию через Google-аккаунт и API ваших внутренних систем — CRM, 1С, ERP."
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
            "name": "Разработка приложений для Android",
            "item": "https://mdlab.kz/razrabotka-prilozheniya-dlya-android"
        }
    ]
}
</script>

<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "HowTo",
    "name": "Этапы разработки приложения для Android",
    "description": "Полный цикл создания нативного Android-приложения на Kotlin под ключ в студии Modern Design Lab.",
    "totalTime": "P30D",
    "step": [
        {
            "@@type": "HowToStep",
            "position": 1,
            "name": "Анализ и техническое задание",
            "text": "Изучаем бизнес-задачу, целевую аудиторию и конкурентов в Google Play. Определяем функционал, целевые версии Android и стек. Фиксируем требования в ТЗ и смете."
        },
        {
            "@@type": "HowToStep",
            "position": 2,
            "name": "Прототип и Material Design",
            "text": "Проектируем структуру экранов, собираем интерактивный прототип и рисуем UI по гайдлайнам Material Design. Учитываем адаптацию под смартфоны и планшеты."
        },
        {
            "@@type": "HowToStep",
            "position": 3,
            "name": "Разработка на Kotlin и Jetpack Compose",
            "text": "Программируем клиентскую часть на Kotlin с Jetpack Compose и серверную логику. Подключаем FCM, Google Pay и нужные API. Показываем прогресс по спринтам."
        },
        {
            "@@type": "HowToStep",
            "position": 4,
            "name": "Тестирование на устройствах",
            "text": "Проверяем функционал, производительность и безопасность. Тестируем на реальных смартфонах, планшетах и разных версиях Android, исправляем ошибки."
        },
        {
            "@@type": "HowToStep",
            "position": 5,
            "name": "Публикация в Google Play и поддержка",
            "text": "Собираем App Bundle, публикуем приложение в Google Play, настраиваем аналитику и push-уведомления. Передаём документацию и сопровождаем проект."
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
            <li><span class="breadcrumbs__sep">/</span> <span aria-current="page">Разработка приложений для Android</span></li>
        </ol>
    </div>
</nav>

<!-- HERO СЕКЦИЯ -->
<section class="home-hero">
    <div class="container">
        <div class="home-hero__wrapper">
            <div class="home-hero__content">
                <div class="home-hero__top">
                    <h1 class="home-hero__title">Разработка приложений для Android в&nbsp;Алматы</h1>
                    <p class="home-hero__subtitle">Нативно на&nbsp;Kotlin и&nbsp;Jetpack Compose + публикация в&nbsp;Google Play</p>
                </div>
                <div class="home-hero__bottom">
                    <div class="home-hero__contact">
                        <a href="tel:+77774333822" class="btn btn_accent">Позвонить</a>
                        <a href="https://wa.me/77774333822" class="btn btn_accent btn_whatsapp1">
                            <i class="fa-brands fa-whatsapp"></i>Написать в WhatsApp
                        </a>
                    </div>
                    <p class="home-hero__description">Оставьте заявку сегодня — получите бесплатную консультацию и&nbsp;расчёт стоимости Android-приложения для вашего бизнеса!</p>
                </div>
            </div>

            <div class="home-hero__img" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="1000" data-aos-delay="200">
                <!-- Место для изображения: смартфоны с приложениями -->
                <img src="/assets/img/mobile-app-hero.png" alt="Разработка приложений для Android на Kotlin в Алматы">
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
                        <div class="home-benefits__num"><span data-from="0" data-to="80" data-dp="0">0</span>%</div>
                        <div class="home-benefits__name">смартфонов в мире работают на Android</div>
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
                <strong>Разработка приложений для Android в Алматы</strong> — это создание нативных приложений на языке Kotlin с современным интерфейсом Jetpack Compose под ключ: от анализа задачи и дизайна по Material Design до публикации в Google Play. Студия Modern Design Lab разрабатывает мобильные приложения с 2014 года и охватывает около 80% рынка смартфонов, работающих на Android.
            </p>
            <p>
                Стоимость — <strong>от 900 000 ₸</strong> за простое приложение, <strong>от 1 800 000 ₸</strong> за проект среднего уровня с интеграциями и админ-панелью, <strong>от 3 500 000 ₸</strong> за сложные решения с ML и микросервисами. Срок разработки — <strong>от 30 дней</strong> (1–6 месяцев в зависимости от сложности).
            </p>
            <div class="summary-facts">
                <div class="summary-fact">
                    <div class="summary-fact__value">от 900 000 ₸</div>
                    <div class="summary-fact__label">стартовая стоимость</div>
                </div>
                <div class="summary-fact">
                    <div class="summary-fact__value">1–6 мес.</div>
                    <div class="summary-fact__label">срок разработки</div>
                </div>
                <div class="summary-fact">
                    <div class="summary-fact__value">Kotlin + Compose</div>
                    <div class="summary-fact__label">нативный стек</div>
                </div>
                <div class="summary-fact">
                    <div class="summary-fact__value">Google Play</div>
                    <div class="summary-fact__label">публикация под ключ</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ТИПЫ ПРИЛОЖЕНИЙ -->
<section class="mobile-types">
    <div class="container">
        <div class="section-header">
            <h2>Какие Android-приложения мы разрабатываем</h2>
            <p>Подберём оптимальное решение под задачи вашего бизнеса</p>
        </div>

        <div class="types-grid">
            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-briefcase"></i>
                </div>
                <h3>Бизнес-приложения</h3>
                <p>Приложения для услуг, записи клиентов, программ лояльности и личного кабинета. Держите бизнес в кармане у клиента.</p>
                <div class="type-card__price">от 900 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <h3>Интернет-магазины</h3>
                <p>Android-магазины с каталогом, корзиной, оплатой через Google Pay и интеграцией с 1С и CRM. Продавайте прямо в приложении.</p>
                <div class="type-card__price">от 1 500 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-tablet-screen-button"></i>
                </div>
                <h3>Приложения для планшетов</h3>
                <p>Адаптивные интерфейсы для планшетов Android: терминалы, каталоги, POS-системы и презентационные решения для бизнеса.</p>
                <div class="type-card__price">от 1 200 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-brain"></i>
                </div>
                <h3>Приложения с ML</h3>
                <p>Умные функции на базе машинного обучения: распознавание изображений, рекомендации, чат-боты и обработка данных на устройстве.</p>
                <div class="type-card__price">от 2 500 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-truck-fast"></i>
                </div>
                <h3>Доставка и сервисы</h3>
                <p>Приложения для доставки, такси и услуг с GPS-трекингом, картами, push-уведомлениями через FCM и онлайн-оплатой.</p>
                <div class="type-card__price">от 1 800 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-building"></i>
                </div>
                <h3>Корпоративные</h3>
                <p>Внутренние Android-приложения для сотрудников: управление задачами, документооборот, складской учёт и HR-инструменты.</p>
                <div class="type-card__price">от 2 000 000 <span>₸</span></div>
            </div>
        </div>
    </div>
</section>

<!-- ПРЕИМУЩЕСТВА -->
<section class="mobile-advantages">
    <div class="container">
        <div class="section-header">
            <h2>Почему заказывают Android-разработку у нас</h2>
            <p>Отвечаем за качество кода и соблюдение сроков</p>
        </div>

        <div class="advantages-grid">
            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-brands fa-android"></i>
                </div>
                <h3>Нативный Kotlin</h3>
                <p>Пишем на официальном языке Google — Kotlin. Это надёжный, лаконичный и безопасный код с максимальной производительностью.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-layer-group"></i>
                </div>
                <h3>Jetpack Compose</h3>
                <p>Строим интерфейсы на современном декларативном фреймворке Compose. Плавные анимации и быстрая доработка экранов.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-palette"></i>
                </div>
                <h3>Material Design</h3>
                <p>Проектируем интерфейс по официальным гайдлайнам Google. Приложение выглядит привычно и удобно для Android-пользователей.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-mobile-screen"></i>
                </div>
                <h3>Адаптация под устройства</h3>
                <p>Учитываем огромное разнообразие моделей, экранов и версий Android. Тестируем на реальных устройствах и эмуляторах.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-bell"></i>
                </div>
                <h3>Push и оплата</h3>
                <p>Подключаем push-уведомления через FCM и оплату Google Pay. Удерживаем пользователей и монетизируем приложение.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-brands fa-google-play"></i>
                </div>
                <h3>Публикация в Google Play</h3>
                <p>Готовим материалы, собираем App Bundle и проходим модерацию Google. Выводим приложение в магазин под ключ.</p>
            </div>
        </div>
    </div>
</section>

<!-- ЧТО ВХОДИТ -->
<section class="mobile-includes">
    <div class="container">
        <div class="section-header">
            <h2>Что входит в разработку под Android</h2>
            <p>Полный цикл создания нативного приложения под ключ</p>
        </div>

        <div class="includes-grid">
            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-clipboard-list"></i>
                </div>
                <div>
                    <h4>Анализ и ТЗ</h4>
                    <p>Изучаем бизнес, конкурентов в Google Play и аудиторию. Составляем детальное техническое задание.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-object-group"></i>
                </div>
                <div>
                    <h4>Прототипирование</h4>
                    <p>Создаём интерактивный прототип экранов и продумываем сценарии до старта разработки.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-wand-magic-sparkles"></i>
                </div>
                <div>
                    <h4>Дизайн Material Design</h4>
                    <p>Рисуем уникальный интерфейс по гайдлайнам Google с адаптацией под смартфоны и планшеты.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <div>
                    <h4>Разработка на Kotlin</h4>
                    <p>Программируем клиент на Kotlin с Jetpack Compose и серверную часть. Чистый код с документацией.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-plug"></i>
                </div>
                <div>
                    <h4>Интеграции</h4>
                    <p>Подключаем Google Pay, FCM, карты, аналитику и API ваших систем — CRM, 1С, ERP.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-vial"></i>
                </div>
                <div>
                    <h4>Тестирование</h4>
                    <p>Ручное и автоматическое тестирование на разных моделях устройств и версиях Android.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-brands fa-google-play"></i>
                </div>
                <div>
                    <h4>Публикация</h4>
                    <p>Собираем App Bundle, готовим материалы и размещаем приложение в Google Play.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-life-ring"></i>
                </div>
                <div>
                    <h4>Поддержка</h4>
                    <p>Гарантийная поддержка, обновления под новые версии Android, исправление багов и доработки.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ЭТАПЫ РАБОТЫ -->
<section class="mobile-steps">
    <div class="container">
        <div class="section-header">
            <h2>Этапы разработки Android-приложения</h2>
            <p>Прозрачный процесс — вы всегда в курсе статуса проекта</p>
        </div>

        <div class="steps-timeline">
            <div class="step-item">
                <div class="step-item__number">1</div>
                <div class="step-item__content">
                    <h4>Анализ и техническое задание</h4>
                    <p>Изучаем бизнес-задачу, аудиторию и конкурентов в Google Play. Определяем функционал, целевые версии Android и стек. Фиксируем требования в ТЗ и смете.</p>
                    <span class="step-item__time">3-5 дней</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">2</div>
                <div class="step-item__content">
                    <h4>Прототип и Material Design</h4>
                    <p>Проектируем структуру экранов, собираем прототип и рисуем UI по гайдлайнам Material Design. Учитываем адаптацию под смартфоны и планшеты.</p>
                    <span class="step-item__time">2-3 недели</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">3</div>
                <div class="step-item__content">
                    <h4>Разработка на Kotlin и Compose</h4>
                    <p>Программируем клиент на Kotlin с Jetpack Compose и серверную логику. Подключаем FCM, Google Pay и API. Показываем прогресс по спринтам.</p>
                    <span class="step-item__time">1-3 месяца</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">4</div>
                <div class="step-item__content">
                    <h4>Тестирование на устройствах</h4>
                    <p>Проверяем функционал, производительность и безопасность. Тестируем на реальных смартфонах, планшетах и разных версиях Android, исправляем ошибки.</p>
                    <span class="step-item__time">1-2 недели</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">5</div>
                <div class="step-item__content">
                    <h4>Публикация и поддержка</h4>
                    <p>Собираем App Bundle, публикуем приложение в Google Play, настраиваем аналитику и push-уведомления. Передаём документацию и сопровождаем проект.</p>
                    <span class="step-item__time">1 неделя</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ТАРИФЫ -->
<section class="mobile-pricing" id="pricing">
    <div class="container">
        <div class="section-header">
            <h2>Стоимость разработки под Android</h2>
            <p>Выберите подходящий пакет или закажите индивидуальный расчёт</p>
        </div>
        <div class="pricing-grid">
            <div class="pricing-card">
                <h3>Старт Android</h3>
                <div class="pricing-card__price">900 000 <span>₸</span></div>
                <p class="pricing-card__desc">Простое приложение на Kotlin</p>
                <ul class="pricing-card__features">
                    <li><i class="fa-solid fa-check"></i> Нативно на Kotlin</li>
                    <li><i class="fa-solid fa-check"></i> До 10 экранов</li>
                    <li><i class="fa-solid fa-check"></i> Дизайн Material Design</li>
                    <li><i class="fa-solid fa-check"></i> Авторизация</li>
                    <li><i class="fa-solid fa-check"></i> Push через FCM</li>
                    <li><i class="fa-solid fa-check"></i> Публикация в Google Play</li>
                    <li><i class="fa-solid fa-check"></i> 1 месяц поддержки</li>
                </ul>
                <a href="https://wa.me/77774333822?text=Здравствуйте!%20Интересует%20пакет%20Старт%20Android%20(900%20000%20₸)" target="_blank" class="btn-primary-mobile btn-whatsapp">
                    <i class="fa-brands fa-whatsapp"></i> Написать в WhatsApp
                </a>
            </div>
            <div class="pricing-card featured">
                <h3>Бизнес Android</h3>
                <div class="pricing-card__price">1 800 000 <span>₸</span></div>
                <p class="pricing-card__desc">Приложение среднего уровня</p>
                <ul class="pricing-card__features">
                    <li><i class="fa-solid fa-check"></i> Kotlin + Jetpack Compose</li>
                    <li><i class="fa-solid fa-check"></i> До 25 экранов</li>
                    <li><i class="fa-solid fa-check"></i> Уникальный дизайн</li>
                    <li><i class="fa-solid fa-check"></i> Админ-панель</li>
                    <li><i class="fa-solid fa-check"></i> Google Pay и онлайн-оплата</li>
                    <li><i class="fa-solid fa-check"></i> Интеграции API</li>
                    <li><i class="fa-solid fa-check"></i> 3 месяца поддержки</li>
                </ul>
                <a href="https://wa.me/77774333822?text=Здравствуйте!%20Интересует%20пакет%20Бизнес%20Android%20(1%20800%20000%20₸)" target="_blank" class="btn-primary-mobile btn-whatsapp">
                    <i class="fa-brands fa-whatsapp"></i> Написать в WhatsApp
                </a>
            </div>
            <div class="pricing-card">
                <h3>Премиум Android</h3>
                <div class="pricing-card__price">от 3 500 000 <span>₸</span></div>
                <p class="pricing-card__desc">Сложные решения</p>
                <ul class="pricing-card__features">
                    <li><i class="fa-solid fa-check"></i> Android + планшеты</li>
                    <li><i class="fa-solid fa-check"></i> Неограничено экранов</li>
                    <li><i class="fa-solid fa-check"></i> Премиум дизайн</li>
                    <li><i class="fa-solid fa-check"></i> Сложная бизнес-логика</li>
                    <li><i class="fa-solid fa-check"></i> ML/AI функции</li>
                    <li><i class="fa-solid fa-check"></i> Интеграция 1С, CRM, ERP</li>
                    <li><i class="fa-solid fa-check"></i> 6 месяцев поддержки</li>
                </ul>
                <a href="https://wa.me/77774333822?text=Здравствуйте!%20Интересует%20пакет%20Премиум%20Android%20(от%203%20500%20000%20₸)" target="_blank" class="btn-primary-mobile btn-whatsapp">
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
            <p>Используем современный стек Android-разработки</p>
        </div>

        <div class="tech-grid">
            <div class="tech-item">
                <div class="tech-item__logo">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Kotlin"><defs><linearGradient id="kotlinGrad" x1="0" y1="24" x2="24" y2="0" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#0095D5"/><stop offset="0.3" stop-color="#238AD9"/><stop offset="0.62" stop-color="#557BDE"/><stop offset="0.86" stop-color="#7472E2"/><stop offset="1" stop-color="#7C68E7"/></linearGradient></defs><path fill="url(#kotlinGrad)" d="M24 24H0V0h24L12 12Z"/></svg>
                </div>
                <span>Kotlin</span>
            </div>
            <div class="tech-item">
                <div class="tech-item__logo">
                    <i class="fa-brands fa-android" style="font-size:42px;color:#3DDC84;"></i>
                </div>
                <span>Jetpack Compose</span>
            </div>
            <div class="tech-item">
                <div class="tech-item__logo">
                    <svg viewBox="0 0 24 24" fill="#61DAFB" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="React Native"><path d="M14.23 12.004a2.236 2.236 0 0 1-2.235 2.236 2.236 2.236 0 0 1-2.236-2.236 2.236 2.236 0 0 1 2.235-2.236 2.236 2.236 0 0 1 2.236 2.236zm2.648-10.69c-1.346 0-3.107.96-4.888 2.622-1.78-1.653-3.542-2.602-4.887-2.602-.41 0-.783.093-1.106.278-1.375.793-1.683 3.264-.973 6.365C1.98 8.917 0 10.42 0 12.004c0 1.59 1.99 3.097 5.043 4.03-.704 3.113-.39 5.588.988 6.38.32.187.69.275 1.102.275 1.345 0 3.107-.96 4.888-2.624 1.78 1.654 3.542 2.603 4.887 2.603.41 0 .783-.09 1.106-.275 1.374-.792 1.683-3.263.973-6.365C22.02 15.096 24 13.59 24 12.004c0-1.59-1.99-3.097-5.043-4.032.704-3.11.39-5.587-.988-6.38-.318-.184-.688-.277-1.092-.278zm-.005 1.09v.006c.225 0 .406.044.558.127.666.382.955 1.835.73 3.704-.054.46-.142.945-.25 1.44-.96-.236-2.006-.417-3.107-.534-.66-.905-1.345-1.727-2.035-2.447 1.592-1.48 3.087-2.292 4.105-2.295zm-9.77.02c1.012 0 2.514.808 4.11 2.28-.686.72-1.37 1.537-2.02 2.442-1.107.117-2.154.298-3.113.538-.112-.49-.195-.964-.254-1.42-.23-1.868.054-3.32.714-3.707.19-.09.4-.127.563-.132zm4.882 3.05c.455.468.91.992 1.36 1.564-.44-.02-.89-.034-1.345-.034-.46 0-.915.01-1.36.034.44-.572.895-1.096 1.345-1.565zM12 8.1c.74 0 1.477.034 2.202.093.406.582.802 1.203 1.183 1.86.372.64.71 1.29 1.018 1.946-.308.655-.646 1.31-1.013 1.95-.38.66-.773 1.288-1.18 1.87-.728.063-1.466.098-2.21.098-.74 0-1.477-.035-2.202-.093-.406-.582-.802-1.204-1.183-1.86-.372-.64-.71-1.29-1.018-1.946.303-.657.646-1.313 1.013-1.954.38-.66.773-1.286 1.18-1.868.728-.064 1.466-.098 2.21-.098zm-3.635.254c-.24.377-.48.763-.704 1.16-.225.39-.435.782-.635 1.174-.265-.656-.49-1.31-.676-1.947.64-.15 1.315-.283 2.015-.386zm7.26 0c.695.103 1.365.23 2.006.387-.18.632-.405 1.282-.66 1.933-.2-.39-.41-.783-.64-1.174-.225-.392-.465-.774-.705-1.146zm3.063.675c.484.15.944.317 1.375.498 1.732.74 2.852 1.708 2.852 2.476-.005.768-1.125 1.74-2.857 2.475-.42.18-.88.342-1.355.493-.28-.958-.646-1.956-1.1-2.98.45-1.017.81-2.01 1.085-2.964zm-13.395.004c.278.96.645 1.957 1.1 2.98-.45 1.017-.812 2.01-1.086 2.964-.484-.15-.944-.318-1.37-.5-1.732-.737-2.852-1.706-2.852-2.474 0-.768 1.12-1.742 2.852-2.476.42-.18.88-.342 1.356-.494zm11.678 4.28c.265.657.49 1.312.676 1.948-.64.157-1.316.29-2.016.39.24-.375.48-.762.705-1.158.225-.39.435-.788.636-1.18zm-9.945.02c.2.392.41.783.64 1.175.23.39.465.772.705 1.143-.695-.102-1.365-.23-2.006-.386.18-.63.406-1.282.66-1.933zM17.92 16.32c.112.493.2.968.254 1.423.23 1.868-.054 3.32-.714 3.708-.147.09-.338.128-.563.128-1.012 0-2.514-.807-4.11-2.28.686-.72 1.37-1.536 2.02-2.44 1.107-.118 2.154-.3 3.113-.54zm-11.83.01c.96.234 2.006.415 3.107.532.66.905 1.345 1.727 2.035 2.446-1.595 1.483-3.092 2.295-4.11 2.295-.22-.005-.406-.05-.553-.132-.666-.38-.955-1.834-.73-3.703.054-.46.142-.944.25-1.438zm4.56.64c.44.02.89.034 1.345.034.46 0 .915-.01 1.36-.034-.44.572-.895 1.095-1.345 1.565-.455-.47-.91-.993-1.36-1.565z"/></svg>
                </div>
                <span>React Native</span>
            </div>
            <div class="tech-item">
                <div class="tech-item__logo">
                    <svg viewBox="0 0 24 24" fill="#FFA000" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Firebase"><path d="M19.455 8.369c-.538-.748-1.778-2.285-3.681-4.569-.826-.991-1.535-1.832-1.884-2.245a146 146 0 0 0-.488-.576l-.207-.245-.113-.133-.022-.032-.01-.005L12.57 0l-.609.488c-1.555 1.246-2.828 2.851-3.681 4.64-.523 1.064-.864 2.105-1.043 3.176-.047.241-.088.489-.121.738-.209-.017-.421-.028-.632-.033-.018-.001-.035-.002-.059-.003a7.46 7.46 0 0 0-2.28.274l-.317.089-.163.286c-.765 1.342-1.198 2.869-1.252 4.416-.07 2.01.477 3.954 1.583 5.625 1.082 1.633 2.61 2.882 4.42 3.611l.236.095.071.025.003-.001a9.59 9.59 0 0 0 2.941.568q.171.006.342.006c1.273 0 2.513-.249 3.69-.742l.008.004.313-.145a9.63 9.63 0 0 0 3.927-3.335c1.01-1.49 1.577-3.234 1.641-5.042.075-2.161-.643-4.304-2.133-6.371m-7.083 6.695c.328 1.244.264 2.44-.191 3.558-1.135-1.12-1.967-2.352-2.475-3.665-.543-1.404-.87-2.74-.974-3.975.48.157.922.366 1.315.622 1.132.737 1.914 1.902 2.325 3.461zm.207 6.022c.482.368.99.712 1.513 1.028-.771.21-1.565.302-2.369.273a8 8 0 0 1-.373-.022c.458-.394.869-.823 1.228-1.279zm1.347-6.431c-.516-1.957-1.527-3.437-3.002-4.398-.647-.421-1.385-.741-2.194-.95.011-.134.026-.268.043-.4.014-.113.03-.216.046-.313.133-.689.332-1.37.589-2.025.099-.25.206-.499.321-.74l.004-.008c.177-.358.376-.719.61-1.105l.092-.152-.003-.001c.544-.851 1.197-1.627 1.942-2.311l.288.341c.672.796 1.304 1.548 1.878 2.237 1.291 1.549 2.966 3.583 3.612 4.48 1.277 1.771 1.893 3.579 1.83 5.375-.049 1.395-.461 2.755-1.195 3.933-.694 1.116-1.661 2.05-2.8 2.708-.636-.318-1.559-.839-2.539-1.599.79-1.575.952-3.28.479-5.072zm-2.575 5.397c-.725.939-1.587 1.55-2.09 1.856-.081-.029-.163-.06-.243-.093l-.065-.026c-1.49-.616-2.747-1.656-3.635-3.01-.907-1.384-1.356-2.993-1.298-4.653.041-1.19.338-2.327.882-3.379.316-.07.638-.114.96-.131l.084-.002c.162-.003.324-.003.478 0 .227.011.454.035.677.07.073 1.513.445 3.145 1.105 4.852.637 1.644 1.694 3.162 3.144 4.515z"/></svg>
                </div>
                <span>Firebase</span>
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
            <p>Ответы на популярные вопросы о разработке приложений для Android</p>
        </div>

        <div class="faq-list">
            <div class="faq-item active">
                <div class="faq-item__question">
                    <h4>Сколько стоит разработка приложения для Android?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Стоимость зависит от сложности проекта и начинается от 900 000 тенге за простое Android-приложение на Kotlin с базовым функционалом. Приложение среднего уровня с админ-панелью, онлайн-оплатой и интеграциями — от 1 800 000 тенге. Сложные проекты с машинным обучением, картами и микросервисами — от 3 500 000 тенге. Точную смету составим после обсуждения задачи.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Почему вы разрабатываете на Kotlin и Jetpack Compose?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Kotlin — официальный язык Google для Android, он делает код короче, безопаснее и надёжнее, чем Java. Jetpack Compose — современный декларативный UI-фреймворк, который ускоряет разработку интерфейсов и упрощает поддержку. Этот стек обеспечивает высокую производительность, плавные анимации и лёгкое масштабирование приложения в будущем.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Как вы адаптируете приложение под разные устройства Android?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Экосистема Android — это тысячи моделей смартфонов и планшетов с разными диагоналями экранов, плотностью пикселей и версиями ОС. Мы проектируем адаптивные интерфейсы по гайдлайнам Material Design, поддерживаем актуальные версии Android и тестируем сборку на реальных устройствах и эмуляторах, чтобы приложение одинаково корректно работало у всех пользователей.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Вы публикуете приложение в Google Play?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Да, публикацию в Google Play берём на себя полностью. Регистрируем аккаунт разработчика при необходимости, готовим иконку, скриншоты, описание и графические материалы, настраиваем подпись приложения и App Bundle. Помогаем пройти проверку Google с первого раза и соблюсти все требования площадки.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Можно ли интегрировать оплату и push-уведомления?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Да. Мы подключаем Google Pay и локальные платёжные шлюзы Казахстана для оплаты внутри приложения, а также настраиваем push-уведомления через Firebase Cloud Messaging (FCM). Дополнительно интегрируем аналитику, карты, авторизацию через Google-аккаунт и API ваших внутренних систем — CRM, 1С, ERP.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="mobile-cta">
    <div class="container">
        <h2>Готовы обсудить ваше Android-приложение?</h2>
        <p>Оставьте заявку и получите бесплатную консультацию и расчёт стоимости за 24 часа</p>
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
        <h2>Разработка приложений для Android в Алматы</h2>
        <p>
            Компания Modern Design Lab создаёт нативные приложения для Android на языке Kotlin с современным интерфейсом Jetpack Compose.
            Android — самая массовая мобильная платформа: на ней работает около 80% всех смартфонов в мире, поэтому собственное приложение
            в Google Play открывает доступ к огромной аудитории. Разработка под Android — часть нашего направления
            <a href="https://mdlab.kz/razrabotka-mobilnyh-prilozheniy">разработки мобильных приложений</a>; при необходимости мы также делаем
            приложения для <a href="https://mdlab.kz/razrabotka-prilozheniya-dlya-ios">iOS</a> и
            <a href="https://mdlab.kz/krossplatformennaya-razrabotka">кроссплатформенные решения</a> на одном коде.
        </p>

        <h3>Почему стоит выбрать нативную разработку под Android</h3>
        <p>
            Нативная разработка на Kotlin даёт максимальную производительность и полный доступ к возможностям устройства: камере,
            датчикам, геолокации, биометрии и фоновым службам. Гибкость платформы Android позволяет реализовать сценарии, которые
            сложно или невозможно повторить в вебе. Собственное Android-приложение помогает бизнесу:
        </p>
        <ul>
            <li>Охватить около 80% рынка смартфонов и выйти к массовой аудитории Google Play</li>
            <li>Удерживать клиентов через push-уведомления по FCM и программы лояльности</li>
            <li>Принимать оплату прямо в приложении через Google Pay и локальные шлюзы</li>
            <li>Работать на смартфонах и планшетах с единой адаптивной версткой</li>
            <li>Использовать датчики устройства, карты и офлайн-режим для удобства пользователей</li>
        </ul>

        <h3>Kotlin, Jetpack Compose и Material Design</h3>
        <p>
            Мы разрабатываем на Kotlin — официальном языке Google для Android. Интерфейсы строим на Jetpack Compose, современном
            декларативном фреймворке, который ускоряет создание экранов и упрощает поддержку. Дизайн проектируем по гайдлайнам
            Material Design, чтобы приложение было привычным и удобным для пользователей Android. Особое внимание уделяем адаптации
            под огромное разнообразие моделей устройств, диагоналей экранов и версий операционной системы.
        </p>

        <h3>Стоимость разработки Android-приложения в Казахстане</h3>
        <p>
            Цена зависит от функционала, дизайна, числа интеграций и требований к безопасности. Простое приложение на Kotlin стоит
            от 900 000 тенге. Проект среднего уровня с админ-панелью, оплатой Google Pay и интеграциями — от 1 800 000 тенге.
            Сложные решения с машинным обучением, картами и микросервисной архитектурой — от 3 500 000 тенге. Стоимость фиксируем
            в договоре, возможна поэтапная оплата: 50% предоплата и 50% после сдачи проекта.
        </p>

        <h3>Как заказать разработку приложения для Android</h3>
        <p>
            Заказать создание Android-приложения в Modern Design Lab просто: оставьте заявку по телефону, в WhatsApp или Telegram —
            и мы бесплатно проконсультируем и рассчитаем стоимость за 24 часа. Мы ведём проект под ключ: от идеи и технического задания
            до публикации в Google Play, настройки FCM и Google Pay и последующей поддержки. Работаем по методологии Agile, поэтому
            вы видите результат на каждом этапе и можете вносить правки.
        </p>
        <p class="seo-content__source">
            Данные о доле Android приведены по статистике StatCounter GlobalStats.
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
