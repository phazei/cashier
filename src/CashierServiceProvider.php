<?php

namespace Laravel\Cashier;

use Illuminate\Support\ServiceProvider;

class CashierServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        if (method_exists($this, "loadViewsFrom")) {
            $this->loadViewsFrom(__DIR__ . '/../resources/views', 'cashier');

            $this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/cashier'),
            ]);

        } else {
            $this->package('laravel/cashier', null, __DIR__);
        }

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
