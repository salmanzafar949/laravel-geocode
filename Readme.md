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
