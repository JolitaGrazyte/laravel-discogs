<?php

namespace Jolita\LaravelDiscogs;

use Jolita\DiscogsApiWrapper\DiscogsApi;

class Discogs extends DiscogsApi
{

    /**
     * Friendly welcome
     *
     * @param string $phrase Phrase to return
     *
     * @return string Returns the phrase passed in
     */
    public function echoPhrase($phrase)
    {
        return $phrase;
    }
}
