
<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withProviders()
    ->withFacades()
    ->withExceptionHandler(function () {
        //
    })
    ->withCoreMiddleware(function (Middleware $middleware) {
        $middleware->bootSession();
        $middleware->loadRequest();
        $middleware->shareRequest();
        $middleware->validateRequest();
        $middleware->prepareForMaintenance();
    })
    ->withRouting(function () {
        Route::middleware('web')
            ->group(base_path('routes/web.php'));

        Route::middleware('api')
            ->prefix('api')
            ->group(base_path('routes/api.php'));
    })
    ->withViewEngine()
    ->withSession()
    ->withQueues()
    ->withEvents()
    ->create();
