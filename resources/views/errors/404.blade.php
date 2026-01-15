<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница не найдена | MD Lab</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #d6f3ff 0%, #fff 50%, #d6f3ff 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .error-page {
            text-align: center;
            max-width: 600px;
        }

        .error-page__code {
            font-size: 180px;
            font-weight: 800;
            color: #0098D6;
            line-height: 1;
            margin-bottom: 10px;
            text-shadow: 4px 4px 0 #d6f3ff;
            position: relative;
        }

        .error-page__code::after {
            content: '404';
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font-size: 180px;
            font-weight: 800;
            color: transparent;
            -webkit-text-stroke: 2px rgba(0, 152, 214, 0.1);
            z-index: -1;
        }

        .error-page__icon {
            font-size: 80px;
            color: #0098D6;
            margin-bottom: 30px;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }

        .error-page__title {
            font-size: 32px;
            font-weight: 700;
            color: #1a1a2e;
            margin-bottom: 15px;
        }

        .error-page__text {
            font-size: 18px;
            color: #666;
            margin-bottom: 40px;
            line-height: 1.6;
        }

        .error-page__buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 16px 32px;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
        }

        .btn-primary {
            background: #0098D6;
            color: #fff;
        }

        .btn-primary:hover {
            background: #007ab8;
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0, 152, 214, 0.3);
        }

        .btn-outline {
            background: #fff;
            color: #0098D6;
            border: 2px solid #0098D6;
        }

        .btn-outline:hover {
            background: #0098D6;
            color: #fff;
        }

        .error-page__links {
            margin-top: 50px;
            padding-top: 30px;
            border-top: 1px solid #e0e0e0;
        }

        .error-page__links-title {
            font-size: 14px;
            color: #999;
            margin-bottom: 15px;
        }

        .error-page__links-list {
            display: flex;
            gap: 25px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .error-page__links-list a {
            font-size: 15px;
            color: #0098D6;
            text-decoration: none;
            transition: color 0.3s;
        }

        .error-page__links-list a:hover {
            color: #007ab8;
            text-decoration: underline;
        }

        @media (max-width: 576px) {
            .error-page__code {
                font-size: 120px;
            }

            .error-page__code::after {
                font-size: 120px;
            }

            .error-page__icon {
                font-size: 60px;
            }

            .error-page__title {
                font-size: 24px;
            }

            .error-page__text {
                font-size: 16px;
            }

            .btn {
                width: 100%;
                justify-content: center;
            }

            .error-page__buttons {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="error-page">
        <div class="error-page__code">404</div>
        <div class="error-page__icon">
            <i class="fa-solid fa-face-sad-tear"></i>
        </div>
        <h1 class="error-page__title">Страница не найдена</h1>
        <p class="error-page__text">
            К сожалению, запрашиваемая страница не существует или была перемещена. 
            Возможно, вы перешли по устаревшей ссылке.
        </p>
        <div class="error-page__buttons">
            <a href="/" class="btn btn-primary">
                <i class="fa-solid fa-home"></i>
                На главную
            </a>
            <a href="javascript:history.back()" class="btn btn-outline">
                <i class="fa-solid fa-arrow-left"></i>
                Назад
            </a>
        </div>
        <div class="error-page__links">
            <div class="error-page__links-title">Или перейдите в нужный раздел:</div>
            <div class="error-page__links-list">
                <a href="/landing-page">Landing Page</a>
                <a href="/internet-magazin">Интернет-магазин</a>
                <a href="/smm">SMM продвижение</a>
                <a href="/articles">Статьи</a>
            </div>
        </div>
    </div>
</body>
</html>
