<?php
/**
 * Created by PhpStorm.
 * User: salman
 * Date: 06/26/2020
 * Time: 5:38 PM
 */

namespace Salman\GeoCode;

use Illuminate\Support\ServiceProvider;
use Salman\GeoCode\Services\GeoCode;

class GeoCodeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishConfig();
    }

    public function register()
    {
        $this->app->singleton('GeoCode',function (){

            return new GeoCode();
        });
    }

    /**
     * @return array
     */
    public function provides()
    {
        return array('GeoCode');
    }
    /*
     * Publish Config File
     */
    public function publishConfig()
    {
        $this->mergeConfigFrom(__DIR__.'/config/geocode.php','geocode');
        $this->publishes([
            __DIR__.'/config/geocode.php' => config_path('geocode.php'),
        ]);
    }
}
