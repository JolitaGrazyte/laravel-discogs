<?php

namespace Jolita\LaravelDiscogs;

use Illuminate\Support\Facades\Facade;
use Jolita\DiscogsApiWrapper\DiscogsApi;


class DiscogsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'discogs';
    }
}
