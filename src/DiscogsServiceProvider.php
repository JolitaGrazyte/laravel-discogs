<?php

namespace Jolita\LaravelDiscogs;

use Illuminate\Support\ServiceProvider;
use Jolita\DiscogsApiWrapper\DiscogsApi;

class DiscogsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/laravel-discogs.php' => config_path('laravel-discogs.php'),
        ], 'config');

        /*
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'skeleton');

        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/skeleton'),
        ], 'views');
        */
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-discogs.php', 'laravel-discogs');

        $this->app->singleton('discogs', function () {

            $config = config('laravel-discogs');
            return new DiscogsApi($config['token'], $config['headers']['User-Agent']);
        });


        $this->app->bind(
            'discogs',
            DiscogsApi::class
        );
    }
}
