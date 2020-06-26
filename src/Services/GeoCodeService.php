<?php


namespace Salman\GeoCode\Services;


class GeoCodeService
{
    private const URL = "https://maps.googleapis.com/maps/api/geocode/json?";

    public static function findPoints($address, $key)
    {
        $url = self::URL."address=$address"."&Key=$key";

        return self::makeRequest($url);

    }


    protected static function makeRequest($urlWithData)
    {

        $request = new GuzzleHttp\Client();

        $request->request('GET', $urlWithData);

        $response = $request->getBody();

        return collect($response);
    }
}
