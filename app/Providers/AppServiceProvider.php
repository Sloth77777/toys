<?php

namespace App\Providers;

use App\View\Components\admin\AddButton;
use Carbon\Carbon;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
//        Blade::component('a-button-add',AddButton::class);
        Carbon::setLocale('ru');
    }
}
