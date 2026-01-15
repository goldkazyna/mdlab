@extends('layouts.app')

@push('styles')
<style>
:root {
    --primary: #0098D6;
    --primary-light: #d6f3ff;
    --white: #ffffff;
    --dark: #1a1a2e;
    --gray: #666;
    --gray-light: #f8f9fa;
}

/* ========================================
   HERO СЕКЦИЯ
======================================== */
.lp-hero {
    background: linear-gradient(135deg, var(--primary-light) 0%, var(--white) 100%);
    padding: 160px 0 80px;
    position: relative;
    overflow: hidden;
}

@media (max-width: 992px) {
    .lp-hero {
        padding: 110px 0 60px;
    }
}

.lp-hero::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -10%;
    width: 600px;
    height: 600px;
    background: var(--primary);
    opacity: 0.05;
    border-radius: 50%;
}

.lp-hero__row {
    display: flex;
    align-items: center;
    gap: 60px;
}

.lp-hero__content {
    flex: 1;
}

.lp-hero__image {
    flex: 1;
    text-align: center;
}

.lp-hero__image img {
    max-width: 100%;
    height: auto;
    border-radius: 20px;
    box-shadow: 0 30px 60px rgba(0, 152, 214, 0.2);
}

.lp-hero__badge {
    display: inline-block;
    background: var(--primary);
    color: var(--white);
    padding: 8px 20px;
    border-radius: 50px;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 20px;
}

.lp-hero h1 {
    font-size: 48px;
    font-weight: 800;
    color: var(--dark);
    line-height: 1.2;
    margin-bottom: 20px;
}

.lp-hero h1 span {
    color: var(--primary);
}

.lp-hero__subtitle {
    font-size: 20px;
    color: var(--gray);
    margin-bottom: 30px;
    line-height: 1.6;
}

.lp-hero__features {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    margin-bottom: 30px;
}

.lp-hero__feature {
    display: flex;
    align-items: center;
    gap: 10px;
    background: var(--white);
    padding: 12px 20px;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
}

.lp-hero__feature i {
    color: var(--primary);
    font-size: 18px;
}

.lp-hero__feature span {
    font-weight: 500;
    color: var(--dark);
}

.lp-hero__buttons {
    display: flex;
    gap: 15px;
}

