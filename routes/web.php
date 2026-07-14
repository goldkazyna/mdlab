<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StocksController;
use App\Http\Middleware\VerifyStocksApiToken;

Route::get('/', [HomeController::class, 'index']);
Route::get('/landing-page', function () {
    return view('pages.landing-page', [
        'title' => ' Создание Landing Page в Алматы — от профеccионалов Modern Design Lab',
        'description' => 'Создание продающей страницы Landing page, конверсия от 10%. От 132 000 тенге. Уникальный дизайн и адаптация под мобильные телефоны в подарок.'
    ]);
});
Route::get('/korporativnyy-sayt', function () {
    return view('pages.korporativnyy-sayt', [
        'title' => 'Создание Корпоративного Сайта - в рассрочку без процентов.',
        'description' => 'Заказывайте разработку корпоративного сайта в Алматы у Modern Design Lab. Высокая конверсия. Скидки на полный комплект.'
    ]);
});

Route::get('/internet-katalog', function () {
    return view('pages.internet-katalog', [
        'title' => 'Создание интернет каталога в Алматы, по очень низким ценам.',
        'description' => 'Создание Интернет-каталога.Студия MD Lab — с нами вы получаете сайт и домен/хостинг на 1 год в подарок!'
    ]);
});

Route::get('/internet-magazin', function () {
    return view('pages.internet-magazin', [
        'title' => 'Создание интернет-магазина в Алматы - в рассрочку от 60 000 тенге.',
        'description' => 'Разработка интернет-магазина — быстро и недорого. Профессиональное строительство сайтов в Алматы. Дизайн и адаптация под мобильные телефоны бесплатно.'
    ]);
});
Route::get('/razrabotka-logotipa-v-almaty', function () {
    return view('pages.razrabotka-logotipa', [
        'title' => 'Разработка логотипа в Алматы. Индивидуальный дизайн.',
        'description' => 'Создание логотипа — наша студия берется за заказы любой сложности. Разработка уникального лого: от создания «с нуля» до редизайна имеющегося логотипа.'
    ]);
});

Route::get('/razrabotka-firmennogo-stilya', function () {
    return view('pages.razrabotka-firmennogo-stilya', [
        'title' => 'Разработка фирменного стиля, разработка сайтов в Алматы.',
        'description' => 'Работа над созданием единого корпоративного стиля для вашего бренда в Алматы — наша студия поможет вам разработать ваш собственный респектабельный имидж!'
    ]);
});

Route::get('/razrabotka-poligraficheskogo-dizayna-v-almaty', function () {
    return view('pages.razrabotka-poligrafii', [
        'title' => 'Разработка полиграфического дизайна в Алматы, визитки, буклеты',
        'description' => 'Разработка дизайна полиграфии в Алматы — мы знаем, каким должно быть по-настоящему привлекательное рекламное объявление.'
    ]);
});

Route::get('/dizayn-sayta', function () {
    return view('pages.dizayn-sayta', [
        'title' => 'Веб-дизайн сайтов в Алматы от Modern Design Lab',
        'description' => 'Дизайн вашего сайта в Алматы — разработаем уникальное оформление для веб-ресурса или исправим текущее. Работаем индивидуально с каждым отдельным сайтом.'
    ]);
});
Route::get('/raskrutka-saytov-v-almaty', function () {
    return view('pages.raskrutka-saytov', [
        'title' => 'Раскрутка сайтов в Алматы, разработка сайтов в Алматы.',
        'description' => 'Продвижение вашего сайта в Алматы — наша студия пользуется только современными инструментами раскрутки веб-ресурсов.'
    ]);
});

Route::get('/dorabotka-sayta', function () {
    return view('pages.dorabotka-sayta', [
        'title' => 'Доработка сайта в Алматы - любой сложности на любом движке.',
        'description' => 'Доработаем любой сайт в Алматы. Исправление ошибок, внедрение новых инструментов, подключение сервисов — наша студия выполнит заказ любого уровня сложности.'
    ]);
});

Route::get('/podderghka-sayta', function () {
    return view('pages.podderghka-sayta', [
        'title' => 'Поддержка сайта',
        'description' => 'Техническая поддержка сайта в Алматы — обеспечим круглосуточную корректную работу вашего ресурса. Пользуемся только актуальными IT-инструментами.'
    ]);
});

