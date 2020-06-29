<?php

use \Salman\GeoCode\Services\GeoCode;


if (!function_exists('findAddressCoordinates'))
{
    function findAddressCoordinates($address)
    {
        $geocode = new GeoCode();

       return $geocode->getLatAndLong($address);
    }
}