.btn-primary-lp {
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

.btn-primary-lp:hover {
    background: #007ab8;
    transform: translateY(-3px);
    box-shadow: 0 15px 30px rgba(0, 152, 214, 0.3);
    color: var(--white);
}

.btn-outline-lp {
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

.btn-outline-lp:hover {
    background: var(--primary);
    color: var(--white);
}

@media (max-width: 992px) {
    .lp-hero__row {
        flex-direction: column;
    }
    .lp-hero h1 {
        font-size: 36px;
    }
    .lp-hero__buttons {
        flex-direction: column;
    }
}

/* ========================================
   СЕКЦИЯ ПРЕИМУЩЕСТВА
======================================== */
.lp-advantages {
    padding: 80px 0;
    background: var(--white);
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
.lp-includes {
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
}

/* ========================================
   СЕКЦИЯ ЭТАПЫ
======================================== */
.lp-steps {
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
    background: var(--gray-light);
    padding: 25px 30px;
    border-radius: 15px;
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
    margin: 0;
}

.step-item__time {
    display: inline-block;
    background: var(--primary-light);
    color: var(--primary);
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
    margin-top: 10px;
}

/* ========================================
   СЕКЦИЯ ТАРИФЫ
======================================== */
.lp-pricing {
    padding: 80px 0;
    background: var(--gray-light);
}

.pricing-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

@media (max-width: 992px) {
    .pricing-grid {
        grid-template-columns: 1fr;
        max-width: 400px;
        margin: 0 auto;
    }
}

.pricing-card {
    background: var(--white);
    border-radius: 25px;
    padding: 40px 30px;
    text-align: center;
    position: relative;
    transition: all 0.3s;
    border: 2px solid transparent;
}

.pricing-card:hover {
    border-color: var(--primary);
    transform: translateY(-10px);
}

.pricing-card--popular {
    border-color: var(--primary);
}

.pricing-card__badge {
    position: absolute;
    top: -15px;
    left: 50%;
    transform: translateX(-50%);
    background: var(--primary);
    color: var(--white);
    padding: 8px 25px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
}

.pricing-card h3 {
    font-size: 24px;
    font-weight: 700;
    color: var(--dark);
    margin-bottom: 10px;
    margin-top: 10px;
}

.pricing-card__price {
    font-size: 42px;
    font-weight: 800;
    color: var(--primary);
    margin-bottom: 5px;
}

.pricing-card__price span {
    font-size: 18px;
    font-weight: 400;
    color: var(--gray);
}

.pricing-card__desc {
    font-size: 14px;
    color: var(--gray);
    margin-bottom: 25px;
}

.pricing-card__features {
    text-align: left;
    margin-bottom: 30px;
}

.pricing-card__features li {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 10px 0;
    border-bottom: 1px solid #eee;
    font-size: 14px;
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
   СЕКЦИЯ ПОРТФОЛИО
======================================== */
.lp-portfolio {
    padding: 80px 0;
    background: var(--white);
}

.portfolio-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

@media (max-width: 992px) {
    .portfolio-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 576px) {
    .portfolio-grid {
        grid-template-columns: 1fr;
    }
}

.portfolio-item {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.portfolio-item img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    transition: transform 0.5s;
}

.portfolio-item:hover img {
    transform: scale(1.1);
}

.portfolio-item__overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
    padding: 30px 20px 20px;
    transform: translateY(100%);
    transition: transform 0.3s;
}

.portfolio-item:hover .portfolio-item__overlay {
    transform: translateY(0);
}

.portfolio-item__overlay h4 {
    color: var(--white);
    font-size: 18px;
    margin-bottom: 5px;
}

.portfolio-item__overlay span {
    color: rgba(255,255,255,0.7);
    font-size: 14px;
}

/* ========================================
   СЕКЦИЯ FAQ
======================================== */
.lp-faq {
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
    padding: 0 30px;
    max-height: 0;
    overflow: hidden;
    transition: all 0.3s;
}

.faq-item.active .faq-item__answer {
    padding: 0 30px 25px;
    max-height: 500px;
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
.lp-cta {
    padding: 80px 0;
    background: linear-gradient(135deg, var(--primary) 0%, #007ab8 100%);
    text-align: center;
}

.lp-cta h2 {
    font-size: 36px;
    font-weight: 700;
    color: var(--white);
    margin-bottom: 15px;
}

.lp-cta p {
    font-size: 18px;
    color: rgba(255,255,255,0.85);
    margin-bottom: 30px;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.btn-white {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: var(--white);
    color: var(--primary);
    padding: 18px 40px;
    border-radius: 12px;
    font-size: 16px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s;
}

.btn-white:hover {
    background: var(--dark);
    color: var(--white);
    transform: translateY(-3px);
}

/* ========================================
   SEO ТЕКСТ
======================================== */
.lp-seo {
    padding: 60px 0;
    background: var(--gray-light);
}

.seo-content {
    max-width: 900px;
    margin: 0 auto;
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
    margin-bottom: 15px;
}

.seo-content ul {
    margin: 15px 0;
    padding-left: 20px;
}

.seo-content ul li {
    font-size: 16px;
    color: var(--gray);
    line-height: 1.8;
    margin-bottom: 10px;
}
/* ========================================
   КНОПКИ КОНТАКТОВ
======================================== */
.btn-whatsapp {
    background: #25D366 !important;
}

.btn-whatsapp:hover {
    background: #20BA5A !important;
    box-shadow: 0 15px 30px rgba(37, 211, 102, 0.3) !important;
}

.btn-phone {
    background: var(--primary) !important;
}

.btn-telegram {
    border-color: #0088cc !important;
    color: #0088cc !important;
}

.btn-telegram:hover {
    background: #0088cc !important;
    color: var(--white) !important;
}

/* ========================================
   HERO PADDING FIX
======================================== */
.lp-hero {
    padding: 160px 0 80px;
}

@media (max-width: 992px) {
    .lp-hero {
        padding: 110px 0 60px;
    }
}

/* ========================================
   СПИСКИ UL/LI СТИЛИ
======================================== */
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

.include-item ul,
.lp-includes ul {
    list-style: none;
    padding: 0;
    margin: 10px 0 0;
}

.include-item ul li {
    padding-left: 20px;
    position: relative;
    margin-bottom: 8px;
    color: var(--gray);
    font-size: 14px;
}

.include-item ul li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--primary);
    font-weight: bold;
}

/* Списки в FAQ */
.faq-item__answer ul {
    list-style: none;
    padding: 0;
    margin: 15px 0;
}

.faq-item__answer ul li {
    padding-left: 25px;
    position: relative;
    margin-bottom: 10px;
    color: var(--gray);
}

.faq-item__answer ul li::before {
    content: '•';
    position: absolute;
    left: 0;
    color: var(--primary);
    font-size: 18px;
    line-height: 1;
}

/* Общие стили для всех ul на странице */
.lp-advantages ul,
.lp-steps ul,
.lp-portfolio ul,
.lp-cta ul {
    list-style: none;
    padding: 0;
}
</style>
@endpush

@push('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "Создание Landing Page в Алматы",
    "description": "Разработка продающих лендингов под ключ. Уникальный дизайн, адаптивная верстка, SEO-оптимизация. Срок от 5 дней.",
    "provider": {
        "@@type": "Organization",
        "name": "Modern Design Lab"
    },
    "areaServed": {
        "@@type": "City",
        "name": "Алматы"
    },
    "serviceType": "Разработка сайтов",
    "offers": {
        "@@type": "AggregateOffer",
        "lowPrice": "200000",
        "highPrice": "500000",
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
            "name": "Сколько стоит создание Landing Page?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Стоимость разработки лендинга начинается от 200 000 тенге. Цена зависит от сложности дизайна, количества блоков и дополнительного функционала."
            }
        },
        {
            "@@type": "Question",
            "name": "Сколько времени занимает разработка лендинга?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Средний срок создания Landing Page — 5-10 рабочих дней. Срочные проекты выполняем за 3-5 дней."
            }
        },
        {
            "@@type": "Question",
            "name": "Что входит в стоимость лендинга?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "В стоимость входит: уникальный дизайн, адаптивная верстка, подключение форм, базовая SEO-оптимизация, установка на хостинг и обучение работе с сайтом."
            }
        },
        {
            "@@type": "Question",
            "name": "Будет ли лендинг адаптирован под мобильные?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Да, все наши лендинги полностью адаптивны и корректно отображаются на смартфонах, планшетах и компьютерах."
            }
        }
    ]
}
</script>
@endpush

