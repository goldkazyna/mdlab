<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'key' => env('POSTMARK_API_KEY'),
    ],

    'resend' => [
        'key' => env('RESEND_API_KEY'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'stocks_api' => [
        'token' => env('STOCKS_API_TOKEN'),
    ],

    // Журнал заходов /visits
    'visits' => [
        'password' => env('VISITS_PASSWORD'),
        // если VISITS_PASSWORD не задан — проверяем по этому хэшу
        'password_hash' => env('VISITS_PASSWORD_HASH', '$2y$12$1pMnGfn4jaC6yEZ3qABsJOSmUhzUSIKGWWI.d.LoVnr6tAimxDtiy'),
        'keep_days' => 90,
        'suspicious_paid' => 3,     // платных кликов за период
        'suspicious_avg_sec' => 15, // среднее время на сайте меньше
    ],

];
