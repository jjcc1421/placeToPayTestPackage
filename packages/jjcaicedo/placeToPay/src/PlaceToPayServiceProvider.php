<?php

namespace JJCaicedo\PlaceToPay;

use Illuminate\Support\ServiceProvider;

class PlaceToPayServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        include __DIR__.'/routes.php';
        $this->app->make('JJCaicedo\PlaceToPay\PlaceToPayController');
    }
}
