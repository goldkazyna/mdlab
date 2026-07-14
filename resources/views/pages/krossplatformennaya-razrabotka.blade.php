@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="/assets/css/mobile-landing.css?v=1.0">
@endpush

@push('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "Кроссплатформенная разработка мобильных приложений в Алматы",
    "description": "Кроссплатформенная разработка приложений на Flutter и React Native: одна кодовая база сразу для iOS и Android. Экономия бюджета и времени до 40%. Срок от 30 дней.",
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
    "serviceType": "Кроссплатформенная разработка мобильных приложений",
    "url": "https://mdlab.kz/krossplatformennaya-razrabotka",
    "offers": {
        "@@type": "AggregateOffer",
        "lowPrice": "750000",
        "highPrice": "3000000",
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
            "name": "Что такое кроссплатформенная разработка приложений?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Кроссплатформенная разработка — это создание одного приложения, которое работает сразу на iOS и Android из единой кодовой базы. Вместо двух отдельных нативных проектов на Swift и Kotlin мы пишем код один раз на Flutter или React Native. Это экономит до 40% бюджета и времени, а обновления выходят одновременно на обеих платформах."
            }
        },
        {
            "@@type": "Question",
            "name": "Что выбрать: Flutter или React Native?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Flutter (от Google) даёт максимально плавную анимацию и единый пиксель-в-пиксель дизайн на обеих платформах, отлично подходит для приложений с насыщенным интерфейсом. React Native (от Meta) удобен, если у вас уже есть команда на JavaScript или веб-часть на React, и позволяет переиспользовать наработки. Мы подбираем стек под вашу задачу и покажем плюсы каждого варианта."
            }
        },
        {
            "@@type": "Question",
            "name": "Насколько кроссплатформа дешевле нативной разработки?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "В среднем кроссплатформенное приложение обходится на 30–40% дешевле, чем две отдельные нативные версии для iOS и Android. Экономия достигается за счёт единой кодовой базы: одна команда, один код, одно тестирование бизнес-логики. Дополнительно вы экономите на поддержке — правки и новые функции вносятся один раз для обеих платформ."
            }
        },
        {
            "@@type": "Question",
            "name": "Когда кроссплатформа не подходит и нужна нативная разработка?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Нативная разработка предпочтительнее для тяжёлых 3D-игр, сложного AR/VR, приложений с интенсивной обработкой видео и графики или максимальной нагрузкой на процессор. В таких случаях важен прямой доступ к возможностям платформы. Для большинства бизнес-приложений, магазинов, сервисов и MVP кроссплатформа полностью закрывает задачи без потери качества."
            }
        },
        {
            "@@type": "Question",
            "name": "Приложение будет выглядеть одинаково на iPhone и Android?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Да, при кроссплатформенной разработке дизайн создаётся один раз и работает единообразно на обеих платформах, что упрощает поддержку бренда. При необходимости мы адаптируем отдельные элементы под нативные гайдлайны Apple и Google, чтобы приложение ощущалось привычным для пользователей каждой платформы."
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
            "name": "Кроссплатформенная разработка",
            "item": "https://mdlab.kz/krossplatformennaya-razrabotka"
        }
    ]
}
</script>

