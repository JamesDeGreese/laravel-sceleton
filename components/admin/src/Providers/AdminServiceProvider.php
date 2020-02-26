<?php

namespace Components\Admin\Providers;

use Components\Admin\Http\Middleware\CheckRole;
use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider {
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../Views', 'admin');
        $this->publishes([
            __DIR__. '/../Assets' => public_path('vendor/admin'),
        ], 'public');

        app('router')->aliasMiddleware('admin', CheckRole::class);
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
