<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StocksController;
use App\Http\Controllers\VisitLogController;
use App\Http\Controllers\VisitTrackController;
use App\Http\Middleware\VerifyStocksApiToken;
use App\Support\PageMarkdown;
use App\Http\Middleware\VisitLogAuth;

Route::get('/', [HomeController::class, 'index']);
// --- Создание сайтов и дизайн: общий шаблон pages/site-service, данные в resources/data/{slug}.php ---
// У каждой страницы есть markdown-версия /{slug}.md для ИИ-ассистентов (ссылки в llms.txt)
$sitePages = [
    'landing-page' => [
        'title' => 'Создание Landing Page в Алматы — лендинг под ключ от 200 000 ₸ | MD Lab',
        'description' => 'Заказать продающий лендинг в Алматы: структура, тексты, уникальный дизайн, адаптив под телефоны и аналитика для рекламы. От 200 000 ₸, срок 5–10 дней.'
    ],
    'korporativnyy-sayt' => [
        'title' => 'Создание корпоративного сайта в Алматы — под ключ от 260 000 ₸ | MD Lab',
        'description' => 'Разработка корпоративного сайта компании в Алматы: структура под SEO, тексты, уникальный дизайн, панель управления, CRM. От 260 000 ₸, срок 3–6 недель.'
    ],
    'internet-katalog' => [
        'title' => 'Создание интернет-каталога в Алматы — сайт-каталог от 340 000 ₸ | MD Lab',
        'description' => 'Разработка сайта-каталога товаров в Алматы: фильтры, карточки, запрос цены и КП, загрузка из Excel и 1С, SEO. Без корзины. От 340 000 ₸, 4–6 недель.'
    ],
    'internet-magazin' => [
        'title' => 'Создание интернет-магазина в Алматы — под ключ от 500 000 ₸ | MD Lab',
        'description' => 'Разработка интернет-магазина в Алматы: корзина, Kaspi Pay и оплата картой, доставка, личный кабинет, обмен с 1С и Kaspi Магазином. От 500 000 ₸, 5–8 недель.'
    ],
    'dizayn-sayta' => [
        'title' => 'Дизайн сайта в Алматы — UX/UI-дизайн и редизайн от 120 000 ₸ | MD Lab',
        'description' => 'Заказать дизайн сайта в Алматы: прототипы, уникальные макеты для компьютера и телефона в Figma, UI-кит, редизайн. От 120 000 ₸, срок 1–4 недели.'
    ],
    'razrabotka-logotipa-v-almaty' => [
        'title' => 'Разработка логотипа в Алматы — от 60 000 ₸, от 5 дней | MD Lab',
        'description' => 'Заказать логотип в Алматы: уникальный дизайн с нуля или редизайн, 2–6 концепций, векторные файлы AI/SVG/PDF и передача прав. От 60 000 ₸, 5–14 дней.'
    ],
    'razrabotka-firmennogo-stilya' => [
        'title' => 'Разработка фирменного стиля и брендбука в Алматы — от 200 000 ₸ | MD Lab',
        'description' => 'Фирменный стиль компании под ключ: логотип, цвета, шрифты, визитки, соцсети, вывеска, гайдлайн или брендбук. От 200 000 ₸, срок 2–6 недель.'
    ],
    'razrabotka-poligraficheskogo-dizayna-v-almaty' => [
        'title' => 'Дизайн полиграфии в Алматы — визитки, буклеты, каталоги от 15 000 ₸ | MD Lab',
        'description' => 'Дизайн визиток, листовок, буклетов, меню, каталогов и упаковки в Алматы. Макеты, готовые к печати в любой типографии. От 15 000 ₸, срок 1–14 дней.'
    ],
    'reklama-v-chatgpt' => [
        'title' => 'Настройка рекламы в ChatGPT в Алматы — запуск ChatGPT Ads от 150 000 ₸ | MD Lab',
        'description' => 'Запустим рекламу в ChatGPT для бизнеса в Казахстане: кабинет Ads Manager, проверка ниши, объявления, товарный фид, пиксель и конверсии. От 150 000 ₸, запуск за 5–10 дней.'
    ],
];

foreach ($sitePages as $slug => $meta) {
    Route::get("/{$slug}.md", fn () => response(view('pages.site-service-md', ['dataFile' => $slug])->render())
        ->header('Content-Type', 'text/markdown; charset=UTF-8'));

    Route::get("/{$slug}", fn () => view('pages.site-service', $meta + ['dataFile' => $slug]));
}

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

// Markdown-версия страницы интеграции 1С для ИИ-ассистентов (ссылка в llms.txt)
Route::get('/integraciya-s-1c.md', function () {
    return response(view('pages.integraciya-s-1c-md')->render())
        ->header('Content-Type', 'text/markdown; charset=UTF-8');
});

