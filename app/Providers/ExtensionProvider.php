<?php

namespace App\Providers;

use App\Extension\Log\CreateCustomLogger;
use Illuminate\Support\ServiceProvider;

class ExtensionProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('log', function () {
            return new CreateCustomLogger($this->app);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
