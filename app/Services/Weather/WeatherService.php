<?php

namespace App\Services\Weather;

use App\Components\ImportGeocodingDataClient;
use App\Components\ImportWeatherDataClient;
use App\Models\City;

class WeatherService 
{

    private $appid;
    private $lon;
    private $lat;
    private $units;

    public function __construct()
    {
        //get appid here https://home.openweathermap.org/api_keys
        $this->appid = '5e0cfca97e33cab980e5f92f5e19927d';
        $this->units = 'metric';
    }
    
    public function show(City $city)
    { 
        $this->setLatAndLon($city);

        $import = new ImportWeatherDataClient();
        $response = $import->client->request('GET', '?appid=' . $this->appid . '&lat=' . $this->lat . '&lon=' . $this->lon . '&units=' . $this->units);
        $data = json_decode($response->getBody()->getContents());

        return $data;
    }

    private function setLatAndLon(City $city)
    {
        $import = new ImportGeocodingDataClient();
        $response = $import->client->request('GET', '?q=' . $city->city . ',' . $city->country_code . '&limit=' . 1 . '&appid=' . $this->appid);
        $data = json_decode($response->getBody()->getContents());

        $this->lat = $data[0]->lat;
        $this->lon = $data[0]->lon;
    }

}