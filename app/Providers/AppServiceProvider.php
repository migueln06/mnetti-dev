<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Esto fuerza a Laravel a generar todos los links (CSS/JS) con HTTPS
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }
    }
}