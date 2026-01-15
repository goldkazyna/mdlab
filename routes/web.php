<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;

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



Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/{slug}', [ArticleController::class, 'show']);