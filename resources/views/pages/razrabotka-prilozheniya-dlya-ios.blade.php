@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="/assets/css/mobile-landing.css?v=1.0">
@endpush

@push('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "Разработка приложений для iOS в Алматы",
    "description": "Разработка нативных iOS-приложений для iPhone и iPad на Swift и SwiftUI под ключ. Публикация в App Store, интеграции Apple Pay, Sign in with Apple, push через APNs. Срок от 30 дней.",
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
    "serviceType": "Разработка приложений для iOS",
    "url": "https://mdlab.kz/razrabotka-prilozheniya-dlya-ios",
    "offers": {
        "@@type": "AggregateOffer",
        "lowPrice": "1000000",
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
            "name": "Сколько стоит разработать приложение для iOS?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Стоимость iOS-приложения начинается от 1 000 000 тенге за простое приложение для iPhone на Swift. Приложение среднего уровня с поддержкой iPhone и iPad и интеграциями (Apple Pay, Sign in with Apple) — от 2 000 000 тенге. Сложные проекты с CoreML, синхронизацией через iCloud и приложением для Apple Watch — от 3 500 000 тенге. Точную смету составим после обсуждения задачи."
            }
        },
        {
            "@@type": "Question",
            "name": "На каком языке вы разрабатываете iOS-приложения?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Мы разрабатываем нативные приложения на Swift и современном фреймворке SwiftUI, что даёт максимальную производительность и полный доступ к возможностям iPhone и iPad. При поддержке и доработке legacy-проектов используем Objective-C. Для хранения данных применяем Core Data, для сетевого слоя — URLSession и современные async/await."
            }
        },
        {
            "@@type": "Question",
            "name": "Вы публикуете приложение в App Store?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Да, мы полностью берём на себя публикацию в App Store. Помогаем оформить аккаунт Apple Developer, готовим иконки, скриншоты и описание, настраиваем App Store Connect. Приложение проектируем строго по Human Interface Guidelines, поэтому оно проходит модерацию Apple с первого раза. Перед релизом организуем закрытое тестирование через TestFlight."
            }
        },
        {
            "@@type": "Question",
            "name": "Работает ли приложение на iPhone и iPad одновременно?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Да, мы создаём универсальные приложения, которые адаптируются под экраны iPhone и iPad с помощью адаптивной вёрстки SwiftUI и Auto Layout. Для iPad реализуем расширенные сценарии: многооконность, Split View, поддержку Apple Pencil и трекпада. Это тарифицируется по пакету «Бизнес iOS» и выше."
            }
        },
        {
            "@@type": "Question",
            "name": "Почему стоит делать приложение именно под iOS?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Аудитория iOS отличается высокой платёжеспособностью: пользователи iPhone чаще совершают покупки внутри приложений и оформляют подписки. Экосистема Apple предлагает удобные и безопасные инструменты монетизации — Apple Pay, In-App Purchase, Sign in with Apple. Если ваш продукт ориентирован на премиум-сегмент, старт с iOS обычно даёт лучшую окупаемость."
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
            "name": "Разработка приложений для iOS",
            "item": "https://mdlab.kz/razrabotka-prilozheniya-dlya-ios"
        }
    ]
}
</script>

