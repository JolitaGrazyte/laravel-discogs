# An easy to use Laravel-Discogs package.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jolitagrazyte/laravel-discogs.svg?style=flat-square)](https://packagist.org/packages/jolitagrazyte/laravel-discogs)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/JolitaGrazyte/laravel-discogs/master.svg?style=flat-square)](https://travis-ci.org/JolitaGrazyte/laravel-discogs)
[![SensioLabsInsight](https://img.shields.io/sensiolabs/i/xxxxxxxxx.svg?style=flat-square)](https://insight.sensiolabs.com/projects/xxxxxxxxx)
[![Quality Score](https://img.shields.io/scrutinizer/g/JolitaGrazyte/laravel-discogs.svg?style=flat-square)](https://scrutinizer-ci.com/g/JolitaGrazyte/laravel-discogs)
[![Total Downloads](https://img.shields.io/packagist/dt/jolitagrazyte/laravel-discogs.svg?style=flat-square)](https://packagist.org/packages/jolitagrazyte/laravel-discogs)


## Installation

You can install the package via composer:

``` bash
composer require jolitagrazyte/laravel-discogs
```

## Post-installation

You must set the service provider of this package in your application file.

``` php
// config/app.php
'provider' => [
    ...
    Jolita\LaravelDiscogs\DiscogsServiceProvider::class,
    ...
];
```

This package also comes with a facade, which provides an easy way to call the the class. 

``` php
// config/app.php
'aliases' => [
    ...
    'Discogs' => Jolita\LaravelDiscogs\DiscogsFacade::class,
    ...
];
```

Next up, you must publish the config file of this package with this command:

``` php
php artisan vendor:publish --provider="Jolita\LaravelDiscogs\DiscogsServiceProvider"
```

The following config file will be published in config/laravel-discogs.php
Some of the endpoints require authentication. 
If you want to use one those you must set your token.

``` php

/*
 * Token is your discogs token that you can get on https://www.discogs.com/settings/developers page.
 * User-Agent is a name of your application, for example 'MyAmazingDiscogsApp/1.0'.
 *
 */
return [
    'token' => env('DISCOGS_TOKEN', ''),
    'headers' => [
        'User-Agent' => '',
    ],
];
```



## Usage

``` php
...
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email hello@jolitagrazyte.com instead of using the issue tracker.

## Credits

- [Jolita Grazyte](https://github.com/JolitaGrazyte)
- [All Contributors](../../contributors)

## About Spatie
Spatie is a webdesign agency based in Antwerp, Belgium. You'll find an overview of all our open source projects [on our website](https://spatie.be/opensource).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
