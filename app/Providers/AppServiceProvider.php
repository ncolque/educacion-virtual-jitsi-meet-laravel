<?php

namespace App\Providers;

use App\Models\Pagina;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /* Pagina::contarPagina(\request()->path()); */
        if (Config('app.env') === 'production') {
            URL::forceScheme('https');
        }
    }
}
