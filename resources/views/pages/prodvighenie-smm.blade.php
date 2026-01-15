@extends('layouts.app')
@push('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "SMM продвижение в Алматы",
    "description": "Продвижение в Instagram, Facebook, TikTok. Таргетированная реклама и ведение соцсетей.",
    "provider": {
        "@@type": "Organization",
        "name": "Modern Design Lab"
    },
    "areaServed": {
        "@@type": "City",
        "name": "Алматы"
    },
    "serviceType": "SMM продвижение",
    "offers": {
        "@@type": "Offer",
        "price": "150000",
        "priceCurrency": "KZT"
    }
}
</script>
@endpush
@section('content')
<style>



    .title {
        font-size: 40px;
        line-height: 45px;
        font-weight: 700;
        text-align: left;
        font-family: Arial;
    }

    .title.lined {
        padding: 0 0 0 128px;
    }

    .title.lined:before {
        position: absolute;
        content: '';
        left: 0;
        top: 21px;
        width: 82px;
        height: 5px;
        background-color: #dd1b1b;
    }

    .min-title {
        font-size: 25px;
        line-height: 30px;
    }

    p {
        font-size: 16px;
        line-height: 19px;
    }

    p.big {
        font-size: 20px;
        line-height: 24px;
    }

    .title,
    .min-title,
    .order,
    p {
        position: relative;
        z-index: 2;
        margin: 0;
    }

    .order a {
        display: -webkit-inline-flex;
        display: -moz-inline-flex;
        display: -ms-inline-flex;
        display: -o-inline-flex;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        text-decoration: none;
    }

    .order a,
    .order button {
        border-radius: 50px;
        border: 1px solid;
        color: #ffffff;
        position: relative;
        overflow: hidden;
        padding: 15px 35px;
        outline: none;
        font-size: 18px;
        line-height: 21px;
        transition: 0.3s;
        max-width: 418px;
        width: 100%;
    }

    .order a:before,
    .order button:before {
        position: absolute;
        content: '';
        left: 0;
        top: 0;
        width: 0;
        height: 100%;
        transition: 0.3s;
        background: #ffffff;
    }

    .order a:hover:before,
    .order button:hover:before {
        width: 100%;
    }

    .order a span,
    .order button span {
        position: relative;
        z-index: 2;
    }

    .order a.red,
    .order button.red {
        border-color: red;
        background: red;
    }

    .order a.red:hover,
    .order button.red:hover {
        color: red;
    }

    .order a.blue,
    .order button.blue {
        background: #0098d6;
        border-color: #0098d6;
    }

    .order a.blue:hover,
    .order button.blue:hover {
        color: #0098d6;
    }

    .smm-main {
        padding: 270px 0 115px 0;
        background: url(../img/smm-main-bg.jpg) no-repeat center / cover;
    }

    .smm-main div,
    .smm-main p,
    .smm-main h1 {
        color: #ffffff;
    }

    .smm-main .m-row {
        margin: 35px 0 0 0;
    }

    .smm-main .m-row .m-left .order {
        margin: 80px 0 0 0;
    }

    .smm-main .m-row .m-right {
        padding: 35px 0 0 0;
    }

    .smm-main .m-row .m-right .m-block {
        position: relative;
    }

    .smm-main .m-row .m-right .m-block:hover:before {
        background: red;
    }

    .smm-main .m-row .m-right .m-block:before {
        position: absolute;
        content: '';
        left: -11px;
        top: -23px;
        width: 147px;
        height: 147px;
        background: #0098d6;
        border-radius: 50%;
        transition: 0.5s;
    }

    .smm-main .m-row .m-right .m-block div {
        position: relative;
        z-index: 2;
        font-size: 57px;
        line-height: 50px;
        font-weight: 700;
    }

    .smm-main .m-row .m-right .m-block p {
        font-weight: 700;
    }

    .smm-packets {
        padding: 90px 0;
    }

    .smm-packets .p-block {
        margin: 80px auto 0;
        max-width: 383px;
        border: 2px solid #d0d0d0;
        background-color: #ffffff;
        transition: 0.3s;
    }

    .smm-packets .p-block:hover {
        border-color: #0098d6;
        box-shadow: -11px 16px 37px -17px rgba(0, 0, 0, 0.3);
    }

    .smm-packets .p-block:hover .p-top {
        border-color: #0098d6;
    }

    .smm-packets .p-block .p-top {
        padding: 45px 35px 45px 35px;
        border-bottom: 2px solid #d0d0d0;
        transition: 0.3s;
        text-align: center;
    }

    .smm-packets .p-block .p-top .icon {
        height: 50px;
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .smm-packets .p-block .p-top .min-title {
        margin: 32px 0 24px 0;
    }

    .smm-packets .p-block .p-top p {
        font-size: 14px;
        line-height: 17px;
        color: #5e5e5e;
    }

    .smm-packets .p-block .p-body {
        padding: 35px 30px 0px 30px;
    }

    .smm-packets .p-block .p-body .list p {
        padding: 0 0 0 17px;
    }

    .smm-packets .p-block .p-body .list p:not(:last-of-type) {
        margin-bottom: 5px;
    }

    .smm-packets .p-block .p-body .list p:before {
        position: absolute;
        content: '';
        left: 0;
        top: 7px;
        width: 4px;
        height: 4px;
        background-color: #0098d6;
        border-radius: 50%;
    }

    .smm-packets .p-block .p-bottom {
        padding: 0px 30px 30px 30px;
    }

    .smm-packets .p-block .p-bottom .pb-left {
        margin: 0 -10px 0 0;
    }

    .smm-packets .p-block .p-bottom .pb-left p.big {
        color: red;
        margin: 10px 0 0 0;
    }

    .smm-packets .p-block .p-bottom .pb-right {
        text-align: center;
    }

    .smm-services {
        padding: 75px 0 0 0;
        background: url(../img/smm-serv-bg.jpg) no-repeat center top;
    }

    .smm-services .for-title .title {
        margin: 0 0 0 -130px;
    }

    .smm-services .for-title p {
        margin: 60px 0 24px 0;
    }

    .smm-services .s-row {
        border: 2px dashed #e8e8e8;
        background-color: #ffffff;
        padding: 30px;
        transition: 0.3s;
    }

    .smm-services .s-row:hover {
        border-color: #0098d6;
        transform: translateX(15px);
    }

    .smm-services .s-row:not(:last-of-type) {
        margin-bottom: 75px;
    }

    .smm-services .s-row .row {
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
    }

    .smm-services .s-row .s-left p.rd {
        font-weight: 700;
        color: red;
        margin: 10px 0 0 0;
    }

    .smm-services .s-row .s-right {
        margin: 0 -10px 0 0;
        text-align: center;
    }

    .smm-services .s-row .s-right p {
        font-weight: 700;
        color: red;
        margin: 0 0 12px 0;
    }

    .smm-services .s-row .s-right a {
        text-decoration: underline;
        color: #0098d6;
    }

    .smm-services .s-row .s-right a:hover {
        text-decoration: none;
    }

    .smm-will {
        padding: 120px 0 80px 0;
    }

    .smm-will .title {
        display: table;
        margin: auto;
        font-size: 30px;
        line-height: 35px;
    }

    .smm-in {
        padding: 80px 0 60px 0;
        background: url(../img/smm-in.jpg) no-repeat center top / cover;
        background-attachment: fixed;
        text-align: center;
    }

    .smm-in div,
    .smm-in p {
        color: #ffffff;
    }

    .smm-in .i-row {
        margin: 100px 0 0 0;
    }

    .smm-in .i-block {
        margin: 0 0 60px 0;
    }

    .smm-in .i-block:hover .icon {
        transform: translateY(-10px);
    }

    .smm-in .i-block .icon {
        height: 56px;
        margin: 0 0 28px 0;
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: 0.3s;
    }

    .smm-in .order {
        text-align: right;
    }

    .smm-subs {
        padding: 80px 0 120px 0;
    }

    .smm-subs .s-block {
        margin: 65px 0 0 0;
    }

    .smm-subs .s-block:hover .text p {
        transform: translateX(15px);
    }

    .smm-subs .s-block p {
        transition: 0.3s;
    }

    .smm-subs .s-block .s-top {
        display: -webkit-flex;
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: flex;
        align-items: center;
        margin: 0 0 32px 0;
    }

    .smm-subs .s-block .s-top .icon {
        line-height: 0;
    }

    .smm-subs .s-block .s-top p {
        font-weight: 700;
        margin: 0 0 0 40px;
        flex: 1;
    }

    .smm-effective {
        padding: 0 0 30px 0;
        min-height: 708px;
        background: url(../img/smm-effective.jpg) no-repeat center top;
    }

    .smm-effective .title {
        font-size: 36px;
    }

    .smm-effective .tt-1 {
        padding: 120px 0 0 0;
    }

    .smm-effective .tt-1:before {
        top: 0;
    }

    .smm-effective .tt-2 {
        font-weight: 400;
        margin: 50px 0 20px 0;
    }

    .smm-effective .order {
        margin: 100px 0 0 0;
    }

    .smm-minimal {
        padding: 100px 0 100px 0;
    }

    .smm-minimal .title {
        text-transform: uppercase;
    }

    .smm-minimal .min-title {
        font-size: 30px;
        line-height: 35px;
        padding: 0 0 0 130px;
    }

    .smm-minimal .mtt-1 {
        margin: 35px 0 10px 0;
    }

    @media (min-width: 768px) and (max-width: 1199px) {
        .smm-main {
            padding: 125px 0 115px 0;
        }

        .smm-main .m-row .m-right .m-block div {
            font-size: 45px;
        }

        .smm-packets .p-block .p-bottom {
            text-align: center;
        }

        .smm-packets .p-block .p-bottom .order {
            margin: 20px 0 0 0;
        }

        .smm-services {
            padding: 0;
            background: none;
        }

        .smm-services .for-title .title {
            margin: 0;
        }

        .smm-in .i-block {
            margin: 0 0 39px 0;
            height: 125px;
        }

        .smm-subs .s-block {
            margin: 54px 0 0 0;
            text-align: center;
        }

        .smm-subs .s-block .s-top {
            justify-content: center;
        }

        .smm-subs .s-block .s-top p {
            flex: initial;
        }

        .smm-effective {
            background: none;
            min-height: 0;
        }

        .smm-effective .tt-1 {
            padding: 55px 0 0 0;
        }
    }

    @media (max-width: 767px) {
        .container {
            max-width: 360px;
        }

        .title {
            font-size: 25px !important;
            line-height: 30px !important;
            text-align: center;
        }

        .title.lined {
            padding: 0;
        }

        .title.lined:before {
            display: none;
        }

        .min-title {
            font-size: 18px !important;
            line-height: 24px !important;
        }

        p.big {
            font-size: 16px;
            line-height: 19px;
        }

        .order a,
        .order button {
            padding: 10px 15px;
            font-size: 16px;
            line-height: 19px;
            min-height: 55px;
        }

        .smm-main {
            padding: 125px 0 30px 0;
            text-align: center;
        }

        .smm-main .m-row .m-left .order {
            margin: 40px 0 0 0;
        }

        .smm-main .m-row .m-right .m-block div {
            position: relative;
            z-index: 2;
            font-size: 35px;
            line-height: 42px;
        }

        .smm-main .m-row .m-right .m-block {
            height: 140px;
            text-align: center;
            margin: 30px 0 0 0;
        }

        .smm-main .m-row .m-right .m-block:before {
            right: 0;
            margin: auto;
            top: -39px;
        }

        .smm-packets {
            padding: 33px 0;
        }

        .smm-packets .title {
            text-align: center;
        }

        .smm-packets .p-block .p-top {
            padding: 25px 20px 25px 20px;
        }

        .smm-packets .p-block {
            margin: 35px auto 0;
        }

        .smm-packets .p-block .p-top .min-title {
            margin: 15px 0 13px 0;
        }

        .smm-packets .p-block .p-body {
            padding: 22px 15px 21px 15px;
        }

        .smm-packets .p-block .p-bottom {
            padding: 25px 28px 23px 26px;
            text-align: center;
        }

        .smm-packets .p-block .p-bottom .order {
            margin: 20px 0 0 0;
        }

        .smm-services {
            padding: 10px 0 0 0;
            background: none;
            text-align: center;
        }

        .smm-services .for-title .title {
            margin: 0;
        }

        .smm-services .for-title p {
            margin: 24px 0 24px 0;
        }

        .smm-services .s-row:not(:last-of-type) {
            margin-bottom: 28px;
        }

        .smm-services .s-row {
            padding: 20px;
        }

        .smm-will {
            padding: 37px 0 40px 0;
            text-align: center;
        }

        .smm-in {
            padding: 33px 0 39px 0;
        }

        .smm-in .i-block .icon {
            margin: 0 0 14px 0;
        }

        .smm-in .i-block {
            margin: 0 0 37px 0;
        }

        .smm-in .i-row {
            margin: 35px 0 0 0;
        }

        .smm-subs {
            padding: 30px 0 40px 0;
        }

        .smm-subs .title {
            text-align: center;
        }

        .smm-subs .s-block {
            margin: 30px 0 0 0;
        }

        .smm-subs .s-block .s-top {
            margin: 0 0 16px 0;
        }

        .smm-subs .s-block .s-top .icon img {
            width: 25px;
        }

        .smm-subs .s-block .s-top p {
            margin: 0 0 0 14px;
        }

        .smm-effective {
            background: none;
            text-align: center;
            min-height: 0;
        }

        .smm-effective .tt-2 {
            margin: 26px 0 13px 0;
        }

        .smm-effective .order {
            margin: 35px 0 0 0;
        }

        .smm-minimal {
            padding: 25px 0 35px 0;
            text-align: center;
        }

        .smm-minimal .min-title {
            padding: 0;
        }

        .smm-minimal .mtt-1 {
            margin: 20px 0 10px 0;
        }
    }
/* Одинаковая высота карточек */
.smm-packets .row {
    display: flex;
    flex-wrap: wrap;
}

.smm-packets .row > [class*="col-"] {
    display: flex;
}

.smm-packets .p-block {
    display: flex;
    flex-direction: column;
    height: 100%;
    width: 100%;
}

.smm-packets .p-body {
    flex: 1;
}

.smm-packets .p-bottom {
    margin-top: auto;
}
</style>
<style>
        .title_content {
            font-size: 19px !important;
        }

        .content_p p {
            font-size: 16px;
        }

    </style>
<style>
    b {
        font-family: 'Microsoft Sans Serif';
    }

    .im a {
        border: 1px solid #0097d5;
        border-radius: 3px;
    }

    @media (min-width: 992px) {
        .col-md-3 {
            width: 25% !important;
        }
    }

    <?$i = 3?>
    <?$j = 12?>
</style>

<div class="">


<section class="smm-main">
    <div class="container">
        <h1 class="title">
                Продвижение Инстаграм в Алматы и Казахстане (SMM)
        </h1>
        <div class="m-row">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="m-left">
                        <div class="min-title">
                            ЗАКАЗАТЬ SMM С КОНВЕРСИЕЙ ДО 150% <br class="hidden-xs"> Получите первых клиентов уже на <br
                                    class="hidden-xs hidden-md"> следующий день
                        </div>
                        <div class="order">
                            <a class="red" href="https://api.whatsapp.com/send?phone=77774333822">
                                <span>Получить предложение с<br> бесплатной Аналитикой аккаунта</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="m-right">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="m-block">
                                    <div class="number">
                                        +150%
                                    </div>
                                    <p class="big">рост целевых подписчиков</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="m-block">
                                    <div class="number">
                                        +200%
                                    </div>
                                    <p class="big">увеличение количества заказов</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="m-block">
                                    <div class="number">
                                        +300%
                                    </div>
                                    <p class="big">рост активности подписчиков</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="smm-packets">
    <div class="container">
        <div class="title lined">
            Пакеты продвижения Instagram
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="p-block">
                    <div class="p-top">
                        <div class="icon">
                            <img src="img/pkt1.jpg" alt="">
                        </div>
                        <div class="min-title">
                            Пакет №1
                            <div><b>«Облегчённый»</b></div>
                        </div>
                        <p>Тот случай, когда нужна быстрая раскрутка профиля без накруток через рекламу.</p>
                    </div>
                    <div class="p-body">
                        <div class="list">
                            <p>Экспресс-анализ профиля</p>
                            <p>Оформления аккаунта ( фото, описание, активные кнопки, highlights)</p>
                            <p>Услуги копирайтера</p>
                            <p>Услуги дизайнера</p>
                            <p>Создание контент-плана </p>
                            <p>Написание и размещение до 15 постов в месяц + дубликат постов в стори</p>
                            <p>Разработка, настройка и ведение рекламы <b>(рекламный бюджет обговаривается
                                    индивидуально)</b></p>
                            <p>Разработка рубрикатора и системы #хештегов</p>
                            <p>Подбор гивов для набора подписчиков</p>
                            <p>Ежемесячный отчет о результатах</p>
                        </div>
                    </div>
                    <div class="p-bottom">
                        <div class="row">
                            <!--<div class="col-xs-12 col-lg-6">
                                <div class="pb-left">
                                    <p><b>Стоимость пакета:</b></p>
                                    <p class="big"><b>120 000 тг /мес.</b></p>
                                </div>
                            </div>-->
                            <div class="col-xs-12 col-lg-12">
                                <div class="order">
                                    <a class="blue" href="https://api.whatsapp.com/send?phone=77774333822">
                                        <span>Узнать цену</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="p-block" style="border: 2px solid red;">
                    <div class="p-top">
                        <div class="icon">
                            <img src="img/pkt2.jpg" alt="">
                        </div>
                        <div class="min-title">
                            Пакет №2
                            <div><b>«Стандарт»</b></div>
                        </div>
                        <p>Для раскрутки с нуля. Вы получите грамотную рекламу и рекомендации по продвижению контентом
                            без накруток</p>
                    </div>
                    <div class="p-body">
                        <div class="list">
                            <p>Подробный анализ профиля и 2 конкурентов</p>
                            <p>Оформления аккаунта ( фото, описание, активные кнопки, highlights)</p>
                            <p>Услуги копирайтера</p>
                            <p>Услуги дизайнера</p>
                            <p>Двузязыковое введение</p>
                            <p>Создание контент-плана (обработка фото в единой концепции)</p>
                            <p>Написание и размещение до 25 постов + публикации в стори до 25</p>
                            <p>Разработка, настройка и ведение рекламы <b>(рекламный бюджет обговаривается
                                    индивидуально)</b></p>
                            <p>Разработка рубрикатора и системы #хештегов</p>
                            <p>Подбор гивов для набора подписчиков</p>
                            <p>Ежемесячный отчет о результатах</p>
                        </div>
                    </div>
                    <div class="p-bottom">
                        <div class="row">
                            <!--<div class="col-xs-12 col-lg-6">
                                <div class="pb-left">
                                    <p><b>Стоимость пакета:</b></p>
                                    <p class="big"><b>160 000 тг /мес.</b></p>
                                </div>
                            </div>-->
                            <div class="col-xs-12 col-lg-12">
                                <div class="order">
                                    <a class="blue" href="https://api.whatsapp.com/send?phone=77774333822">
                                        <span>Узнать цену</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="p-block">
                    <div class="p-top">
                        <div class="icon">
                            <img src="img/pkt3.jpg" alt="">
                        </div>
                        <div class="min-title">
                            Пакет №3
                            <div><b>«Профессионал»</b></div>
                        </div>
                        <p>Создание профиля, подготовку контента и настройку рекламы делаем мы. Вы только согласовываете
                            работы и радуетесь заказам.</p>
                    </div>
                    <div class="p-body">
                        <div class="list">
                            <p>Подробный анализ профиля и 4 конкурентов</p>
                            <p>Оформления аккаунта ( фото, описание, активные кнопки, highlights)</p>
                            <p>Услуги копирайтера</p>
                            <p>Услуги дизайнера</p>
                            <p>Двузязыковое введение</p>
                            <p>Создание контент-плана, создание фирменных шаблонов постов</p>
                            <p>Написание и размещение до 40 постов + публикации в стори до 40</p>
                            <p>Разработка, настройка и ведение рекламы <b>(рекламный бюджет обговаривается
                                    индивидуально)</b></p>
                            <p>Разработка рубрикатора и системы #хештегов</p>
                            <p>Подбор гивов для набора подписчиков</p>
                            <p>Фото и видео съемка, выезд на объект 2 раза в месяц (не более одного часа)</p>
                            <p>Ежемесячный отчет о результатах</p>
                        </div>
                    </div>
                    <div class="p-bottom">
                        <div class="row">
                            <!--<div class="col-xs-12 col-lg-6">
                                <div class="pb-left">
                                    <p><b>Стоимость пакета:</b></p>
                                    <p class="big"><b>210 000 тг /мес.</b></p>
                                </div>
                            </div>-->
                            <div class="col-xs-12 col-lg-12">
                                <div class="order">
                                    <a class="blue" href="https://api.whatsapp.com/send?phone=77774333822">
                                        <span>Написать нам</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="smm-services">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 offset-lg-6">
                <div class="s-block">
                    <div class="for-title">
                        <div class="title lined">
                            Дополнительные услуги
                        </div>
                        <p class="big"><b>Фото и видео съемка для Instagram </b></p>
                    </div>
                    <div class="rows">
                        <div class="s-row">
                            <div class="row">
                                <div class="col-xs-12 col-sm-9">
                                    <div class="s-left">
                                        <p>Если у вас множество товаров или уютное заведение с вкусной кухней и вы не
                                            знаете, как красиво все это показать потенциальным клиентам, предлогаем вам
                                            услугу фото и видео сьемки для уникального контента</p>
                                        <p class="rd">+ обработка фото</p>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="s-right">
                                        <p class="big"><b>20 000 тг</b></p>
                                        <a href="https://api.whatsapp.com/send?phone=77774333822">Заказать</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="s-row">
                            <div class="row">
                                <div class="col-xs-12 col-sm-9">
                                    <div class="s-left">
                                        <p>Каждый новый пост или история в вашем instagram, автоматически попадет начнет
                                            собирать лайки и просмотры и комментарии</p>
                                        <p class="rd">лайки, комментарии, просмотры или все разом </p>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="s-right">
                                        <p class="big"><b>от 20 000 тг</b></p>
                                        <a href="https://api.whatsapp.com/send?phone=77774333822">Заказать</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="smm-will">
    <div class="container">
        <div class="title lined">
            МЫ УВЕЛИЧИМ ЧИСЛО ПОДПИСЧИКОВ, ГАРАНТИРУЕМ <br class="hidden-xs hidden-sm hidden-md"> СУМАСШЕДШУЮ
            ВОВЛЕЧЕННОСТЬ И ВЫСОКУЮ КОНВЕРСИЮ
        </div>
    </div>
</section>


<div>
    <section class="works" id="works">
        <div class="container">
            <div class="title">
                <h2>НАШИ РАБОТЫ</h2>
                <hr/>
            </div>

            <div class="row gallery">

                <div class="col-xs-<? $j ?> col-sm-4 col-md-<? echo $i ?> mix smm">
                    <a data-fancybox="logo" href="/images/gallery/inst/1.PNG">
                        <img src="/images/gallery/inst/1_s.jpg" alt="Продвижение Instagram">
                    </a>
                </div>
                <div class="col-xs-<? $j ?> col-sm-4 col-md-<? echo $i ?> mix smm">
                    <a data-fancybox="logo" href="/images/gallery/inst/2.PNG">
                        <img src="/images/gallery/inst/2_s.jpg" alt="Продвижение Instagram">
                    </a>
                </div>
                <div class="col-xs-<? $j ?> col-sm-4 col-md-<? echo $i ?> mix smm">
                    <a data-fancybox="logo" href="/images/gallery/inst/3.PNG">
                        <img src="/images/gallery/inst/3_s.jpg" alt="Продвижение Instagram">
                    </a>
                </div>
                <div class="col-xs-<? $j ?> col-sm-4 col-md-<? echo $i ?> mix smm">
                    <a data-fancybox="logo" href="/images/gallery/inst/4.PNG">
                        <img src="/images/gallery/inst/4_s.jpg" alt="Продвижение Instagram">
                    </a>
                </div>
                <div class="col-xs-<? $j ?> col-sm-4 col-md-<? echo $i ?> mix smm">
                    <a data-fancybox="logo" href="/images/gallery/inst/5.PNG">
                        <img src="/images/gallery/inst/5_s.jpg" alt="Продвижение Instagram">
                    </a>
                </div>
                <div class="col-xs-<? $j ?> col-sm-4 col-md-<? echo $i ?> mix smm">
                    <a data-fancybox="logo" href="/images/gallery/inst/6.PNG">
                        <img src="/images/gallery/inst/6_s.jpg" alt="Продвижение Instagram">
                    </a>
                </div>
                <div class="col-xs-<? $j ?> col-sm-4 col-md-<? echo $i ?> mix smm">
                    <a data-fancybox="logo" href="/images/gallery/inst/7.PNG">
                        <img src="/images/gallery/inst/7_s.jpg" alt="Продвижение Instagram">
                    </a>
                </div>
                <div class="col-xs-<? $j ?> col-sm-4 col-md-<? echo $i ?> mix smm">
                    <a data-fancybox="logo" href="/images/gallery/inst/8.PNG">
                        <img src="/images/gallery/inst/8_s.jpg" alt="Продвижение Instagram">
                    </a>
                </div>
                <div class="col-xs-<? $j ?> col-sm-4 col-md-<? echo $i ?> mix smm">
                    <a data-fancybox="logo" href="/images/gallery/inst/9.PNG">
                        <img src="/images/gallery/inst/9_s.jpg" alt="Продвижение Instagram">
                    </a>
                </div>
                <div class="col-xs-<? $j ?> col-sm-4 col-md-<? echo $i ?> mix smm">
                    <a data-fancybox="logo" href="/images/gallery/inst/10.PNG">
                        <img src="/images/gallery/inst/10_s.jpg" alt="Продвижение Instagram">
                    </a>
                </div>
                <div class="col-xs-<? $j ?> col-sm-4 col-md-<? echo $i ?> mix smm">
                    <a data-fancybox="logo" href="/images/gallery/inst/11.PNG">
                        <img src="/images/gallery/inst/11_s.jpg" alt="Продвижение Instagram">
                    </a>
                </div>
                <div class="col-xs-<? $j ?> col-sm-4 col-md-<? echo $i ?> mix smm">
                    <a data-fancybox="logo" href="/images/gallery/inst/12.PNG">
                        <img src="/images/gallery/inst/12_s.jpg" alt="Продвижение Instagram">
                    </a>
                </div>
                <div class="col-xs-<? $j ?> col-sm-4 col-md-<? echo $i ?> mix smm">
                    <a data-fancybox="logo" href="/images/gallery/inst/13.PNG">
                        <img src="/images/gallery/inst/13_s.jpg" alt="Продвижение Instagram">
                    </a>
                </div>
            </div>
        </div>
    </section>


</div>


<section class="smm-in">
    <div class="container">
        <div class="title">
            В каких бизнесах отлично работает реклама в Инстаграм
        </div>
        <div class="i-row">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-lg-2">
                    <div class="i-block">
                        <div class="icon">
                            <img src="img/i1.png" alt="">
                        </div>
                        <p>Косметология, медецина <br> Косметика, бьюти процедуры</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-2">
                    <div class="i-block">
                        <div class="icon">
                            <img src="img/i2.png" alt="">
                        </div>
                        <p>Рестораны, кафе, бары, кофейни</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-2">
                    <div class="i-block">
                        <div class="icon">
                            <img src="img/i3.png" alt="">
                        </div>
                        <p>Клубы, караоке, мероприятия</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-2">
                    <div class="i-block">
                        <div class="icon">
                            <img src="img/i4.png" alt="">
                        </div>
                        <p>Отдых, тур агенства, путешествия</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-2">
                    <div class="i-block">
                        <div class="icon">
                            <img src="img/i5.png" alt="">
                        </div>
                        <p>Гостиничный бизнес</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-2">
                    <div class="i-block">
                        <div class="icon">
                            <img src="img/i6.png" alt="">
                        </div>
                        <p>Спорт, фитнес</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-lg-2">
                    <div class="i-block">
                        <div class="icon">
                            <img src="img/i7.png" alt="">
                        </div>
                        <p>Одежда, акссессуары</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-2">
                    <div class="i-block">
                        <div class="icon">
                            <img src="img/i8.png" alt="">
                        </div>
                        <p>Товары и услуги для детей</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-2">
                    <div class="i-block">
                        <div class="icon">
                            <img src="img/i9.png" alt="">
                        </div>
                        <p>Химчистка, уборка</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-2">
                    <div class="i-block">
                        <div class="icon">
                            <img src="img/i10.png" alt="">
                        </div>
                        <p>Парикмахерские, барбершопы</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-2">
                    <div class="i-block">
                        <div class="icon">
                            <img src="img/i11.png" alt="">
                        </div>
                        <p>Товары и услуги</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-lg-2">
                    <div class="i-block">
                        <div class="icon">
                            <img src="img/i12.png" alt="">
                        </div>
                        <p>Обучение, курсы</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="order">
            <a class="red" href="https://api.whatsapp.com/send?phone=77774333822">
                <span>Зказать аналитику бесплатно</span>
            </a>
        </div>
    </div>
</section>

<section class="smm-subs">
    <div class="container">
        <div class="title lined">
            Привлечение подписчиков по вашим критериям
        </div>
        <div class="s-rows">
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <div class="s-block">
                        <div class="s-top">
                            <div class="icon">
                                <img src="img/smm-ok.png" alt="">
                            </div>
                            <p class="big">По полу</p>
                        </div>
                        <div class="text">
                            <p>Нужны только девушки? Пройдемся по<br class="hidden-xs"> подписчикам тематических
                                аккаунтов<br class="hidden-xs"> для женщин.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="s-block">
                        <div class="s-top">
                            <div class="icon">
                                <img src="img/smm-ok.png" alt="">
                            </div>
                            <p class="big">По лайкам и комментариям</p>
                        </div>
                        <div class="text">
                            <p>Если вам нужна самая активная аудитория,<br class="hidden-xs"> мы возьмем только тех, кто
                                ставит лайки<br class="hidden-xs"> и задает вопросы в комментариях<br class="hidden-xs">
                                на страничках с вашей тематикой.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="s-block">
                        <div class="s-top">
                            <div class="icon">
                                <img src="img/smm-ok.png" alt="">
                            </div>
                            <p class="big">По тегам</p>
                        </div>
                        <div class="text">
                            <p>Ваши клиенты представители определенного<br class="hidden-xs"> рода деятельности? Соберем
                                людей, которые<br class="hidden-xs"> ставят под фото теги #фотограф #дизайнер #шоумен и
                                т.д.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <div class="s-block">
                        <div class="s-top">
                            <div class="icon">
                                <img src="img/smm-ok.png" alt="">
                            </div>
                            <p class="big">По подписчикам конкурентов</p>
                        </div>
                        <div class="text">
                            <p>Расскажем о вас тем, кто уже<br class="hidden-xs"> пользуется вашим продуктом или<br
                                        class="hidden-xs"> услугой и переманим к вам!</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="s-block">
                        <div class="s-top">
                            <div class="icon">
                                <img src="img/smm-ok.png" alt="">
                            </div>
                            <p class="big">По гео локации</p>
                        </div>
                        <div class="text">
                            <p>Нужны жители конкретного района? Соберем всех, кто отмечал свои фото ГЕО-отметками в
                                непосредственной близости от вашего офиса. </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="s-block">
                        <div class="s-top">
                            <div class="icon">
                                <img src="img/smm-ok.png" alt="">
                            </div>
                            <p class="big">По интересам</p>
                        </div>
                        <div class="text">
                            <p>Брендовая одежда? Салон красоты?<br class="hidden-xs"> Свадебное агенство? Скомбинируем
                                несколько способов поиска заинтересованных людей для максимального охвата.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="smm-effective">
    <div class="container">
        <div class="e-block">
            <div class="title tt-1 lined">
                Эффективное продвижение <br class="hidden-xs"> профиля или бренда в instagram.
            </div>
            <div class="title tt-2">
                Начните получать на 65% больше<br class="hidden-xs"> продаж с инстаграм уже завтра!
            </div>
            <div class="title tt-3">
                Без усилий. Без риска.
            </div>
            <div class="order">
                <a class="red" href="https://api.whatsapp.com/send?phone=77774333822">
                    <span>Начни прямо сейчас</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="smm-minimal">
    <div class="container">
        <div class="title lined">
            невероятный эффект за минимальныю цену!
        </div>
        <div class="min-title mtt-1">
            НЕ ОТКЛАДЫВАЙТЕ ПРОДВИЖЕНИЕ В INSTAGRAM
        </div>
        <div class="min-title mtt-2">
            <b>получай заказы уже завтра</b>
        </div>
    </div>
</section>
</div>
@include('partials.rateit')
@endsection