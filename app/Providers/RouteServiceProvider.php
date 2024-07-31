<?php

namespace App\Providers;



use App\View\Components\OurComponent;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //Some Rules
        Route::pattern('id', '[0-9]+');
        Blade::component('abcd', OurComponent::class);
    }
}
