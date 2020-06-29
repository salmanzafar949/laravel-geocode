<?php
/**
 * Created by PhpStorm.
 * User: salman
 * Date: 2/27/19
 * Time: 12:03 PM
 */

namespace Salman\GeoCode\Facades;

use Illuminate\Support\Facades\Facade;

class GeoCode extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'GeoCode';
    }

}
