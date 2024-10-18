<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        Schema::defaultStringLength(191);
        // usar essa versão para quando for fazer alterações em para build na vercel, juntamente com a alteração no .env
        resolve(\Illuminate\Routing\UrlGenerator::class)->forceScheme('https');

        // usar essa versão para testes local, juntamente com a alteração no .env
        // resolve(\Illuminate\Routing\UrlGenerator::class)->forceScheme('http');

        // Ao mudar, rodar:
        // php artisan config:cache && php artisan route:clear && composer dumpautoload && php artisan serve
    }
}