Route::get('/integraciya-s-1c', function () {
    return view('pages.integraciya-s-1c', [
        'title' => 'Интеграция 1С с сайтом, Kaspi Магазином, приложением и CRM | MD Lab',
        'description' => 'Связываем 1С с интернет-магазином, Kaspi Магазином, Wildberries, Ozon, приложением, Telegram-ботом и CRM: товары, цены, остатки и заказы без ручного ввода.'
    ]);
});

// Markdown-версия страницы эквайринга для ИИ-ассистентов (ссылка в llms.txt)
Route::get('/podklyuchenie-ekvayringa.md', function () {
    return response(view('pages.podklyuchenie-ekvayringa-md')->render())
        ->header('Content-Type', 'text/markdown; charset=UTF-8');
});

Route::get('/podklyuchenie-ekvayringa', function () {
    return view('pages.podklyuchenie-ekvayringa', [
        'title' => 'Подключение эквайринга и онлайн-оплаты на сайт и в приложение | MD Lab',
        'description' => 'Подключаем онлайн-оплату на сайт, в приложение и Telegram-бот: Kaspi Pay, Halyk ePay, Freedom Pay, CloudPayments. Помощь с договором, онлайн-чеки, 1С и CRM.'
    ]);
});

// Markdown-версия страницы Kaspi для ИИ-ассистентов (ссылка в llms.txt)
Route::get('/integraciya-kaspi.md', function () {
    return response(view('pages.integraciya-kaspi-md')->render())
        ->header('Content-Type', 'text/markdown; charset=UTF-8');
});

Route::get('/integraciya-kaspi', function () {
    return view('pages.integraciya-kaspi', [
        'title' => 'Интеграция Kaspi терминала и QR с 1С, iiko, CRM и сайтом | MD Lab',
        'description' => 'Подключаем терминал Kaspi к 1С, iiko, r_keeper, Poster и CRM: сумма уходит на терминал сама, оплата отмечается в системе. Kaspi QR и Kaspi Pay на сайте.'
    ]);
});

// Markdown-версия страницы SMM для ИИ-ассистентов (ссылка в llms.txt)
Route::get('/prodvighenie-v-socialynyh-setyah.md', function () {
    return response(view('pages.prodvighenie-smm-md')->render())
        ->header('Content-Type', 'text/markdown; charset=UTF-8');
});

