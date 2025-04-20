<?php

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when
    | the framework needs to place the application's name in a notification
    | or any other location as required by the application or its packages.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),  //  Change this to your application name

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services your application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),  //  Make sure this is "production" on your live server

    /*
    |--------------------------------------------------------------------------
    | Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, simple generic error pages are shown.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),  //  Should be false in production!

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

    'url' => env('APP_URL', 'http://localhost'), //  Set this to your domain (e.g., https://learn.salatiso.com)

    'asset_url' => env('ASSET_URL'),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, so PHP
    | functions like date and time will default to this timezone when used
    | within this application.
    |
    */

    'timezone' => 'Africa/Johannesburg',  //  Set this to your timezone

    /*
    |--------------------------------------------------------------------------
    | Application Locale
    |--------------------------------------------------------------------------
    |
    | The locale determines the default language that will be used for the app
    | for things like date formatting, number formatting, and error messages
    | from the framework. You may set this to a locale that matches the
    | language of your application.
    |
    */

    'locale' => 'en',  //  Set this to your application's primary language

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale that will be used when the
    | current locale is not available. You may set this to a safe choice
    | and the best candidate is "en" since that is English.
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string. Otherwise, your encrypted values
    | will not be safe.
    |
    */

    'key' => env('APP_KEY'),  //  Important:  Generate this!

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Foundation\Providers\AppServiceProvider::class,
        Illuminate\Foundation\Providers\RouteServiceProvider::class,

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register your own aliases as you
    | may need, and you may wish to disable the aliases that are not used.
    |
    */

    'aliases' => Facade::defaultAliases()->toArray()
];

