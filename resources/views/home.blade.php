@extends('layouts.app')

@section('content')
<section class="home-hero">
    <div class="container">
        <div class="home-hero__wrapper">
            <div class="home-hero__content">
                <div class="home-hero__top">
                    <h1 class="home-hero__title">Разработка сайтов и создание брендов в&nbsp;Алматы</h1>
                    <p class="home-hero__subtitle">Сайт + настройка рекламы + первые заявки уже через 15 дней</p>
                </div>
                <div class="home-hero__bottom">
                    <div class="home-hero__contact">
                        <a href="tel:+77774333822" class="btn btn_accent">Позвонить</a>
                        <a href="https://wa.me/77774333822" class="btn btn_accent btn_whatsapp1">
                            <i class="fa-brands fa-whatsapp"></i>Написать в WhatsApp
                        </a>
                    </div>
                    <p class="home-hero__description">Оставьте заявку сегодня и&nbsp;через 15 дней у&nbsp;Вас будет сайт, рекламная кампания и&nbsp;ежедневные заявки!</p>
                </div>
            </div>

            <div class="home-hero__img" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="1000" data-aos-delay="200">
                <img src="/assets/img/hero-img-home.png" alt="Разработка сайтов и веб-дизайн в Алматы">
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
                        <div class="partner__text">Работем с Google Ads более 10-ти лет. Регулярно сдаем необходимые экзамены и аттестации.</div>
                    </div>
                </div>
                <div class="home-benefits">
                    <div class="home-benefits__item">
                        <div class="home-benefits__num"><span data-from="0" data-to="300" data-dp="0">0</span></div>
                        <div class="home-benefits__name">реализованных проектов в&nbsp;разных направлениях</div>
                    </div>
                    <div class="home-benefits__item">
                        <div class="home-benefits__num"><span data-from="0" data-to="10" data-dp="0">0</span>+</div>
                        <div class="home-benefits__name">лет опыта на рынке<br>разработки</div>
                    </div>
                    <div class="home-benefits__item">
                        <div class="home-benefits__num"><span data-from="0" data-to="90" data-dp="0">0</span>%</div>
                        <div class="home-benefits__name">клиентов становятся постоянными</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "ItemList",
    "itemListElement": [
        {
            "@@type": "Service",
            "position": 1,
            "name": "Разработка сайтов",
            "description": "Создание сайтов с нуля - от прототипа до финального дизайна и кода",
            "provider": {
                "@@type": "Organization",
                "name": "Modern Design Lab"
            },
            "serviceType": "Веб-разработка",
            "areaServed": "Алматы",
            "offers": {
                "@@type": "Offer",
                "priceCurrency": "KZT",
                "price": "200000",
                "url": "https://mdlab.kz/sozdanie-sayta-v-almaty"
            }
        },
        {
            "@@type": "Service",
            "position": 2,
            "name": "Продвижение в поисковиках (SEO)",
            "description": "SEO-оптимизация сайта для вывода в ТОП поисковой выдачи",
            "provider": {
                "@@type": "Organization",
                "name": "Modern Design Lab"
            },
            "serviceType": "SEO",
            "areaServed": "Алматы",
            "url": "https://mdlab.kz/seo-prodvighenie"
        },
        {
            "@@type": "Service",
            "position": 3,
            "name": "Контекстная реклама",
            "description": "Настройка и ведение контекстной рекламы в Google Ads и Яндекс.Директ",
            "provider": {
                "@@type": "Organization",
                "name": "Modern Design Lab"
            },
            "serviceType": "Контекстная реклама",
            "areaServed": "Алматы",
            "url": "https://mdlab.kz/kontekstnaya-reklama"
        },
        {
            "@@type": "Service",
            "position": 4,
            "name": "Продвижение в социальных сетях (SMM)",
            "description": "Ведение и продвижение бизнеса в Instagram, Facebook, TikTok. Контент-план, таргетированная реклама",
            "provider": {
                "@@type": "Organization",
                "name": "Modern Design Lab"
            },
            "serviceType": "SMM",
            "areaServed": "Алматы",
            "url": "https://mdlab.kz/prodvighenie-v-socialynyh-setyah"
        }
    ]
}
</script>
<section class="section-home home-services">
    <div class="container">
        <div class="home-services__wrapper">
            <div class="section-home__header">
                <h2 class="section-home__h2">Направления деятельности</h2>
            </div>

            <div class="home-services-list" data-accordion="single">
                <div class="home-services-list__item" data-accordion-item>
                    <div class="home-services-list__btn" data-accordion-btn>
                        <div class="home-services-list__icon"><img src="/assets/img/icons/sites.svg" alt="Разработка сайтов"></div>
                        <h3 class="home-services-list__name">Разработка сайтов</h3>
                        <div class="home-services-list__toggle"><i class="fa-solid fa-plus-large"></i></div>
                    </div>
                    <div class="home-services-list__body" data-accordion-body>
                        <p>Создаём сайты с нуля — от прототипа до финального дизайна и кода. Учитываем цели бизнеса, особенности ниши и будущие задачи проекта. Работаем без шаблонов, каждый проект — уникальный.</p>
                        <ul>
                            <li><span>Анализ и сбор требований</span></li>
                            <li><span>Проектирование структуры</span></li>
                            <li><span>UI/UX-дизайн</span></li>
                            <li><span>Адаптивная вёрстка</span></li>
                            <li><span>Интеграция с CMS</span></li>
                            <li><span>Тестирование и запуск</span></li>
                        </ul>
                        <div class="home-services-list__action">
                            <a href="/sozdanie-sayta-v-almaty" class="btn"><span class="btn__name">Подробнее</span></a>
                            <a href="#webDevelop" class="anchor">Типы сайтов и цены</a>
                        </div>
                    </div>
                </div>

                <div class="home-services-list__item" data-accordion-item>
                    <div class="home-services-list__btn" data-accordion-btn>
                        <div class="home-services-list__icon"><img src="/assets/img/icons/support.svg" alt="Поддержка сайтов"></div>
                        <h3 class="home-services-list__name">Поддержка сайтов</h3>
                        <div class="home-services-list__toggle"><i class="fa-solid fa-plus-large"></i></div>
                    </div>
                    <div class="home-services-list__body" data-accordion-body>
                        <p>Обновляем, дорабатываем, улучшаем. Поддерживаем сайты на постоянной основе: от мелких правок до крупных изменений, оптимизации скорости, расширения функционала и устранения багов.</p>
                        <ul>
                            <li><span>Внесение правок</span></li>
                            <li><span>Настройка и обновление плагинов</span></li>
                            <li><span>Улучшение скорости и безопасности</span></li>
                            <li><span>Поддержка форм, слайдеров и т.д.</span></li>
                            <li><span>Аудит и рекомендации по улучшениям</span></li>
                        </ul>
                        <div class="home-services-list__action">
                            <a href="/podderghka-sayta" class="btn"><span class="btn__name">Подробнее</span></a>
                        </div>
                    </div>
                </div>

                <div class="home-services-list__item" data-accordion-item>
                    <div class="home-services-list__btn" data-accordion-btn>
                        <div class="home-services-list__icon"><img src="/assets/img/icons/seo.svg" alt="SEO продвижение"></div>
                        <h3 class="home-services-list__name">Продвижение в поисковиках (SEO)</h3>
                        <div class="home-services-list__toggle"><i class="fa-solid fa-plus-large"></i></div>
                    </div>
                    <div class="home-services-list__body" data-accordion-body>
                        <p>Хотите видеть сайт в ТОПе поисковой выдачи? Знаем, как туда попасть. Прокачаем структуру, тексты и технику — чтобы ваш сайт не просто был, а работал.</p>
                        <ul>
                            <li><span>SEO-аудит и стратегия</span></li>
                            <li><span>Оптимизация под ключевые слова</span></li>
                            <li><span>Улучшение скорости и структуры</span></li>
                            <li><span>Продвижение под Google и Яндекс</span></li>
                        </ul>
                        <div class="home-services-list__action">
                            <a href="/seo-prodvighenie" class="btn"><span class="btn__name">Подробнее</span></a>
                        </div>
                    </div>
                </div>

                <div class="home-services-list__item" data-accordion-item>
                    <div class="home-services-list__btn" data-accordion-btn>
                        <div class="home-services-list__icon"><img src="/assets/img/icons/smm.svg" alt="SMM продвижение в соцсетях"></div>
                        <h3 class="home-services-list__name">Продвижение в соц.сетях (SMM)</h3>
                        <div class="home-services-list__toggle"><i class="fa-solid fa-plus-large"></i></div>
                    </div>
                    <div class="home-services-list__body" data-accordion-body>
                        <p>Прокачаем ваш бизнес в соцсетях: оформим, наполним контентом, настроим рекламу. Если вас нет в Instagram, Facebook или TikTok — вы реально теряете клиентов.</p>
                        <ul>
                            <li><span>Создание и оформление аккаунтов</span></li>
                            <li><span>Контент-план и ведение страниц</span></li>
                            <li><span>Реклама и таргет</span></li>
                            <li><span>Аналитика и рост вовлечённости</span></li>
                        </ul>
                        <div class="home-services-list__action">
                            <a href="/prodvighenie-v-socialynyh-setyah" class="btn"><span class="btn__name">Подробнее</span></a>
                        </div>
                    </div>
                </div>

                <div class="home-services-list__item" data-accordion-item>
                    <div class="home-services-list__btn" data-accordion-btn>
                        <div class="home-services-list__icon"><img src="/assets/img/icons/bot.svg" alt="Разработка Telegram-ботов"></div>
                        <h3 class="home-services-list__name">Разработка Telegram-ботов</h3>
                        <div class="home-services-list__toggle"><i class="fa-solid fa-plus-large"></i></div>
                    </div>
                    <div class="home-services-list__body" data-accordion-body>
                        <p>Проектируем и создаём ботов для Telegram под любые бизнес-задачи — от простых автоответчиков до сложных систем с логикой, оплатами и интеграцией. Удобный канал автоматизации, доступный каждому пользователю.</p>
                        <ul>
                            <li><span>Разработка сценариев и логики взаимодействия</span></li>
                            <li><span>Дизайн и создание интерфейса (меню, кнопки, inline-команды)</span></li>
                            <li><span>Интеграция с CRM, сайтами, платёжными системами</span></li>
                            <li><span>Тестирование и запуск, техподдержка</span></li>
                        </ul>
                        <div class="home-services-list__action">
                            <a href="/razrabotka-telegram-botov" class="btn"><span class="btn__name">Подробнее</span></a>
                        </div>
                    </div>
                </div>

                <div class="home-services-list__item" data-accordion-item>
                    <div class="home-services-list__btn" data-accordion-btn>
                        <div class="home-services-list__icon"><img src="/assets/img/icons/design.svg" alt="Дизайн и брендинг"></div>
                        <h3 class="home-services-list__name">Дизайн и брендинг</h3>
                        <div class="home-services-list__toggle"><i class="fa-solid fa-plus-large"></i></div>
                    </div>
                    <div class="home-services-list__body" data-accordion-body>
                        <p>Хотите, чтобы бизнес запомнили? Начнём с образа. Создаём логотипы, подбираем цвета и шрифты, оформляем соцсети и презентации.</p>
                        <ul>
                            <li><span>Логотип в векторе</span></li>
                            <li><span>Цветовая палитра и типографика</span></li>
                            <li><span>Фирменный стиль</span></li>
                            <li><span>Гайды по использованию</span></li>
                        </ul>
                        <div class="home-services-list__action">
                            <a href="/razrabotka-logotipa-v-almaty" class="btn"><span class="btn__name">Подробнее</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-home">
        <div class="container">
            <div class="banner-quiz">
                <div class="banner-quiz__content">
                    <h2 class="banner-quiz__title">Не знаете, с чего начать?</h2>
                    <p class="banner-quiz__subtitle">Пройдите опрос — и получите решение под ваш проект</p>
                    <p class="banner-quiz__text">Ответьте на 6 коротких вопросов, и мы подскажем оптимальный тип сайта, примерную стоимость и сроки разработки. Быстро, бесплатно и&nbsp;без менеджеров.</p>

                    <a data-fancybox href="#quizModal" class="btn"><span class="btn__name">Пройти квиз за 2 минуты</span></a>
                </div>
                <div class="banner-quiz__img">
                    <img src="/assets/img/quiz-man.png" alt="Бесплатная консультация по разработке сайта">
                </div>
            </div>
        </div>
    </section>

    <section class="section-home home-develop" id="webDevelop">
        <div class="container">
            <div class="section-home__header">
                <h2 class="section-home__h2">Разработка сайтов</h2>
            </div>
            <div class="home-develop__wrapper">
                <article class="home-develop__item" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="1000" data-aos-delay="200">
                    <div class="home-develop__icon"><i class="icon-rocket-fill"></i></div>

                    <h3 class="home-develop__title">Лендинг</h3>
                    <p class="home-develop__text">Одностраничный сайт, который ведёт посетителя к одному действию 
