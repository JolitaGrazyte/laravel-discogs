<?php

return [
    /** Token is your discogs token that you can get on https://www.discogs.com/settings/developers page. */
    'token' => env('DISCOGS_TOKEN', ''),
    'headers' => [
        /** User-Agent is a name of your application, for example 'MyDiscogsClient/1.0 +http://mydiscogsclient.org' */
        'User-Agent' => '',
    ],
];
