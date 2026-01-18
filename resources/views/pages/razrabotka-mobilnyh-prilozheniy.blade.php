@extends('layouts.app')

@push('styles')
<style>
/* ========================================
   CSS ПЕРЕМЕННЫЕ
======================================== */
:root {
    --primary: #0098D6;
    --primary-light: #d6f3ff;
    --primary-dark: #007ab8;
    --dark: #1a1a2e;
    --gray: #666;
    --gray-light: #f8f9fa;
    --white: #fff;
    --accent: #ff5722;
    --gradient: linear-gradient(135deg, #0098D6 0%, #00c4ff 100%);
}

/* ========================================
   КНОПКИ
======================================== */
.btn-primary-mobile {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: var(--primary);
    color: var(--white);
    padding: 18px 35px;
    border-radius: 12px;
    font-size: 16px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s;
    border: none;
    cursor: pointer;
}
.home-hero{
		min-height:inherit;
}
.home-hero__title {
    font-size: 48px;
}
.btn-primary-mobile:hover {
    background: var(--primary-dark);
    transform: translateY(-3px);
    box-shadow: 0 15px 30px rgba(0, 152, 214, 0.3);
    color: var(--white);
}

.btn-whatsapp {
    background: #25D366 !important;
}

.btn-whatsapp:hover {
    background: #20BA5A !important;
    box-shadow: 0 15px 30px rgba(37, 211, 102, 0.3) !important;
}

.btn-outline-mobile {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: transparent;
    color: var(--primary);
    padding: 18px 35px;
    border-radius: 12px;
    font-size: 16px;
    font-weight: 600;
    text-decoration: none;
    border: 2px solid var(--primary);
    transition: all 0.3s;
}

.btn-outline-mobile:hover {
    background: var(--primary);
    color: var(--white);
}

/* ========================================
   СЕКЦИЯ ТИПЫ ПРИЛОЖЕНИЙ
======================================== */
.mobile-types {
    padding: 80px 0;
    background: var(--gray-light);
}

.section-header {
    text-align: center;
    margin-bottom: 60px;
}

.section-header h2 {
    font-size: 36px;
    font-weight: 700;
    color: var(--dark);
    margin-bottom: 15px;
}

.section-header p {
    font-size: 18px;
    color: var(--gray);
    max-width: 600px;
    margin: 0 auto;
}

.types-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

@media (max-width: 992px) {
    .types-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 576px) {
    .types-grid {
        grid-template-columns: 1fr;
    }
}

.type-card {
    background: var(--white);
    padding: 40px 30px;
    border-radius: 20px;
    border: 2px solid transparent;
    transition: all 0.3s;
}

.type-card:hover {
    border-color: var(--primary);
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0, 152, 214, 0.15);
}

.type-card__icon {
    width: 70px;
    height: 70px;
    background: var(--primary-light);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 25px;
}

.type-card__icon i {
    font-size: 28px;
    color: var(--primary);
}

.type-card__icon-placeholder {
    width: 70px;
    height: 70px;
    background: var(--primary-light);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 25px;
    border: 2px dashed var(--primary);
}

.type-card h3 {
    font-size: 22px;
    font-weight: 700;
    color: var(--dark);
    margin-bottom: 15px;
}

.type-card p {
    font-size: 15px;
    color: var(--gray);
    line-height: 1.7;
    margin-bottom: 20px;
}

.type-card__price {
    font-size: 24px;
    font-weight: 700;
    color: var(--primary);
}

.type-card__price span {
    font-size: 16px;
    font-weight: 400;
    color: var(--gray);
}

/* ========================================
   СЕКЦИЯ ПРЕИМУЩЕСТВА
======================================== */
.mobile-advantages {
    padding: 80px 0;
    background: var(--white);
}

.advantages-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

@media (max-width: 992px) {
    .advantages-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 576px) {
    .advantages-grid {
        grid-template-columns: 1fr;
    }
}

