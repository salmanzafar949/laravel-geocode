# laravel-geocode

![stars](https://img.shields.io/github/stars/salmanzafar949/laravel-geocode)
![issues](https://img.shields.io/github/issues/salmanzafar949/laravel-geocode)
![forks](https://img.shields.io/github/forks/salmanzafar949/laravel-geocode)
![license](https://img.shields.io/github/license/salmanzafar949/laravel-geocode)
[![Total Downloads](https://img.shields.io/packagist/dt/salmanzafar/laravel-geocode?style=flat-square)](https://packagist.org/packages/salmanzafar/laravel-geocode)

Laravel Package to get Lat and Long from Specific Address.

## Table of contents
* [Installation](#installation)
* [Configuration](#configuration-optional)


# Installation

```bash
composer require salmanzafar/laravel-geocode
```

## Configuration (optional)
Publishing service provider

```bash
php artisan vendor:publish --provider="Salman\GeoCode\GeoCodeServiceProvider::class"
```

## Enable the package (Optional)
This package implements Laravel auto-discovery feature. After you install it the package provider and facade are added automatically for laravel >= 5.5.
