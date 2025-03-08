<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middlewareAliases = [
        // ... other middleware aliases ...
        'prevent-back-history' => \App\Http\Middleware\PreventBackHistory::class,
    ];
} 