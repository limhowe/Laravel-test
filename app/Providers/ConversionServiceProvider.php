<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ConversionServiceProvider extends ServiceProvider
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
        //Bind IntegerConversionInterface to IntegerConversion Class Instance
        $this->app->bind('App\\IntegerConversionInterface', 'App\\IntegerConversion');        
    }
}