.advantage-card {
    background: var(--gray-light);
    padding: 40px 30px;
    border-radius: 20px;
    text-align: center;
    transition: all 0.3s;
}

.advantage-card:hover {
    background: var(--primary-light);
    transform: translateY(-10px);
}

.advantage-card__icon {
    width: 80px;
    height: 80px;
    background: var(--primary);
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
}

.advantage-card__icon i {
    font-size: 32px;
    color: var(--white);
}

.advantage-card__icon-placeholder {
    width: 80px;
    height: 80px;
    background: var(--primary-light);
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
    border: 2px dashed var(--primary);
}

.advantage-card h3 {
    font-size: 20px;
    font-weight: 700;
    color: var(--dark);
    margin-bottom: 15px;
}

.advantage-card p {
    font-size: 15px;
    color: var(--gray);
    line-height: 1.6;
}

/* ========================================
   СЕКЦИЯ ЧТО ВХОДИТ
======================================== */
.mobile-includes {
    padding: 80px 0;
    background: var(--primary-light);
}

.includes-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
}

@media (max-width: 768px) {
    .includes-grid {
        grid-template-columns: 1fr;
    }
}

.include-item {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    background: var(--white);
    padding: 25px;
    border-radius: 15px;
    transition: all 0.3s;
}

.include-item:hover {
    box-shadow: 0 10px 30px rgba(0, 152, 214, 0.15);
}

.include-item__icon {
    width: 50px;
    height: 50px;
    background: var(--primary);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.include-item__icon i {
    color: var(--white);
    font-size: 20px;
}

.include-item h4 {
    font-size: 18px;
    font-weight: 600;
    color: var(--dark);
    margin-bottom: 8px;
}

.include-item p {
    font-size: 14px;
    color: var(--gray);
    margin: 0;
    line-height: 1.6;
}

/* ========================================
   СЕКЦИЯ ЭТАПЫ
======================================== */
.mobile-steps {
    padding: 80px 0;
    background: var(--white);
}

.steps-timeline {
    position: relative;
    max-width: 800px;
    margin: 0 auto;
}

.step-item {
    display: flex;
    gap: 30px;
    margin-bottom: 40px;
    position: relative;
}

.step-item:last-child {
    margin-bottom: 0;
}

.step-item__number {
    width: 60px;
    height: 60px;
    background: var(--primary);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    font-weight: 700;
    color: var(--white);
    flex-shrink: 0;
    position: relative;
    z-index: 1;
}

.step-item:not(:last-child)::before {
    content: '';
    position: absolute;
    left: 29px;
    top: 60px;
    width: 2px;
    height: calc(100% - 20px);
    background: var(--primary-light);
}

.step-item__content {
    flex: 1;
    padding-top: 10px;
}

.step-item__content h4 {
    font-size: 20px;
    font-weight: 700;
    color: var(--dark);
    margin-bottom: 10px;
}

.step-item__content p {
    font-size: 15px;
    color: var(--gray);
    line-height: 1.7;
    margin-bottom: 10px;
}

.step-item__time {
    display: inline-block;
    background: var(--primary-light);
    color: var(--primary);
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
}

@media (max-width: 576px) {
    .step-item {
        gap: 20px;
    }
    .step-item__number {
        width: 50px;
        height: 50px;
        font-size: 20px;
    }
    .step-item:not(:last-child)::before {
        left: 24px;
        top: 50px;
    }
}

/* ========================================
   СЕКЦИЯ ТАРИФЫ
======================================== */
.mobile-pricing {
    padding: 80px 0;
    background: var(--gray-light);
}

.pricing-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    align-items: stretch;
}

@media (max-width: 992px) {
    .pricing-grid {
        grid-template-columns: 1fr;
        max-width: 500px;
        margin: 0 auto;
    }
	.home-hero__title {
		font-size: 30px;
}	
}

.pricing-card {
    background: var(--white);
    border-radius: 25px;
    padding: 40px 35px;
    text-align: center;
    border: 2px solid transparent;
    transition: all 0.3s;
    display: flex;
    flex-direction: column;
}

