<?php

namespace Jorqensen\SuperkubePagination;

use Illuminate\Support\ServiceProvider;

class SuperkubePaginationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    // public function register()
    // {
    // }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'superkube-pagination');

        $this->publishes([
            __DIR__.'/../resources/views' => $this->app->resourcePath('views/vendor/superkube-pagination')
        ], 'superkube-pagination');
    }
}
