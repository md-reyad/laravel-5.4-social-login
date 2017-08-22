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
        'client_id' => env('github_client'),
        'client_secret' => env('github_secret'),
        'redirect' => 'http://localhost:8000/oauth/github/callback',
    ],
    'facebook' => [
        'client_id'     => env('fb_client'),
        'client_secret' => env('fb_secret'),
        'redirect'      => 'http://localhost:8000/oauth/facebook/callback'
    ],
    'twitter' => [
        'client_id'     =>env('tw_client'),
        'client_secret' => env('tw_secret'),
        'redirect'      =>'http://localhost:8000/oauth/twitter/callback',
    ],
    'google' => [
        'client_id'     =>env('go_client'),
        'client_secret' => env('go_secret'),
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
