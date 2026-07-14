@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="/assets/css/mobile-landing.css?v=1.0">
@endpush

@push('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "Разработка мобильного приложения для интернет-магазина в Алматы",
    "description": "Создание мобильного приложения для интернет-магазина под ключ: каталог товаров, корзина, онлайн-оплата Kaspi и Halyk, интеграция с 1С и CRM, синхронизация остатков, программа лояльности. Срок от 30 дней.",
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
    "serviceType": "Разработка мобильного приложения для интернет-магазина",
    "url": "https://mdlab.kz/razrabotka-prilozheniya-internet-magazina",
    "offers": {
        "@@type": "AggregateOffer",
        "lowPrice": "1250000",
        "highPrice": "5000000",
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
            "name": "Сколько стоит разработка мобильного приложения для интернет-магазина?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Базовое приложение с каталогом, корзиной и онлайн-оплатой обойдётся от 1 250 000 тенге. Полноценное приложение для iOS и Android с интеграцией 1С, CRM и программой лояльности — от 2 500 000 тенге. Крупные проекты уровня маркетплейса с несколькими продавцами и сложной логикой — от 5 000 000 тенге. Точную смету подготовим после разбора вашего каталога и бизнес-процессов."
            }
        },
        {
            "@@type": "Question",
            "name": "Можно ли подключить оплату через Kaspi и Halyk?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Да, мы подключаем оплату через Kaspi (Kaspi Pay, рассрочка Red), Halyk Bank, а также классический эквайринг Visa и Mastercard. Клиент оплачивает заказ прямо в приложении в пару касаний, а деньги поступают на ваш расчётный счёт. Также доступны оплата при получении и безналичный расчёт для B2B-клиентов."
            }
        },
        {
            "@@type": "Question",
            "name": "Как приложение синхронизируется с 1С и остатками на складе?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Мы настраиваем двустороннюю интеграцию с 1С, МойСклад или вашей CRM через API. Товары, цены, характеристики и остатки подтягиваются автоматически, а новые заказы из приложения сразу попадают в учётную систему. Синхронизация остатков происходит в реальном времени, поэтому покупатель не закажет товар, которого нет на складе."
            }
        },
        {
            "@@type": "Question",
            "name": "Будет ли в приложении программа лояльности и push-уведомления?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Да. Мы реализуем накопительные бонусы, персональные скидки, промокоды и уровни клиентов. Push-уведомления помогают сообщать об акциях, новых поступлениях, брошенной корзине и статусе заказа. Это увеличивает повторные продажи и средний чек без затрат на платную рекламу."
            }
        },
        {
            "@@type": "Question",
            "name": "Сколько времени занимает разработка приложения интернет-магазина?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Базовое приложение с каталогом и оплатой мы запускаем за 1–1,5 месяца. Приложение с интеграцией 1С, CRM и программой лояльности — за 2,5–3,5 месяца. Проект уровня маркетплейса с личными кабинетами продавцов — от 4 месяцев. Сроки фиксируем в договоре и показываем прогресс на еженедельных демо."
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
            "name": "Приложение для интернет-магазина",
            "item": "https://mdlab.kz/razrabotka-prilozheniya-internet-magazina"
        }
    ]
}
</script>