@section('content')

<!-- HERO СЕКЦИЯ -->
<section class="lp-hero">
    <div class="container">
        <div class="lp-hero__row">
            <div class="lp-hero__content">
                <span class="lp-hero__badge">🚀 Срок от 5 дней</span>
                <h1>Создание <span>Landing Page</span> в Алматы</h1>
                <p class="lp-hero__subtitle">Разрабатываем продающие лендинги, которые конвертируют посетителей в клиентов. Уникальный дизайн, быстрая загрузка, адаптация под все устройства.</p>
                
                <div class="lp-hero__features">
                    <div class="lp-hero__feature">
                        <i class="fa-solid fa-check"></i>
                        <span>Конверсия от 5%</span>
                    </div>
                    <div class="lp-hero__feature">
                        <i class="fa-solid fa-check"></i>
                        <span>Адаптивный дизайн</span>
                    </div>
                    <div class="lp-hero__feature">
                        <i class="fa-solid fa-check"></i>
                        <span>SEO-оптимизация</span>
                    </div>
                </div>

			<div class="lp-hero__buttons">
				<a href="https://wa.me/77774333822" target="_blank" class="btn-primary-lp btn-whatsapp">
					<i class="fa-brands fa-whatsapp"></i>
					Написать в WhatsApp
				</a>
				<a href="tel:+77774333822" class="btn-primary-lp btn-phone">
					<i class="fa-solid fa-phone"></i>
					Позвонить
				</a>
				<a href="https://t.me/Mdlabkz" target="_blank" class="btn-outline-lp btn-telegram">
					<i class="fa-brands fa-telegram"></i>
					Telegram
				</a>
			</div>
            </div>
            <div class="lp-hero__image">
                <img src="/assets/img/landing-hero.png" alt="Создание Landing Page в Алматы">
            </div>
        </div>
    </div>
