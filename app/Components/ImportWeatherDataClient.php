<?php

namespace App\Components;

use GuzzleHttp\Client;

class ImportWeatherDataClient 
{

    public $client;

    public function __construct()
    {
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://api.openweathermap.org/data/2.5/weather',
            // You can set any number of default request options.
            'timeout'  => 5.0,
            'verify' => false,
        ]);
    }

}
