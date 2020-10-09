<?php

namespace App\Providers;

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
        $this->app['router']->pushMiddlewareToGroup('sharp_web', \App\Http\Middleware\SharpLanguage::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(
            'Code16\Sharp\Http\LangController',
            'App\Http\Controllers\LangController'
        );
    }
}
