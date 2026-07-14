@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="/assets/css/mobile-landing.css?v=1.0">
@endpush

@push('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "Разработка приложения для доставки еды в Алматы",
    "description": "Разработка мобильного приложения для доставки еды и курьерских сервисов под ключ. GPS-трекинг курьера, статусы заказа, отдельное приложение для курьера, онлайн-оплата. Срок от 45 дней.",
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
    "serviceType": "Разработка приложения для доставки",
    "url": "https://mdlab.kz/razrabotka-prilozheniya-dlya-dostavki",
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
            "name": "Сколько стоит разработка приложения для доставки еды?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Стоимость зависит от набора функций и начинается от 1 500 000 тенге за стартовое приложение с корзиной, оплатой и базовым отслеживанием заказа. Полноценный сервис с отдельным приложением для курьера, GPS-трекингом и картами — от 3 000 000 тенге. Агрегатор доставки с личными кабинетами ресторанов и панелью диспетчера — от 6 000 000 тенге. Точную смету составим после обсуждения вашей бизнес-модели."
            }
        },
        {
            "@@type": "Question",
            "name": "Как работает GPS-трекинг курьера в приложении?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Курьер использует отдельное приложение, которое передаёт его геопозицию на сервер каждые несколько секунд. Клиент видит движущуюся метку курьера на карте в реальном времени, построенный маршрут до адреса и расчётное время прибытия. Мы используем карты 2ГИС, Яндекс.Карты или Google Maps в зависимости от ваших задач и зоны работы."
            }
        },
        {
            "@@type": "Question",
            "name": "Нужно ли отдельное приложение для курьеров?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Да, для полноценного сервиса доставки мы делаем два клиентских приложения: одно для покупателей, второе для курьеров. В приложении курьера отображаются назначенные заказы, маршрут, кнопки смены статуса (принял, забрал, доставил), а также заработок за смену. Это разделение ускоряет доставку и снижает число ошибок."
            }
        },
        {
            "@@type": "Question",
            "name": "Можно ли подключить онлайн-оплату и интеграцию с кухней?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Да. Мы подключаем эквайринг Kaspi Pay, Halyk, Cloudpayments и другие платёжные системы Казахстана, а также оплату картой в приложении. Заказы автоматически передаются на кухню через интеграцию с POS-системами (iiko, r_keeper) или в вашу учётную систему, чтобы персонал сразу видел новый заказ без ручного ввода."
            }
        },
        {
            "@@type": "Question",
            "name": "Как настраиваются зоны доставки и расчёт стоимости?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "В админ-панели вы задаёте зоны доставки на карте, для каждой зоны — стоимость и минимальную сумму заказа, бесплатную доставку от определённой суммы и время работы. Приложение автоматически определяет, попадает ли адрес клиента в зону, и рассчитывает стоимость доставки. Так вы полностью контролируете географию и экономику сервиса."
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
            "name": "Разработка приложения для доставки",
            "item": "https://mdlab.kz/razrabotka-prilozheniya-dlya-dostavki"
        }
    ]
}
</script>

