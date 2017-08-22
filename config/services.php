<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'github' => [
        'client_id' => 'd1eeba0f29f9f093cd32',
        'client_secret' => 'd8a9fdd194d7e3aa75e5aabc21a847cf89eed536',
        'redirect' => 'http://localhost:8000/oauth/github/callback',
    ],
    'facebook' => [
        'client_id'     => '464015370644613',
        'client_secret' => '4ef62f60c63ba7b1119354b66ecdfa32',
        'redirect'      => 'http://localhost:8000/oauth/facebook/callback'
    ],
    'twitter' => [
        'client_id'     =>'G96W3E0oUTO1cRJplyDfUW2tU',
        'client_secret' => 'pTHFhluhX59Yd2RPT9a1yEgzZ2uH4WwVkqqFaXm27GKDTtHM7K',
        'redirect'      =>'http://localhost:8000/oauth/twitter/callback',
    ],
    'google' => [
        'client_id'     =>'946883670013-khem1gab1putafur5hrdppus965b49ft.apps.googleusercontent.com',
        'client_secret' => 'j04CAHLcq0Yi70J_yGW6UBF6',
        'redirect'      =>'http://localhost:8000/oauth/google/callback',
    ],


    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

];
