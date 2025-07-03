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

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'da_data' => [
        'language' => env('DA_DATA_LANGUAGE'),
        'token' => env('DA_DATA_TOKEN'),
        'secret_key' => env('DA_DATA_SECRET_KEY'),

        'suggest_address' => [
            'url' => env('DA_DATA_SUGGEST_ADDRESS_URL'),
            'count' => (int) env('DA_DATA_SUGGEST_ADDRESS_COUNT', 10),
        ],
    ],
];
