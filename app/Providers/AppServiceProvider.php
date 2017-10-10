<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Room_Type;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         \Schema::defaultStringLength(191);
          // $menu = Room_Type::all();
          // View::share('menu', $menu);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