.pricing-card:hover {
    border-color: var(--primary);
    transform: translateY(-10px);
    box-shadow: 0 20px 50px rgba(0, 152, 214, 0.2);
}

.pricing-card.featured {
    border-color: var(--primary);
    position: relative;
}

.pricing-card.featured::before {
    content: 'Популярный';
    position: absolute;
    top: -12px;
    left: 50%;
    transform: translateX(-50%);
    background: var(--primary);
    color: var(--white);
    padding: 5px 20px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
}

.pricing-card h3 {
    font-size: 24px;
    font-weight: 700;
    color: var(--dark);
    margin-bottom: 15px;
}

.pricing-card__price {
    font-size: 42px;
    font-weight: 800;
    color: var(--primary);
    margin-bottom: 5px;
}

.pricing-card__price span {
    font-size: 20px;
    font-weight: 400;
}

.pricing-card__desc {
    font-size: 14px;
    color: var(--gray);
    margin-bottom: 30px;
}

.pricing-card__features {
    list-style: none;
    padding: 0;
    margin: 0 0 30px;
    text-align: left;
    flex: 1;
}

.pricing-card__features li {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 0;
    border-bottom: 1px solid #eee;
    font-size: 15px;
    color: var(--dark);
}

.pricing-card__features li:last-child {
    border-bottom: none;
}

.pricing-card__features li i {
    color: var(--primary);
    font-size: 16px;
}

/* ========================================
   СЕКЦИЯ ТЕХНОЛОГИИ
======================================== */
.mobile-tech {
    padding: 80px 0;
    background: var(--white);
}

.tech-grid {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 25px;
}

@media (max-width: 992px) {
    .tech-grid {
        grid-template-columns: repeat(4, 1fr);
    }
}

