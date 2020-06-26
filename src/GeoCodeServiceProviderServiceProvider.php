<?php
/**
 * Created by PhpStorm.
 * User: salman
 * Date: 26/06/2020
 * Time: 5:38 PM
 */

namespace Salman\GeoCode;

use Illuminate\Support\ServiceProvider;

class GeoCodeServiceProvider extends ServiceProvider
{

    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__.'/config/geocode.php','geocode');
        $this->publishes([
            __DIR__.'/config/geocode.php' => config_path('geocode.php'),
        ]);
    }

}