</section>

<!-- ПРЕИМУЩЕСТВА -->
<section class="lp-advantages">
    <div class="container">
        <div class="section-header">
            <h2>Почему заказывают лендинг у нас?</h2>
            <p>10+ лет опыта в создании продающих Landing Page для бизнеса в Казахстане</p>
        </div>

        <div class="advantages-grid">
            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-bullseye"></i>
                </div>
                <h3>Высокая конверсия</h3>
                <p>Проектируем лендинги с учётом психологии продаж. Средняя конверсия наших сайтов — 5-15%.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-mobile-screen"></i>
                </div>
                <h3>Адаптивный дизайн</h3>
                <p>Landing Page идеально отображается на любых устройствах: смартфоны, планшеты, компьютеры.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-bolt"></i>
                </div>
                <h3>Быстрая загрузка</h3>
                <p>Оптимизируем скорость загрузки до 2 секунд. Это повышает конверсию и позиции в Google.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-palette"></i>
                </div>
                <h3>Уникальный дизайн</h3>
                <p>Не используем шаблоны. Каждый лендинг разрабатываем с нуля под ваш бренд и аудиторию.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <h3>SEO-оптимизация</h3>
                <p>Настраиваем мета-теги, микроразметку и структуру для продвижения в поисковых системах.</p>
            </div>

            <div class="advantage-card">
                <div class="advantage-card__icon">
                    <i class="fa-solid fa-headset"></i>
                </div>
                <h3>Поддержка 24/7</h3>
                <p>Бесплатная техническая поддержка 30 дней. Отвечаем на вопросы и вносим правки.</p>
            </div>
        </div>
    </div>
</section>

<!-- ЧТО ВХОДИТ -->
<section class="lp-includes">
    <div class="container">
        <div class="section-header">
            <h2>Что входит в разработку лендинга?</h2>
            <p>Полный комплекс услуг под ключ — от идеи до запуска</p>
        </div>

        <div class="includes-grid">
            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-lightbulb"></i>
                </div>
                <div>
                    <h4>Анализ конкурентов</h4>
                    <p>Изучаем нишу и конкурентов, находим точки роста для вашего бизнеса</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-pencil-ruler"></i>
                </div>
                <div>
                    <h4>Прототип структуры</h4>
                    <p>Разрабатываем продающую структуру с правильной последовательностью блоков</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-wand-magic-sparkles"></i>
                </div>
                <div>
                    <h4>Уникальный дизайн</h4>
                    <p>Создаём дизайн в фирменных цветах с учётом вашего бренда</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-code"></i>
                </div>
                <div>
                    <h4>Адаптивная вёрстка</h4>
                    <p>Верстаем лендинг с адаптацией под все устройства и браузеры</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div>
                    <h4>Формы и интеграции</h4>
                    <p>Подключаем формы заявок, WhatsApp, Telegram, CRM-системы</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-chart-line"></i>
                </div>
                <div>
                    <h4>Аналитика</h4>
                    <p>Устанавливаем Google Analytics, Яндекс Метрику, настраиваем цели</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-server"></i>
                </div>
                <div>
                    <h4>Хостинг и домен</h4>
                    <p>Помогаем с выбором и настройкой хостинга, регистрацией домена</p>
                </div>
            </div>

            <div class="include-item">
                <div class="include-item__icon">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <div>
                    <h4>Обучение</h4>
                    <p>Показываем как редактировать контент и работать с заявками</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ЭТАПЫ РАБОТЫ -->
