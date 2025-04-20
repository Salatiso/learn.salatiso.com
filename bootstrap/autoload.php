<?php

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Foundation\Application;

/*
|--------------------------------------------------------------------------
| Register Composer Autoloader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels nice to relax.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| Here we will create the application instance for our application
| which serves as the central piece of this framework. We'll use
| the Application class directly since we don't have an application
| class to use.
|
*/

return Application::make(
    basePath: dirname(__DIR__)
);

