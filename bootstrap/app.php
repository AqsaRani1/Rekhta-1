<?php

use Illuminate\Foundation\Application;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // Register global middleware here if needed
        // e.g., $middleware->append(\App\Http\Middleware\MyGlobalMiddleware::class);

        // Register route middleware aliases
        $middleware->alias([
            'role' => RoleMiddleware::class, // ← Register your route middleware alias here
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