— оставить заявку, купить товар, записаться на услугу. Максимум фокуса, минимум отвлечений. Идеален для рекламы, акций или запуска нового продукта.</p>
                    <div class="home-develop__price">от 200 000  ₸</div>
                </article>
                <article class="home-develop__item" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="1000" data-aos-delay="200">
                    <div class="home-develop__icon"><i class="icon-hello-fill"></i></div>

                    <h3 class="home-develop__title">Сайт-визитка</h3>
                    <p class="home-develop__text">Небольшой сайт (обычно до 5 страниц), который кратко рассказывает о вас: 
кто вы, что предлагаете, как с вами связаться. Отличный вариант для начинающих, фрилансеров, салонов, небольших компаний и локального бизнеса.</p>
                    <div class="home-develop__price">от 200 000  ₸</div>
                </article>
                <article class="home-develop__item" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="1000" data-aos-delay="200">
                    <div class="home-develop__icon"><i class="icon-people-fill"></i></div>

                    <h3 class="home-develop__title">Корпоративный сайт</h3>
                    <p class="home-develop__text">Полноценная онлайн-витрина вашей компании. Рассказывает о вас, услугах, команде, ценностях и реализованных проектах. Работает на имидж, доверие 
и привлечение клиентов 
из поисковиков и рекламы.</p>
                    <div class="home-develop__price">от 260 000  ₸</div>
                </article>
                <article class="home-develop__item" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="1000" data-aos-delay="200">
                    <div class="home-develop__icon"><i class="icon-shop-fill"></i></div>

                    <h3 class="home-develop__title">Интернет-магазин</h3>
                    <p class="home-develop__text">Сайт с каталогом товаров, фильтрами, корзиной и оплатой. Всё как 
