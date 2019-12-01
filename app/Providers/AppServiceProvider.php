<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; //Heroku add

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
        Schema::defaultStringLength(191); //Heroku add
        // 本番環境(Heroku)でhttpsを強制する
        if (
            \App::environment('production')
        ) {
            \URL::forceScheme('https');
        }
    }
}
