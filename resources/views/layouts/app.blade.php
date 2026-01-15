<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- ========================================
         1. БАЗОВЫЕ МЕТА-ТЕГИ
    ======================================== -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" type="image/x-icon" href="/favicon.ico">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- ========================================
         2. SEO: ОСНОВНЫЕ МЕТА-ТЕГИ
    ======================================== -->
    <title>{{ $title ?? 'Создание сайтов в Алматы | Веб-студия MD Lab' }}</title>
    <meta name="description" itemprop="description" content="{{ $description ?? '' }}">
    <meta name="author" content="MD Lab">
    <meta name="copyright" content="mdlab.kz">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://mdlab.kz{{ request()->getPathInfo() }}">

    <!-- ========================================
         3. SEO: ВЕРИФИКАЦИЯ ПОИСКОВИКОВ
    ======================================== -->
    <meta name="google-site-verification" content="z2m9z80JrwwOK-4bjb5fJ-YBO6SwvjzsyxrUMRKnEcA">
    <meta name="yandex-verification" content="896a7af620ed6731">

    <!-- ========================================
         4. SEO: OPEN GRAPH (Facebook, Instagram, LinkedIn)
    ======================================== -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://mdlab.kz{{ request()->getPathInfo() }}">
    <meta property="og:title" content="{{ $title ?? '' }}">
    <meta property="og:description" content="{{ $description ?? '' }}">
    <meta property="og:image" content="https://mdlab.kz/assets/img/og-image.jpg">
    <meta property="og:site_name" content="Modern Design Lab">
    <meta property="og:locale" content="ru_RU">

    <!-- ========================================
         5. SEO: TWITTER CARDS
    ======================================== -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://mdlab.kz{{ request()->getPathInfo() }}">
    <meta name="twitter:title" content="{{ $title ?? '' }}">
    <meta name="twitter:description" content="{{ $description ?? '' }}">
    <meta name="twitter:image" content="https://mdlab.kz/assets/img/og-image.jpg">

    <!-- ========================================
     6. SEO: SCHEMA.ORG (Структурированные данные)
	======================================== -->
	<meta itemscope itemType="https://schema.org/WebPage" itemid="https://mdlab.kz/">

	<script type="application/ld+json">
	{
		"@@context": "https://schema.org",
		"@@type": "Organization",
		"name": "Modern Design Lab",
		"alternateName": "MD Lab",
		"url": "https://mdlab.kz/",
		"logo": "https://mdlab.kz/assets/img/logo.png",
		"description": "Профессиональная разработка сайтов и веб-дизайн в Алматы. 10+ лет опыта, 300+ проектов.",
		"foundingDate": "2014",
		"email": "info@@mdlab.kz",
		"telephone": "+77774333822",
		"address": {
			"@@type": "PostalAddress",
			"streetAddress": "ул. Назарбаева 50, 2 эт. 209 оф.",
			"addressLocality": "Алматы",
			"postalCode": "050030",
			"addressCountry": "KZ"
		},
		"geo": {
			"@@type": "GeoCoordinates",
			"latitude": "43.238293",
			"longitude": "76.945465"
		},
		"areaServed": {
			"@@type": "City",
			"name": "Алматы"
		},
		"sameAs": [
			"https://www.instagram.com/mdlabkz/",
			"https://www.facebook.com/MD-Lab-351217825313347/",
			"https://vk.com/public151532814"
		],
		"priceRange": "$$"
	}
	</script>

	<script type="application/ld+json">
	{
		"@@context": "https://schema.org",
		"@@type": "ProfessionalService",
		"name": "Modern Design Lab - Разработка сайтов в Алматы",
		"image": "https://mdlab.kz/assets/img/logo.png",
		"@@id": "https://mdlab.kz",
		"url": "https://mdlab.kz",
		"telephone": "+77774333822",
		"priceRange": "$$",
		"address": {
			"@@type": "PostalAddress",
			"streetAddress": "ул. Назарбаева 50, офис 209",
			"addressLocality": "Алматы",
			"postalCode": "050030",
			"addressCountry": "KZ"
		},
		"geo": {
			"@@type": "GeoCoordinates",
			"latitude": 43.238293,
			"longitude": 76.945465
		},
		"openingHoursSpecification": {
			"@@type": "OpeningHoursSpecification",
			"dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
			"opens": "09:00",
			"closes": "18:00"
		}
	}
	</script>
	@stack('schema')
    <!-- ========================================
         7. АНАЛИТИКА: Google Tag Manager
    ======================================== -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PDB87XDS');</script>

    <!-- ========================================
         8. ПРОИЗВОДИТЕЛЬНОСТЬ: Preconnect & DNS-Prefetch
    ======================================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://www.googletagmanager.com">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://api-maps.yandex.ru">
    <link rel="dns-prefetch" href="https://www.googletagmanager.com">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">

    <!-- ========================================
         9. ПРОИЗВОДИТЕЛЬНОСТЬ: Preload критичных ресурсов
    ======================================== -->
    <link rel="preload" href="/assets/img/hero-img-home.png" as="image">

    <!-- ========================================
         10. СТИЛИ: Критичные (загружаем сразу)
    ======================================== -->
    <link rel="stylesheet" href="/assets/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/home/main-home.css?v=1.1">
    <link rel="stylesheet" href="/assets/css/header.css?v=1.2">
    <link rel="stylesheet" href="/assets/css/footer.css">
    <link rel="stylesheet" href="/assets/js/rated/rateit.css">

    <!-- ========================================
         11. СТИЛИ: Шрифты (отложенная загрузка)
    ======================================== -->
    <link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:wght@400;700&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:wght@400;700&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet"></noscript>

    <!-- ========================================
         12. СТИЛИ: Некритичные (отложенная загрузка)
    ======================================== -->
    <link rel="preload" href="/assets/fonts/font-awesome/css/font-awesome-all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="/assets/fonts/font-awesome/css/font-awesome-all.min.css"></noscript>

    <link rel="preload" href="/assets/fonts/md-icons/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="/assets/fonts/md-icons/style.css"></noscript>

    <link rel="preload" href="/assets/lib/aos/aos.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="/assets/lib/aos/aos.css"></noscript>

    <link rel="preload" href="/assets/lib/fancybox/fancybox.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="/assets/lib/fancybox/fancybox.css"></noscript>

    <link rel="preload" href="/assets/lib/swiper/swiper-bundle.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="/assets/lib/swiper/swiper-bundle.min.css"></noscript>

    <!-- ========================================
         13. СТИЛИ: Страничные (через push)
    ======================================== -->
    @stack('styles')

    <!-- ========================================
         14. СТИЛИ: Кастомные inline-стили
    ======================================== -->
    <style>
    .btn_whatsapp1 {
        background-color: #25D366;
        color: #ffffff;
    }
    .btn_whatsapp1:hover {
        background-color: #20BA5A;
        color: #ffffff;
        text-decoration: none;
    }
    .btn_whatsapp1 i {
        font-size: 1.2em;
    }
    .btn i.fa-whatsapp {
        color: #ffffff;
    }
    .fancybox__content {
        width: 600px !important;
    }
    </style>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDB87XDS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="wrapper">
    @include('partials.header')

    @yield('content')
	
    @include('partials.footer')
</div>

@include('partials.modals')

<!-- Все внешние скрипты с defer -->
<script src="/assets/lib/jquery-3.3.1.min.js"></script>
<script defer src="/assets/lib/bootstrap/bootstrap.bundle.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.2/lottie.min.js"></script>
<script defer src="/assets/lib/jquery.maskedinput.min.js"></script>
<script defer src="/assets/lib/isotope.pkgd.min.js"></script>
<script defer src="/assets/lib/swiper/swiper-bundle.min.js"></script>
<script defer src="/assets/lib/jquery.spincrement.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
<script defer src="/assets/lib/fancybox/fancybox.umd.js"></script>
<script defer src="/assets/lib/aos/aos.js"></script>
<script defer src="/assets/js/quiz.js?v=1.1"></script>
<script defer src="/assets/js/animate.js?v=1.1"></script>
<script defer src="/assets/js/main.js?v=1.1"></script>
<script src="/assets/js/rated/jquery.rateit.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    if(typeof jQuery !== 'undefined' && jQuery.fn.rateit) {
        $('.rateit').rateit();
    }
});
</script>
@stack('scripts')
</body>
</html>