@media (max-width: 576px) {
    .tech-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

.tech-item {
    background: var(--gray-light);
    padding: 30px 20px;
    border-radius: 15px;
    text-align: center;
    transition: all 0.3s;
}

.tech-item:hover {
    background: var(--primary-light);
    transform: translateY(-5px);
}

.tech-item__icon {
    width: 60px;
    height: 60px;
    margin: 0 auto 15px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.tech-item__icon-placeholder {
    width: 60px;
    height: 60px;
    background: var(--white);
    border-radius: 12px;
    margin: 0 auto 15px;
    border: 2px dashed var(--primary);
    display: flex;
    align-items: center;
    justify-content: center;
}

.tech-item__icon-placeholder span {
    font-size: 10px;
    color: var(--primary);
    opacity: 0.7;
}

.tech-item span {
    font-size: 14px;
    font-weight: 600;
    color: var(--dark);
}

/* ========================================
   СЕКЦИЯ FAQ
======================================== */
.mobile-faq {
    padding: 80px 0;
    background: var(--primary-light);
}

.faq-list {
    max-width: 800px;
    margin: 0 auto;
}

.faq-item {
    background: var(--white);
    border-radius: 15px;
    margin-bottom: 15px;
    overflow: hidden;
}

.faq-item__question {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 25px 30px;
    cursor: pointer;
    transition: all 0.3s;
}

.faq-item__question:hover {
    background: var(--gray-light);
}

.faq-item__question h4 {
    font-size: 18px;
    font-weight: 600;
    color: var(--dark);
    margin: 0;
    flex: 1;
    padding-right: 20px;
}

.faq-item__question i {
    color: var(--primary);
    font-size: 20px;
    transition: transform 0.3s;
}

.faq-item.active .faq-item__question i {
    transform: rotate(180deg);
}

.faq-item__answer {
    display: none;
    padding: 0 30px 25px;
}

.faq-item.active .faq-item__answer {
    display: block;
}

.faq-item__answer p {
    font-size: 15px;
    color: var(--gray);
    line-height: 1.7;
    margin: 0;
}

/* ========================================
   СЕКЦИЯ CTA
======================================== */
.mobile-cta {
    padding: 80px 0;
    background: var(--gradient);
    text-align: center;
}

.mobile-cta h2 {
    font-size: 36px;
    font-weight: 700;
    color: var(--white);
    margin-bottom: 20px;
}

.mobile-cta p {
    font-size: 18px;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 35px;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.mobile-cta__buttons {
    display: flex;
    justify-content: center;
    gap: 15px;
    flex-wrap: wrap;
}

.btn-white {
    background: var(--white) !important;
    color: var(--primary) !important;
}

.btn-white:hover {
    background: var(--gray-light) !important;
    transform: translateY(-3px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
}

/* ========================================
   SEO КОНТЕНТ
======================================== */
.seo-content {
    padding: 80px 0;
    background: var(--white);
}

.seo-content h2 {
    font-size: 28px;
    font-weight: 700;
    color: var(--dark);
    margin-bottom: 20px;
}

.seo-content h3 {
    font-size: 22px;
    font-weight: 600;
    color: var(--dark);
    margin: 30px 0 15px;
}

.seo-content p {
    font-size: 16px;
    color: var(--gray);
    line-height: 1.8;
    margin-bottom: 20px;
}

.seo-content ul {
    list-style: none;
    margin: 20px 0;
    padding: 0;
}

.seo-content ul li {
    position: relative;
    padding-left: 30px;
    margin-bottom: 12px;
    font-size: 16px;
    color: var(--gray);
    line-height: 1.7;
}

.seo-content ul li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 10px;
    width: 8px;
    height: 8px;
    background: var(--primary);
    border-radius: 50%;
}
</style>
@endpush

@push('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "Разработка мобильных приложений в Алматы",
    "description": "Профессиональная разработка мобильных приложений для iOS и Android под ключ. Нативные и кроссплатформенные решения. Срок от 30 дней.",
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
    "serviceType": "Разработка мобильных приложений",
    "offers": {
        "@@type": "AggregateOffer",
        "lowPrice": "1500000",
        "highPrice": "10000000",
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
            "name": "Сколько стоит разработка мобильного приложения?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Стоимость разработки мобильного приложения начинается от 1 500 000 тенге за простое приложение. Цена зависит от функционала, платформы (iOS, Android или кроссплатформа), дизайна и интеграций. Точную стоимость рассчитаем после обсуждения вашего проекта."
            }
        },
        {
            "@@type": "Question",
            "name": "Сколько времени занимает разработка приложения?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Средний срок разработки мобильного приложения — от 2 до 6 месяцев. Простое приложение можно создать за 1-2 месяца, приложение средней сложности за 3-4 месяца, сложный проект с интеграциями за 5-6 месяцев."
            }
        },
        {
            "@@type": "Question",
            "name": "Какие технологии вы используете?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Мы используем современные технологии: Swift и Kotlin для нативной разработки, React Native и Flutter для кроссплатформенных решений. Выбор технологии зависит от задач проекта и бюджета."
            }
        },
        {
            "@@type": "Question",
            "name": "Вы публикуете приложение в App Store и Google Play?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Да, мы полностью сопровождаем публикацию приложения в App Store и Google Play: подготовка материалов, создание аккаунтов разработчика, прохождение модерации и размещение в магазинах."
            }
        },
        {
            "@@type": "Question",
            "name": "Предоставляете ли вы поддержку после запуска?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Да, мы предоставляем техническую поддержку и развитие приложения после запуска. Включает исправление багов, обновления под новые версии iOS/Android, добавление нового функционала."
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
        }
    ]
}
</script>
@endpush

@section('content')