<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "HowTo",
    "name": "Этапы разработки мобильного приложения для интернет-магазина",
    "description": "Полный цикл создания e-commerce приложения под ключ в студии Modern Design Lab: от аудита каталога до запуска в App Store и Google Play.",
    "totalTime": "P30D",
    "step": [
        {
            "@@type": "HowToStep",
            "position": 1,
            "name": "Аудит каталога и бизнес-процессов",
            "text": "Разбираем товарную матрицу, структуру каталога, систему учёта (1С, CRM) и логику заказов. Определяем способы оплаты и доставки. Составляем ТЗ и смету."
        },
        {
            "@@type": "HowToStep",
            "position": 2,
            "name": "Прототип и дизайн магазина",
            "text": "Проектируем витрину, карточку товара, корзину и оформление заказа. Рисуем UI-дизайн всех экранов с акцентом на удобство покупки. Согласовываем макеты."
        },
        {
            "@@type": "HowToStep",
            "position": 3,
            "name": "Разработка и интеграции",
            "text": "Программируем каталог, корзину и личный кабинет. Подключаем оплату Kaspi, Halyk, эквайринг, интеграцию с 1С и синхронизацию остатков. Еженедельные демо."
        },
        {
            "@@type": "HowToStep",
            "position": 4,
            "name": "Тестирование покупок",
            "text": "Проверяем весь путь клиента: от поиска товара до оплаты и получения. Тестируем платежи, push-уведомления и работу на реальных устройствах. Исправляем ошибки."
        },
        {
            "@@type": "HowToStep",
            "position": 5,
            "name": "Запуск и рост продаж",
            "text": "Публикуем в App Store и Google Play. Настраиваем аналитику, push-рассылки и программу лояльности. Обучаем команду и сопровождаем после запуска."
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
            <li><span class="breadcrumbs__sep">/</span> <span aria-current="page">Приложение для интернет-магазина</span></li>
        </ol>
    </div>
</nav>

<!-- HERO СЕКЦИЯ -->
<section class="home-hero">
    <div class="container">
        <div class="home-hero__wrapper">
            <div class="home-hero__content">
                <div class="home-hero__top">
                    <h1 class="home-hero__title">Разработка мобильного приложения для интернет-магазина в&nbsp;Алматы</h1>
                    <p class="home-hero__subtitle">Каталог, корзина, онлайн-оплата Kaspi и&nbsp;Halyk, интеграция с&nbsp;1С за&nbsp;1-3 месяца</p>
                </div>
                <div class="home-hero__bottom">
                    <div class="home-hero__contact">
                        <a href="tel:+77774333822" class="btn btn_accent">Позвонить</a>
                        <a href="https://wa.me/77774333822" class="btn btn_accent btn_whatsapp1">
                            <i class="fa-brands fa-whatsapp"></i>Написать в WhatsApp
                        </a>
                    </div>
                    <p class="home-hero__description">Оставьте заявку сегодня — получите бесплатную консультацию и&nbsp;расчёт стоимости приложения для вашего магазина!</p>
                </div>
            </div>

            <div class="home-hero__img" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="1000" data-aos-delay="200">
                <!-- Место для изображения: смартфоны с приложением магазина -->
                <img src="/assets/img/mobile-app-hero.png" alt="Разработка мобильного приложения для интернет-магазина в Алматы">
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
                        <div class="home-benefits__name">рост продаж через мобильный канал</div>
                    </div>
                    <div class="home-benefits__item">
                        <div class="home-benefits__num"><span data-from="0" data-to="10" data-dp="0">0</span>+</div>
                        <div class="home-benefits__name">лет опыта в e-commerce<br>разработке</div>
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
                <strong>Разработка мобильного приложения для интернет-магазина в Алматы</strong> — это создание e-commerce приложения для iOS и Android под ключ: витрина с каталогом товаров, корзина, удобное оформление заказа, онлайн-оплата через Kaspi, Halyk и эквайринг, интеграция с 1С и CRM, синхронизация остатков и программа лояльности. Студия Modern Design Lab разрабатывает приложения для магазинов с 2014 года.
            </p>
            <p>
                Стоимость — <strong>от 1 250 000 ₸</strong> за базовое приложение с каталогом и оплатой, <strong>от 2 500 000 ₸</strong> за приложение с интеграцией 1С и лояльностью, <strong>от 5 000 000 ₸</strong> за проекты уровня маркетплейса. Срок разработки — <strong>от 30 дней</strong> (1–4 месяца в зависимости от сложности).
            </p>
            <div class="summary-facts">
                <div class="summary-fact">
                    <div class="summary-fact__value">от 1 250 000 ₸</div>
                    <div class="summary-fact__label">стартовая стоимость</div>
                </div>
                <div class="summary-fact">
                    <div class="summary-fact__value">1–4 мес.</div>
                    <div class="summary-fact__label">срок разработки</div>
                </div>
                <div class="summary-fact">
                    <div class="summary-fact__value">Kaspi + Halyk</div>
                    <div class="summary-fact__label">онлайн-оплата</div>
                </div>
                <div class="summary-fact">
                    <div class="summary-fact__value">1С + CRM</div>
                    <div class="summary-fact__label">интеграция и остатки</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ТИПЫ ПРИЛОЖЕНИЙ -->
<section class="mobile-types">
    <div class="container">
        <div class="section-header">
            <h2>Приложения для каких магазинов мы разрабатываем</h2>
            <p>Подберём решение под специфику вашего товара и покупателя</p>
        </div>

        <div class="types-grid">
            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-shirt"></i>
                </div>
                <h3>Магазин одежды и обуви</h3>
                <p>Приложение с фотогалереей товаров, фильтрами по размеру и цвету, избранным и подсказками размеров. Push-уведомления о новых коллекциях и распродажах.</p>
                <div class="type-card__price">от 1 250 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-laptop"></i>
                </div>
                <h3>Электроника и техника</h3>
                <p>Каталог с подробными характеристиками, сравнением моделей, отзывами и рассрочкой Kaspi. Интеграция с 1С и синхронизация остатков по складам.</p>
                <div class="type-card__price">от 1 800 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-basket-shopping"></i>
                </div>
                <h3>Продукты и FMCG</h3>
                <p>Быстрый повторный заказ, списки покупок, слоты доставки и оплата в приложении. Идеально для супермаркетов и магазинов у дома.</p>
                <div class="type-card__price">от 2 000 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-store"></i>
                </div>
                <h3>Маркетплейс</h3>
                <p>Площадка с несколькими продавцами, личными кабинетами, рейтингами и разделением выплат. Сложная логика заказов и модерация товаров.</p>
                <div class="type-card__price">от 5 000 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-boxes-stacked"></i>
                </div>
                <h3>B2B-каталог</h3>
                <p>Оптовые прайсы, персональные цены для клиентов, безналичная оплата и быстрый повторный заказ. Интеграция с 1С и учётной системой.</p>
                <div class="type-card__price">от 2 500 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-truck-fast"></i>
                </div>
                <h3>Магазин с доставкой</h3>
                <p>Онлайн-оплата, отслеживание заказа, зоны и стоимость доставки, push о статусе. Подходит для магазинов с собственной курьерской службой.</p>
                <div class="type-card__price">от 2 200 000 <span>₸</span></div>
            </div>
        </div>
    </div>
</section>

<!-- ПРЕИМУЩЕСТВА -->
<section class="mobile-advantages">
    <div class="container">
        <div class="section-header">
            <h2>Что получит ваш магазин</h2>
            <p>Приложение, которое продаёт и удерживает клиентов</p>
        </div>

        <div class="advantages-grid">
            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-layer-group"></i>
                </div>
                <h3>Удобный каталог</h3>
                <p>Категории, фильтры, поиск и карточки товаров с фото и характеристиками. Покупатель быстро находит нужное и добавляет в корзину.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-wallet"></i>
                </div>
                <h3>Оплата Kaspi и Halyk</h3>
                <p>Подключаем Kaspi Pay, рассрочку Red, Halyk и эквайринг Visa/Mastercard. Оплата в пару касаний прямо в приложении.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-arrows-rotate"></i>
                </div>
                <h3>Синхронизация с 1С</h3>
                <p>Товары, цены и остатки обновляются автоматически, заказы попадают в учётную систему. Без ручного переноса данных.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-bell"></i>
                </div>
                <h3>Push об акциях</h3>
                <p>Уведомления о скидках, новинках, брошенной корзине и статусе заказа. Возвращают клиентов без затрат на рекламу.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-gift"></i>
                </div>
                <h3>Программа лояльности</h3>
                <p>Накопительные бонусы, персональные скидки, промокоды и уровни клиентов. Растит повторные продажи и средний чек.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-user"></i>
                </div>
                <h3>Личный кабинет</h3>
                <p>История заказов, избранное, адреса доставки и бонусный счёт. Клиенту удобно возвращаться и заказывать снова.</p>
            </div>
        </div>
    </div>
</section>

<!-- ЧТО ВХОДИТ -->
<section class="mobile-includes">
    <div class="container">
        <div class="section-header">
            <h2>Что входит в разработку</h2>
            <p>Полный цикл создания приложения для интернет-магазина под ключ</p>
        </div>

        <div class="includes-grid">
            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-clipboard-list"></i>
                </div>
                <div>
                    <h4>Аудит каталога</h4>
                    <p>Разбираем товарную матрицу, структуру категорий и учётную систему. Составляем детальное техническое задание.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-object-group"></i>
                </div>
                <div>
                    <h4>Прототип витрины</h4>
                    <p>Проектируем путь покупателя: витрина, карточка товара, корзина, оформление заказа. Тестируем UX до разработки.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-wand-magic-sparkles"></i>
                </div>
                <div>
                    <h4>UI/UX дизайн</h4>
                    <p>Разрабатываем продающий дизайн всех экранов по гайдлайнам платформ. Акцент на скорость и удобство покупки.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <div>
                    <h4>Каталог и корзина</h4>
                    <p>Программируем каталог с фильтрами, корзину, оформление заказа и личный кабинет. Чистый масштабируемый код.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-credit-card"></i>
                </div>
                <div>
                    <h4>Онлайн-оплата</h4>
                    <p>Подключаем Kaspi, Halyk и эквайринг. Настраиваем чеки, возвраты и уведомления об успешной оплате.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-arrows-rotate"></i>
                </div>
                <div>
                    <h4>Интеграция 1С и CRM</h4>
                    <p>Настраиваем обмен товарами, ценами, остатками и заказами. Синхронизация остатков в реальном времени.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-bell"></i>
                </div>
                <div>
                    <h4>Push и лояльность</h4>
                    <p>Настраиваем push-уведомления об акциях, бонусную программу, промокоды и персональные скидки.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-store"></i>
                </div>
                <div>
                    <h4>Публикация</h4>
                    <p>Размещаем в App Store и Google Play. Готовим описания, скриншоты и проходим модерацию.</p>
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
                    <h4>Аудит каталога и бизнес-процессов</h4>
                    <p>Разбираем товарную матрицу, систему учёта (1С, CRM) и логику заказов. Определяем способы оплаты и доставки. Составляем ТЗ и смету.</p>
                    <span class="step-item__time">3-5 дней</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">2</div>
                <div class="step-item__content">
                    <h4>Прототип и дизайн магазина</h4>
                    <p>Проектируем витрину, карточку товара, корзину и оформление заказа. Рисуем UI-дизайн всех экранов. Согласовываем макеты.</p>
                    <span class="step-item__time">2-3 недели</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">3</div>
                <div class="step-item__content">
                    <h4>Разработка и интеграции</h4>
                    <p>Программируем каталог, корзину и личный кабинет. Подключаем оплату Kaspi, Halyk, интеграцию с 1С и синхронизацию остатков. Еженедельные демо.</p>
                    <span class="step-item__time">1-2,5 месяца</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">4</div>
                <div class="step-item__content">
                    <h4>Тестирование покупок</h4>
                    <p>Проверяем весь путь клиента: от поиска товара до оплаты и получения. Тестируем платежи и push на реальных устройствах. Исправляем ошибки.</p>
                    <span class="step-item__time">1-2 недели</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">5</div>
                <div class="step-item__content">
                    <h4>Запуск и рост продаж</h4>
                    <p>Публикуем в App Store и Google Play. Настраиваем аналитику, push-рассылки и программу лояльности. Обучаем команду и сопровождаем.</p>
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
            <h2>Стоимость разработки</h2>
            <p>Выберите подходящий пакет или закажите индивидуальный расчёт</p>
        </div>
        <div class="pricing-grid">
            <div class="pricing-card">
                <h3>Базовый</h3>
                <div class="pricing-card__price">от 1 250 000 <span>₸</span></div>
                <p class="pricing-card__desc">Старт продаж в мобильном</p>
                <ul class="pricing-card__features">
                    <li><i class="fa-solid fa-check"></i> iOS + Android</li>
                    <li><i class="fa-solid fa-check"></i> Каталог с фильтрами</li>
                    <li><i class="fa-solid fa-check"></i> Корзина и оформление заказа</li>
                    <li><i class="fa-solid fa-check"></i> Онлайн-оплата Kaspi</li>
                    <li><i class="fa-solid fa-check"></i> Личный кабинет</li>
                    <li><i class="fa-solid fa-check"></i> Push-уведомления</li>
                    <li><i class="fa-solid fa-check"></i> Публикация в магазины</li>
                </ul>
                <a href="https://wa.me/77774333822?text=Здравствуйте!%20Интересует%20пакет%20Базовый%20(от%201%20250%20000%20₸)" target="_blank" class="btn-primary-mobile btn-whatsapp">
                    <i class="fa-brands fa-whatsapp"></i> Написать в WhatsApp
                </a>
            </div>
            <div class="pricing-card featured">
                <h3>Бизнес</h3>
                <div class="pricing-card__price">от 2 500 000 <span>₸</span></div>
                <p class="pricing-card__desc">Магазин с интеграциями</p>
                <ul class="pricing-card__features">
                    <li><i class="fa-solid fa-check"></i> Всё из пакета «Базовый»</li>
                    <li><i class="fa-solid fa-check"></i> Интеграция с 1С и CRM</li>
                    <li><i class="fa-solid fa-check"></i> Синхронизация остатков</li>
                    <li><i class="fa-solid fa-check"></i> Оплата Halyk и эквайринг</li>
                    <li><i class="fa-solid fa-check"></i> Программа лояльности</li>
                    <li><i class="fa-solid fa-check"></i> История заказов и повтор</li>
                    <li><i class="fa-solid fa-check"></i> 3 месяца поддержки</li>
                </ul>
                <a href="https://wa.me/77774333822?text=Здравствуйте!%20Интересует%20пакет%20Бизнес%20(от%202%20500%20000%20₸)" target="_blank" class="btn-primary-mobile btn-whatsapp">
                    <i class="fa-brands fa-whatsapp"></i> Написать в WhatsApp
                </a>
            </div>
            <div class="pricing-card">
                <h3>Премиум</h3>
                <div class="pricing-card__price">от 5 000 000 <span>₸</span></div>
                <p class="pricing-card__desc">Маркетплейс и сложные решения</p>
                <ul class="pricing-card__features">
                    <li><i class="fa-solid fa-check"></i> Всё из пакета «Бизнес»</li>
                    <li><i class="fa-solid fa-check"></i> Несколько продавцов</li>
                    <li><i class="fa-solid fa-check"></i> Кабинеты и выплаты</li>
                    <li><i class="fa-solid fa-check"></i> Рекомендации и AI-поиск</li>
                    <li><i class="fa-solid fa-check"></i> B2B и персональные цены</li>
                    <li><i class="fa-solid fa-check"></i> Расширенная аналитика</li>
                    <li><i class="fa-solid fa-check"></i> 6 месяцев поддержки</li>
                </ul>
                <a href="https://wa.me/77774333822?text=Здравствуйте!%20Интересует%20пакет%20Премиум%20(от%205%20000%20000%20₸)" target="_blank" class="btn-primary-mobile btn-whatsapp">
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
            <p>Используем современный стек для надёжных e-commerce решений</p>
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
            <p>Ответы на популярные вопросы о приложениях для интернет-магазинов</p>
        </div>

        <div class="faq-list">
            <div class="faq-item active">
                <div class="faq-item__question">
                    <h4>Сколько стоит разработка мобильного приложения для интернет-магазина?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Базовое приложение с каталогом, корзиной и онлайн-оплатой обойдётся от 1 250 000 тенге. Полноценное приложение для iOS и Android с интеграцией 1С, CRM и программой лояльности — от 2 500 000 тенге. Крупные проекты уровня маркетплейса с несколькими продавцами и сложной логикой — от 5 000 000 тенге. Точную смету подготовим после разбора вашего каталога и бизнес-процессов.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Можно ли подключить оплату через Kaspi и Halyk?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Да, мы подключаем оплату через Kaspi (Kaspi Pay, рассрочка Red), Halyk Bank, а также классический эквайринг Visa и Mastercard. Клиент оплачивает заказ прямо в приложении в пару касаний, а деньги поступают на ваш расчётный счёт. Также доступны оплата при получении и безналичный расчёт для B2B-клиентов.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Как приложение синхронизируется с 1С и остатками на складе?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Мы настраиваем двустороннюю интеграцию с 1С, МойСклад или вашей CRM через API. Товары, цены, характеристики и остатки подтягиваются автоматически, а новые заказы из приложения сразу попадают в учётную систему. Синхронизация остатков происходит в реальном времени, поэтому покупатель не закажет товар, которого нет на складе.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Будет ли в приложении программа лояльности и push-уведомления?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Да. Мы реализуем накопительные бонусы, персональные скидки, промокоды и уровни клиентов. Push-уведомления помогают сообщать об акциях, новых поступлениях, брошенной корзине и статусе заказа. Это увеличивает повторные продажи и средний чек без затрат на платную рекламу.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Сколько времени занимает разработка приложения интернет-магазина?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Базовое приложение с каталогом и оплатой мы запускаем за 1–1,5 месяца. Приложение с интеграцией 1С, CRM и программой лояльности — за 2,5–3,5 месяца. Проект уровня маркетплейса с личными кабинетами продавцов — от 4 месяцев. Сроки фиксируем в договоре и показываем прогресс на еженедельных демо.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="mobile-cta">
    <div class="container">
        <h2>Готовы запустить приложение для своего магазина?</h2>
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
        <h2>Разработка мобильного приложения для интернет-магазина в Алматы</h2>
        <p>
            Компания Modern Design Lab создаёт мобильные приложения для интернет-магазинов в Алматы под ключ.
            Мы разрабатываем e-commerce приложения для iOS и Android с каталогом товаров, корзиной, онлайн-оплатой
            через Kaspi и Halyk, интеграцией с 1С и CRM. Это часть нашего направления
            <a href="https://mdlab.kz/razrabotka-mobilnyh-prilozheniy">разработки мобильных приложений</a> — если вашему бизнесу
            нужна логистика, посмотрите отдельное <a href="https://mdlab.kz/razrabotka-prilozheniya-dlya-dostavki">приложение для доставки</a>,
            а по вопросам платежей — <a href="https://mdlab.kz/razrabotka-prilozheniya-s-oplatoy">приложение с онлайн-оплатой</a>.
        </p>

        <h3>Зачем интернет-магазину собственное приложение?</h3>
        <p>
            Мобильный канал давно обгоняет десктоп по числу покупок. Собственное приложение делает покупателя
            постоянным: он всегда носит витрину в кармане, а вы напрямую общаетесь с ним через push-уведомления.
            Приложение для интернет-магазина позволяет:
        </p>
        <ul>
            <li>Увеличить продажи и средний чек за счёт удобного мобильного канала</li>
            <li>Вернуть клиентов push-уведомлениями об акциях и брошенной корзине</li>
            <li>Удержать покупателей программой лояльности и персональными скидками</li>
            <li>Ускорить повторные заказы через историю покупок и избранное</li>
            <li>Автоматизировать заказы благодаря синхронизации с 1С и остатками</li>
        </ul>

        <h3>Каталог, корзина и оформление заказа</h3>
        <p>
            Основа любого e-commerce приложения — удобная витрина. Мы проектируем каталог с понятными категориями,
            фильтрами и быстрым поиском, детальные карточки товаров с фото, характеристиками и отзывами, а также
            простую корзину и оформление заказа в несколько шагов. Чем короче путь от выбора товара до оплаты,
            тем выше конверсия и меньше брошенных корзин.
        </p>
        <p>
            Каждый экран проектируется по гайдлайнам Apple и Google, чтобы приложение выглядело нативно и работало
            быстро даже при большом каталоге. Оформление заказа поддерживает выбор адреса и способа доставки,
            промокоды и списание бонусов.
        </p>

        <h3>Онлайн-оплата, интеграция с 1С и синхронизация остатков</h3>
        <p>
            Мы подключаем оплату через Kaspi, рассрочку Red, Halyk Bank и эквайринг Visa/Mastercard — клиент платит
            прямо в приложении. Двусторонняя интеграция с 1С и CRM автоматически обновляет товары, цены и остатки,
            а новые заказы сразу попадают в учётную систему. Синхронизация остатков в реальном времени исключает
            заказы отсутствующих товаров и разгружает менеджеров.
        </p>
        <p>
            Стоимость приложения для интернет-магазина в Алматы зависит от размера каталога и набора интеграций:
            базовое решение — от 1 250 000 тенге, приложение с 1С и программой лояльности — от 2 500 000 тенге,
            маркетплейс — от 5 000 000 тенге. Возможна поэтапная оплата: 50% предоплата, 50% после сдачи проекта.
        </p>

        <h3>Как заказать разработку приложения для магазина</h3>
        <p>
            Заказать создание мобильного приложения для интернет-магазина в Modern Design Lab просто: оставьте заявку
            по телефону, в WhatsApp или Telegram — и мы бесплатно проконсультируем и рассчитаем стоимость за 24 часа.
            Мы берём на себя весь процесс: аудит каталога, дизайн, разработку, подключение оплаты Kaspi и Halyk,
            интеграцию с 1С, публикацию в App Store и Google Play и поддержку после запуска. Работаем по методологии
            Agile, поэтому вы видите результат на каждом этапе и растите продажи через мобильный канал.
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