<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "HowTo",
    "name": "Этапы разработки iOS-приложения",
    "description": "Полный цикл создания нативного приложения для iPhone и iPad на Swift в студии Modern Design Lab.",
    "totalTime": "P30D",
    "step": [
        {
            "@@type": "HowToStep",
            "position": 1,
            "name": "Бриф и аналитика",
            "text": "Изучаем бизнес-задачу, целевую аудиторию iPhone и iPad, конкурентов в App Store. Определяем функционал, версии iOS и интеграции. Готовим ТЗ и смету."
        },
        {
            "@@type": "HowToStep",
            "position": 2,
            "name": "Дизайн по Human Interface Guidelines",
            "text": "Создаём прототип и UI-дизайн всех экранов по гайдлайнам Apple. Прорабатываем адаптацию под iPhone и iPad, тёмную тему и системные жесты."
        },
        {
            "@@type": "HowToStep",
            "position": 3,
            "name": "Разработка на Swift и SwiftUI",
            "text": "Программируем нативное приложение на Swift и SwiftUI, подключаем backend, Core Data, Apple Pay и push через APNs. Показываем прогресс каждую неделю."
        },
        {
            "@@type": "HowToStep",
            "position": 4,
            "name": "Тестирование через TestFlight",
            "text": "Проверяем функционал, производительность и безопасность на реальных iPhone и iPad. Раздаём сборки бета-тестерам через TestFlight и исправляем замечания."
        },
        {
            "@@type": "HowToStep",
            "position": 5,
            "name": "Публикация в App Store",
            "text": "Готовим материалы для App Store Connect, проходим модерацию Apple, публикуем релиз. Настраиваем аналитику и передаём документацию."
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
            <li><span class="breadcrumbs__sep">/</span> <span aria-current="page">Разработка приложений для iOS</span></li>
        </ol>
    </div>
</nav>

<!-- HERO СЕКЦИЯ -->
<section class="home-hero">
    <div class="container">
        <div class="home-hero__wrapper">
            <div class="home-hero__content">
                <div class="home-hero__top">
                    <h1 class="home-hero__title">Разработка приложений для iOS в&nbsp;Алматы</h1>
                    <p class="home-hero__subtitle">Нативные приложения для iPhone и&nbsp;iPad на&nbsp;Swift с&nbsp;публикацией в&nbsp;App Store</p>
                </div>
                <div class="home-hero__bottom">
                    <div class="home-hero__contact">
                        <a href="tel:+77774333822" class="btn btn_accent">Позвонить</a>
                        <a href="https://wa.me/77774333822" class="btn btn_accent btn_whatsapp1">
                            <i class="fa-brands fa-whatsapp"></i>Написать в WhatsApp
                        </a>
                    </div>
                    <p class="home-hero__description">Оставьте заявку сегодня — получите бесплатную консультацию и&nbsp;расчёт стоимости вашего iOS-приложения!</p>
                </div>
            </div>

            <div class="home-hero__img" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="1000" data-aos-delay="200">
                <!-- Место для изображения: iPhone и iPad с приложением -->
                <img src="/assets/img/mobile-app-hero.png" alt="Разработка приложений для iOS на Swift для iPhone и iPad в Алматы">
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
                        <div class="home-benefits__num"><span data-from="0" data-to="40" data-dp="0">0</span>+</div>
                        <div class="home-benefits__name">iOS-приложений выпущено в App Store</div>
                    </div>
                    <div class="home-benefits__item">
                        <div class="home-benefits__num"><span data-from="0" data-to="10" data-dp="0">0</span>+</div>
                        <div class="home-benefits__name">лет опыта на рынке<br>разработки</div>
                    </div>
                    <div class="home-benefits__item">
                        <div class="home-benefits__num"><span data-from="0" data-to="98" data-dp="0">0</span>%</div>
                        <div class="home-benefits__name">приложений проходят модерацию Apple с первого раза</div>
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
                <strong>Разработка приложений для iOS в Алматы</strong> — это создание нативных приложений для iPhone и iPad на языке Swift и фреймворке SwiftUI под ключ: от аналитики и дизайна по Human Interface Guidelines до публикации в App Store. Студия Modern Design Lab выпускает приложения для экосистемы Apple с 2014 года.
            </p>
            <p>
                Стоимость — <strong>от 1 000 000 ₸</strong> за простое приложение для iPhone, <strong>от 2 000 000 ₸</strong> за универсальное приложение для iPhone и iPad с интеграциями Apple Pay и Sign in with Apple, <strong>от 3 500 000 ₸</strong> за сложные проекты с CoreML и поддержкой Apple Watch. Срок разработки — <strong>от 30 дней</strong> (1–6 месяцев в зависимости от сложности).
            </p>
            <div class="summary-facts">
                <div class="summary-fact">
                    <div class="summary-fact__value">от 1 000 000 ₸</div>
                    <div class="summary-fact__label">стартовая стоимость</div>
                </div>
                <div class="summary-fact">
                    <div class="summary-fact__value">1–6 мес.</div>
                    <div class="summary-fact__label">срок разработки</div>
                </div>
                <div class="summary-fact">
                    <div class="summary-fact__value">iPhone + iPad</div>
                    <div class="summary-fact__label">устройства Apple</div>
                </div>
                <div class="summary-fact">
                    <div class="summary-fact__value">App Store</div>
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
            <h2>Какие iOS-приложения мы разрабатываем</h2>
            <p>Нативные решения для iPhone и iPad под любую бизнес-задачу</p>
        </div>

        <div class="types-grid">
            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-briefcase"></i>
                </div>
                <h3>Бизнес-приложения</h3>
                <p>Корпоративные iOS-приложения для сотрудников и клиентов: личные кабинеты, CRM, документооборот, отчётность на iPhone и iPad.</p>
                <div class="type-card__price">от 1 000 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <h3>E-commerce для iPhone</h3>
                <p>Мобильные магазины с каталогом, корзиной и оплатой через Apple Pay. Интеграция с 1С и CRM, push-уведомления об акциях через APNs.</p>
                <div class="type-card__price">от 1 500 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-tablet-screen-button"></i>
                </div>
                <h3>Приложения для iPad</h3>
                <p>Универсальные и планшетные приложения с многооконностью, Split View, поддержкой Apple Pencil и трекпада для работы и презентаций.</p>
                <div class="type-card__price">от 1 800 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-brands fa-apple"></i>
                </div>
                <h3>С Apple Watch</h3>
                <p>iOS-приложения с расширением для Apple Watch: уведомления, виджеты, фитнес-метрики и быстрый доступ к функциям с запястья.</p>
                <div class="type-card__price">от 2 200 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-brain"></i>
                </div>
                <h3>С ML и CoreML</h3>
                <p>Приложения с машинным обучением на устройстве через CoreML и Vision: распознавание изображений, текста, рекомендации без сервера.</p>
                <div class="type-card__price">от 2 800 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-comments"></i>
                </div>
                <h3>Соцсети и сервисы</h3>
                <p>Социальные и сервисные приложения с лентами, чатами, геолокацией и подписками. Авторизация через Sign in with Apple.</p>
                <div class="type-card__price">от 3 000 000 <span>₸</span></div>
            </div>
        </div>
    </div>
</section>

<!-- ПРЕИМУЩЕСТВА -->
<section class="mobile-advantages">
    <div class="container">
        <div class="section-header">
            <h2>Почему выбирают нас для разработки под iOS</h2>
            <p>Глубокая экспертиза в экосистеме Apple и соблюдение сроков</p>
        </div>

        <div class="advantages-grid">
            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-brands fa-swift"></i>
                </div>
                <h3>Нативный Swift</h3>
                <p>Пишем на Swift и SwiftUI — современный, безопасный и быстрый код. Приложение работает плавно на всех актуальных iPhone и iPad.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-palette"></i>
                </div>
                <h3>Human Interface Guidelines</h3>
                <p>Проектируем интерфейс строго по гайдлайнам Apple. Пользователи получают привычный и удобный опыт, а модерация проходит гладко.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>
                <h3>Безопасность Apple</h3>
                <p>Используем Keychain, биометрию Face ID и Touch ID, Sign in with Apple. Данные пользователей надёжно защищены по стандартам Apple.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-vial-circle-check"></i>
                </div>
                <h3>Тестирование в TestFlight</h3>
                <p>Раздаём бета-версии реальным пользователям через TestFlight, собираем обратную связь и краш-репорты до релиза в App Store.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-credit-card"></i>
                </div>
                <h3>Монетизация Apple</h3>
                <p>Подключаем Apple Pay, In-App Purchase и подписки. Выстраиваем удобную и прозрачную оплату для платёжеспособной аудитории iOS.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-headset"></i>
                </div>
                <h3>Поддержка после релиза</h3>
                <p>Обновляем приложение под новые версии iOS и устройства Apple, исправляем баги и развиваем функционал после запуска.</p>
            </div>
        </div>
    </div>
</section>

<!-- ЧТО ВХОДИТ -->
<section class="mobile-includes">
    <div class="container">
        <div class="section-header">
            <h2>Что входит в разработку iOS-приложения</h2>
            <p>Полный цикл создания приложения для iPhone и iPad под ключ</p>
        </div>

        <div class="includes-grid">
            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-clipboard-list"></i>
                </div>
                <div>
                    <h4>Анализ и ТЗ</h4>
                    <p>Изучаем бизнес, аудиторию iPhone и iPad, конкурентов в App Store. Составляем детальное техническое задание.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-object-group"></i>
                </div>
                <div>
                    <h4>Прототипирование</h4>
                    <p>Создаём интерактивный прототип всех экранов и проверяем пользовательские сценарии до старта разработки.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-wand-magic-sparkles"></i>
                </div>
                <div>
                    <h4>Дизайн по HIG</h4>
                    <p>Разрабатываем дизайн по Human Interface Guidelines: тёмная тема, адаптация под iPhone и iPad, системные жесты.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <div>
                    <h4>Разработка на Swift</h4>
                    <p>Программируем на Swift и SwiftUI, подключаем backend, Core Data и REST/GraphQL API. Чистый код с документацией.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-vial"></i>
                </div>
                <div>
                    <h4>Тестирование</h4>
                    <p>Проверяем приложение на реальных iPhone и iPad, раздаём сборки бета-тестерам через TestFlight, исправляем баги.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-store"></i>
                </div>
                <div>
                    <h4>Публикация в App Store</h4>
                    <p>Оформляем App Store Connect, готовим иконки и скриншоты, проходим модерацию Apple и публикуем релиз.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-bell"></i>
                </div>
                <div>
                    <h4>Push и интеграции</h4>
                    <p>Настраиваем push-уведомления через APNs, подключаем Apple Pay, Sign in with Apple и внешние сервисы.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-life-ring"></i>
                </div>
                <div>
                    <h4>Поддержка</h4>
                    <p>Гарантийная поддержка 3 месяца: обновления под новые версии iOS, исправление багов, консультации.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ЭТАПЫ РАБОТЫ -->
<section class="mobile-steps">
    <div class="container">
        <div class="section-header">
            <h2>Этапы разработки iOS-приложения</h2>
            <p>Прозрачный процесс — вы всегда в курсе статуса проекта</p>
        </div>

        <div class="steps-timeline">
            <div class="step-item">
                <div class="step-item__number">1</div>
                <div class="step-item__content">
                    <h4>Бриф и аналитика</h4>
                    <p>Изучаем бизнес-задачу, аудиторию iPhone и iPad, конкурентов в App Store. Определяем функционал, версии iOS и интеграции. Готовим ТЗ и смету.</p>
                    <span class="step-item__time">3-5 дней</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">2</div>
                <div class="step-item__content">
                    <h4>Дизайн по HIG</h4>
                    <p>Создаём прототип и UI-дизайн всех экранов по Human Interface Guidelines. Прорабатываем адаптацию под iPhone и iPad, тёмную тему и жесты.</p>
                    <span class="step-item__time">2-3 недели</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">3</div>
                <div class="step-item__content">
                    <h4>Разработка на Swift</h4>
                    <p>Программируем нативное приложение на Swift и SwiftUI, подключаем backend, Core Data, Apple Pay и push через APNs. Демонстрируем прогресс каждую неделю.</p>
                    <span class="step-item__time">1-3 месяца</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">4</div>
                <div class="step-item__content">
                    <h4>Тестирование в TestFlight</h4>
                    <p>Проверяем функционал, производительность и безопасность на реальных iPhone и iPad. Раздаём сборки бета-тестерам через TestFlight и исправляем замечания.</p>
                    <span class="step-item__time">1-2 недели</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">5</div>
                <div class="step-item__content">
                    <h4>Публикация в App Store</h4>
                    <p>Готовим материалы для App Store Connect, проходим модерацию Apple, публикуем релиз. Настраиваем аналитику и передаём документацию.</p>
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
            <h2>Стоимость разработки под iOS</h2>
            <p>Выберите подходящий пакет или закажите индивидуальный расчёт</p>
        </div>
        <div class="pricing-grid">
            <div class="pricing-card">
                <h3>Базовый iOS</h3>
                <div class="pricing-card__price">1 000 000 <span>₸</span></div>
                <p class="pricing-card__desc">Простое приложение для iPhone</p>
                <ul class="pricing-card__features">
                    <li><i class="fa-solid fa-check"></i> Только iPhone</li>
                    <li><i class="fa-solid fa-check"></i> До 10 экранов</li>
                    <li><i class="fa-solid fa-check"></i> Дизайн по HIG</li>
                    <li><i class="fa-solid fa-check"></i> Sign in with Apple</li>
                    <li><i class="fa-solid fa-check"></i> Push через APNs</li>
                    <li><i class="fa-solid fa-check"></i> Публикация в App Store</li>
                    <li><i class="fa-solid fa-check"></i> 1 месяц поддержки</li>
                </ul>
                <a href="https://wa.me/77774333822?text=Здравствуйте!%20Интересует%20пакет%20Базовый%20iOS%20(1%20000%20000%20₸)" target="_blank" class="btn-primary-mobile btn-whatsapp">
                    <i class="fa-brands fa-whatsapp"></i> Написать в WhatsApp
                </a>
            </div>
            <div class="pricing-card featured">
                <h3>Бизнес iOS</h3>
                <div class="pricing-card__price">2 000 000 <span>₸</span></div>
                <p class="pricing-card__desc">Универсальное для iPhone и iPad</p>
                <ul class="pricing-card__features">
                    <li><i class="fa-solid fa-check"></i> iPhone + iPad</li>
                    <li><i class="fa-solid fa-check"></i> До 25 экранов</li>
                    <li><i class="fa-solid fa-check"></i> Уникальный дизайн</li>
                    <li><i class="fa-solid fa-check"></i> Apple Pay и In-App Purchase</li>
                    <li><i class="fa-solid fa-check"></i> Интеграции API и Core Data</li>
                    <li><i class="fa-solid fa-check"></i> Тестирование в TestFlight</li>
                    <li><i class="fa-solid fa-check"></i> 3 месяца поддержки</li>
                </ul>
                <a href="https://wa.me/77774333822?text=Здравствуйте!%20Интересует%20пакет%20Бизнес%20iOS%20(2%20000%20000%20₸)" target="_blank" class="btn-primary-mobile btn-whatsapp">
                    <i class="fa-brands fa-whatsapp"></i> Написать в WhatsApp
                </a>
            </div>
            <div class="pricing-card">
                <h3>Премиум iOS</h3>
                <div class="pricing-card__price">от 3 500 000 <span>₸</span></div>
                <p class="pricing-card__desc">Сложные решения для экосистемы Apple</p>
                <ul class="pricing-card__features">
                    <li><i class="fa-solid fa-check"></i> iPhone + iPad + Apple Watch</li>
                    <li><i class="fa-solid fa-check"></i> Неограничено экранов</li>
                    <li><i class="fa-solid fa-check"></i> Премиум дизайн</li>
                    <li><i class="fa-solid fa-check"></i> CoreML и Vision</li>
                    <li><i class="fa-solid fa-check"></i> Синхронизация через iCloud</li>
                    <li><i class="fa-solid fa-check"></i> Интеграция 1С, CRM</li>
                    <li><i class="fa-solid fa-check"></i> 6 месяцев поддержки</li>
                </ul>
                <a href="https://wa.me/77774333822?text=Здравствуйте!%20Интересует%20пакет%20Премиум%20iOS%20(от%203%20500%20000%20₸)" target="_blank" class="btn-primary-mobile btn-whatsapp">
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
            <p>Современный стек Apple для надёжных iOS-приложений</p>
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
                    <svg viewBox="0 0 24 24" fill="#F05138" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="SwiftUI"><path d="M7.508 0c-.287 0-.573 0-.86.002-.241.002-.483.003-.724.01-.132.003-.263.009-.395.015A9.154 9.154 0 0 0 4.348.15 5.492 5.492 0 0 0 2.85.645 5.04 5.04 0 0 0 .645 2.848c-.245.48-.4.972-.495 1.5-.093.52-.122 1.05-.136 1.576a35.2 35.2 0 0 0-.012.724C0 6.935 0 7.221 0 7.508v8.984c0 .287 0 .575.002.862.002.24.005.481.012.722.014.526.043 1.057.136 1.576.095.528.25 1.02.495 1.5a5.03 5.03 0 0 0 2.205 2.203c.48.244.97.4 1.498.495.52.093 1.05.124 1.576.138.241.007.483.009.724.01.287.002.573.002.86.002h8.984c.287 0 .573 0 .86-.002.241-.001.483-.003.724-.01a10.523 10.523 0 0 0 1.578-.138 5.322 5.322 0 0 0 1.498-.495 5.035 5.035 0 0 0 2.203-2.203c.245-.48.4-.972.495-1.5.093-.52.124-1.05.138-1.576.007-.241.009-.481.01-.722.002-.287.002-.575.002-.862V7.508c0-.287 0-.573-.002-.86a33.662 33.662 0 0 0-.01-.724 10.5 10.5 0 0 0-.138-1.576 5.328 5.328 0 0 0-.495-1.5A5.039 5.039 0 0 0 21.152.645 5.32 5.32 0 0 0 19.654.15a10.493 10.493 0 0 0-1.578-.138 34.98 34.98 0 0 0-.722-.01C17.067 0 16.779 0 16.492 0H7.508zm6.035 3.41c4.114 2.47 6.545 7.162 5.549 11.131-.024.093-.05.181-.076.272l.002.001c2.062 2.538 1.5 5.258 1.236 4.745-1.072-2.086-3.066-1.568-4.088-1.043a6.803 6.803 0 0 1-.281.158l-.02.012-.002.002c-2.115 1.123-4.957 1.205-7.812-.022a12.568 12.568 0 0 1-5.64-4.838c.649.48 1.35.902 2.097 1.252 3.019 1.414 6.051 1.311 8.197-.002C9.651 12.73 7.101 9.67 5.146 7.191a10.628 10.628 0 0 1-1.005-1.384c2.34 2.142 6.038 4.83 7.365 5.576C8.69 8.408 6.208 4.743 6.324 4.86c4.436 4.47 8.528 6.996 8.528 6.996.154.085.27.154.36.213.085-.215.16-.437.224-.668.708-2.588-.09-5.548-1.893-7.992z"/></svg>
                </div>
                <span>SwiftUI</span>
            </div>
            <div class="tech-item">
                <div class="tech-item__logo">
                    <svg viewBox="0 0 24 24" fill="#438EFF" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Objective-C"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm0 2.4a9.6 9.6 0 1 1 0 19.2 9.6 9.6 0 0 1 0-19.2zm-1.03 4.32c-2.53 0-4.17 1.86-4.17 4.86v.84c0 3 1.64 4.86 4.17 4.86 2.2 0 3.77-1.36 3.96-3.37h-1.86c-.16 1.03-.9 1.66-2.06 1.66-1.42 0-2.28-1.13-2.28-3.15v-.84c0-2 .86-3.15 2.28-3.15 1.16 0 1.9.66 2.06 1.74h1.86c-.17-2.06-1.76-3.5-3.96-3.5zm6.7.18v9.9h1.86v-9.9h-1.86z"/></svg>
                </div>
                <span>Objective-C</span>
            </div>
            <div class="tech-item">
                <div class="tech-item__logo">
                    <svg viewBox="0 0 24 24" fill="#0C7BFE" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Core Data"><path d="M12 1.5C6.2 1.5 1.5 3.1 1.5 5.1v13.8c0 2 4.7 3.6 10.5 3.6s10.5-1.6 10.5-3.6V5.1c0-2-4.7-3.6-10.5-3.6zm8.6 17.4c0 .9-3.5 2.1-8.6 2.1s-8.6-1.2-8.6-2.1v-2.7c1.9 1 5 1.6 8.6 1.6s6.7-.6 8.6-1.6v2.7zm0-6.9c0 .9-3.5 2.1-8.6 2.1s-8.6-1.2-8.6-2.1V9.3c1.9 1 5 1.6 8.6 1.6s6.7-.6 8.6-1.6v2.7zM12 9.1C6.9 9.1 3.4 7.9 3.4 7S6.9 4.9 12 4.9s8.6 1.2 8.6 2.1S17.1 9.1 12 9.1z"/></svg>
                </div>
                <span>Core Data</span>
            </div>
            <div class="tech-item">
                <div class="tech-item__logo">
                    <svg viewBox="0 0 24 24" fill="#000000" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Apple Pay"><path d="M4.383 8.246c-.687.03-1.5.463-1.977 1.05-.433.518-.81 1.343-.665 2.13.762.06 1.54-.39 2.003-.977.448-.573.75-1.383.639-2.203zm.62 2.34c-1.1-.065-2.036.624-2.562.624-.526 0-1.33-.593-2.2-.577-1.132.016-2.18.657-2.762 1.673-1.18 2.046-.31 5.076.84 6.74.56.815 1.23 1.73 2.113 1.698.848-.033 1.168-.55 2.194-.55 1.026 0 1.313.55 2.21.534.916-.017 1.494-.83 2.054-1.647.646-.943.91-1.856.926-1.904-.02-.008-1.778-.683-1.795-2.706-.016-1.692 1.383-2.502 1.446-2.55-.79-1.166-2.02-1.296-2.454-1.324M12.5 8.5v9h1.4v-3.07h1.94c1.77 0 3.02-1.22 3.02-2.97s-1.22-2.96-2.97-2.96H12.5zm1.4 1.18h1.62c1.22 0 1.92.65 1.92 1.79s-.7 1.8-1.93 1.8h-1.61V9.68zm6.66 7.94c.88 0 1.7-.45 2.07-1.16h.03v1.09h1.29v-4.47c0-1.3-1.04-2.14-2.64-2.14-1.48 0-2.58.85-2.62 2.02h1.26c.1-.55.62-.92 1.32-.92.84 0 1.32.4 1.32 1.12v.49l-1.73.1c-1.6.1-2.47.76-2.47 1.9 0 1.16.9 1.93 2.19 1.93zm.38-1.07c-.73 0-1.2-.35-1.2-.9 0-.55.45-.88 1.31-.93l1.54-.1v.5c0 .82-.7 1.43-1.65 1.43z"/></svg>
                </div>
                <span>Apple Pay</span>
            </div>
            <div class="tech-item">
                <div class="tech-item__logo">
                    <svg viewBox="0 0 24 24" fill="#0D96F2" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="TestFlight"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm4.9 6.7c.33 0 .6.27.6.6 0 .1-.02.2-.07.29l-4.9 8.86a.9.9 0 0 1-.79.47.9.9 0 0 1-.79-.47l-2.05-3.7a.6.6 0 0 1 .52-.9c.22 0 .42.12.53.31l1.79 3.23 4.63-8.37a.6.6 0 0 1 .53-.31zM6.4 12.9l1.3 2.35a.6.6 0 0 1-.52.9.6.6 0 0 1-.53-.31l-1.3-2.35a.6.6 0 0 1 .53-.9c.22 0 .42.12.52.31z"/></svg>
                </div>
                <span>TestFlight</span>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="mobile-faq">
    <div class="container">
        <div class="section-header">
            <h2>Частые вопросы</h2>
            <p>Ответы на популярные вопросы о разработке приложений для iOS</p>
        </div>

        <div class="faq-list">
            <div class="faq-item active">
                <div class="faq-item__question">
                    <h4>Сколько стоит разработать приложение для iOS?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Стоимость iOS-приложения начинается от 1 000 000 тенге за простое приложение для iPhone на Swift. Приложение среднего уровня с поддержкой iPhone и iPad и интеграциями (Apple Pay, Sign in with Apple) — от 2 000 000 тенге. Сложные проекты с CoreML, синхронизацией через iCloud и приложением для Apple Watch — от 3 500 000 тенге. Точную смету составим после обсуждения задачи.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>На каком языке вы разрабатываете iOS-приложения?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Мы разрабатываем нативные приложения на Swift и современном фреймворке SwiftUI, что даёт максимальную производительность и полный доступ к возможностям iPhone и iPad. При поддержке и доработке legacy-проектов используем Objective-C. Для хранения данных применяем Core Data, для сетевого слоя — URLSession и современные async/await.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Вы публикуете приложение в App Store?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Да, мы полностью берём на себя публикацию в App Store. Помогаем оформить аккаунт Apple Developer, готовим иконки, скриншоты и описание, настраиваем App Store Connect. Приложение проектируем строго по Human Interface Guidelines, поэтому оно проходит модерацию Apple с первого раза. Перед релизом организуем закрытое тестирование через TestFlight.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Работает ли приложение на iPhone и iPad одновременно?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Да, мы создаём универсальные приложения, которые адаптируются под экраны iPhone и iPad с помощью адаптивной вёрстки SwiftUI и Auto Layout. Для iPad реализуем расширенные сценарии: многооконность, Split View, поддержку Apple Pencil и трекпада. Это тарифицируется по пакету «Бизнес iOS» и выше.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Почему стоит делать приложение именно под iOS?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Аудитория iOS отличается высокой платёжеспособностью: пользователи iPhone чаще совершают покупки внутри приложений и оформляют подписки. Экосистема Apple предлагает удобные и безопасные инструменты монетизации — Apple Pay, In-App Purchase, Sign in with Apple. Если ваш продукт ориентирован на премиум-сегмент, старт с iOS обычно даёт лучшую окупаемость.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="mobile-cta">
    <div class="container">
        <h2>Готовы обсудить ваше iOS-приложение?</h2>
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
        <h2>Разработка приложений для iOS в Алматы</h2>
        <p>
            Компания Modern Design Lab разрабатывает нативные приложения для iOS в Алматы — для iPhone и iPad на языке Swift
            и фреймворке SwiftUI. Мы создаём быстрые, безопасные и удобные приложения по гайдлайнам Apple: от бизнес-сервисов
            и мобильных магазинов до сложных продуктов с машинным обучением. Каждый проект доводим до публикации в App Store
            и последующей поддержки.
        </p>

        <h3>Почему бизнесу выгодна аудитория iOS?</h3>
        <p>
            Владельцы iPhone традиционно относятся к платёжеспособной аудитории. Они чаще оформляют подписки и совершают
            покупки внутри приложений, а экосистема Apple делает оплату быстрой и безопасной. Собственное iOS-приложение
            позволяет:
        </p>
        <ul>
            <li>Выйти на премиум-аудиторию, готовую платить за качественный продукт</li>
            <li>Монетизировать сервис через Apple Pay, In-App Purchase и подписки</li>
            <li>Повышать вовлечённость с помощью push-уведомлений через APNs и виджетов</li>
            <li>Использовать возможности устройства: Face ID, камеру, геолокацию, CoreML</li>
            <li>Укрепить имидж бренда за счёт присутствия в App Store</li>
        </ul>

        <h3>Наш подход к разработке под iOS</h3>
        <p>
            Мы работаем по методологии Agile с еженедельными демонстрациями результата. Приложения пишем на Swift и SwiftUI,
            проектируем интерфейс строго по Human Interface Guidelines и тестируем на реальных iPhone и iPad. Перед релизом
            раздаём сборки бета-тестерам через TestFlight, чтобы собрать обратную связь и устранить недочёты до публикации.
        </p>
        <p>
            Мы настраиваем интеграции, важные для экосистемы Apple: авторизацию Sign in with Apple, оплату Apple Pay,
            push-уведомления через APNs, синхронизацию данных через iCloud и локальное хранилище Core Data. При необходимости
            добавляем расширение для Apple Watch и функции машинного обучения на устройстве через CoreML.
        </p>

        <h3>Стоимость разработки iOS-приложения в Казахстане</h3>
        <p>
            Цена разработки приложения для iOS в Алматы зависит от функционала, дизайна, количества устройств и интеграций.
            Простое приложение для iPhone стоит от 1 000 000 тенге. Универсальное приложение для iPhone и iPad с Apple Pay
            и другими интеграциями — от 2 000 000 тенге. Сложные проекты с CoreML, iCloud и поддержкой Apple Watch — от
            3 500 000 тенге. Стоимость фиксируем в договоре, возможна поэтапная оплата.
        </p>

        <h3>Как заказать разработку приложения для iOS</h3>
        <p>
            Заказать разработку iOS-приложения в Modern Design Lab просто: оставьте заявку по телефону, в WhatsApp или
            Telegram — и мы бесплатно проконсультируем и рассчитаем стоимость за 24 часа. Мы берём на себя весь процесс:
            от идеи и технического задания до публикации в App Store и поддержки. Помимо iOS, мы предлагаем полный спектр
            мобильной разработки — смотрите общий раздел
            <a href="https://mdlab.kz/razrabotka-mobilnyh-prilozheniy">разработка мобильных приложений</a>,
            а также <a href="https://mdlab.kz/razrabotka-prilozheniya-dlya-android">разработку приложений для Android</a>
            и <a href="https://mdlab.kz/krossplatformennaya-razrabotka">кроссплатформенную разработку</a>, если вам нужно
            приложение сразу для двух платформ.
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
