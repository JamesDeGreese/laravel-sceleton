<?php

namespace Components\Articles\Providers;

use Illuminate\Support\ServiceProvider;

class ArticlesServiceProvider extends ServiceProvider {
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Migrations/');
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../Views', 'admin');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
