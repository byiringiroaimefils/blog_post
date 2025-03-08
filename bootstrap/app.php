<?php

// Import required classes
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

// Configure and create the Laravel application instance
return Application::configure(basePath: dirname(__DIR__))
    // Configure routing for web, console, and health check
    ->withRouting(
        web: __DIR__.'/../routes/web.php',        // Web routes file path
        commands: __DIR__.'/../routes/console.php', // Console commands file path
        health: '/up',                             // Health check endpoint
    )
    // Configure middleware (currently empty)
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    // Configure exception handling (currently empty)
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