<section class="lp-steps">
    <div class="container">
        <div class="section-header">
            <h2>Этапы создания Landing Page</h2>
            <p>Прозрачный процесс работы — вы всегда в курсе статуса проекта</p>
        </div>

        <div class="steps-timeline">
            <div class="step-item">
                <div class="step-item__number">1</div>
                <div class="step-item__content">
                    <h4>Бриф и анализ</h4>
                    <p>Собираем информацию о бизнесе, целевой аудитории, конкурентах. Определяем цели и задачи лендинга.</p>
                    <span class="step-item__time">1 день</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">2</div>
                <div class="step-item__content">
                    <h4>Прототип и структура</h4>
                    <p>Разрабатываем продающую структуру, пишем тексты и заголовки, создаём прототип страницы.</p>
                    <span class="step-item__time">1-2 дня</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">3</div>
                <div class="step-item__content">
                    <h4>Дизайн</h4>
                    <p>Создаём уникальный дизайн в фирменном стиле. Согласовываем и вносим правки до полного утверждения.</p>
                    <span class="step-item__time">2-3 дня</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">4</div>
                <div class="step-item__content">
                    <h4>Вёрстка и разработка</h4>
                    <p>Верстаем адаптивный лендинг, подключаем формы, интеграции, настраиваем аналитику.</p>
                    <span class="step-item__time">2-3 дня</span>
                </div>
            </div>

            <div class="step-item">
                <div class="step-item__number">5</div>
                <div class="step-item__content">
                    <h4>Запуск и обучение</h4>
                    <p>Размещаем лендинг на хостинге, тестируем, обучаем работе с сайтом и передаём все доступы.</p>
                    <span class="step-item__time">1 день</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ТАРИФЫ -->
<section class="lp-pricing" id="pricing">
    <div class="container">
        <div class="section-header">
            <h2>Стоимость создания Landing Page</h2>
            <p>Выберите подходящий тариф или закажите индивидуальный расчёт</p>
        </div>

        <div class="pricing-grid">
            <div class="pricing-card">
                <h3>Базовый</h3>
                <div class="pricing-card__price">200 000 <span>₸</span></div>
                <p class="pricing-card__desc">Простой лендинг для старта</p>
                <ul class="pricing-card__features">
                    <li><i class="fa-solid fa-check"></i> До 5 экранов</li>
                    <li><i class="fa-solid fa-check"></i> Адаптивный дизайн</li>
                    <li><i class="fa-solid fa-check"></i> Форма заявки</li>
                    <li><i class="fa-solid fa-check"></i> Базовая SEO-оптимизация</li>
                    <li><i class="fa-solid fa-check"></i> Срок: 5 дней</li>
                </ul>
                <a href="#" class="btn-primary-lp" data-fancybox data-src="#modal-consultation">Заказать</a>
            </div>

            <div class="pricing-card pricing-card--popular">
                <span class="pricing-card__badge">Популярный</span>
                <h3>Стандарт</h3>
                <div class="pricing-card__price">350 000 <span>₸</span></div>
                <p class="pricing-card__desc">Оптимальное решение для бизнеса</p>
                <ul class="pricing-card__features">
                    <li><i class="fa-solid fa-check"></i> До 8 экранов</li>
                    <li><i class="fa-solid fa-check"></i> Уникальный дизайн</li>
                    <li><i class="fa-solid fa-check"></i> Анимации и эффекты</li>
                    <li><i class="fa-solid fa-check"></i> Интеграция WhatsApp</li>
                    <li><i class="fa-solid fa-check"></i> Google Analytics</li>
                    <li><i class="fa-solid fa-check"></i> Срок: 7 дней</li>
                </ul>
                <a href="#" class="btn-primary-lp" data-fancybox data-src="#modal-consultation">Заказать</a>
            </div>

            <div class="pricing-card">
                <h3>Премиум</h3>
                <div class="pricing-card__price">500 000 <span>₸</span></div>
                <p class="pricing-card__desc">Максимум для максимальной конверсии</p>
                <ul class="pricing-card__features">
                    <li><i class="fa-solid fa-check"></i> До 12 экранов</li>
                    <li><i class="fa-solid fa-check"></i> Премиум-дизайн</li>
                    <li><i class="fa-solid fa-check"></i> Квиз-форма</li>
                    <li><i class="fa-solid fa-check"></i> Интеграция CRM</li>
                    <li><i class="fa-solid fa-check"></i> A/B тестирование</li>
                    <li><i class="fa-solid fa-check"></i> Срок: 10 дней</li>
                </ul>
                <a href="#" class="btn-primary-lp" data-fancybox data-src="#modal-consultation">Заказать</a>
            </div>
        </div>
    </div>
</section>

