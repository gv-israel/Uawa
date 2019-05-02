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

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => Uawa\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],

    'facebook' => [
        'client_id' => '456882688382478',
        'client_secret' => 'd4e6e97e80b7844c13f8c37ac36e57d2',
        'redirect' => 'http://localhost:80/auth/facebook/callback'
    ],
    'google' => [
       //Id suministrado por google        
       'client_id'     => '1082836063270-ltdsji43r3aq8chaeob0n46efgioh3hb.apps.googleusercontent.com', 
       //Secret suministrado por google 
       'client_secret' => 'GOSksBa8oJ9UYfehO-wC1iuI',
       //Página a la que sera redireccionado el navegador cuando el login se exitoso 
       //Ejemplo: http://midominio.com/social/handle/google
       'redirect'      => 'http://localhost:80/auth/google/callback'
    ]

];
