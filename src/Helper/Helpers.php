<?php

use \Salman\GeoCode\Services\GeoCode;


if (!function_exists('connectToPublish'))
{
    function getCoordinates($address)
    {
        $geocode = new GeoCode();

       return $geocode->getLatAndLong($address);
    }
}
