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

.seo-content a {
    color: var(--primary);
    text-decoration: none;
    border-bottom: 1px solid var(--primary-light);
    transition: border-color 0.2s;
}

.seo-content a:hover {
    border-bottom-color: var(--primary);
}

.seo-content__source {
    font-size: 13px;
    color: #999;
    margin-top: -10px;
}

/* ========================================
   ХЛЕБНЫЕ КРОШКИ
======================================== */
.breadcrumbs {
    padding: 18px 0;
    background: var(--gray-light);
}

.breadcrumbs__list {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 8px;
    list-style: none;
    margin: 0;
    padding: 0;
    font-size: 14px;
}

.breadcrumbs__list li {
    display: flex;
    align-items: center;
    gap: 8px;
    color: var(--gray);
}

.breadcrumbs__list a {
    color: var(--primary);
    text-decoration: none;
}

.breadcrumbs__list a:hover {
    text-decoration: underline;
}

.breadcrumbs__list li[aria-current="page"] {
    color: var(--gray);
}

.breadcrumbs__sep {
    color: #bbb;
}

/* ========================================
   БЛОК ПРЯМОГО ОТВЕТА (для ИИ-поиска)
======================================== */
.mobile-summary {
    padding: 50px 0;
    background: var(--white);
}

.summary-box {
    max-width: 900px;
    margin: 0 auto;
    background: var(--gray-light);
    border-left: 4px solid var(--primary);
    border-radius: 14px;
    padding: 30px 35px;
}

.summary-box p {
    font-size: 17px;
    line-height: 1.7;
    color: var(--dark);
    margin: 0 0 20px;
}

.summary-box p:last-of-type {
    margin-bottom: 0;
}

.summary-facts {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 15px;
    margin-top: 25px;
}

@media (max-width: 768px) {
    .summary-facts {
        grid-template-columns: repeat(2, 1fr);
    }
}

.summary-fact {
    background: var(--white);
    border-radius: 12px;
    padding: 18px 20px;
    text-align: center;
}

.summary-fact__value {
    font-size: 20px;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: 4px;
}

.summary-fact__label {
    font-size: 13px;
    color: var(--gray);
    line-height: 1.4;
}

