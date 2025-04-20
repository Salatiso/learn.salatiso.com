<?php

use Illuminate\Support\Facades\Storage;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. A disk defines a particular driver and configuration
    | that is used to store files. You may configure as many disks as you
    | like, and you may even configure multiple disks of the same driver.
    |
    */

    'default' => env('FILESYSTEM_DISK', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem ""disks"" as you like, and you
    | may even configure multiple disks of the same driver. Each disk gets its
    | own configuration, and is defined by a driver.
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'private',
            'throw' => false,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
            'throw' => false,
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
        ],

        'ftp' => [
            'driver' => 'ftp',
            'host' => env('FTP_HOST'),
            'username' => env('FTP_USERNAME'),
            'password' => env('FTP_PASSWORD'),
            'root' => env('FTP_ROOT'),
            'passive' => true,
            'ssl' => false,
            'timeout' => 30,
        ],

        'memory' => [
            'driver' => 'memory',
            'root' => '/',
            'visibility' => 'public',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | When using the ""public"" disk, you'll need to create a symbolic link
    | from ""public/storage"" to ""storage/app/public"" so that user uploaded
    | files are accessible from the web. Here you may define the locations
    | of any links that should be created when this is done.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];

