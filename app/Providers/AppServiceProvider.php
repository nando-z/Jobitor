<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        \Illuminate\Database\Eloquent\Model::unguard();
        \Illuminate\Pagination\Paginator::defaultView('vendor.pagination.tailwind');
        \Illuminate\Database\Eloquent\Model::shouldBeStrict(! app()->isProduction());
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        if ($this->app->environment('local')) {
            $this->app->register(\Barryvdh\Debugbar\ServiceProvider::class);
        }
    }
}
