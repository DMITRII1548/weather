<?php

namespace App\Components;

use GuzzleHttp\Client;

class ImportGeocodingDataClient 
{

    public $client;

    public function __construct()
    {
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://api.openweathermap.org/geo/1.0/direct',
            // You can set any number of default request options.
            'timeout'  => 2.0,
            'verify' => false,
        ]);
    }

}