<!-- HERO СЕКЦИЯ -->
<section class="home-hero">
    <div class="container">
        <div class="home-hero__wrapper">
            <div class="home-hero__content">
                <div class="home-hero__top">
                    <h1 class="home-hero__title">Разработка мобильных приложений в&nbsp;Алматы</h1>
                    <p class="home-hero__subtitle">iOS + Android + публикация в&nbsp;магазины за&nbsp;2-4 месяца</p>
                </div>
                <div class="home-hero__bottom">
                    <div class="home-hero__contact">
                        <a href="tel:+77774333822" class="btn btn_accent">Позвонить</a>
                        <a href="https://wa.me/77774333822" class="btn btn_accent btn_whatsapp1">
                            <i class="fa-brands fa-whatsapp"></i>Написать в WhatsApp
                        </a>
                    </div>
                    <p class="home-hero__description">Оставьте заявку сегодня — получите бесплатную консультацию и&nbsp;расчёт стоимости вашего приложения!</p>
                </div>
            </div>

            <div class="home-hero__img" data-aos="fade-left" data-aos-easing="ease-out-cubic" data-aos-offset="200" data-aos-duration="1000" data-aos-delay="200">
                <!-- Место для изображения: смартфоны с приложениями -->
                <img src="/assets/img/mobile-app-hero.png" alt="Разработка мобильных приложений iOS и Android в Алматы">
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

<!-- ТИПЫ ПРИЛОЖЕНИЙ -->
<section class="mobile-types">
    <div class="container">
        <div class="section-header">
            <h2>Какие приложения мы разрабатываем</h2>
            <p>Выберите оптимальное решение для вашего бизнеса</p>
        </div>

        <div class="types-grid">
            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-brands fa-apple"></i>
                </div>
                <h3>iOS приложения</h3>
                <p>Нативные приложения для iPhone и iPad на Swift. Максимальная производительность и идеальная интеграция с экосистемой Apple.</p>
                <div class="type-card__price">от 1 000 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-brands fa-android"></i>
                </div>
                <h3>Android приложения</h3>
                <p>Нативные приложения для смартфонов и планшетов Android на Kotlin. Охват 80% пользователей мобильных устройств.</p>
                <div class="type-card__price">от 900 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-mobile-screen-button"></i>
                </div>
                <h3>Кроссплатформа</h3>
                <p>Одно приложение для iOS и Android на React Native или Flutter. Экономия бюджета до 40% при сохранении качества.</p>
                <div class="type-card__price">от 750 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <h3>E-commerce</h3>
                <p>Мобильные магазины с каталогом, корзиной, оплатой и интеграцией с 1С, CRM. Увеличьте продажи через мобильный канал.</p>
                <div class="type-card__price">от 1 250 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-utensils"></i>
                </div>
                <h3>Доставка и сервисы</h3>
                <p>Приложения для доставки еды, такси, услуг. С GPS-трекингом, push-уведомлениями и онлайн-оплатой.</p>
                <div class="type-card__price">от 1 500 000 <span>₸</span></div>
            </div>

            <div class="type-card">
                <div class="type-card__icon">
                    <i class="fa-solid fa-building"></i>
                </div>
                <h3>Корпоративные</h3>
                <p>Внутренние приложения для бизнеса: CRM, ERP, управление задачами, документооборот, HR-системы.</p>
                <div class="type-card__price">от 2 000 000 <span>₸</span></div>
            </div>
        </div>
    </div>
</section>

<!-- ПРЕИМУЩЕСТВА -->
<section class="mobile-advantages">
    <div class="container">
        <div class="section-header">
            <h2>Почему выбирают нас</h2>
            <p>Гарантируем качество и соблюдение сроков</p>
        </div>

        <div class="advantages-grid">
            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-code"></i>
                </div>
                <h3>Чистый код</h3>
                <p>Пишем понятный, масштабируемый код с документацией. Легко поддерживать и развивать.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-palette"></i>
                </div>
                <h3>UX/UI дизайн</h3>
                <p>Создаём интуитивный интерфейс по гайдлайнам Apple и Google. Пользователи полюбят ваше приложение.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>
                <h3>Безопасность</h3>
                <p>Шифрование данных, защита API, безопасная авторизация. Соответствие стандартам безопасности.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-rocket"></i>
                </div>
                <h3>Быстрая работа</h3>
                <p>Оптимизируем производительность. Приложение работает быстро даже на старых устройствах.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-plug"></i>
                </div>
                <h3>Интеграции</h3>
                <p>Подключаем платежные системы, CRM, 1С, API сторонних сервисов. Всё работает как единое целое.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-headset"></i>
                </div>
                <h3>Поддержка</h3>
                <p>Техническая поддержка после запуска. Обновления, исправление багов, развитие функционала.</p>
            </div>
        </div>
    </div>