<!-- ПОРТФОЛИО -->
<section class="lp-portfolio">
    <div class="container">
        <div class="section-header">
            <h2>Примеры наших лендингов</h2>
            <p>Посмотрите работы, которые мы создали для клиентов</p>
        </div>

        <div class="portfolio-grid">
            <div class="portfolio-item">
                <a data-fancybox="portfolio" href="/images/gallery/land/1big.jpg">
                    <img src="/images/gallery/land/1.jpg" alt="Landing Page пример 1">
                    <div class="portfolio-item__overlay">
                        <h4>Строительная компания</h4>
                        <span>Landing Page</span>
                    </div>
                </a>
            </div>
            <div class="portfolio-item">
                <a data-fancybox="portfolio" href="/images/gallery/land/2big.jpg">
                    <img src="/images/gallery/land/2.jpg" alt="Landing Page пример 2">
                    <div class="portfolio-item__overlay">
                        <h4>Медицинский центр</h4>
                        <span>Landing Page</span>
                    </div>
                </a>
            </div>
            <div class="portfolio-item">
                <a data-fancybox="portfolio" href="/images/gallery/land/3big.jpg">
                    <img src="/images/gallery/land/3.jpg" alt="Landing Page пример 3">
                    <div class="portfolio-item__overlay">
                        <h4>Доставка еды</h4>
                        <span>Landing Page</span>
                    </div>
                </a>
            </div>
            <div class="portfolio-item">
                <a data-fancybox="portfolio" href="/images/gallery/land/4big.jpg">
                    <img src="/images/gallery/land/4.jpg" alt="Landing Page пример 4">
                    <div class="portfolio-item__overlay">
                        <h4>Фитнес-клуб</h4>
                        <span>Landing Page</span>
                    </div>
                </a>
            </div>
            <div class="portfolio-item">
                <a data-fancybox="portfolio" href="/images/gallery/land/5big.jpg">
                    <img src="/images/gallery/land/5.jpg" alt="Landing Page пример 5">
                    <div class="portfolio-item__overlay">
                        <h4>Автосервис</h4>
                        <span>Landing Page</span>
                    </div>
                </a>
            </div>
            <div class="portfolio-item">
                <a data-fancybox="portfolio" href="/images/gallery/land/6big.jpg">
                    <img src="/images/gallery/land/6.jpg" alt="Landing Page пример 6">
                    <div class="portfolio-item__overlay">
                        <h4>Онлайн-курсы</h4>
                        <span>Landing Page</span>
                    </div>
                </a>
            </div>
        </div>

        <div style="text-align: center; margin-top: 40px;">
            <a href="/gallery" class="btn-outline-lp">Смотреть все работы</a>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="lp-faq">
    <div class="container">
        <div class="section-header">
            <h2>Частые вопросы</h2>
            <p>Ответы на популярные вопросы о создании лендингов</p>
        </div>

        <div class="faq-list">
            <div class="faq-item active">
                <div class="faq-item__question">
                    <h4>Сколько стоит создание Landing Page?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Стоимость разработки лендинга в Алматы начинается от 200 000 тенге. Цена зависит от сложности дизайна, количества блоков, анимаций и дополнительного функционала (квиз, калькулятор, интеграции). Точную стоимость рассчитаем после обсуждения вашего проекта.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Сколько времени занимает разработка?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Средний срок создания Landing Page — 5-10 рабочих дней. Базовый лендинг делаем за 5 дней, стандартный за 7 дней, премиум за 10 дней. При необходимости выполняем срочные заказы за 3-5 дней с доплатой.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Что нужно для начала работы?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Для старта нам понадобится: информация о вашем бизнесе и услугах, примеры лендингов которые вам нравятся, логотип и фирменные цвета (если есть), фото и тексты (или мы подготовим их сами). После обсуждения деталей вносите предоплату 50% и мы приступаем.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Будет ли сайт адаптирован под мобильные?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Да, обязательно! Все наши лендинги полностью адаптивны и корректно отображаются на любых устройствах: смартфоны, планшеты, ноутбуки, компьютеры. Более 70% трафика сейчас идёт с мобильных — мы это учитываем.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Можно ли потом редактировать лендинг?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Да, мы разрабатываем лендинги на удобной CMS-системе или передаём исходные файлы. Вы сможете самостоятельно менять тексты, изображения и цены. Также обучим вас работе с сайтом и предоставим инструкцию.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-item__question">
                    <h4>Даёте ли вы гарантию на работу?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Да, предоставляем гарантию 30 дней на все работы. В этот период бесплатно исправляем любые ошибки и баги. Также оказываем бесплатную техническую поддержку — отвечаем на вопросы и помогаем с мелкими правками.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="lp-cta">
    <div class="container">
        <h2>Готовы заказать Landing Page?</h2>
        <p>Оставьте заявку и получите бесплатную консультацию. Обсудим ваш проект и рассчитаем стоимость за 15 минут.</p>
        <a href="#" class="btn-white" data-fancybox data-src="#modal-consultation">
            <i class="fa-solid fa-paper-plane"></i>
            Получить консультацию
        </a>
    </div>