Route::get('/prodvighenie-v-socialynyh-setyah', function () {
    return view('pages.prodvighenie-smm', [
        'title' => 'SMM-продвижение Инстаграм в Алматы — от 350 000 ₸/мес | MD Lab',
        'description' => 'Ведение и продвижение Instagram в Алматы и Казахстане: Reels, AI-ролики, сторис, съемка и таргет. Пакеты 350 000, 550 000 и от 750 000 ₸/мес.'
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
// --- Разработка мобильных приложений: хаб + 11 под-страниц, шаблоны pages/{slug}, пакеты и FAQ в resources/data/apps/{slug}.php ---
// /{slug}.md — markdown-версия для ИИ-ассистентов, собирается из HTML страницы (App\Support\PageMarkdown)
$appPages = [
    'razrabotka-mobilnyh-prilozheniy' => [
        'title' => 'Разработка и создание мобильных приложений в Алматы | iOS и Android',
        'description' => 'Профессиональная разработка мобильных приложений в Алматы ⭐ iOS и Android ⭐ Нативные и кроссплатформенные решения ⭐ От 750 000 ₸ ⭐ Срок от 30 дней'
    ],
    'razrabotka-prilozheniya-dlya-ios' => [
        'title' => 'Разработка приложений для iOS в Алматы | Swift, iPhone и iPad',
        'description' => 'Разработка нативных приложений для iOS в Алматы ⭐ Swift и SwiftUI ⭐ iPhone и iPad ⭐ Публикация в App Store под ключ ⭐ От 1 000 000 ₸'
    ],
    'razrabotka-prilozheniya-dlya-android' => [
        'title' => 'Разработка приложений для Android в Алматы | Kotlin, Google Play',
        'description' => 'Разработка нативных приложений для Android в Алматы ⭐ Kotlin и Jetpack Compose ⭐ Публикация в Google Play ⭐ Охват 80% рынка ⭐ От 900 000 ₸'
    ],
    'razrabotka-prilozheniya-internet-magazina' => [
        'title' => 'Разработка приложения для интернет-магазина в Алматы под ключ',
        'description' => 'Мобильное приложение для интернет-магазина в Алматы ⭐ Каталог, корзина, онлайн-оплата ⭐ Интеграция с 1С и CRM ⭐ От 1 250 000 ₸'
    ],
    'razrabotka-prilozheniya-dlya-dostavki' => [
        'title' => 'Разработка приложения для доставки еды в Алматы | Курьерский сервис',
        'description' => 'Приложение для доставки еды и курьерских сервисов в Алматы ⭐ GPS-трекинг, карты, онлайн-оплата ⭐ Приложение курьера ⭐ От 1 500 000 ₸'
    ],
    'krossplatformennaya-razrabotka' => [
        'title' => 'Кроссплатформенная разработка приложений в Алматы | Flutter, React Native',
        'description' => 'Кроссплатформенная разработка приложений в Алматы ⭐ Flutter и React Native ⭐ Одно приложение для iOS и Android ⭐ Экономия до 40% ⭐ От 750 000 ₸'
    ],
    'razrabotka-mvp-prilozheniya' => [
        'title' => 'Разработка MVP мобильного приложения в Алматы для стартапа',
        'description' => 'Разработка MVP мобильного приложения в Алматы ⭐ Быстрый запуск за 4-8 недель ⭐ Проверка бизнес-идеи с минимальным бюджетом ⭐ От 750 000 ₸'
    ],
    'razrabotka-prilozheniya-dlya-taksi' => [
        'title' => 'Разработка приложения для такси в Алматы | Сервис заказа поездок',
        'description' => 'Разработка приложения для такси в Алматы ⭐ Приложения водителя и пассажира ⭐ Геолокация, тарификация, онлайн-оплата ⭐ От 1 500 000 ₸'
    ],
    'razrabotka-prilozheniya-dlya-biznesa' => [
        'title' => 'Разработка корпоративных мобильных приложений в Алматы для бизнеса',
        'description' => 'Корпоративные мобильные приложения в Алматы ⭐ Автоматизация процессов ⭐ Интеграция с CRM, ERP, 1С ⭐ Документооборот и HR ⭐ От 2 000 000 ₸'
    ],
    'razrabotka-prilozheniya-dlya-fitnesa' => [
        'title' => 'Разработка приложения для фитнеса и спорта в Алматы',
        'description' => 'Разработка приложения для фитнеса в Алматы ⭐ Тренировки, расписание, онлайн-запись ⭐ Подписки и трекинг прогресса ⭐ От 1 250 000 ₸'
    ],
    'razrabotka-prilozheniya-dlya-restorana' => [
        'title' => 'Разработка приложения для ресторана и кафе в Алматы',
        'description' => 'Разработка приложения для ресторана и кафе в Алматы ⭐ Электронное меню, онлайн-заказ, бронирование ⭐ Программа лояльности ⭐ От 1 000 000 ₸'
    ],
    'razrabotka-prilozheniya-s-oplatoy' => [
        'title' => 'Разработка приложения с онлайн-оплатой в Алматы | Kaspi, эквайринг',
        'description' => 'Разработка приложения с онлайн-оплатой в Алматы ⭐ Интеграция Kaspi, Halyk, эквайринг ⭐ Безопасные платежи, подписки ⭐ От 1 250 000 ₸'
    ],
];

foreach ($appPages as $slug => $meta) {
    Route::get("/{$slug}.md", function () use ($slug, $meta) {
        $html = view("pages.{$slug}", $meta)->renderSections()['content'];
        $updated = (require resource_path("data/apps/{$slug}.php"))['updated'];

        return response(PageMarkdown::fromHtml($html, "https://mdlab.kz/{$slug}", $updated))
            ->header('Content-Type', 'text/markdown; charset=UTF-8');
    });

    Route::get("/{$slug}", fn () => view("pages.{$slug}", $meta));
}


Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/{slug}', [ArticleController::class, 'show']);

Route::post('/api/rating', [RatingController::class, 'store']);
Route::get('/api/rating', [RatingController::class, 'get']);


Route::post('/api/contact', [ContactController::class, 'send']);

Route::post('/api/stocks', [StocksController::class, 'store'])
    ->middleware(VerifyStocksApiToken::class);
// --- Журнал заходов (поиск скликивания рекламы) ---
Route::post('/api/v', [VisitTrackController::class, 'store'])->middleware('throttle:120,1');

Route::get('/visits/login', [VisitLogController::class, 'loginForm'])->name('visits.login');
Route::post('/visits/login', [VisitLogController::class, 'login']);
Route::middleware(VisitLogAuth::class)->prefix('visits')->group(function () {
    Route::get('/', [VisitLogController::class, 'index'])->name('visits.index');
    Route::post('/logout', [VisitLogController::class, 'logout'])->name('visits.logout');
    Route::get('/device/{fingerprint}', [VisitLogController::class, 'device'])->name('visits.device');
    Route::post('/device/{fingerprint}', [VisitLogController::class, 'updateDevice'])->name('visits.device.update');
});