</section>

<!-- ЧТО ВХОДИТ -->
<section class="mobile-includes">
    <div class="container">
        <div class="section-header">
            <h2>Что входит в разработку</h2>
            <p>Полный цикл создания мобильного приложения под ключ</p>
        </div>

        <div class="includes-grid">
            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-clipboard-list"></i>
                </div>
                <div>
                    <h4>Анализ и ТЗ</h4>
                    <p>Изучаем бизнес, конкурентов, целевую аудиторию. Составляем детальное техническое задание.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-object-group"></i>
                </div>
                <div>
                    <h4>Прототипирование</h4>
                    <p>Создаём интерактивный прототип всех экранов. Тестируем UX до начала разработки.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-wand-magic-sparkles"></i>
                </div>
                <div>
                    <h4>UI/UX дизайн</h4>
                    <p>Разрабатываем уникальный дизайн по гайдлайнам платформ. Все экраны и состояния.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <div>
                    <h4>Разработка</h4>
                    <p>Программируем frontend и backend. Чистый код, современные технологии, документация.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-vial"></i>
                </div>
                <div>
                    <h4>Тестирование</h4>
                    <p>Ручное и автоматическое тестирование. Проверяем на разных устройствах и версиях ОС.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-store"></i>
                </div>
                <div>
                    <h4>Публикация</h4>
                    <p>Размещаем в App Store и Google Play. Подготовка материалов, прохождение модерации.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-chart-line"></i>
                </div>
                <div>
                    <h4>Аналитика</h4>
                    <p>Подключаем Firebase, AppMetrica, Amplitude. Отслеживайте метрики и поведение пользователей.</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-life-ring"></i>
                </div>
                <div>
                    <h4>Поддержка</h4>
                    <p>Гарантийная поддержка 3 месяца. Исправление багов, консультации, мелкие доработки.</p>
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
                    <h4>Бриф и аналитика</h4>
                    <p>Собираем требования, изучаем бизнес и конкурентов. Определяем функционал, платформы, технологии. Составляем ТЗ и смету.</p>
                    <span class="step-item__time">3-5 дней</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">2</div>
                <div class="step-item__content">
                    <h4>Прототип и дизайн</h4>
                    <p>Создаём wireframes и интерактивный прототип. Разрабатываем UI-дизайн всех экранов. Согласовываем и вносим правки.</p>
                    <span class="step-item__time">2-3 недели</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">3</div>
                <div class="step-item__content">
                    <h4>Разработка</h4>
                    <p>Программируем клиентскую часть и серверную логику. Еженедельные демо-показы прогресса. Итеративная разработка по спринтам.</p>
                    <span class="step-item__time">1-3 месяца</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">4</div>
                <div class="step-item__content">
                    <h4>Тестирование</h4>
                    <p>Полное тестирование функционала, производительности, безопасности. Тестируем на реальных устройствах. Исправляем баги.</p>
                    <span class="step-item__time">1-2 недели</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">5</div>
                <div class="step-item__content">
                    <h4>Запуск и поддержка</h4>
                    <p>Публикуем в App Store и Google Play. Настраиваем аналитику и push-уведомления. Передаём документацию и обучаем команду.</p>
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
                <h3>Стартап</h3>
                <div class="pricing-card__price">750 000 <span>₸</span></div>
                <p class="pricing-card__desc">MVP для проверки идеи</p>
                <ul class="pricing-card__features">
                    <li><i class="fa-solid fa-check"></i> 1 платформа (iOS или Android)</li>
                    <li><i class="fa-solid fa-check"></i> До 10 экранов</li>
                    <li><i class="fa-solid fa-check"></i> Базовый дизайн</li>
                    <li><i class="fa-solid fa-check"></i> Авторизация</li>
                    <li><i class="fa-solid fa-check"></i> Push-уведомления</li>
                    <li><i class="fa-solid fa-check"></i> Публикация в магазин</li>
                    <li><i class="fa-solid fa-check"></i> 1 месяц поддержки</li>
                </ul>
                <a href="https://wa.me/77774333822?text=Здравствуйте!%20Интересует%20пакет%20Стартап%20(750%20000%20₸)" target="_blank" class="btn-primary-mobile btn-whatsapp">
                    <i class="fa-brands fa-whatsapp"></i> Написать в WhatsApp
                </a>
            </div>
            <div class="pricing-card featured">
                <h3>Бизнес</h3>
                <div class="pricing-card__price">1 250 000 <span>₸</span></div>
                <p class="pricing-card__desc">Полноценное приложение</p>
                <ul class="pricing-card__features">
                    <li><i class="fa-solid fa-check"></i> iOS + Android</li>
                    <li><i class="fa-solid fa-check"></i> До 25 экранов</li>
                    <li><i class="fa-solid fa-check"></i> Уникальный дизайн</li>
                    <li><i class="fa-solid fa-check"></i> Админ-панель</li>
                    <li><i class="fa-solid fa-check"></i> Онлайн-оплата</li>
                    <li><i class="fa-solid fa-check"></i> Интеграции API</li>
                    <li><i class="fa-solid fa-check"></i> 3 месяца поддержки</li>
                </ul>
                <a href="https://wa.me/77774333822?text=Здравствуйте!%20Интересует%20пакет%20Бизнес%20(1%20250%20000%20₸)" target="_blank" class="btn-primary-mobile btn-whatsapp">
                    <i class="fa-brands fa-whatsapp"></i> Написать в WhatsApp
                </a>
            </div>
            <div class="pricing-card">
                <h3>Энтерпрайз</h3>
                <div class="pricing-card__price">от 3 500 000 <span>₸</span></div>
                <p class="pricing-card__desc">Сложные решения</p>
                <ul class="pricing-card__features">
                    <li><i class="fa-solid fa-check"></i> iOS + Android + Web</li>
                    <li><i class="fa-solid fa-check"></i> Неограничено экранов</li>
                    <li><i class="fa-solid fa-check"></i> Премиум дизайн</li>
                    <li><i class="fa-solid fa-check"></i> Сложная логика</li>
                    <li><i class="fa-solid fa-check"></i> ML/AI функции</li>
                    <li><i class="fa-solid fa-check"></i> Интеграция 1С, CRM</li>
                    <li><i class="fa-solid fa-check"></i> 6 месяцев поддержки</li>
                </ul>
                <a href="https://wa.me/77774333822?text=Здравствуйте!%20Интересует%20пакет%20Энтерпрайз%20(от%203%20500%20000%20₸)" target="_blank" class="btn-primary-mobile btn-whatsapp">
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
                <div class="tech-item__icon-placeholder">
                    <span>Swift</span>
                </div>
                <span>Swift</span>
            </div>
            <div class="tech-item">
                <div class="tech-item__icon-placeholder">
                    <span>Kotlin</span>
                </div>
                <span>Kotlin</span>
            </div>
            <div class="tech-item">
                <div class="tech-item__icon-placeholder">
                    <span>React</span>
                </div>
                <span>React Native</span>
            </div>
            <div class="tech-item">
                <div class="tech-item__icon-placeholder">
                    <span>Flutter</span>
                </div>
                <span>Flutter</span>
            </div>
            <div class="tech-item">
                <div class="tech-item__icon-placeholder">
                    <span>Firebase</span>
                </div>
                <span>Firebase</span>
            </div>
            <div class="tech-item">
                <div class="tech-item__icon-placeholder">
                    <span>Node.js</span>
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
            <p>Ответы на популярные вопросы о разработке приложений</p>
        </div>

        <div class="faq-list">
            <div class="faq-item active">
                <div class="faq-item__question">
                    <h4>Сколько стоит разработка мобильного приложения?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Стоимость зависит от сложности проекта и начинается от 1 500 000 тенге за простое приложение на одну платформу. Приложение для iOS и Android с уникальным дизайном и интеграциями — от 3 500 000 тенге. Сложные проекты с ML, геолокацией, видео — от 7 000 000 тенге. Точную стоимость рассчитаем после обсуждения вашей задачи.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Сколько времени занимает разработка?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>MVP или простое приложение — 1-2 месяца. Приложение средней сложности с админ-панелью — 3-4 месяца. Сложный проект с множеством интеграций — 5-6 месяцев. Сроки обсуждаем на старте и фиксируем в договоре.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Что лучше: нативное или кроссплатформенное приложение?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Нативная разработка (Swift, Kotlin) даёт максимальную производительность и доступ ко всем функциям устройства. Подходит для игр, AR/VR, сложных анимаций. Кроссплатформа (React Native, Flutter) экономит до 40% бюджета и времени при сохранении качества. Подходит для большинства бизнес-приложений. Поможем выбрать оптимальный вариант для вашего проекта.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Вы публикуете приложение в магазины?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Да, полностью берём на себя публикацию в App Store и Google Play. Регистрируем аккаунты разработчика (если нужно), готовим описания, скриншоты, иконки. Помогаем пройти модерацию Apple и Google с первого раза.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Что входит в поддержку после запуска?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Гарантийная поддержка включает: исправление багов, обновление под новые версии iOS и Android, мониторинг работоспособности, консультации. По отдельному договору: добавление нового функционала, маркетинговая поддержка, ASO-оптимизация.</p>
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
        <h2>Разработка мобильных приложений в Алматы</h2>
        <p>
            Компания Modern Design Lab предлагает профессиональную разработку мобильных приложений для iOS и Android в Алматы. 
            Мы создаём нативные и кроссплатформенные решения для бизнеса любого масштаба — от стартапов до крупных корпораций.
        </p>

        <h3>Почему бизнесу нужно мобильное приложение?</h3>
        <p>
            Мобильные приложения стали неотъемлемой частью современного бизнеса. По статистике, пользователи проводят в приложениях 
            в среднем 4 часа в день. Собственное приложение позволяет:
        </p>
        <ul>
            <li>Повысить лояльность клиентов через push-уведомления и программы лояльности</li>
            <li>Увеличить продажи за счёт удобного мобильного канала</li>
            <li>Автоматизировать бизнес-процессы и снизить издержки</li>
            <li>Получить конкурентное преимущество на рынке</li>
            <li>Собирать данные о поведении пользователей для улучшения продукта</li>
        </ul>

        <h3>Наш подход к разработке</h3>
        <p>
            Мы работаем по методологии Agile с еженедельными демонстрациями результатов. Вы всегда в курсе прогресса и можете 
            вносить корректировки на любом этапе. Используем современные технологии: Swift и Kotlin для нативной разработки, 
            React Native и Flutter для кроссплатформенных решений.
        </p>
        <p>
            Каждый проект начинается с глубокого анализа бизнеса и целевой аудитории. Мы создаём детальное техническое задание, 
            прототипы и дизайн-макеты до начала программирования. Это позволяет избежать дорогих переделок и точно попасть в ожидания.
        </p>

        <h3>Стоимость разработки приложений в Казахстане</h3>
        <p>
            Цена разработки мобильного приложения в Алматы зависит от функционала, дизайна, количества платформ и интеграций. 
            Простое приложение-визитка стоит от 1 500 000 тенге. Полноценное бизнес-приложение для iOS и Android — от 3 500 000 тенге. 
            Сложные проекты с машинным обучением, AR или IoT — от 7 000 000 тенге.
        </p>
        <p>
            Мы предлагаем прозрачное ценообразование с фиксированной стоимостью в договоре. Возможна поэтапная оплата: 
            50% предоплата, 50% после сдачи проекта.
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