<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "HowTo",
    "name": "Этапы кроссплатформенной разработки приложения",
    "description": "Полный цикл создания кроссплатформенного приложения на Flutter или React Native под ключ в студии Modern Design Lab.",
    "totalTime": "P30D",
    "step": [
        {
            "@@type": "HowToStep",
            "position": 1,
            "name": "Бриф и выбор стека",
            "text": "Изучаем задачу, бизнес и конкурентов. Определяем функционал и подбираем оптимальный кроссплатформенный фреймворк — Flutter или React Native. Составляем ТЗ и смету."
        },
        {
            "@@type": "HowToStep",
            "position": 2,
            "name": "Единый прототип и дизайн",
            "text": "Создаём прототип и UI-дизайн, который работает одинаково на iOS и Android. Согласовываем макеты и вносим правки до старта кодирования."
        },
        {
            "@@type": "HowToStep",
            "position": 3,
            "name": "Разработка на единой кодовой базе",
            "text": "Пишем один код сразу для двух платформ. Еженедельные демо на реальных iPhone и Android. Итеративная разработка по спринтам."
        },
        {
            "@@type": "HowToStep",
            "position": 4,
            "name": "Тестирование на iOS и Android",
            "text": "Проверяем приложение на устройствах Apple и Android одновременно. Тестируем функционал, производительность и стабильность, исправляем баги."
        },
        {
            "@@type": "HowToStep",
            "position": 5,
            "name": "Одновременный запуск и поддержка",
            "text": "Публикуем в App Store и Google Play одновременно. Настраиваем аналитику и push-уведомления. Обновления выходят синхронно на обеих платформах."
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
            <li><span class="breadcrumbs__sep">/</span> <span aria-current="page">Кроссплатформенная разработка</span></li>
        </ol>
    </div>
</nav>

<!-- HERO СЕКЦИЯ -->
<section class="home-hero">
    <div class="container">
        <div class="home-hero__wrapper">
            <div class="home-hero__content">
                <div class="home-hero__top">
                    <h1 class="home-hero__title">Кроссплатформенная разработка мобильных приложений в&nbsp;Алматы</h1>
                    <p class="home-hero__subtitle">Одно приложение сразу для&nbsp;iOS и&nbsp;Android на&nbsp;Flutter и&nbsp;React Native — экономия до&nbsp;40%</p>
                </div>
                <div class="home-hero__bottom">
                    <div class="home-hero__contact">
                        <a href="tel:+77774333822" class="btn btn_accent">Позвонить</a>
                        <a href="https://wa.me/77774333822" class="btn btn_accent btn_whatsapp1">
                            <i class="fa-brands fa-whatsapp"></i>Написать в WhatsApp
                        </a>
                    </div>
                    <p class="home-hero__description">Оставьте заявку сегодня — получите бесплатную консультацию и&nbsp;расчёт стоимости кроссплатформенного приложения!</p>
                </div>
            </div>

            <div class="home-hero__img" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="1000" data-aos-delay="200">
                <!-- Место для изображения: смартфоны с приложениями -->
                <img src="/assets/img/mobile-app-hero.png" alt="Кроссплатформенная разработка приложений для iOS и Android в Алматы">
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
                        <div class="home-benefits__num"><span data-from="0" data-to="40" data-dp="0">0</span>%</div>
                        <div class="home-benefits__name">экономия бюджета и времени</div>
                    </div>
                    <div class="home-benefits__item">
                        <div class="home-benefits__num"><span data-from="0" data-to="2" data-dp="0">0</span></div>
                        <div class="home-benefits__name">платформы из&nbsp;одной<br>кодовой базы</div>
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
                <strong>Кроссплатформенная разработка мобильных приложений в Алматы</strong> — это создание одного приложения сразу для iOS и Android из единой кодовой базы на Flutter или React Native. Вместо двух отдельных нативных проектов вы получаете единый продукт с одинаковым дизайном, который выходит на рынок быстрее и дешевле. Студия Modern Design Lab работает с кроссплатформой с 2014 года.
            </p>
            <p>
                Стоимость — <strong>от 750 000 ₸</strong> за приложение-старт, <strong>от 1 500 000 ₸</strong> за бизнес-приложение с интеграциями, <strong>от 3 000 000 ₸</strong> за премиум-проект со сложной логикой. Экономия бюджета и времени по сравнению с нативной разработкой — <strong>до 40%</strong>, а обновления выходят одновременно на обеих платформах.
            </p>
            <div class="summary-facts">
                <div class="summary-fact">
                    <div class="summary-fact__value">от 750 000 ₸</div>
                    <div class="summary-fact__label">стартовая стоимость</div>
                </div>
                <div class="summary-fact">
                    <div class="summary-fact__value">до 40%</div>
                    <div class="summary-fact__label">экономия бюджета</div>
                </div>
                <div class="summary-fact">
                    <div class="summary-fact__value">Flutter / React Native</div>
                    <div class="summary-fact__label">технологии</div>
                </div>
                <div class="summary-fact">
                    <div class="summary-fact__value">iOS + Android</div>
                    <div class="summary-fact__label">одна кодовая база</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ТИПЫ ПРИЛОЖЕНИЙ -->
<section class="mobile-types">
    <div class="container">
        <div class="section-header">
            <h2>Какие кроссплатформенные приложения мы разрабатываем</h2>
            <p>Одно решение сразу для iOS и Android под вашу задачу</p>
        </div>

        <div class="types-grid">
            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-briefcase"></i>
                </div>
                <h3>Бизнес-приложение</h3>
                <p>Приложение для взаимодействия с клиентами: каталог услуг, запись, личный кабинет и push-уведомления. Единый продукт для iOS и Android.</p>
                <div class="type-card__price">от 750 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <h3>Интернет-магазин</h3>
                <p>Мобильный магазин с каталогом, корзиной, онлайн-оплатой и интеграцией с 1С и CRM. Продажи через один код на обеих платформах.</p>
                <div class="type-card__price">от 1 250 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-diagram-project"></i>
                </div>
                <h3>Сервис и маркетплейс</h3>
                <p>Платформа для доставки, услуг или объявлений с GPS, чатами и оплатой. Быстрый запуск на iOS и Android одновременно.</p>
                <div class="type-card__price">от 2 000 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-rocket"></i>
                </div>
                <h3>MVP для стартапа</h3>
                <p>Быстрая проверка идеи на реальных пользователях сразу двух платформ при минимальном бюджете. Кроссплатформа — идеальный выбор для MVP.</p>
                <div class="type-card__price">от 750 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-building"></i>
                </div>
                <h3>Корпоративное</h3>
                <p>Внутренние приложения для сотрудников: задачи, документооборот, CRM и HR-процессы. Один продукт на все рабочие устройства компании.</p>
                <div class="type-card__price">от 1 800 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-sliders"></i>
                </div>
                <h3>Приложение с админкой</h3>
                <p>Кроссплатформенное приложение с полноценной панелью управления контентом, пользователями и заказами. Всё под вашим контролем.</p>
                <div class="type-card__price">от 1 500 000 <span>₸</span></div>
            </div>
        </div>
    </div>
</section>

<!-- ПРЕИМУЩЕСТВА -->
<section class="mobile-advantages">
    <div class="container">
        <div class="section-header">
            <h2>Почему кроссплатформа выгодна</h2>
            <p>Преимущества единой кодовой базы для вашего бизнеса</p>
        </div>

        <div class="advantages-grid">
            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-piggy-bank"></i>
                </div>
                <h3>Экономия до 40%</h3>
                <p>Один код вместо двух отдельных проектов на Swift и Kotlin. Вы платите за разработку один раз, а не дважды.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-gauge-high"></i>
                </div>
                <h3>Быстрый выход на рынок</h3>
                <p>Единая кодовая база сокращает срок разработки. Запускаетесь на iOS и Android одновременно и опережаете конкурентов.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-palette"></i>
                </div>
                <h3>Единый дизайн</h3>
                <p>Интерфейс создаётся один раз и выглядит одинаково на всех устройствах. Бренд сохраняется на iPhone и Android без расхождений.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-arrows-rotate"></i>
                </div>
                <h3>Одновременные обновления</h3>
                <p>Новые функции и правки выходят синхронно на обеих платформах. Не нужно ждать, пока догонит вторая версия.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-users-gear"></i>
                </div>
                <h3>Одна команда</h3>
                <p>Проектом занимается единая команда на Flutter или React Native. Проще коммуникация, меньше рисков и рассинхрона.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-wrench"></i>
                </div>
                <h3>Дешёвая поддержка</h3>
                <p>Исправления и доработки вносятся один раз для обеих платформ. Стоимость сопровождения приложения ниже, чем у нативного.</p>
            </div>
        </div>
    </div>
</section>

<!-- ЧТО ВХОДИТ -->
<section class="mobile-includes">
    <div class="container">
        <div class="section-header">
            <h2>Что входит в кроссплатформенную разработку</h2>
            <p>Полный цикл создания приложения для iOS и Android под ключ</p>
        </div>

        <div class="includes-grid">
            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-clipboard-list"></i>
                </div>
                <div>
                    <h4>Анализ и выбор стека</h4>
                    <p>Изучаем задачу и подбираем оптимальный фреймворк — Flutter или React Native. Составляем техническое задание.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-object-group"></i>
                </div>
                <div>
                    <h4>Прототипирование</h4>
                    <p>Создаём интерактивный прототип, единый для обеих платформ. Тестируем логику до начала разработки.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-wand-magic-sparkles"></i>
                </div>
                <div>
                    <h4>Единый UI/UX дизайн</h4>
                    <p>Разрабатываем дизайн, который одинаково работает на iOS и Android. При необходимости адаптируем под гайдлайны.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <div>
                    <h4>Разработка кода</h4>
                    <p>Пишем единую кодовую базу для двух платформ. Чистый код на Flutter или React Native, backend и документация.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-vial"></i>
                </div>
                <div>
                    <h4>Тестирование</h4>
                    <p>Проверяем приложение на реальных iPhone и Android-устройствах. Ловим баги на обеих платформах сразу.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-store"></i>
                </div>
                <div>
                    <h4>Публикация</h4>
                    <p>Размещаем в App Store и Google Play одновременно. Готовим материалы и проходим модерацию обеих площадок.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-chart-line"></i>
                </div>
                <div>
                    <h4>Аналитика</h4>
                    <p>Подключаем Firebase, AppMetrica, Amplitude. Единая аналитика по пользователям обеих платформ.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-life-ring"></i>
                </div>
                <div>
                    <h4>Поддержка</h4>
                    <p>Гарантийная поддержка после запуска. Обновления и правки вносятся один раз для iOS и Android.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ЭТАПЫ РАБОТЫ -->
<section class="mobile-steps">
    <div class="container">
        <div class="section-header">
            <h2>Этапы кроссплатформенной разработки</h2>
            <p>Прозрачный процесс — вы всегда в курсе статуса проекта</p>
        </div>

        <div class="steps-timeline">
            <div class="step-item">
                <div class="step-item__number">1</div>
                <div class="step-item__content">
                    <h4>Бриф и выбор стека</h4>
                    <p>Изучаем задачу, бизнес и конкурентов. Определяем функционал и подбираем оптимальный кроссплатформенный фреймворк — Flutter или React Native. Составляем ТЗ и смету.</p>
                    <span class="step-item__time">3-5 дней</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">2</div>
                <div class="step-item__content">
                    <h4>Единый прототип и дизайн</h4>
                    <p>Создаём прототип и UI-дизайн, который работает одинаково на iOS и Android. Согласовываем макеты и вносим правки до старта кодирования.</p>
                    <span class="step-item__time">2-3 недели</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">3</div>
                <div class="step-item__content">
                    <h4>Разработка на единой кодовой базе</h4>
                    <p>Пишем один код сразу для двух платформ. Еженедельные демо на реальных iPhone и Android. Итеративная разработка по спринтам.</p>
                    <span class="step-item__time">1-3 месяца</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">4</div>
                <div class="step-item__content">
                    <h4>Тестирование на iOS и Android</h4>
                    <p>Проверяем приложение на устройствах Apple и Android одновременно. Тестируем функционал, производительность и стабильность, исправляем баги.</p>
                    <span class="step-item__time">1-2 недели</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">5</div>
                <div class="step-item__content">
                    <h4>Одновременный запуск и поддержка</h4>
                    <p>Публикуем в App Store и Google Play одновременно. Настраиваем аналитику и push-уведомления. Обновления выходят синхронно на обеих платформах.</p>
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
            <h2>Стоимость кроссплатформенной разработки</h2>
            <p>Выберите подходящий пакет или закажите индивидуальный расчёт</p>
        </div>
        <div class="pricing-grid">
            <div class="pricing-card">
                <h3>Старт</h3>
                <div class="pricing-card__price">от 750 000 <span>₸</span></div>
                <p class="pricing-card__desc">MVP сразу для iOS и Android</p>
                <ul class="pricing-card__features">
                    <li><i class="fa-solid fa-check"></i> iOS + Android из одного кода</li>
                    <li><i class="fa-solid fa-check"></i> До 12 экранов</li>
                    <li><i class="fa-solid fa-check"></i> Единый базовый дизайн</li>
                    <li><i class="fa-solid fa-check"></i> Авторизация</li>
                    <li><i class="fa-solid fa-check"></i> Push-уведомления</li>
                    <li><i class="fa-solid fa-check"></i> Публикация в оба магазина</li>
                    <li><i class="fa-solid fa-check"></i> 1 месяц поддержки</li>
                </ul>
                <a href="https://wa.me/77774333822?text=Здравствуйте!%20Интересует%20пакет%20Старт%20(от%20750%20000%20₸)" target="_blank" class="btn-primary-mobile btn-whatsapp">
                    <i class="fa-brands fa-whatsapp"></i> Написать в WhatsApp
                </a>
            </div>
            <div class="pricing-card featured">
                <h3>Бизнес</h3>
                <div class="pricing-card__price">от 1 500 000 <span>₸</span></div>
                <p class="pricing-card__desc">Приложение с интеграциями</p>
                <ul class="pricing-card__features">
                    <li><i class="fa-solid fa-check"></i> iOS + Android из одного кода</li>
                    <li><i class="fa-solid fa-check"></i> До 30 экранов</li>
                    <li><i class="fa-solid fa-check"></i> Уникальный единый дизайн</li>
                    <li><i class="fa-solid fa-check"></i> Админ-панель</li>
                    <li><i class="fa-solid fa-check"></i> Онлайн-оплата</li>
                    <li><i class="fa-solid fa-check"></i> Интеграции 1С, CRM, API</li>
                    <li><i class="fa-solid fa-check"></i> 3 месяца поддержки</li>
                </ul>
                <a href="https://wa.me/77774333822?text=Здравствуйте!%20Интересует%20пакет%20Бизнес%20(от%201%20500%20000%20₸)" target="_blank" class="btn-primary-mobile btn-whatsapp">
                    <i class="fa-brands fa-whatsapp"></i> Написать в WhatsApp
                </a>
            </div>
            <div class="pricing-card">
                <h3>Премиум</h3>
                <div class="pricing-card__price">от 3 000 000 <span>₸</span></div>
                <p class="pricing-card__desc">Сложные кроссплатформенные решения</p>
                <ul class="pricing-card__features">
                    <li><i class="fa-solid fa-check"></i> iOS + Android + Web</li>
                    <li><i class="fa-solid fa-check"></i> Неограничено экранов</li>
                    <li><i class="fa-solid fa-check"></i> Премиум дизайн и анимация</li>
                    <li><i class="fa-solid fa-check"></i> Сложная бизнес-логика</li>
                    <li><i class="fa-solid fa-check"></i> Маркетплейс и роли</li>
                    <li><i class="fa-solid fa-check"></i> Глубокие интеграции</li>
                    <li><i class="fa-solid fa-check"></i> 6 месяцев поддержки</li>
                </ul>
                <a href="https://wa.me/77774333822?text=Здравствуйте!%20Интересует%20пакет%20Премиум%20(от%203%20000%20000%20₸)" target="_blank" class="btn-primary-mobile btn-whatsapp">
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
            <h2>Технологии кроссплатформенной разработки</h2>
            <p>Современный стек для надёжных приложений на iOS и Android</p>
        </div>

        <div class="tech-grid">
            <div class="tech-item">
                <div class="tech-item__logo">
                    <svg viewBox="0 0 24 24" fill="#02569B" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Flutter"><path d="M14.314 0L2.3 12 6 15.7 21.684.013h-7.357zm.014 11.072L7.857 17.53l6.47 6.47H21.7l-6.46-6.468 6.46-6.46h-7.37z"/></svg>
                </div>
                <span>Flutter</span>
            </div>
            <div class="tech-item">
                <div class="tech-item__logo">
                    <svg viewBox="0 0 24 24" fill="#61DAFB" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="React Native"><path d="M14.23 12.004a2.236 2.236 0 0 1-2.235 2.236 2.236 2.236 0 0 1-2.236-2.236 2.236 2.236 0 0 1 2.235-2.236 2.236 2.236 0 0 1 2.236 2.236zm2.648-10.69c-1.346 0-3.107.96-4.888 2.622-1.78-1.653-3.542-2.602-4.887-2.602-.41 0-.783.093-1.106.278-1.375.793-1.683 3.264-.973 6.365C1.98 8.917 0 10.42 0 12.004c0 1.59 1.99 3.097 5.043 4.03-.704 3.113-.39 5.588.988 6.38.32.187.69.275 1.102.275 1.345 0 3.107-.96 4.888-2.624 1.78 1.654 3.542 2.603 4.887 2.603.41 0 .783-.09 1.106-.275 1.374-.792 1.683-3.263.973-6.365C22.02 15.096 24 13.59 24 12.004c0-1.59-1.99-3.097-5.043-4.032.704-3.11.39-5.587-.988-6.38-.318-.184-.688-.277-1.092-.278zm-.005 1.09v.006c.225 0 .406.044.558.127.666.382.955 1.835.73 3.704-.054.46-.142.945-.25 1.44-.96-.236-2.006-.417-3.107-.534-.66-.905-1.345-1.727-2.035-2.447 1.592-1.48 3.087-2.292 4.105-2.295zm-9.77.02c1.012 0 2.514.808 4.11 2.28-.686.72-1.37 1.537-2.02 2.442-1.107.117-2.154.298-3.113.538-.112-.49-.195-.964-.254-1.42-.23-1.868.054-3.32.714-3.707.19-.09.4-.127.563-.132zm4.882 3.05c.455.468.91.992 1.36 1.564-.44-.02-.89-.034-1.345-.034-.46 0-.915.01-1.36.034.44-.572.895-1.096 1.345-1.565zM12 8.1c.74 0 1.477.034 2.202.093.406.582.802 1.203 1.183 1.86.372.64.71 1.29 1.018 1.946-.308.655-.646 1.31-1.013 1.95-.38.66-.773 1.288-1.18 1.87-.728.063-1.466.098-2.21.098-.74 0-1.477-.035-2.202-.093-.406-.582-.802-1.204-1.183-1.86-.372-.64-.71-1.29-1.018-1.946.303-.657.646-1.313 1.013-1.954.38-.66.773-1.286 1.18-1.868.728-.064 1.466-.098 2.21-.098zm-3.635.254c-.24.377-.48.763-.704 1.16-.225.39-.435.782-.635 1.174-.265-.656-.49-1.31-.676-1.947.64-.15 1.315-.283 2.015-.386zm7.26 0c.695.103 1.365.23 2.006.387-.18.632-.405 1.282-.66 1.933-.2-.39-.41-.783-.64-1.174-.225-.392-.465-.774-.705-1.146zm3.063.675c.484.15.944.317 1.375.498 1.732.74 2.852 1.708 2.852 2.476-.005.768-1.125 1.74-2.857 2.475-.42.18-.88.342-1.355.493-.28-.958-.646-1.956-1.1-2.98.45-1.017.81-2.01 1.085-2.964zm-13.395.004c.278.96.645 1.957 1.1 2.98-.45 1.017-.812 2.01-1.086 2.964-.484-.15-.944-.318-1.37-.5-1.732-.737-2.852-1.706-2.852-2.474 0-.768 1.12-1.742 2.852-2.476.42-.18.88-.342 1.356-.494zm11.678 4.28c.265.657.49 1.312.676 1.948-.64.157-1.316.29-2.016.39.24-.375.48-.762.705-1.158.225-.39.435-.788.636-1.18zm-9.945.02c.2.392.41.783.64 1.175.23.39.465.772.705 1.143-.695-.102-1.365-.23-2.006-.386.18-.63.406-1.282.66-1.933zM17.92 16.32c.112.493.2.968.254 1.423.23 1.868-.054 3.32-.714 3.708-.147.09-.338.128-.563.128-1.012 0-2.514-.807-4.11-2.28.686-.72 1.37-1.536 2.02-2.44 1.107-.118 2.154-.3 3.113-.54zm-11.83.01c.96.234 2.006.415 3.107.532.66.905 1.345 1.727 2.035 2.446-1.595 1.483-3.092 2.295-4.11 2.295-.22-.005-.406-.05-.553-.132-.666-.38-.955-1.834-.73-3.703.054-.46.142-.944.25-1.438zm4.56.64c.44.02.89.034 1.345.034.46 0 .915-.01 1.36-.034-.44.572-.895 1.095-1.345 1.565-.455-.47-.91-.993-1.36-1.565z"/></svg>
                </div>
                <span>React Native</span>
            </div>
            <div class="tech-item">
                <div class="tech-item__logo">
                    <svg viewBox="0 0 24 24" fill="#0175C2" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Dart"><path d="M4.105 4.105S9.158 1.58 11.684.316a3.079 3.079 0 0 1 1.481-.315c.749.03 1.275.395 1.275.395L24 9.947l-.001.002-2.371 2.371-.633-.633v-.002L14.9 5.591a12.05 12.05 0 0 0-.475-.475c-.9-.9-1.275-1.275-2.371-1.275-.6 0-1.088.1-1.275.15L4.105 4.105zm-.789.789v9.264c0 1.096.375 1.471 1.275 2.371.15.15.313.313.475.475l6.318 6.319.002.001.633.632L24 14.844s-.4-.5-.789-.789L14.055 5.05l-.002-.002-.633-.632-9.104 9.264z"/></svg>
                </div>
                <span>Dart</span>
            </div>
            <div class="tech-item">
                <div class="tech-item__logo">
                    <svg viewBox="0 0 24 24" fill="#F7DF1E" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="JavaScript"><path d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-.93.402-2.07.397-3.346.012-2.054 0-4.109 0-6.179l.002-.056z"/></svg>
                </div>
                <span>JavaScript</span>
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
            <p>Ответы на популярные вопросы о кроссплатформенной разработке</p>
        </div>

        <div class="faq-list">
            <div class="faq-item active">
                <div class="faq-item__question">
                    <h4>Что такое кроссплатформенная разработка приложений?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Кроссплатформенная разработка — это создание одного приложения, которое работает сразу на iOS и Android из единой кодовой базы. Вместо двух отдельных нативных проектов на Swift и Kotlin мы пишем код один раз на Flutter или React Native. Это экономит до 40% бюджета и времени, а обновления выходят одновременно на обеих платформах.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Что выбрать: Flutter или React Native?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Flutter (от Google) даёт максимально плавную анимацию и единый пиксель-в-пиксель дизайн на обеих платформах, отлично подходит для приложений с насыщенным интерфейсом. React Native (от Meta) удобен, если у вас уже есть команда на JavaScript или веб-часть на React, и позволяет переиспользовать наработки. Мы подбираем стек под вашу задачу и покажем плюсы каждого варианта.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Насколько кроссплатформа дешевле нативной разработки?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>В среднем кроссплатформенное приложение обходится на 30–40% дешевле, чем две отдельные нативные версии для iOS и Android. Экономия достигается за счёт единой кодовой базы: одна команда, один код, одно тестирование бизнес-логики. Дополнительно вы экономите на поддержке — правки и новые функции вносятся один раз для обеих платформ.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Когда кроссплатформа не подходит и нужна нативная разработка?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Нативная разработка предпочтительнее для тяжёлых 3D-игр, сложного AR/VR, приложений с интенсивной обработкой видео и графики или максимальной нагрузкой на процессор. В таких случаях важен прямой доступ к возможностям платформы. Для большинства бизнес-приложений, магазинов, сервисов и MVP кроссплатформа полностью закрывает задачи без потери качества.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Приложение будет выглядеть одинаково на iPhone и Android?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Да, при кроссплатформенной разработке дизайн создаётся один раз и работает единообразно на обеих платформах, что упрощает поддержку бренда. При необходимости мы адаптируем отдельные элементы под нативные гайдлайны Apple и Google, чтобы приложение ощущалось привычным для пользователей каждой платформы.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="mobile-cta">
    <div class="container">
        <h2>Готовы обсудить ваш проект?</h2>
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
        <h2>Кроссплатформенная разработка мобильных приложений в Алматы</h2>
        <p>
            Компания Modern Design Lab создаёт кроссплатформенные мобильные приложения на Flutter и React Native — одно приложение
            работает сразу на iOS и Android из единой кодовой базы. Это направление входит в общую
            <a href="https://mdlab.kz/razrabotka-mobilnyh-prilozheniy">разработку мобильных приложений</a>, а при необходимости
            мы делаем и отдельные нативные версии — <a href="https://mdlab.kz/razrabotka-prilozheniya-dlya-ios">приложение для iOS</a>
            и <a href="https://mdlab.kz/razrabotka-prilozheniya-dlya-android">приложение для Android</a>.
        </p>

        <h3>Что такое кроссплатформенная разработка</h3>
        <p>
            Кроссплатформенный подход позволяет писать код один раз и запускать его сразу на двух платформах. Вместо двух
            отдельных команд и двух кодовых баз на Swift и Kotlin вы получаете единый продукт на Flutter или React Native.
            Такой подход обеспечивает одинаковый дизайн, синхронные обновления и заметную экономию бюджета — до 40% по сравнению
            с параллельной нативной разработкой двух версий.
        </p>

        <h3>Преимущества единой кодовой базы</h3>
        <p>
            Единая кодовая база даёт бизнесу сразу несколько выгод:
        </p>
        <ul>
            <li>Экономия до 40% бюджета и времени за счёт разработки одного кода вместо двух</li>
            <li>Быстрый выход на рынок сразу на iOS и Android</li>
            <li>Единый дизайн и стабильное восприятие бренда на всех устройствах</li>
            <li>Одновременные обновления и новые функции на обеих платформах</li>
            <li>Более дешёвая поддержка — правки вносятся один раз</li>
        </ul>

        <h3>Когда кроссплатформа выгоднее, а когда нет</h3>
        <p>
            Кроссплатформенная разработка идеально подходит для бизнес-приложений, интернет-магазинов, сервисов, маркетплейсов,
            корпоративных решений и MVP для стартапов. В этих случаях важны скорость запуска и оптимальный бюджет, а Flutter
            и React Native полностью обеспечивают нужную производительность и качество интерфейса.
        </p>
        <p>
            Нативная разработка остаётся предпочтительной для тяжёлых 3D-игр, сложных AR/VR-проектов, приложений с интенсивной
            обработкой видео или максимальной нагрузкой на «железо». Мы честно подскажем, какой подход выгоднее именно для вашей
            задачи, и не будем навязывать более дорогое решение.
        </p>

        <h3>Стоимость кроссплатформенной разработки в Казахстане</h3>
        <p>
            Цена кроссплатформенного приложения в Алматы зависит от функционала, дизайна и интеграций. Приложение-старт (MVP)
            сразу для iOS и Android стоит от 750 000 тенге. Бизнес-приложение с админ-панелью и интеграциями — от 1 500 000 тенге.
            Сложные премиум-проекты с маркетплейсом и глубокими интеграциями — от 3 000 000 тенге.
        </p>
        <p>
            Мы работаем по прозрачному ценообразованию с фиксированной стоимостью в договоре и возможностью поэтапной оплаты:
            50% предоплата, 50% после сдачи проекта.
        </p>

        <h3>Как заказать кроссплатформенное приложение</h3>
        <p>
            Заказать кроссплатформенную разработку в Modern Design Lab просто: оставьте заявку по телефону, в WhatsApp или Telegram —
            и мы бесплатно проконсультируем, подберём стек (Flutter или React Native) и рассчитаем стоимость за 24 часа. Мы берём на себя
            весь процесс: от идеи и технического задания до одновременной публикации в App Store и Google Play и последующей поддержки.
            Разработку ведём по методологии Agile, поэтому вы видите результат на каждом этапе и можете вносить правки.
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
