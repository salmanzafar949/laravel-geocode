<?php

namespace Salman\GeoCode\Services;


class GeoCode
{
    protected $API_KEY = "";

    public function __construct()
    {
        $this->API_KEY = config('geocode.API_KEY');
    }
}