Route::get('/tehnicheskoe-zadaniya', function () {
    return view('pages.tehnicheskoe-zadanie', [
        'title' => 'Разработка технического задания под создание сайта от 65 000 тенге.',
        'description' => 'Разработка технического задания под создание сайта — заложим прочный фундамент будущего ресурса. Поможем вам не упустить ни единой детали.'
    ]);
});

Route::get('/razrabotka-telegram-botov', function () {
    return view('pages.razrabotka-telegram-botov', [
        'title' => 'Разработка Telegram-ботов в Алматы – создание умных решений для бизнеса',
        'description' => 'Разработка Telegram-ботов в Алматы под ключ! Автоматизируйте бизнес, увеличьте продажи и улучшите сервис с умными ботами. Закажите бота прямо сейчас!'
    ]);
});
Route::get('/kontekstnaya-reklama', function () {
    return view('pages.kontekstnaya-reklama', [
        'title' => 'Настройка контекстной рекламы в Алматы. Подарок 60$.',
        'description' => 'Аудит и настройка контекстной рекламы в Алматы — увеличим показатели конверсии вашего сайта, пополним клиентскую базу новыми лицами!'
    ]);
});

Route::get('/prodvighenie-v-socialynyh-setyah', function () {
    return view('pages.prodvighenie-smm', [
        'title' => 'Продвижение  Инстаграм в Алматы от 100 000 тенге',
        'description' => 'Продвижение Инстаграм — раскрутка аккаунта с нуля. Увеличение продаж от 65%. Размещение ежедневных постов'
    ]);
});

Route::get('/seo-prodvighenie', function () {
    return view('pages.seo-prodvighenie', [
        'title' => 'SEO продвижение от Modern Design Lab. Выведем ваш сайт в топ.',
        'description' => 'SEO-продвижение сайтов в Алматы — мы найдем кратчайший путь до верхних строчек поисковой выдачи!'
    ]);
});
Route::get('/gallery', function () {
    return view('pages.gallery', [
        'title' => 'Наши работы по разработке сайтов | Портфолио MD Lab',
        'description' => 'Портфолио веб-студии Modern Design Lab ⭐ 300+ проектов ⭐ Интернет-магазины, лендинги, корпоративные сайты ⭐ Смотреть работы'
    ]);
});
Route::get('/kontakty', function () {
    return view('pages.kontakty', [
        'title' => 'Контакты | Веб-студия MD Lab в Алматы',
        'description' => 'Свяжитесь с нами ⭐ Алматы, ул. Назарбаева 50, офис 209 ⭐ +7 777 433 38 22 ⭐ info@mdlab.kz'
    ]);
});
Route::get('/razrabotka-mobilnyh-prilozheniy', function () {
    return view('pages.razrabotka-mobilnyh-prilozheniy', [
        'title' => 'Разработка и создание мобильных приложений в Алматы | iOS и Android',
        'description' => 'Профессиональная разработка мобильных приложений в Алматы ⭐ iOS и Android ⭐ Нативные и кроссплатформенные решения ⭐ От 750 000 ₸ ⭐ Срок от 30 дней'
    ]);
});

