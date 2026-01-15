@extends('layouts.app')
@push('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "Настройка контекстной рекламы в Алматы",
    "description": "Настройка и ведение контекстной рекламы Google Ads и Яндекс Директ. Увеличение продаж и привлечение клиентов.",
    "provider": {
        "@@type": "Organization",
        "name": "Modern Design Lab"
    },
    "areaServed": {
        "@@type": "City",
        "name": "Алматы"
    },
    "serviceType": "Контекстная реклама",
    "offers": {
        "@@type": "Offer",
        "price": "100000",
        "priceCurrency": "KZT",
        "priceSpecification": {
            "@@type": "PriceSpecification",
            "price": "100000",
            "priceCurrency": "KZT",
            "unitText": "от"
        }
    },
    "hasOfferCatalog": {
        "@@type": "OfferCatalog",
        "name": "Услуги контекстной рекламы",
        "itemListElement": [
            {
                "@@type": "Offer",
                "itemOffered": {
                    "@@type": "Service",
                    "name": "Google Ads"
                }
            },
            {
                "@@type": "Offer",
                "itemOffered": {
                    "@@type": "Service",
                    "name": "Яндекс Директ"
                }
            },
            {
                "@@type": "Offer",
                "itemOffered": {
                    "@@type": "Service",
                    "name": "Ремаркетинг"
                }
            }
        ]
    }
}
</script>
@endpush
@section('content')
@push('styles')
<link rel="stylesheet" href="/assets/kontekst/main.css">
<link rel="stylesheet" href="/assets/css/form.css">
@endpush
<section class="hero">
        <div class="hero__content">
            <div class="container">
                <div class="hero__body">
                    <h1 class="hero__title">Контекстная реклама Google <span>в Казахстане</span></h1>
                    <p class="hero__description">Создаём, настраиваем и ведём
                        контекстную рекламу, которая увеличивает
                        количество клиентов для вашего бизнеса.</p>

                    <div class="hero__contact">
                        <a href="#recallModal" data-fancybox="" class="btn btn_accent">Заказать звонок</a>
                        <a href="#" class="btn btn_whatsapp"><i class="fa-brands fa-whatsapp"></i>Написать в WhatsApp</a>
                    </div>
                    <p class="hero__explanation"><a href="/">Партнер Google Ads</a>
                        Работем с Google Ads более 10-ти лет.<br>Регулярно сдаем необходимые экзамены и аттестации</p>
                </div>
            </div>
        </div>
        <div class="hero__illustration">
            <div id="clouds">
                <div class="cloud x1"></div>
                <div class="cloud x2"></div>
                <div class="cloud x3"></div>
                <div class="cloud x4"></div>
                <div class="cloud x5"></div>
            </div>
            <div class="centered-clouds-rain">
                <span>{Технологии}</span>
                <span>{Инновации}</span>
                <span>{Креатив}</span>
                <span>{Доступность}</span>
                <span>{Возможности}</span>
                <span>{Поддержка}</span>
            </div>
            <div class="centered-clouds-rain"></div>
            <picture>
                <source srcset="/assets/img/hero-img.webp" type="image/webp">
                <img src="/assets/img/hero-img.png" alt="Hero Image" width="1200" height="600">
            </picture>
        </div>

    </section>

    <section class="benefits">
        <div class="container">
            <div class="row">
                <div class="col"><h2 class="benefits__title">Чего мы достигли?</h2></div>
            </div>
            <div class="benefits__inner row align-items-stretch">
                <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="benefits__item">
                        <div class="benefits__num"><span data-from="0" data-to="500" data-dp="0">0</span></div>
                        <div class="benefits__name">Более 500 довольных&nbsp;клиентов</div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="benefits__item">
                        <div class="benefits__num"><span data-from="0" data-to="100" data-dp="0">0</span></div>
                        <div class="benefits__name">Более 100 успешных рекламных компаний</div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-4 mb-md-0">
                    <div class="benefits__item">
                        <div class="benefits__num"><span data-from="0" data-to="14" data-dp="0">0</span> лет</div>
                        <div class="benefits__name">На рынке с&nbsp;2010 года</div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="benefits__item">
                        <div class="benefits__num"><span data-from="0" data-to="1000000" data-dp="0">0</span></div>
                        <div class="benefits__name">Нам доверили более $&nbsp;1&nbsp;млн. бюджета</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col"><h2 class="features__title">Почему именно мы?</h2></div>
            </div>
            <div class="row align-items-stretch gy-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="features__item">
                        <div class="features__img"><img src="/assets/img/features/google-ads.png" alt=""></div>
                        <div class="features__desc">Команда сертифицированных специалистов Google Ads с многолетним
                            опытом
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="features__item">
                        <div class="features__img"><img src="/assets/img/features/price-down.png" alt=""></div>
                        <div class="features__desc">Гарантируем самую низкую цену на услуги контекстной рекламы в
                            городе
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="features__item">
                        <div class="features__img"><img src="/assets/img/features/client.png" alt=""></div>
                        <div class="features__desc">Индивидуальный подход к каждому клиенту, разработка уникальных
                            стратегий
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="features__item">
                        <div class="features__img"><img src="/assets/img/features/benefit.png" alt=""></div>
                        <div class="features__desc">Наши клиенты получают в среднем на 30% больше конверсий</div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="features__item">
                        <div class="features__img"><img src="/assets/img/features/support.png" alt=""></div>
                        <div class="features__desc">Круглосуточная поддержка и полное сопровождение на всех этапах
                            рекламной кампании
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="features__item">
                        <div class="features__img"><img src="/assets/img/features/modern-platform.png" alt=""></div>
                        <div class="features__desc">Используем современные инструменты и платформы для оптимизации
                            рекламных кампаний.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="price dark-bg">
        <div class="container">
            <div class="row">
                <div class="col"><h2 class="price__title">Стоимость услуг</h2></div>
            </div>
            <div class="row">
                <div class="col-md-7 col-lg-8">
                    <ul class="price__list">
                        <li>Создание контекстной рекламы фокусируется на Вашей прибыли.</li>
                        <li>Вы платите только за готовый результат.</li>
                        <li>Контекстная реклама снижает до 50% расходы на рекламу.</li>
                        <li>Заказчик получает прозрачную отчетность.</li>
                        <li>В перечень услуг входит бесплатный аудит Вашей рекламной кампании.</li>
                        <li>Выполнение работ по настройке и запуску рекламы
                            осуществляется в течение 2-3 дней.
                        </li>
                        <li>Специалисты веб студии проводят анализ
                            результатов с предоставлением результатов клиенту.
                        </li>
                        <li>Контекстная реклама, изготовленная нами,
                            увеличивает количество клиентов и прибыли в два раза.
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 pt-sm-5 pt-md-0 d-flex justify-content-center">

                    <div class="price__badge">
                        <div class="badge">
                            <img class="badge__img badge__img_1" src="/assets/img/badge-rope.png" alt="Стоимость услуг">
                            <div class="badge__swing">
                                <img class="badge__img badge__img_3" src="/assets/img/badge-nail.png"
                                     alt="Стоимость услуг">
                                <img class="badge__img badge__img_2" src="/assets/img/badge.png" alt="Стоимость услуг">
                                <div class="badge__labels">
                                    <span>Лучшее</span>
                                    <span>Предложение</span>
                                    <span>40 000₸</span>
                                    <span>Новая цена</span>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <div class="col-sm-6 col-md-12 pt-5 d-flex align-items-center">
                    <div class="price__explanation">
                        Мы предоставляем полный пакет документов, который позволяет вам без проблем отчитываться перед
                        бухгалтерией.
                        Вы можете включить расходы на рекламу в ваши налоговые вычеты, что позволит вам оптимизировать
                        ваш рекламный бюджет.
                    </div>
                </div>
            </div>
        </div>
        <ul class="dark-bg__circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </section>

    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="banner__img">

                        <img src="/assets/img/banner1200.webp" alt="Banner" width="100%">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="steps">
        <div class="container">
            <div class="row">
                <div class="col"><h2 class="steps__title">Этапы создания контекстной рекламы</h2></div>
            </div>

            <div class="row gy-3 gy-md-5 gx-5">
                <div class="col-md-6">
                    <div class="step-el">
                        <div class="step-el__sel">
                            <span class="step-el__num">1</span>
                        </div>
                        <div class="step-el__content">
                            <div class="step-el__title">Анализ бизнеса и рынка</div>
                            <div class="step-el__text">Исследование бизнеса клиента, целевой аудитории и конкурентов.
                                Определение целей и задач рекламной кампании.
                            </div>
                        </div>
                        <div class="step-el__icon">
                            <i class="fa-duotone fa-solid fa-magnifying-glass-chart"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="step-el">
                        <div class="step-el__sel">
                            <span class="step-el__num">2</span>
                        </div>
                        <div class="step-el__content">
                            <div class="step-el__title">Подбор ключевых слов</div>
                            <div class="step-el__text">Составление списка релевантных ключевых слов. Оценка и отбор
                                наиболее эффективных ключевых слов.
                            </div>
                        </div>
                        <div class="step-el__icon">
                            <i class="fa-duotone fa-solid fa-key"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="step-el">
                        <div class="step-el__sel">
                            <span class="step-el__num">3</span>
                        </div>
                        <div class="step-el__content">
                            <div class="step-el__title">Создание рекламных объявлений</div>
                            <div class="step-el__text">Разработка привлекательных и эффективных текстов объявлений.
                                Создание визуальных материалов (баннеров) при необходимости.
                            </div>
                        </div>
                        <div class="step-el__icon">
                            <i class="_reverse-x fa-duotone fa-solid fa-megaphone"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="step-el">
                        <div class="step-el__sel">
                            <span class="step-el__num">4</span>
                        </div>
                        <div class="step-el__content">
                            <div class="step-el__title">Настройка рекламной кампании</div>
                            <div class="step-el__text">Выбор оптимальных настроек для таргетинга. Определение бюджета и
                                стратегий ставок.
                            </div>
                        </div>
                        <div class="step-el__icon">
                            <i class="fa-duotone fa-solid fa-wrench _reverse-xy"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="step-el">
                        <div class="step-el__sel">
                            <span class="step-el__num">5</span>
                        </div>
                        <div class="step-el__content">
                            <div class="step-el__title">Запуск кампании и мониторинг</div>
                            <div class="step-el__text">Запуск рекламной кампании в Google Ads. Непрерывный мониторинг и
                                анализ эффективности.
                            </div>
                        </div>
                        <div class="step-el__icon">
                            <i class="fa-duotone fa-solid fa-rocket"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="step-el">
                        <div class="step-el__sel">
                            <span class="step-el__num">6</span>
                        </div>
                        <div class="step-el__content">
                            <div class="step-el__title">Оптимизация кампании</div>
                            <div class="step-el__text">Регулярное внесение изменений для улучшения результатов.
                                Тестирование новых объявлений и ключевых слов.
                            </div>
                        </div>
                        <div class="step-el__icon">
                            <i class="fa-duotone fa-solid fa-gears"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="step-el">
                        <div class="step-el__sel">
                            <span class="step-el__num">7</span>
                        </div>
                        <div class="step-el__content">
                            <div class="step-el__title">Отчетность и анализ</div>
                            <div class="step-el__text">Подготовка отчетов по результатам кампании. Анализ достижений и
                                выводы для дальнейшего улучшения.
                            </div>
                        </div>
                        <div class="step-el__icon">
                            <i class="fa-duotone fa-solid fa-chart-simple"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="step-el">
                        <div class="step-el__sel">
                            <span class="step-el__num">8</span>
                        </div>
                        <div class="step-el__content">
                            <div class="step-el__title">Улучшение и расширение</div>
                            <div class="step-el__text">Внедряем новые тактики и расширяем охват для повышения
                                эффективности рекламы.
                            </div>
                        </div>
                        <div class="step-el__icon">
                            <i class="fa-duotone fa-solid fa-sparkles"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="context">
        <div class="container">
            <div class="row">
                <div class="col"><h2 class="context__title">Как выглядит контекстная реклама в&nbsp;Yandex.Direct&nbsp;и&nbsp;Google&nbsp;ADS
                        ?</h2></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="context__container">
                        <button class="carousel-control carousel-control-prev" type="button"
                                data-bs-target="#laptopCarousel" data-bs-slide="prev">
                            <i class="fa-duotone fa-solid fa-arrow-left"></i>
                        </button>
                        <button class="carousel-control carousel-control-next" type="button"
                                data-bs-target="#laptopCarousel" data-bs-slide="next">
                            <i class="fa-duotone fa-solid fa-arrow-right"></i>
                        </button>

                        <div class="context__screen">
                            <div class="carousel slide" id="laptopCarousel" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="/assets/img/slide/01.jpg" alt="Slide 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/assets/img/slide/02.jpg" alt="Slide 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/assets/img/slide/03.jpg" alt="Slide 2">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <img src="/assets/img/laptop.png" alt="Laptop" class="context__laptop">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="connect dark-bg">
        <div class="container">
            <div class="row">
                <div class="col"><h2 class="connect__title">Проанализируем Вашу ситуацию и&nbsp;дадим персональные
                        рекомендации</h2></div>
            </div>
            <div class="row connect__content">
                <div class="col">
                    <div class="connect__phone">
                        <h3>Звоните, мы сейчас работаем:</h3>
                        <a href="tel:+77774333822">+7 (777) 433-38-22</a>
                    </div>
                    <div class="connect__contact">
                        <a href="javascript:;" class="btn" data-bs-toggle="modal" data-bs-target="#recallModal">Заказать
                            звонок</a>
                        <a href="#" class="btn btn_whatsapp"><i class="fa-brands fa-whatsapp"></i>Написать в WhatsApp</a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="dark-bg__circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </section>

    <section class="google">
        <div class="container">
            <div class="row">
                <div class="col"><h2 class="google__title">Преимущества Google рекламы</h2></div>
            </div>
            <div class="row gy-3 gy-md-4">
                <div class="col-sm-6 col-lg-4">
                    <div class="google-el">
                        <div class="google-el__icon">
                            <i class="fa-duotone fa-solid fa-people-group"></i>
                        </div>
                        <div class="google-el__content">
                            <div class="google-el__title">Широкий охват аудитории</div>
                            <div class="google-el__text">Google является самой популярной поисковой системой в мире,
                                что позволяет охватить огромную аудиторию.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="google-el">
                        <div class="google-el__icon">
                            <i class="fa-duotone fa-solid fa-gauge-max"></i>
                        </div>
                        <div class="google-el__content">
                            <div class="google-el__title">Быстрые результаты</div>
                            <div class="google-el__text">В отличие от SEO, контекстная реклама позволяет получить
                                результаты практически мгновенно после запуска кампании.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="google-el">
                        <div class="google-el__icon">
                            <i class="fa-duotone fa-solid fa-bullseye-arrow"></i>
                        </div>
                        <div class="google-el__content">
                            <div class="google-el__title">Точный таргетинг</div>
                            <div class="google-el__text">Возможность настроить рекламу на конкретные сегменты аудитории
                                по демографическим и географическим характеристикам, интересам и поведению.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="google-el">
                        <div class="google-el__icon">
                            <i class="fa-duotone fa-solid fa-solar-system"></i>
                        </div>
                        <div class="google-el__content">
                            <div class="google-el__title">Высокая конверсия</div>
                            <div class="google-el__text">Правильно настроенная реклама приводит к высокому уровню
                                конверсии, поскольку показывается людям, уже заинтересованным в вашем продукте или
                                услуге.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="google-el">
                        <div class="google-el__icon">
                            <i class="fa-duotone fa-solid fa-money-bill-transfer"></i>
                        </div>
                        <div class="google-el__content">
                            <div class="google-el__title">Гибкость бюджета</div>
                            <div class="google-el__text">Вы сами определяете бюджет на рекламу, и можете легко его
                                регулировать в зависимости от результатов.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="google-el">
                        <div class="google-el__icon">
                            <i class="fa-duotone fa-solid fa-command"></i>
                        </div>
                        <div class="google-el__content">
                            <div class="google-el__title">Вариативность форматов</div>
                            <div class="google-el__text">Возможность использовать различные форматы рекламы: текстовые
                                объявления, баннеры, видео и торговые объявления.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="google-el">
                        <div class="google-el__icon">
                            <i class="fa-duotone fa-solid fa-chart-simple"></i>
                        </div>
                        <div class="google-el__content">
                            <div class="google-el__title">Измеримые результаты</div>
                            <div class="google-el__text">Подробная аналитика и отчеты позволяют отслеживать
                                эффективность кампаний и вносить необходимые изменения для улучшения результатов.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="google-el">
                        <div class="google-el__icon">
                            <i class="fa-duotone fa-solid fa-person-rays"></i>
                        </div>
                        <div class="google-el__content">
                            <div class="google-el__title">Ремаркетинг</div>
                            <div class="google-el__text">Возможность повторно привлекать посетителей,
                                которые уже взаимодействовали с вашим сайтом или объявлением, повышая шансы на
                                конверсию.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-12"><h2 class="contact__title">Мы всегда на связи</h2></div>
                <div class="col-12">
                    <p class="contact__description">
                        Если у вас остались нерешенные задачи или&nbsp;вопросы по&nbsp;интернет-рекламе, созданию сайтов
                        и&nbsp;веб-дизайну, мы&nbsp;всегда готовы помочь.
                    </p>
                    <p class="contact__description">Перейдите по ссылкам ниже для получения подробной информации:</p>
                </div>
            </div>
            <div class="row gy-3 gy-md-4 mt-4 mb-5">
                <div class="col col-sm-6 col-lg-3">
                    <a href="/" class="contact-el">
                        <h3 class="contact-el__title">Разработка сайтов</h3>
                        <span class="contact-el__img"><img src="/assets/img/services/develop.png" alt=""></span>
                    </a>
                </div>
                <div class="col col-sm-6 col-lg-3">
                    <a href="/" class="contact-el">
                        <h3 class="contact-el__title">Маркетинг в&nbsp;Instagram</h3>
                        <span class="contact-el__img"><img src="/assets/img/services/marketing.png" alt=""></span>
                    </a>
                </div>
                <div class="col col-sm-6 col-lg-3">
                    <a href="/" class="contact-el">
                        <h3 class="contact-el__title">Создание бизнес стратегий</h3>
                        <span class="contact-el__img"><img src="/assets/img/services/strategy.png" alt=""></span>
                    </a>
                </div>
                <div class="col col-sm-6 col-lg-3">
                    <a href="/" class="contact-el">
                        <h3 class="contact-el__title">Разработка презентаций</h3>
                        <span class="contact-el__img"><img src="/assets/img/services/presentation.png" alt=""></span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col"><p class="contact__subtitle">Мы сделаем все возможное, чтобы ваш бизнес рос и
                        развивался!</p></div>
            </div>
        </div>
    </section>
	@include('partials.rateit')
@endsection