/* ========================================
   БРЕНДОВЫЕ ИКОНКИ ТЕХНОЛОГИЙ
======================================== */
.tech-item__logo {
    width: 60px;
    height: 60px;
    margin: 0 auto 15px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.tech-item__logo svg {
    width: 44px;
    height: 44px;
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
    "url": "https://mdlab.kz/razrabotka-mobilnyh-prilozheniy",
    "offers": {
        "@@type": "AggregateOffer",
        "lowPrice": "750000",
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
            "name": "Сколько стоит разработка мобильного приложения?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Стоимость зависит от сложности проекта и начинается от 750 000 тенге за простое приложение (MVP) на одну платформу. Приложение для iOS и Android с уникальным дизайном и интеграциями — от 1 250 000 тенге. Сложные проекты с ML, геолокацией, видео — от 3 500 000 тенге. Точную стоимость рассчитаем после обсуждения вашей задачи."
            }
        },
        {
            "@@type": "Question",
            "name": "Сколько времени занимает разработка?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "MVP или простое приложение — 1-2 месяца. Приложение средней сложности с админ-панелью — 3-4 месяца. Сложный проект с множеством интеграций — 5-6 месяцев. Сроки обсуждаем на старте и фиксируем в договоре."
            }
        },
        {
            "@@type": "Question",
            "name": "Что лучше: нативное или кроссплатформенное приложение?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Нативная разработка (Swift, Kotlin) даёт максимальную производительность и доступ ко всем функциям устройства. Подходит для игр, AR/VR, сложных анимаций. Кроссплатформа (React Native, Flutter) экономит до 40% бюджета и времени при сохранении качества. Подходит для большинства бизнес-приложений. Поможем выбрать оптимальный вариант для вашего проекта."
            }
        },
        {
            "@@type": "Question",
            "name": "Вы публикуете приложение в магазины?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Да, полностью берём на себя публикацию в App Store и Google Play. Регистрируем аккаунты разработчика (если нужно), готовим описания, скриншоты, иконки. Помогаем пройти модерацию Apple и Google с первого раза."
            }
        },
        {
            "@@type": "Question",
            "name": "Что входит в поддержку после запуска?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Гарантийная поддержка включает: исправление багов, обновление под новые версии iOS и Android, мониторинг работоспособности, консультации. По отдельному договору: добавление нового функционала, маркетинговая поддержка, ASO-оптимизация."
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

<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "HowTo",
    "name": "Этапы разработки мобильного приложения",
    "description": "Полный цикл создания мобильного приложения под ключ в студии Modern Design Lab.",
    "totalTime": "P30D",
    "step": [
        {
            "@@type": "HowToStep",
            "position": 1,
            "name": "Бриф и аналитика",
            "text": "Собираем требования, изучаем бизнес и конкурентов. Определяем функционал, платформы, технологии. Составляем ТЗ и смету."
        },
        {
            "@@type": "HowToStep",
            "position": 2,
            "name": "Прототип и дизайн",
            "text": "Создаём wireframes и интерактивный прототип. Разрабатываем UI-дизайн всех экранов. Согласовываем и вносим правки."
        },
        {
            "@@type": "HowToStep",
            "position": 3,
            "name": "Разработка",
            "text": "Программируем клиентскую часть и серверную логику. Еженедельные демо-показы прогресса. Итеративная разработка по спринтам."
        },
        {
            "@@type": "HowToStep",
            "position": 4,
            "name": "Тестирование",
            "text": "Полное тестирование функционала, производительности, безопасности. Тестируем на реальных устройствах. Исправляем баги."
        },
        {
            "@@type": "HowToStep",
            "position": 5,
            "name": "Запуск и поддержка",
            "text": "Публикуем в App Store и Google Play. Настраиваем аналитику и push-уведомления. Передаём документацию и обучаем команду."
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
            <li><span class="breadcrumbs__sep">/</span> <span aria-current="page">Разработка мобильных приложений</span></li>
        </ol>
    </div>
</nav>

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

<!-- БЛОК ПРЯМОГО ОТВЕТА -->
<section class="mobile-summary">
    <div class="container">
        <div class="summary-box">
            <p>
                <strong>Разработка мобильных приложений в Алматы</strong> — это создание нативных (Swift, Kotlin) и кроссплатформенных (React Native, Flutter) приложений для iOS и Android под ключ: от аналитики и дизайна до публикации в App Store и Google Play. Студия Modern Design Lab разрабатывает приложения с 2014 года.
            </p>
            <p>
                Стоимость — <strong>от 750 000 ₸</strong> за MVP на одной платформе, <strong>от 1 250 000 ₸</strong> за полноценное приложение для iOS и Android, <strong>от 3 500 000 ₸</strong> за сложные проекты с интеграциями и ML. Срок разработки — <strong>от 30 дней</strong> (1–6 месяцев в зависимости от сложности).
            </p>
            <div class="summary-facts">
                <div class="summary-fact">
                    <div class="summary-fact__value">от 750 000 ₸</div>
                    <div class="summary-fact__label">стартовая стоимость</div>
                </div>
                <div class="summary-fact">
                    <div class="summary-fact__value">1–6 мес.</div>
                    <div class="summary-fact__label">срок разработки</div>
                </div>
                <div class="summary-fact">
                    <div class="summary-fact__value">iOS + Android</div>
                    <div class="summary-fact__label">платформы</div>
                </div>
                <div class="summary-fact">
                    <div class="summary-fact__value">App Store + Google Play</div>
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
            <p>Ответы на популярные вопросы о разработке приложений</p>
        </div>

        <div class="faq-list">
            <div class="faq-item active">
                <div class="faq-item__question">
                    <h4>Сколько стоит разработка мобильного приложения?</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="faq-item__answer">
                    <p>Стоимость зависит от сложности проекта и начинается от 750 000 тенге за простое приложение (MVP) на одну платформу. Приложение для iOS и Android с уникальным дизайном и интеграциями — от 1 250 000 тенге. Сложные проекты с ML, геолокацией, видео — от 3 500 000 тенге. Точную стоимость рассчитаем после обсуждения вашей задачи.</p>
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
            Также мы разрабатываем <a href="https://mdlab.kz/internet-magazin">интернет-магазины</a>,
            <a href="https://mdlab.kz/korporativnyy-sayt">корпоративные сайты</a> и
            <a href="https://mdlab.kz/razrabotka-telegram-botov">Telegram-ботов</a> — приложение легко интегрируется с вашими существующими системами.
        </p>

        <h3>Почему бизнесу нужно мобильное приложение?</h3>
        <p>
            Мобильные приложения стали неотъемлемой частью современного бизнеса. По данным отчёта Sensor Tower (data.ai) «State of Mobile 2024»,
            пользователи проводят в мобильных приложениях в среднем около 3,5 часов в день. Собственное приложение позволяет:
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
            Простое приложение (MVP) на одной платформе стоит от 750 000 тенге. Полноценное бизнес-приложение для iOS и Android — от 1 250 000 тенге.
            Сложные проекты с машинным обучением, AR или IoT — от 3 500 000 тенге.
        </p>
        <p>
            Мы предлагаем прозрачное ценообразование с фиксированной стоимостью в договоре. Возможна поэтапная оплата:
            50% предоплата, 50% после сдачи проекта.
        </p>

        <h3>Как заказать создание мобильного приложения</h3>
        <p>
            Заказать разработку мобильного приложения в Modern Design Lab просто: оставьте заявку по телефону, в WhatsApp
            или Telegram — и мы бесплатно проконсультируем и рассчитаем стоимость за 24 часа. Сделать мобильное приложение
            для вашего бизнеса можно под ключ: мы берём на себя весь процесс — от идеи и технического задания до публикации
            в App Store и Google Play и последующей поддержки. Создание приложения ведём по методологии Agile, поэтому вы
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