в «большом» e-commerce: товарные карточки, акции, доставка, личный кабинет. Настроен под удобные покупки 24/7.</p>
                    <div class="home-develop__price">от 500 000  ₸</div>
                </article>
                <article class="home-develop__item" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="1000" data-aos-delay="200">
                    <div class="home-develop__icon"><i class="icon-boxes-fill"></i></div>

                    <h3 class="home-develop__title">Сайт-каталог</h3>
                    <p class="home-develop__text">Похоже на интернет-магазин, 
но без онлайн-оплаты. 
Идеально для компаний, где заказ идёт через заявку или звонок. Есть фильтры, карточки товаров или услуг, 
но весь фокус на консультации 
и лидогенерации.</p>
                    <div class="home-develop__price">от 340 000  ₸</div>
                </article>
                <article class="home-develop__item" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="1000" data-aos-delay="200">
                    <div class="home-develop__icon"><i class="icon-help-fill"></i></div>

                    <h3 class="home-develop__title">Сайт-сервис / SaaS</h3>
                    <p class="home-develop__text">Интерактивные платформы с личными кабинетами, логикой, расчетами, API 
и внутренней инфраструктурой. Например: онлайн-запись, системы бронирования, калькуляторы, CRM
и другие цифровые продукты.</p>
                    <div class="home-develop__price">от 800 000  ₸</div>
                </article>
            </div>
        </div>
    </section>

    <section class="section-home home-special">
        <div class="container">
            <div class="section-home__header">
                <h2 class="section-home__h2">Специальные предложения</h2>
                <div class="section-home__subtitle">
                    <span class="_bold">Хватит откладывать запуск сайта — сейчас самое время начать!</span>
                    <br>
                    Мы собрали специальные предложения, чтобы Вы могли стартовать быстро, выгодно и&nbsp;без лишних затрат.
                </div>
            </div>
            <div class="home-special__wrapper">
                <article class="home-special__item">
                    <div class="home-special__img" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="1000" data-aos-delay="200">
                        <img src="/assets/img/specials/1.png" alt="Продвижение в Instagram - 3000 подписчиков и настройка рекламы">
                    </div>
                    <div class="home-special__content" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="1000" data-aos-delay="200">
                        <h3 class="home-special__title">Мощные продажи в Instagram</h3>
                        <ul>
                            <li><span>3000 живых подписчиков по вашему городу</span></li>
                            <li><span>25 продающих постов</span></li>
                            <li><span>Настройка рекламы</span></li>
                            <li><span>Бюджет рекламной кампании 15 000 ₸</span></li>
                        </ul>
                        <div class="home-special__footer">
                            <div class="home-special__price">60 000 ₸</div>
                            <a href="https://wa.me/77774333822" class="btn btn_accent"><span class="btn__name">Заказать</span></a>
                        </div>
                    </div>
                </article>
                <article class="home-special__item">
                    <div class="home-special__img" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="1000" data-aos-delay="200">
                        <img src="/assets/img/specials/2.png" alt="Landing Page с логотипом и контекстной рекламой Google">
                    </div>
                    <div class="home-special__content" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="1000" data-aos-delay="200">
                        <h3 class="home-special__title">Хороший старт</h3>
                        <ul>
                            <li><span>Разработка Landing Page, уникальный дизайн</span></li>
                            <li><span>Разработка Логотипа</span></li>
                            <li><span>Настройка контекстной рекламы Google</span></li>
                            <li><span>Бюджет рекламной кампании 30 000 ₸</span></li>
                            <li><span>Домен и хостинг 1 год в подарок</span></li>
                        </ul>
                        <div class="home-special__footer">
                            <div class="home-special__price">135 000 ₸</div>
                            <a href="https://wa.me/77774333822" class="btn btn_accent"><span class="btn__name">Заказать</span></a>
                        </div>
                    </div>
                </article>
                <article class="home-special__item">
                    <div class="home-special__img" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="1000" data-aos-delay="200">
                        <img src="/assets/img/specials/3.png" alt="Корпоративный сайт с настройкой рекламы и продвижением в соцсетях">
                    </div>
                    <div class="home-special__content" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="1000" data-aos-delay="200">
                        <h3 class="home-special__title">Корпоративный «всё включено»</h3>
                        <ul>
                            <li><span>Разработка корпоративного сайта</span></li>
                            <li><span>Настройка рекламной кампании Google, Яндекс</span></li>
                            <li><span>Рекламный бюджет 100 000 тг</span></li>
                            <li><span>Продвижение соц сетей Instagram/Facebook 1 месяц</span></li>
                        </ul>
                        <div class="home-special__footer">
                            <div class="home-special__price">280 000 ₸</div>
                            <a href="https://wa.me/77774333822" class="btn btn_accent"><span class="btn__name">Заказать</span></a>
                        </div>
                    </div>
                </article>
                <article class="home-special__item">
                    <div class="home-special__img" data-aos="fade-right" data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="500" data-aos-delay="200">
                        <img src="/assets/img/specials/4.png" alt="Интернет-магазин с настройкой рекламы и продвижением">
                    </div>
                    <div class="home-special__content" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="500" data-aos-delay="200">
                        <h3 class="home-special__title">Магазин «всё включено»</h3>
                        <ul>
                            <li><span>Разработка интернет-магазина</span></li>
                            <li><span>Настройка рекламной кампании Google, Яндекс</span></li>
                            <li><span>Рекламный бюджет 100 000 тг</span></li>
                            <li><span>Продвижение соц сетей Instagram/Facebook 1 месяц</span></li>
                        </ul>
                        <div class="home-special__footer">
                            <div class="home-special__price">340 000 ₸</div>
                            <a href="https://wa.me/77774333822" class="btn btn_accent"><span class="btn__name">Заказать</span></a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
	
	<section class="section-home home-contacts">
        <div class="container">
            <div class="section-home__header">
                <h2 class="section-home__h2">Контакты</h2>
            </div>
            <div class="home-contacts__wrapper">
                <div class="home-contacts__content">
                    <p>Республика Казахстан,
                        050030, г.&nbsp;Алматы,&nbsp;ул.&nbsp;Назарбаева 50, 2 эт. 209 оф.</p>
                    <a href="tel:+77774333822" class="home-contacts__link">+7 777 433 38 22</a>
                    <a href="mailto:info@mdlab.kz" class="home-contacts__link">info@mdlab.kz</a>
                    <div class="home-contacts__footer">
                        <a href="#recallModal" data-fancybox class="btn btn_accent">Заказать консультацию</a>
                    </div>
                </div>
                <div class="home-contacts__map">
                   <div id="yandex-map" style="width:100%; height:400px; background: #f0f0f0; display: flex; align-items: center; justify-content: center; cursor: pointer;">
						<button onclick="loadYandexMap()" style="padding: 15px 30px; background: #ff5722; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">
							Показать карту
						</button>
					</div>

					<script>
					function loadYandexMap() {
						const mapContainer = document.getElementById('yandex-map');
						mapContainer.innerHTML = '<div style="width:100%; height:400px;"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A210fb1c1f4d0f50ad15453dac51f5fce5d45701735ffff7be9ddfec2c241d61c&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe></div>';
					}
					</script>
                </div>
            </div>
        </div>
    </section>
@include('partials.rateit')
@endsection