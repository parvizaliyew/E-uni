<?php

namespace App\Providers;

use Route;
use App\Models\Setting;
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
        view()->composer('*', function ($view) {
            $view->with('current',Route::currentRouteName());
        });

        view()->composer('*', function ($view) {
            $view->with('setting',Setting::first());
        });
      
    }
}