<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "HowTo",
    "name": "Этапы разработки приложения для доставки еды",
    "description": "Полный цикл создания приложения для доставки и курьерского сервиса под ключ в студии Modern Design Lab.",
    "totalTime": "P45D",
    "step": [
        {
            "@@type": "HowToStep",
            "position": 1,
            "name": "Бизнес-модель и логистика",
            "text": "Изучаем модель доставки, зоны работы, схему оплаты курьерам. Определяем функционал приложений клиента и курьера, точки интеграции с кухней. Составляем ТЗ и смету."
        },
        {
            "@@type": "HowToStep",
            "position": 2,
            "name": "Прототип и дизайн",
            "text": "Проектируем экраны каталога, корзины, отслеживания заказа и карту курьера. Разрабатываем UI-дизайн приложений клиента и курьера. Согласовываем и вносим правки."
        },
        {
            "@@type": "HowToStep",
            "position": 3,
            "name": "Разработка и интеграции",
            "text": "Программируем оба приложения, серверную часть, GPS-трекинг и построение маршрута. Подключаем онлайн-оплату, карты, push-уведомления и интеграцию с POS. Работаем спринтами с демо."
        },
        {
            "@@type": "HowToStep",
            "position": 4,
            "name": "Тестирование логистики",
            "text": "Проверяем сценарии заказа, смену статусов и точность трекинга на реальных маршрутах. Тестируем оплату, зоны доставки и нагрузку. Исправляем ошибки."
        },
        {
            "@@type": "HowToStep",
            "position": 5,
            "name": "Запуск и сопровождение",
            "text": "Публикуем приложения в App Store и Google Play. Настраиваем аналитику заказов и push-уведомления. Передаём документацию, обучаем диспетчеров и курьеров."
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
            <li><span class="breadcrumbs__sep">/</span> <span aria-current="page">Разработка приложения для доставки</span></li>
        </ol>
    </div>
</nav>

<!-- HERO СЕКЦИЯ -->
<section class="home-hero">
    <div class="container">
        <div class="home-hero__wrapper">
            <div class="home-hero__content">
                <div class="home-hero__top">
                    <h1 class="home-hero__title">Разработка приложения для доставки еды в&nbsp;Алматы</h1>
                    <p class="home-hero__subtitle">GPS-трекинг курьера, приложение для клиента и&nbsp;курьера, онлайн-оплата за&nbsp;2-4 месяца</p>
                </div>
                <div class="home-hero__bottom">
                    <div class="home-hero__contact">
                        <a href="tel:+77774333822" class="btn btn_accent">Позвонить</a>
                        <a href="https://wa.me/77774333822" class="btn btn_accent btn_whatsapp1">
                            <i class="fa-brands fa-whatsapp"></i>Написать в WhatsApp
                        </a>
                    </div>
                    <p class="home-hero__description">Оставьте заявку сегодня — получите бесплатную консультацию и&nbsp;расчёт стоимости приложения для доставки!</p>
                </div>
            </div>

            <div class="home-hero__img" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="1000" data-aos-delay="200">
                <!-- Место для изображения: приложение доставки на смартфонах -->
                <img src="/assets/img/mobile-app-hero.png" alt="Разработка приложения для доставки еды в Алматы">
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
                <strong>Разработка приложения для доставки еды в Алматы</strong> — это создание готового сервиса из двух мобильных приложений (для клиента и для курьера) и админ-панели: с GPS-трекингом курьера в реальном времени, построением маршрута на карте, статусами заказа, онлайн-оплатой и интеграцией с кухней. Студия Modern Design Lab разрабатывает такие сервисы с 2014 года.
            </p>
            <p>
                Стоимость — <strong>от 1 500 000 ₸</strong> за стартовое приложение с оплатой и отслеживанием заказа, <strong>от 3 000 000 ₸</strong> за сервис с приложением курьера и GPS-трекингом, <strong>от 6 000 000 ₸</strong> за агрегатор доставки с кабинетами ресторанов. Срок разработки — <strong>от 45 дней</strong> (1,5–6 месяцев в зависимости от сложности).
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
                    <div class="summary-fact__value">GPS-трекинг</div>
                    <div class="summary-fact__label">курьер в реальном времени</div>
                </div>
                <div class="summary-fact">
                    <div class="summary-fact__value">2 приложения</div>
                    <div class="summary-fact__label">для клиента и курьера</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ТИПЫ ПРИЛОЖЕНИЙ -->
<section class="mobile-types">
    <div class="container">
        <div class="section-header">
            <h2>Какие приложения доставки мы разрабатываем</h2>
            <p>Выберите нишу — соберём под неё готовый сервис доставки</p>
        </div>

        <div class="types-grid">
            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-burger"></i>
                </div>
                <h3>Доставка еды из ресторанов</h3>
                <p>Приложение для ресторана или сети кафе: меню с фото, корзина, онлайн-оплата, статусы приготовления и доставка с трекингом курьера.</p>
                <div class="type-card__price">от 1 500 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-basket-shopping"></i>
                </div>
                <h3>Продуктовая доставка</h3>
                <p>Сервис доставки продуктов из магазина или дарксторов: большой каталог, поиск, замена товаров, сборка заказа и быстрая доставка.</p>
                <div class="type-card__price">от 2 500 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-pills"></i>
                </div>
                <h3>Доставка из аптеки</h3>
                <p>Приложение аптечной доставки: каталог препаратов, рецептурные позиции, наличие в аптеках рядом и доставка курьером на дом.</p>
                <div class="type-card__price">от 2 000 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-gift"></i>
                </div>
                <h3>Цветы и подарки</h3>
                <p>Доставка цветов и подарков: витрина букетов, выбор даты и времени, открытка получателю, фото перед вручением и трекинг курьера.</p>
                <div class="type-card__price">от 1 800 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-box"></i>
                </div>
                <h3>Курьерская служба</h3>
                <p>Приложение для доставки посылок и документов: расчёт стоимости по адресам, вызов курьера, отслеживание отправления и оплата в приложении.</p>
                <div class="type-card__price">от 2 200 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-layer-group"></i>
                </div>
                <h3>Агрегатор доставки</h3>
                <p>Маркетплейс доставки с множеством заведений: кабинеты ресторанов, панель диспетчера, распределение курьеров и комиссионная модель.</p>
                <div class="type-card__price">от 6 000 000 <span>₸</span></div>
            </div>
        </div>
    </div>
</section>

<!-- ПРЕИМУЩЕСТВА -->
<section class="mobile-advantages">
    <div class="container">
        <div class="section-header">
            <h2>Возможности приложения доставки</h2>
            <p>Всё, что нужно для запуска и роста сервиса</p>
        </div>

        <div class="advantages-grid">
            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-location-crosshairs"></i>
                </div>
                <h3>GPS-трекинг курьера</h3>
                <p>Клиент видит движение курьера на карте в реальном времени и расчётное время прибытия заказа.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-route"></i>
                </div>
                <h3>Карты и маршруты</h3>
                <p>Построение оптимального маршрута до адреса на 2ГИС, Яндекс.Картах или Google Maps.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-list-check"></i>
                </div>
                <h3>Статусы заказа</h3>
                <p>Понятная цепочка: принят, готовится, передан курьеру, в пути, доставлен — клиент всегда в курсе.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-motorcycle"></i>
                </div>
                <h3>Приложение курьера</h3>
                <p>Отдельное приложение с назначенными заказами, маршрутом, сменой статусов и учётом заработка.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-credit-card"></i>
                </div>
                <h3>Онлайн-оплата</h3>
                <p>Оплата картой, Kaspi Pay и другими системами Казахстана прямо в приложении — быстро и безопасно.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-bell"></i>
                </div>
                <h3>Push-уведомления</h3>
                <p>Оповещения о смене статуса, акциях и промокодах возвращают клиентов и повышают частоту заказов.</p>
            </div>
        </div>
    </div>
</section>

<!-- ЧТО ВХОДИТ -->
<section class="mobile-includes">
    <div class="container">
        <div class="section-header">
            <h2>Что входит в разработку</h2>
            <p>Полный цикл создания сервиса доставки под ключ</p>
        </div>

        <div class="includes-grid">
            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-clipboard-list"></i>
                </div>
                <div>
                    <h4>Анализ и ТЗ</h4>
                    <p>Изучаем модель доставки, зоны работы, схему оплаты курьерам. Составляем детальное техническое задание.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-object-group"></i>
                </div>
                <div>
                    <h4>Прототипирование</h4>
                    <p>Проектируем экраны заказа, корзины, трекинга и карту курьера. Тестируем сценарии до разработки.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-wand-magic-sparkles"></i>
                </div>
                <div>
                    <h4>UI/UX дизайн</h4>
                    <p>Дизайн приложений клиента и курьера, аппетитная витрина меню и удобная корзина.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <div>
                    <h4>Разработка</h4>
                    <p>Программируем оба приложения, сервер, GPS-трекинг и построение маршрута. Чистый код и документация.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-plug-circle-bolt"></i>
                </div>
                <div>
                    <h4>Интеграции</h4>
                    <p>Онлайн-оплата, карты, POS-системы кухни (iiko, r_keeper), SMS и push-уведомления.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-vial"></i>
                </div>
                <div>
                    <h4>Тестирование</h4>
                    <p>Проверяем заказ, оплату, трекинг и статусы на реальных маршрутах и разных устройствах.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-store"></i>
                </div>
                <div>
                    <h4>Публикация</h4>
                    <p>Размещаем приложения клиента и курьера в App Store и Google Play, проходим модерацию.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-life-ring"></i>
                </div>
                <div>
                    <h4>Поддержка</h4>
                    <p>Гарантийная поддержка после запуска: исправление багов, консультации, мелкие доработки.</p>
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
                    <h4>Бизнес-модель и логистика</h4>
                    <p>Изучаем модель доставки, зоны работы, схему оплаты курьерам. Определяем функционал приложений клиента и курьера, точки интеграции с кухней.</p>
                    <span class="step-item__time">3-5 дней</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">2</div>
                <div class="step-item__content">
                    <h4>Прототип и дизайн</h4>
                    <p>Проектируем экраны каталога, корзины, отслеживания заказа и карту курьера. Разрабатываем UI-дизайн приложений клиента и курьера.</p>
                    <span class="step-item__time">2-3 недели</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">3</div>
                <div class="step-item__content">
                    <h4>Разработка и интеграции</h4>
                    <p>Программируем оба приложения, серверную часть, GPS-трекинг и маршруты. Подключаем оплату, карты, push и интеграцию с POS.</p>
                    <span class="step-item__time">1,5-4 месяца</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">4</div>
                <div class="step-item__content">
                    <h4>Тестирование логистики</h4>
                    <p>Проверяем сценарии заказа, смену статусов и точность трекинга на реальных маршрутах. Тестируем оплату, зоны доставки и нагрузку.</p>
                    <span class="step-item__time">1-2 недели</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">5</div>
                <div class="step-item__content">
                    <h4>Запуск и сопровождение</h4>
                    <p>Публикуем приложения в App Store и Google Play. Настраиваем аналитику заказов и push. Обучаем диспетчеров и курьеров.</p>
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
                <h3>Старт</h3>
                <div class="pricing-card__price">от 1 500 000 <span>₸</span></div>
                <p class="pricing-card__desc">Приложение доставки для одного заведения</p>
                <ul class="pricing-card__features">
                    <li><i class="fa-solid fa-check"></i> iOS + Android для клиента</li>
                    <li><i class="fa-solid fa-check"></i> Меню, корзина, заказ</li>
                    <li><i class="fa-solid fa-check"></i> Онлайн-оплата</li>
                    <li><i class="fa-solid fa-check"></i> Статусы заказа</li>
                    <li><i class="fa-solid fa-check"></i> Зоны доставки и расчёт</li>
                    <li><i class="fa-solid fa-check"></i> Push-уведомления</li>
                    <li><i class="fa-solid fa-check"></i> 1 месяц поддержки</li>
                </ul>
                <a href="https://wa.me/77774333822?text=Здравствуйте!%20Интересует%20пакет%20Старт%20(от%201%20500%20000%20₸)%20—%20приложение%20для%20доставки" target="_blank" class="btn-primary-mobile btn-whatsapp">
                    <i class="fa-brands fa-whatsapp"></i> Написать в WhatsApp
                </a>
            </div>
            <div class="pricing-card featured">
                <h3>Бизнес</h3>
                <div class="pricing-card__price">от 3 000 000 <span>₸</span></div>
                <p class="pricing-card__desc">Сервис с приложением курьера</p>
                <ul class="pricing-card__features">
                    <li><i class="fa-solid fa-check"></i> Приложения клиента и курьера</li>
                    <li><i class="fa-solid fa-check"></i> GPS-трекинг в реальном времени</li>
                    <li><i class="fa-solid fa-check"></i> Карты и построение маршрута</li>
                    <li><i class="fa-solid fa-check"></i> Админ-панель и диспетчер</li>
                    <li><i class="fa-solid fa-check"></i> Рейтинги и отзывы</li>
                    <li><i class="fa-solid fa-check"></i> Интеграция с POS кухни</li>
                    <li><i class="fa-solid fa-check"></i> 3 месяца поддержки</li>
                </ul>
                <a href="https://wa.me/77774333822?text=Здравствуйте!%20Интересует%20пакет%20Бизнес%20(от%203%20000%20000%20₸)%20—%20сервис%20доставки" target="_blank" class="btn-primary-mobile btn-whatsapp">
                    <i class="fa-brands fa-whatsapp"></i> Написать в WhatsApp
                </a>
            </div>
            <div class="pricing-card">
                <h3>Премиум</h3>
                <div class="pricing-card__price">от 6 000 000 <span>₸</span></div>
                <p class="pricing-card__desc">Агрегатор доставки</p>
                <ul class="pricing-card__features">
                    <li><i class="fa-solid fa-check"></i> Множество заведений</li>
                    <li><i class="fa-solid fa-check"></i> Кабинеты ресторанов</li>
                    <li><i class="fa-solid fa-check"></i> Панель диспетчера</li>
                    <li><i class="fa-solid fa-check"></i> Распределение курьеров</li>
                    <li><i class="fa-solid fa-check"></i> Комиссионная модель и биллинг</li>
                    <li><i class="fa-solid fa-check"></i> Аналитика и отчёты</li>
                    <li><i class="fa-solid fa-check"></i> 6 месяцев поддержки</li>
                </ul>
                <a href="https://wa.me/77774333822?text=Здравствуйте!%20Интересует%20пакет%20Премиум%20(от%206%20000%20000%20₸)%20—%20агрегатор%20доставки" target="_blank" class="btn-primary-mobile btn-whatsapp">
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
            <p>Ответы на популярные вопросы о разработке приложений для доставки</p>
        </div>

        <div class="faq-list">
            <div class="faq-item active">
                <div class="faq-item__question">
                    <h4>Сколько стоит разработка приложения для доставки еды?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Стоимость зависит от набора функций и начинается от 1 500 000 тенге за стартовое приложение с корзиной, оплатой и базовым отслеживанием заказа. Полноценный сервис с отдельным приложением для курьера, GPS-трекингом и картами — от 3 000 000 тенге. Агрегатор доставки с личными кабинетами ресторанов и панелью диспетчера — от 6 000 000 тенге. Точную смету составим после обсуждения вашей бизнес-модели.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Как работает GPS-трекинг курьера в приложении?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Курьер использует отдельное приложение, которое передаёт его геопозицию на сервер каждые несколько секунд. Клиент видит движущуюся метку курьера на карте в реальном времени, построенный маршрут до адреса и расчётное время прибытия. Мы используем карты 2ГИС, Яндекс.Карты или Google Maps в зависимости от ваших задач и зоны работы.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Нужно ли отдельное приложение для курьеров?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Да, для полноценного сервиса доставки мы делаем два клиентских приложения: одно для покупателей, второе для курьеров. В приложении курьера отображаются назначенные заказы, маршрут, кнопки смены статуса (принял, забрал, доставил), а также заработок за смену. Это разделение ускоряет доставку и снижает число ошибок.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Можно ли подключить онлайн-оплату и интеграцию с кухней?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Да. Мы подключаем эквайринг Kaspi Pay, Halyk, Cloudpayments и другие платёжные системы Казахстана, а также оплату картой в приложении. Заказы автоматически передаются на кухню через интеграцию с POS-системами (iiko, r_keeper) или в вашу учётную систему, чтобы персонал сразу видел новый заказ без ручного ввода.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Как настраиваются зоны доставки и расчёт стоимости?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>В админ-панели вы задаёте зоны доставки на карте, для каждой зоны — стоимость и минимальную сумму заказа, бесплатную доставку от определённой суммы и время работы. Приложение автоматически определяет, попадает ли адрес клиента в зону, и рассчитывает стоимость доставки. Так вы полностью контролируете географию и экономику сервиса.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="mobile-cta">
    <div class="container">
        <h2>Готовы запустить сервис доставки?</h2>
        <p>Оставьте заявку и получите бесплатную консультацию и расчёт стоимости приложения за 24 часа</p>
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
        <h2>Разработка приложения для доставки еды в Алматы</h2>
        <p>
            Компания Modern Design Lab создаёт мобильные приложения для доставки еды и курьерских сервисов в Алматы под ключ.
            Мы разрабатываем сразу два приложения — для клиента и для курьера — с GPS-трекингом в реальном времени, статусами
            заказа, онлайн-оплатой и интеграцией с кухней. Наша услуга — часть направления
            <a href="https://mdlab.kz/razrabotka-mobilnyh-prilozheniy">разработки мобильных приложений</a>. Мы также делаем
            приложения смежных ниш: <a href="https://mdlab.kz/razrabotka-prilozheniya-dlya-taksi">приложение для такси</a> и
            <a href="https://mdlab.kz/razrabotka-prilozheniya-dlya-restorana">приложение для ресторана</a>.
        </p>

        <h3>Зачем бизнесу собственное приложение доставки?</h3>
        <p>
            Работа через сторонние агрегаторы забирает существенную долю выручки в виде комиссии и лишает вас прямого контакта
            с клиентом. Собственное приложение доставки возвращает контроль над сервисом и данными покупателей. Оно позволяет:
        </p>
        <ul>
            <li>Отказаться от комиссий агрегаторов и увеличить маржу с каждого заказа</li>
            <li>Собирать базу клиентов и возвращать их через push-уведомления и акции</li>
            <li>Контролировать качество доставки через GPS-трекинг и рейтинги курьеров</li>
            <li>Гибко управлять зонами доставки, ценами и минимальной суммой заказа</li>
            <li>Автоматически передавать заказы на кухню без ошибок ручного ввода</li>
        </ul>

        <h3>Как устроен сервис доставки</h3>
        <p>
            Мы разрабатываем экосистему из трёх частей. Приложение клиента — это витрина с меню, корзиной, онлайн-оплатой и
            экраном отслеживания заказа с картой курьера. Приложение курьера показывает назначенные заказы, строит маршрут и
            позволяет менять статусы одним касанием. Админ-панель управляет каталогом, зонами доставки, курьерами и отчётами.
        </p>
        <p>
            Все три части работают в связке через единый сервер. Заказ клиента моментально попадает на кухню и диспетчеру,
            назначается курьеру, а клиент в это время видит статусы: принят, готовится, в пути, доставлен — и метку курьера
            на карте в реальном времени.
        </p>

        <h3>Стоимость разработки приложения доставки в Казахстане</h3>
        <p>
            Цена зависит от ниши, количества приложений и глубины интеграций. Стартовое приложение доставки для одного
            заведения стоит от 1 500 000 тенге. Сервис с отдельным приложением курьера и GPS-трекингом — от 3 000 000 тенге.
            Агрегатор доставки с кабинетами ресторанов и панелью диспетчера — от 6 000 000 тенге.
        </p>
        <p>
            Ценообразование прозрачное, стоимость фиксируется в договоре. Возможна поэтапная оплата: 50% предоплата,
            50% после сдачи проекта.
        </p>

        <h3>Как заказать разработку приложения для доставки</h3>
        <p>
            Заказать приложение доставки в Modern Design Lab просто: оставьте заявку по телефону, в WhatsApp или Telegram —
            и мы бесплатно проконсультируем и рассчитаем стоимость за 24 часа. Сделать сервис доставки для вашего бизнеса можно
            под ключ: мы берём на себя весь процесс — от бизнес-модели и технического задания до публикации приложений клиента
            и курьера в App Store и Google Play и последующей поддержки. Разработку ведём по методологии Agile, поэтому вы
            видите результат на каждом этапе и можете вносить правки.
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