// --- Под-страницы разработки мобильных приложений ---
Route::get('/razrabotka-prilozheniya-dlya-ios', function () {
    return view('pages.razrabotka-prilozheniya-dlya-ios', [
        'title' => 'Разработка приложений для iOS в Алматы | Swift, iPhone и iPad',
        'description' => 'Разработка нативных приложений для iOS в Алматы ⭐ Swift и SwiftUI ⭐ iPhone и iPad ⭐ Публикация в App Store под ключ ⭐ От 1 000 000 ₸'
    ]);
});
Route::get('/razrabotka-prilozheniya-dlya-android', function () {
    return view('pages.razrabotka-prilozheniya-dlya-android', [
        'title' => 'Разработка приложений для Android в Алматы | Kotlin, Google Play',
        'description' => 'Разработка нативных приложений для Android в Алматы ⭐ Kotlin и Jetpack Compose ⭐ Публикация в Google Play ⭐ Охват 80% рынка ⭐ От 900 000 ₸'
    ]);
});
Route::get('/razrabotka-prilozheniya-internet-magazina', function () {
    return view('pages.razrabotka-prilozheniya-internet-magazina', [
        'title' => 'Разработка приложения для интернет-магазина в Алматы под ключ',
        'description' => 'Мобильное приложение для интернет-магазина в Алматы ⭐ Каталог, корзина, онлайн-оплата ⭐ Интеграция с 1С и CRM ⭐ От 1 250 000 ₸'
    ]);
});
Route::get('/razrabotka-prilozheniya-dlya-dostavki', function () {
    return view('pages.razrabotka-prilozheniya-dlya-dostavki', [
        'title' => 'Разработка приложения для доставки еды в Алматы | Курьерский сервис',
        'description' => 'Приложение для доставки еды и курьерских сервисов в Алматы ⭐ GPS-трекинг, карты, онлайн-оплата ⭐ Приложение курьера ⭐ От 1 500 000 ₸'
    ]);
});
Route::get('/krossplatformennaya-razrabotka', function () {
    return view('pages.krossplatformennaya-razrabotka', [
        'title' => 'Кроссплатформенная разработка приложений в Алматы | Flutter, React Native',
        'description' => 'Кроссплатформенная разработка приложений в Алматы ⭐ Flutter и React Native ⭐ Одно приложение для iOS и Android ⭐ Экономия до 40% ⭐ От 750 000 ₸'
    ]);
});
Route::get('/razrabotka-mvp-prilozheniya', function () {
    return view('pages.razrabotka-mvp-prilozheniya', [
        'title' => 'Разработка MVP мобильного приложения в Алматы для стартапа',
        'description' => 'Разработка MVP мобильного приложения в Алматы ⭐ Быстрый запуск за 4-8 недель ⭐ Проверка бизнес-идеи с минимальным бюджетом ⭐ От 750 000 ₸'
    ]);
});
Route::get('/razrabotka-prilozheniya-dlya-taksi', function () {
    return view('pages.razrabotka-prilozheniya-dlya-taksi', [
        'title' => 'Разработка приложения для такси в Алматы | Сервис заказа поездок',
        'description' => 'Разработка приложения для такси в Алматы ⭐ Приложения водителя и пассажира ⭐ Геолокация, тарификация, онлайн-оплата ⭐ От 1 500 000 ₸'
    ]);
});
Route::get('/razrabotka-prilozheniya-dlya-biznesa', function () {
    return view('pages.razrabotka-prilozheniya-dlya-biznesa', [
        'title' => 'Разработка корпоративных мобильных приложений в Алматы для бизнеса',
        'description' => 'Корпоративные мобильные приложения в Алматы ⭐ Автоматизация процессов ⭐ Интеграция с CRM, ERP, 1С ⭐ Документооборот и HR ⭐ От 2 000 000 ₸'
    ]);
});
Route::get('/razrabotka-prilozheniya-dlya-fitnesa', function () {
    return view('pages.razrabotka-prilozheniya-dlya-fitnesa', [
        'title' => 'Разработка приложения для фитнеса и спорта в Алматы',
        'description' => 'Разработка приложения для фитнеса в Алматы ⭐ Тренировки, расписание, онлайн-запись ⭐ Подписки и трекинг прогресса ⭐ От 1 250 000 ₸'
    ]);
});
Route::get('/razrabotka-prilozheniya-dlya-restorana', function () {
    return view('pages.razrabotka-prilozheniya-dlya-restorana', [
        'title' => 'Разработка приложения для ресторана и кафе в Алматы',
        'description' => 'Разработка приложения для ресторана и кафе в Алматы ⭐ Электронное меню, онлайн-заказ, бронирование ⭐ Программа лояльности ⭐ От 1 000 000 ₸'
    ]);
});
Route::get('/razrabotka-prilozheniya-s-oplatoy', function () {
    return view('pages.razrabotka-prilozheniya-s-oplatoy', [
        'title' => 'Разработка приложения с онлайн-оплатой в Алматы | Kaspi, эквайринг',
        'description' => 'Разработка приложения с онлайн-оплатой в Алматы ⭐ Интеграция Kaspi, Halyk, эквайринг ⭐ Безопасные платежи, подписки ⭐ От 1 250 000 ₸'
    ]);
});


Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/{slug}', [ArticleController::class, 'show']);

Route::post('/api/rating', [RatingController::class, 'store']);
Route::get('/api/rating', [RatingController::class, 'get']);


Route::post('/api/contact', [ContactController::class, 'send']);

Route::post('/api/stocks', [StocksController::class, 'store'])
    ->middleware(VerifyStocksApiToken::class);