@extends('layouts.app')
@push('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "Разработка Telegram ботов в Алматы",
    "description": "Создание Telegram ботов для бизнеса: автоматизация продаж, интеграция с CRM, боты для поддержки клиентов и приёма заказов.",
    "provider": {
        "@@type": "Organization",
        "name": "Modern Design Lab"
    },
    "areaServed": {
        "@@type": "City",
        "name": "Алматы"
    },
    "serviceType": "Разработка Telegram ботов",
    "offers": {
        "@@type": "Offer",
        "price": "150000",
        "priceCurrency": "KZT",
        "priceSpecification": {
            "@@type": "PriceSpecification",
            "price": "150000",
            "priceCurrency": "KZT",
            "unitText": "от"
        }
    },
    "hasOfferCatalog": {
        "@@type": "OfferCatalog",
        "name": "Виды Telegram ботов",
        "itemListElement": [
            {
                "@@type": "Offer",
                "itemOffered": {
                    "@@type": "Service",
                    "name": "Боты для продаж и заказов"
                }
            },
            {
                "@@type": "Offer",
                "itemOffered": {
                    "@@type": "Service",
                    "name": "Боты для поддержки клиентов"
                }
            },
            {
                "@@type": "Offer",
                "itemOffered": {
                    "@@type": "Service",
                    "name": "Интеграция с CRM и 1С"
                }
            },
            {
                "@@type": "Offer",
                "itemOffered": {
                    "@@type": "Service",
                    "name": "Боты для рассылок"
                }
            }
        ]
    }
}
</script>
@endpush
@section('content')
@push('styles')
<link rel="stylesheet" href="/assets/bots/css/main-bots.css">
<link rel="stylesheet" href="/assets/css/form.css">
@endpush
<section class="bots-hero">
        <div class="container">
            <div class="bots-hero__wrapper">
                <div class="bots-hero__img" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-offset="200"
                     data-aos-duration="1000" data-aos-delay="200"><img src="assets/img/bots/bots-hero.png" alt="">
                </div>
                <div class="bots-hero__content">
                    <h1 class="bots-hero__title">Разработка<br>Telegram-ботов&nbsp;в&nbsp;Алматы</h1>
                    <p class="bots-hero__subtitle">автоматизация бизнеса с mdlab</p>

                    <div class="bots-hero__contact">
                        <a href="#recallModal" data-fancybox="" class="btn btn_accent">Заказать звонок</a>
                        <a href="#" class="btn btn_whatsapp"><i class="fa-brands fa-whatsapp"></i>Написать в WhatsApp</a>
                    </div>
                    <div class="bots-hero__explanation">
                        <p><a href="/">Партнер Google&nbsp;Ads</a></p>
                        <p>Работем с Google Ads более 10-ти лет. Регулярно сдаем необходимые экзамены
                            и&nbsp;аттестации.</p>
                    </div>

                    <div class="bots-hero__info" data-aos="fade-left" data-aos-easing="ease-out-cubic"
                         data-aos-offset="200" data-aos-duration="1000" data-aos-delay="200">
                        <p>Современные бизнесы в Алматы активно переходят на цифровые каналы коммуникации. Телеграм-боты
                            помогают автоматизировать обслуживание клиентов и продажи, оставаясь на связи 24/7.</p>
                        <p>Команда mdlab специализируется на создании надёжных и&nbsp;функциональных телеграм-ботов,
                            которые обеспечивают рост вашей аудитории и&nbsp;увеличение дохода.</p>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <section class="section-bots">
        <div class="container">
            <div class="section-bots__header">
                <div class="section-bots__img"><img src="assets/img/bots/bots-hi.png" alt=""></div>
                <h2 class="section-bots__h2">Что такое Telegram-бот</h2>
                <span class="section-bots__subtitle">и кому он нужен</span>
                <p class="section-bots__description">
                    Телеграм-бот — это программный инструмент, встроенный в мессенджер Telegram, который взаимодействует
                    с пользователями при помощи текстовых сообщений, кнопок и&nbsp;встроенных меню. Бот может выполнять
                    практически любые задачи —&nbsp;от&nbsp;предоставления справочной информации до&nbsp;приёма
                    платежей.
                </p>
            </div>
            <div class="section-bots__body">
                <div class="bots-features">
                    <h3 class="section-bots__h3">Преимущества для бизнеса</h3>

                    <div class="bots-features__list">
                        <article class="bots-features__item">
                            <div class="bots-features__icon"><img src="assets/img/bots/icons/robot.svg" alt=""></div>
                            <div class="bots-features__content">
                                <h4 class="bots-features__name">Автоматизация обслуживания</h4>
                                <div class="bots-features__description">Бот отвечает на частые запросы без участия
                                    оператора.
                                </div>
                            </div>
                        </article>

                        <article class="bots-features__item">
                            <div class="bots-features__icon"><img src="assets/img/bots/icons/client.svg" alt=""></div>
                            <div class="bots-features__content">
                                <h4 class="bots-features__name">Удобство для клиента</h4>
                                <div class="bots-features__description">Telegram — один из&nbsp;самых популярных
                                    мессенджеров в Казахстане, значит, вы&nbsp;ближе к&nbsp;своей&nbsp;аудитории.
                                </div>
                            </div>
                        </article>

                        <article class="bots-features__item">
                            <div class="bots-features__icon"><img src="assets/img/bots/icons/expenses.svg" alt=""></div>
                            <div class="bots-features__content">
                                <h4 class="bots-features__name">Снижение расходов</h4>
                                <div class="bots-features__description">Меньше ручной работы, меньше ошибок и&nbsp;больше
                                    времени на развитие бизнеса.
                                </div>
                            </div>
                        </article>

                        <article class="bots-features__item">
                            <div class="bots-features__icon"><img src="assets/img/bots/icons/marketing.svg" alt="">
                            </div>
                            <div class="bots-features__content">
                                <h4 class="bots-features__name">Маркетинговые возможности</h4>
                                <div class="bots-features__description">Ведение рассылок, проведение опросов, запуск
                                    акций и&nbsp;многое другое.
                                </div>
                            </div>
                        </article>


                    </div>

                </div>
                <div class="bots-whom">
                    <div class="bots-whom__wrapper">
                        <div class="bots-whom__col">
                            <h3 class="section-bots__h3">Кому подходит</h3>
                            <div class="bots-whom__img bots-whom__img_mb"><img src="assets/img/bots/features.png"
                                                                               alt=""></div>
                            <div class="bots-whom__list">
                                <div class="bots-whom__item">
                                    <div class="bots-whom__name">Интернет-магазины</div>
                                    <p class="bots-whom__description">Оформление заказов, уведомления о&nbsp;статусе
                                        доставки.</p>
                                </div>
                                <div class="bots-whom__item">
                                    <div class="bots-whom__name">Службам доставки</div>
                                    <p class="bots-whom__description">Отслеживание посылок, уведомления о&nbsp;статусе,
                                        обратная связь.</p>
                                </div>
                                <div class="bots-whom__item">
                                    <div class="bots-whom__name">Инфобизнесу</div>
                                    <p class="bots-whom__description">Рассылка обучающих материалов, ведение курсов,
                                        чат-боты-помощники.</p>
                                </div>
                                <div class="bots-whom__item">
                                    <div class="bots-whom__name">Банкам, страховым компаниям</div>
                                    <p class="bots-whom__description">Консультации по продуктам, сбор заявок, первичные
                                        расчёты.</p>
                                </div>
                                <div class="bots-whom__item">
                                    <div class="bots-whom__name">Ресторанный бизнес</div>
                                    <p class="bots-whom__description">Онлайн-бронирование, доставка, сбор отзывов.</p>
                                </div>
                                <div class="bots-whom__item">
                                    <a href="#recallModal" data-fancybox="" class="btn btn_accent">Заказать консультацию</a>
                                </div>
                            </div>
                        </div>
                        <div class="bots-whom__col _right">
                            <div class="bots-whom__img bots-whom__img_pc"><img src="assets/img/bots/features.png"
                                                                               alt=""></div>
                            <div class="bots-whom__info" data-aos="fade-left" data-aos-easing="ease-out-cubic"
                                 data-aos-offset="200" data-aos-duration="1000" data-aos-delay="200"
                                 data-aos-once="true">
                                <p>Таким образом, телеграм-боты полезны компаниям любой сферы, ориентированным на
                                    удобную и&nbsp;быструю коммуникацию с клиентами.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-bots">
        <div class="container">
            <div class="section-bots__header">
                <div class="section-bots__img"><img src="assets/img/bots/bots-megaphone.png" alt=""></div>
                <h2 class="section-bots__h2">Наши услуги</h2>
                <span class="section-bots__subtitle">по разработке телеграм-ботов в&nbsp;Алматы</span>
                <p class="section-bots__description">
                    Мы предлагаем полный комплекс работ, начиная с&nbsp;анализа бизнес-процессов и&nbsp;заканчивая
                    постоянной поддержкой и&nbsp;продвижением бота.
                </p>
            </div>
            <div class="section-bots__body">
                <div class="bots-stages">
                    <h3 class="section-bots__h3">Основные этапы и направления нашей работы</h3>
                    <div class="bots-stages__wrapper">
                        <div class="bots-stages__nav">
                            <a href="#" class="bots-stages__link _active" data-menu="0">
                                <img src="assets/img/bots/icons/loupe.svg" alt="">
                                <span>Анализ потребностей</span>
                            </a>
                            <a href="#" class="bots-stages__link" data-menu="1">
                                <img src="assets/img/bots/icons/architecture.svg" alt="">
                                <span>Разработка архитектуры</span>
                            </a>
                            <a href="#" class="bots-stages__link" data-menu="2">
                                <img src="assets/img/bots/icons/integration.svg" alt="">
                                <span>Интеграции</span>
                            </a>
                            <a href="#" class="bots-stages__link" data-menu="3">
                                <img src="assets/img/bots/icons/support.svg" alt="">
                                <span>Тестирование и поддержка</span>
                            </a>
                            <a href="#" class="bots-stages__link" data-menu="4">
                                <img src="assets/img/bots/icons/rocket.svg" alt="">
                                <span>Продвижение</span>
                            </a>
                        </div>
                        <div class="bots-stages__body">
                            <div class="bots-stages__item" data-content="0">
                                <p>Изучаем специфику вашего бизнеса, целевую аудиторию и текущие процессы.</p>
                                <p>Определяем главные цели: увеличить продажи, оптимизировать службу поддержки, повысить
                                    лояльность клиента.</p>
                            </div>
                            <div class="bots-stages__item" style="display: none" data-content="1">
                                <p>Изучаем специфику вашего бизнеса, целевую аудиторию и текущие процессы.</p>
                                <p>Определяем главные цели: увеличить продажи, оптимизировать службу поддержки, повысить
                                    лояльность клиента.</p>
                                <p>Определяем главные цели: увеличить продажи, оптимизировать службу поддержки, повысить
                                    лояльность клиента.</p>
                            </div>
                            <div class="bots-stages__item" style="display: none" data-content="2">
                                <p>Изучаем специфику вашего бизнеса, целевую аудиторию и текущие процессы.</p>
                                <p>Определяем главные цели: увеличить продажи, оптимизировать службу поддержки, повысить
                                    лояльность клиента.</p>
                                <p>Определяем главные цели: увеличить продажи, оптимизировать службу поддержки, повысить
                                    лояльность клиента.</p>
                                <p>Определяем главные цели: увеличить продажи, оптимизировать службу поддержки, повысить
                                    лояльность клиента.</p>
                            </div>
                            <div class="bots-stages__item" style="display: none" data-content="3">
                                <p>Изучаем специфику вашего бизнеса, целевую аудиторию и текущие процессы.</p>
                                <p>Изучаем специфику вашего бизнеса, целевую аудиторию и текущие процессы.</p>
                                <p>Определяем главные цели: увеличить продажи, оптимизировать службу поддержки, повысить
                                    лояльность клиента.</p>
                            </div>
                            <div class="bots-stages__item" style="display: none" data-content="4">
                                <p>Изучаем специфику вашего бизнеса, целевую аудиторию и текущие процессы.</p>
                                <p>Изучаем специфику вашего бизнеса, целевую аудиторию и текущие процессы.</p>
                                <p>Определяем главные цели: увеличить продажи, оптимизировать службу поддержки, повысить
                                    лояльность клиента.</p>
                                <p>Определяем главные цели: увеличить продажи, оптимизировать службу поддержки, повысить
                                    лояльность клиента.</p>
                            </div>
                        </div>
                        <div class="bots-stages__img" data-aos="fade-up" data-aos-easing="ease-out-cubic"
                             data-aos-offset="200" data-aos-duration="1000" data-aos-delay="200" data-aos-once="true">
                            <div class="rocket" id="rocket"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-bots section-bots_horizontal">
        <div class="container">
            <div class="section-bots__header">
                <div class="section-bots__img"><img src="assets/img/bots/bots-ai.png" alt=""></div>
                <h2 class="section-bots__h2">Этапы разработки</h2>
                <span class="section-bots__subtitle">телеграм-бота</span>
            </div>
            <div class="section-bots__body">
                <div class="bots-develop">
                    <div class="bots-develop__item">
                        <div class="bots-develop__num">01</div>
                        <h3 class="bots-develop__name">Брифинг и анализ</h3>
                        <ul class="bots-develop__list">
                            <li><span>Заполняем подробный бриф, обсуждаем задачи, цели и&nbsp;ключевые метрики.</span>
                            </li>
                            <li><span>Проводим исследование рынка и&nbsp;целевой аудитории в&nbsp;Алматы.</span></li>
                        </ul>
                    </div>
                    <div class="bots-develop__item">
                        <div class="bots-develop__num">02</div>
                        <h3 class="bots-develop__name">Проектирование и дизайн</h3>
                        <ul class="bots-develop__list">
                            <li><span>Разрабатываем скрипт общения и&nbsp;прототип интерфейса бота.</span></li>
                            <li><span>Создаём удобный пользовательский опыт (UI/UX), чтобы бот решал задачи максимально эффективно.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="bots-develop__item">
                        <div class="bots-develop__num">03</div>
                        <h3 class="bots-develop__name">Разработка MVP</h3>
                        <ul class="bots-develop__list">
                            <li><span>Реализуем базовый функционал, позволяющий проверить гипотезы и&nbsp;собрать первую обратную связь от&nbsp;пользователей.</span>
                            </li>
                            <li>
                                <span>Гибко реагируем на изменения и&nbsp;корректируем стратегию при необходимости.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="bots-develop__item">
                        <div class="bots-develop__num">04</div>
                        <h3 class="bots-develop__name">Тестирование</h3>
                        <ul class="bots-develop__list">
                            <li><span>Проверяем бота на разных устройствах и&nbsp;при различных сценариях поведения пользователей.</span>
                            </li>
                            <li><span>Оптимизируем скорость отклика, добавляем нужные улучшения.</span></li>
                        </ul>
                    </div>
                    <div class="bots-develop__item">
                        <div class="bots-develop__num">05</div>
                        <h3 class="bots-develop__name">Продвижение</h3>
                        <ul class="bots-develop__list">
                            <li><span>Рекомендуем эффективные маркетинговые инструменты и каналы привлечения пользователей.</span>
                            </li>
                            <li><span>Помогаем с настройкой рекламных кампаний, рассылок, а&nbsp;также аналитикой конверсий.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-bots">
        <div class="container">
            <div class="section-bots__header">
                <div class="section-bots__img"><img src="assets/img/bots/bots-dialog.png" alt=""></div>
                <h2 class="section-bots__h2">Стоимость и сроки</h2>
                <p class="section-bots__description">Стоимость и сроки зависят от сложности бота, требуемых интеграций и
                    объёма работы над дизайном. Примерные диапазоны представлены перед Вами.</p>
            </div>
            <div class="section-bots__body">
                <div class="bots-tariffs">
                    <div class="bots-tariffs__item">
                        <div class="bots-tariffs__img"><img src="assets/img/bots/bots-tariff-1.png" alt=""></div>
                        <div class="bots-tariffs__header">
                            <h3 class="bots-tariffs__name">Простой бот</h3>
                            <p class="bots-tariffs__desc">FAQ, базовая рассылка, обработка заявок</p>
                        </div>
                        <div class="bots-tariffs__footer">
                            <div class="bots-tariffs__price">от 50 000 ₸</div>
                            <div class="bots-tariffs__term">2-3 недели</div>
                            <a href="#recallModal" data-fancybox="" class="btn btn_accent">Заказать звонок</a>
                        </div>
                    </div>

                    <div class="bots-tariffs__item">
                        <div class="bots-tariffs__img"><img src="assets/img/bots/bots-tariff-2.png" alt=""></div>
                        <div class="bots-tariffs__header">
                            <h3 class="bots-tariffs__name">Средней сложности бот</h3>
                            <p class="bots-tariffs__desc">Подключение к CRM, онлайн-оплата, продвинутые сценарии
                                общения</p>
                        </div>
                        <div class="bots-tariffs__footer">
                            <div class="bots-tariffs__price">от 250 000 ₸</div>
                            <div class="bots-tariffs__term">3-6 недель</div>
                            <a href="#recallModal" data-fancybox="" class="btn btn_accent">Заказать звонок</a>
                        </div>
                    </div>

                    <div class="bots-tariffs__item">
                        <div class="bots-tariffs__img"><img src="assets/img/bots/bots-tariff-3.png" alt=""></div>
                        <div class="bots-tariffs__header">
                            <h3 class="bots-tariffs__name">Продвинутый бот</h3>
                            <p class="bots-tariffs__desc">Сложная логика, интеграции с&nbsp;несколькими сервисами,
                                индивидуальный&nbsp;дизайн</p>
                        </div>
                        <div class="bots-tariffs__footer">
                            <div class="bots-tariffs__price">Договорная</div>
                            <div class="bots-tariffs__term">от 6 недель</div>
                            <a href="#recallModal" data-fancybox="" class="btn btn_accent">Заказать звонок</a>
                        </div>
                    </div>

                </div>

                <div class="bots-info" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-offset="200"
                     data-aos-duration="1000" data-aos-delay="200" data-aos-once="false">
                    <p>Мы предоставляем прозрачную смету, где виден каждый этап и его стоимость. Для уточнения деталей и
                        персонального расчёта — свяжитесь с нами любым удобным способом.</p>
                </div>
            </div>
        </div>
    </section>
	@include('partials.rateit')
@endsection