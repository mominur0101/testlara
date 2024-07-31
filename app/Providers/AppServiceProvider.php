<?php

namespace App\Providers;

use App\View\Components\MyCard;
use App\View\Components\OurComponent;
use App\View\Components\TestComponent;
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
        Blade::component('xyz', TestComponent::class);
        Blade::component('my-card', MyCard::class);
    }
}
