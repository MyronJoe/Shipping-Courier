<?php

namespace App\Providers;

use App\Models\service;
use App\Models\utilities;
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
        view()->composer('*', function($view){
            $view->with('utilities', utilities::orderBy('id', 'desc')->get());
            $view->with('service', service::orderBy('id', 'desc')->get());
        });
    }
}
