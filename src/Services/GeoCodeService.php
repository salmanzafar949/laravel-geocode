<?php


namespace Salman\GeoCode\Services;


use GuzzleHttp\Client;

class GeoCodeService
{
    private const URL = "https://maps.googleapis.com/maps/api/";
    private const endPoint = "geocode/json?";

    public static function findPoints($address, $key)
    {
        $finalAddress = str_replace(' ', '+', $address);

        $urlWithData = self::URL.self::endPoint."address=$finalAddress"."&key=$key";
        /*$data = [
            "address" => $address,
            "key" => $key
        ];*/

        return self::makeRequest($urlWithData);

    }


    protected static function makeRequest($urlWithData)
    {
//        return $urlWithData;

        $cURLConnection = curl_init();

        curl_setopt($cURLConnection, CURLOPT_URL, $urlWithData);
        curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

        $data = curl_exec($cURLConnection);

        curl_close($cURLConnection);

        $finalData = json_decode($data, true);

        if ($finalData)
        {
            if ($finalData['status'] === "OK")
            {
                return collect($finalData['results'][0]);
            }
            elseif ($finalData['status'] == "ZERO_RESULTS")
            {
                return false;
            }

            return $finalData['error_message'];
        }

        return false;
    }
}
