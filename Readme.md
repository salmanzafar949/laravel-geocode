# laravel-geocode

![stars](https://img.shields.io/github/stars/salmanzafar949/laravel-geocode)
![issues](https://img.shields.io/github/issues/salmanzafar949/laravel-geocode)
![forks](https://img.shields.io/github/forks/salmanzafar949/laravel-geocode)
![license](https://img.shields.io/github/license/salmanzafar949/laravel-geocode)
[![Total Downloads](https://img.shields.io/packagist/dt/salmanzafar/laravel-geocode?style=flat-square)](https://packagist.org/packages/salmanzafar/laravel-geocode)

Laravel Package to get Lat and Long from Specific Address.

## Table of contents
* [Installation](#installation)
* [Configuration](#configuration)
* [Usage](#usage)

# Installation

```bash
composer require salmanzafar/laravel-geocode
```

## Configuration
Publish the configuration file

```bash
php artisan vendor:publish --provider="Salman\GeoCode\GeoCodeServiceProvider"
```
## Config/geocode.php
```
'API_KEY' => env('GOOGLE_GEOCODE_API_KEY', ''),
```
## Enable the package (Optional)
This package implements Laravel auto-discovery feature


## Usage

You need a <a href =https://developers.google.com/maps/documentation/geocoding/intro>Google map geocode</a> api key in order to use this


#### Finding Coordinates

```php
use Salman\GeoCode\Services\GeoCode;

public function lookForPoints()
{
        $address = "1600 Amphitheatre Parkway,Mountain View";
        $getPoints = new GeoCode();
        return $getPoints->getLatAndLong($address); 
}
```
#### Finding Coordinates using Facade
```php
use GeoCode;

public function lookForPoints()
{
    $address = "1600 Amphitheatre Parkway,Mountain View";
    return GeoCode::getLatAndLong($address); 
}
```

#### Finding Coordinates using Helper Function
```php
public function lookForPoints()
{
    $address = "1600 Amphitheatre Parkway,Mountain View";
    return findAddressCoordinates($address); 
}
```

#### Response
##### It will return a Laravel collection as response

```json
{
    "address_components": [
        {
            "long_name": "1600",
            "short_name": "1600",
            "types": [
                "street_number"
            ]
        },
        {
            "long_name": "Amphitheatre Parkway",
            "short_name": "Amphitheatre Pkwy",
            "types": [
                "route"
            ]
        },
        {
            "long_name": "Mountain View",
            "short_name": "Mountain View",
            "types": [
                "locality",
                "political"
            ]
        },
        {
            "long_name": "Santa Clara County",
            "short_name": "Santa Clara County",
            "types": [
                "administrative_area_level_2",
                "political"
            ]
        },
        {
            "long_name": "California",
            "short_name": "CA",
            "types": [
                "administrative_area_level_1",
                "political"
            ]
        },
        {
            "long_name": "United States",
            "short_name": "US",
            "types": [
                "country",
                "political"
            ]
        },
        {
            "long_name": "94043",
            "short_name": "94043",
            "types": [
                "postal_code"
            ]
        }
    ],
    "formatted_address": "1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA",
    "geometry": {
        "location": {
            "lat": 37.4220579,
            "lng": -122.0840897
        },
        "location_type": "ROOFTOP",
        "viewport": {
            "northeast": {
                "lat": 37.42340688029149,
                "lng": -122.0827407197085
            },
            "southwest": {
                "lat": 37.4207089197085,
                "lng": -122.0854386802915
            }
        }
    },
    "place_id": "ChIJtYuu0V25j4ARwu5e4wwRYgE",
    "plus_code": {
        "compound_code": "CWC8+R9 Mountain View, CA, USA",
        "global_code": "849VCWC8+R9"
    },
    "types": [
        "street_address"
    ]
}
```
