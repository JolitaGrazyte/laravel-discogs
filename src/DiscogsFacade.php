<?php

namespace Jolita\LaravelDiscogs;

use Illuminate\Support\Facades\Facade;

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
