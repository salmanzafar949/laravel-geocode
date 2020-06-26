# laravel-geocode

![stars](https://img.shields.io/github/stars/salmanzafar949/laravel-api-exceptions-handler)
![issues](https://img.shields.io/github/issues/salmanzafar949/laravel-api-exceptions-handler)
![forks](https://img.shields.io/github/forks/salmanzafar949/laravel-api-exceptions-handler)
![license](https://img.shields.io/github/license/salmanzafar949/laravel-api-exceptions-handler)
[![Total Downloads](https://img.shields.io/packagist/dt/salmanzafar/laravel-api-exceptions-handler?style=flat-square)](https://packagist.org/packages/salmanzafar/laravel-jwt-auto-installer)

A Laravel package that makes it easy to handle and customize api exceptions and responses and also support for model uuid

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