</section>

<!-- SEO ТЕКСТ -->
<section class="lp-seo">
    <div class="container">
        <div class="seo-content">
            <h2>Создание Landing Page в Алматы — закажите продающий лендинг</h2>
            <p><strong>Landing Page</strong> (лендинг пейдж) — это одностраничный сайт, созданный для конвертации посетителей в клиентов. В отличие от обычного сайта, лендинг фокусируется на одном товаре или услуге и ведёт пользователя к целевому действию: оставить заявку, позвонить, купить.</p>

            <h3>Когда нужен лендинг?</h3>
            <p>Заказать разработку Landing Page стоит если вы:</p>
            <ul>
                <li>Запускаете рекламу в Google или Instagram и нужна страница для приёма трафика</li>
                <li>Продаёте один товар или услугу и хотите максимум заявок</li>
                <li>Тестируете новую нишу или продукт перед запуском полноценного сайта</li>
                <li>Проводите акцию, распродажу или набираете участников на мероприятие</li>
            </ul>

            <h3>Преимущества Landing Page</h3>
            <p>Почему лендинг эффективнее обычного сайта для рекламы:</p>
            <ul>
                <li><strong>Высокая конверсия</strong> — один призыв к действию, никаких отвлекающих ссылок</li>
                <li><strong>Быстрая разработка</strong> — запуск за 5-10 дней вместо месяца</li>
                <li><strong>Низкая стоимость</strong> — дешевле полноценного сайта в 2-3 раза</li>
                <li><strong>Простая аналитика</strong> — легко отслеживать эффективность рекламы</li>
            </ul>

            <h3>Разработка лендинга в MD Lab</h3>
            <p>Веб-студия <strong>Modern Design Lab</strong> создаёт продающие Landing Page в Алматы с 2014 года. За это время мы разработали более 200 лендингов для бизнеса в разных нишах: строительство, медицина, образование, услуги, e-commerce.</p>
            <p>Мы не используем готовые шаблоны — каждый лендинг создаём с нуля под ваши задачи. Проектируем структуру на основе анализа конкурентов, пишем продающие тексты, разрабатываем уникальный дизайн и делаем адаптивную вёрстку.</p>

            <h3>Сколько стоит лендинг в Алматы?</h3>
            <p>Стоимость создания Landing Page зависит от сложности проекта:</p>
            <ul>
                <li><strong>Базовый лендинг</strong> (до 5 экранов) — от 200 000 ₸</li>
                <li><strong>Стандартный лендинг</strong> (до 8 экранов с анимациями) — от 350 000 ₸</li>
                <li><strong>Премиум лендинг</strong> (до 12 экранов с интеграциями) — от 500 000 ₸</li>
            </ul>
            <p>Чтобы узнать точную стоимость для вашего проекта — оставьте заявку на бесплатную консультацию. Обсудим задачи и рассчитаем цену за 15 минут.</p>
        </div>
    </div>
</section>

@include('partials.rateit')

@endsection

@push('scripts')
<script>
// FAQ аккордеон
document.querySelectorAll('.faq-item__question').forEach(function(question) {
    question.addEventListener('click', function() {
        var item = this.parentElement;
        var wasActive = item.classList.contains('active');
        
        // Закрываем все
        document.querySelectorAll('.faq-item').forEach(function(faq) {
            faq.classList.remove('active');
        });
        
        // Открываем текущий (если не был открыт)
        if (!wasActive) {
            item.classList.add('active');
        }
    });
});
</script>
@endpush