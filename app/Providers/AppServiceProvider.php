<?php

namespace App\Providers;

use App\Repositories\Interface\AppSettingsInterface;
use App\Repositories\Query\AppSettingsQuery;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AppSettingsInterface::class, AppSettingsQuery::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
