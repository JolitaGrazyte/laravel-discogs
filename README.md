# A easy to use Laravel-Discogs package.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jolitagrazyte/laravel-discogs.svg?style=flat-square)](https://packagist.org/packages/jolitagrazyte/laravel-discogs)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/JolitaGrazyte/laravel-discogs/master.svg?style=flat-square)](https://travis-ci.org/JolitaGrazyte/laravel-discogs)
[![SensioLabsInsight](https://img.shields.io/sensiolabs/i/f1c3330e-c716-421e-a301-03ad093ccbc8.svg?style=flat-square)](https://insight.sensiolabs.com/projects/f1c3330e-c716-421e-a301-03ad093ccbc8)
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

If you want to use one of those you must set your token.

``` php

/*
 * Token is your discogs token that you can obtain on https://www.discogs.com/settings/developers page.
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

Usage of this package is really simple. 

For the most of the endpoints there is a method.

Optionally you can also use the get()-method.

### Endpoints with no authentication required

``` php
// Get artist where id is 1.
$artist = Discogs::artist('1');

// Request all the relases of the artist where id is 1.   
$artistRelease = Discogs::artistRelease('1');

// Get label where id is 1.
$label = Discogs::label('1');

// Request all the relases of the label where id is 1.
$labelRelease = Discogs::labelRelease('1');

// Get relase where id is 1.
$release = Discogs::release('1');

// Get listing where id is 1234.
getMarketplaceListing('1234')

```
#### Inventory not authenticated
```php
/** If you are not authenticated as the inventory owner, 
* only items that have a status of For Sale will be visible.
*/
// Get inventory where username is username.
getUsersInventory('username')
```

### Endpoints where authentication is required

For the endpoints where authentication is required you must make sure that you have a token placed in your .env file or straight in the configuration file: config/laravel-discogs.php .

#### Orders 

```php
$myOrders = Discogs::getMyOrders();

// Get order with id 1234
$order = Discogs::orderWithId('1234');

// Get messages of the order with id 1234
$orderMessages = Discogs::orderMessages('1234')
```

#### Search

If you want to add some extra search parameters you can do it by first creating a SearchParameters object
and then chaining as many options as you want.

```php
// create a SearchParameters object
$searchParameters = new SearchParameters();

//chain some search paramater
$searchParameters->type('label')->format('lp')->year('1996');

//do a search request with query = 'MoWax' and passing the SearchParameters object
$searchResult = Discogs::search('MoWax', $searchParameters);
```

#### Inventory

When requesting your own inventory you also must authenticate. 
As the inventory owner you will get additional weight, format_quantity, external_id, and location keys.

```php
// Get inventory where username is username.
getUsersInventory('username')
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
