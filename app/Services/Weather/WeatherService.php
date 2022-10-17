<?php

namespace App\Services\Weather;

use App\Components\ImportGeocodingDataClient;
use App\Components\ImportWeatherDataClient;
use App\Models\City;
use Dotenv\Util\Str;

class WeatherService 
{

    private $appid;
    private $lon;
    private $lat;
    private $units;
    private $importWeatherDataClient;
    private $importGeocodingDataClient;

    public function __construct()
    {
        $this->importWeatherDataClient = new ImportWeatherDataClient();
        $this->importGeocodingDataClient = new ImportGeocodingDataClient();

        //get appid here https://home.openweathermap.org/api_keys
        $this->appid = '5e0cfca97e33cab980e5f92f5e19927d';
        $this->units = 'metric';
    }
    
    public function show(City $city)
    { 
        $this->setLatAndLon($city);

        $response = $this->importWeatherDataClient->client->request('GET', '?appid=' . $this->appid . '&lat=' . $this->lat . '&lon=' . $this->lon . '&units=' . $this->units);
        $data = json_decode($response->getBody()->getContents());

        return $data;
    }

    public function store(string $city)
    {
        $this->isCityExist($city);
    }

    private function isCityExist(string $city)
    {
        //code your country ISO 3166
        $countryCode = 398;
        $response = $this->importGeocodingDataClient->client->request('GET', '?q=' . $city . ',' . $countryCode . '&limit=' . 1 . '&appid=' . $this->appid);
        $data = json_decode($response->getBody()->getContents());

        if (!isset($data['0'])) {
            //doesn't exist
            
        } else {
            //exist
            dd(111);
        }
    }

    private function setLatAndLon(City $city)
    {
        $response = $this->importGeocodingDataClient->client->request('GET', '?q=' . $city->city . ',' . $city->country_code . '&limit=' . 1 . '&appid=' . $this->appid);
        $data = json_decode($response->getBody()->getContents());

        $this->lat = $data[0]->lat;
        $this->lon = $data[0]->lon;
    }

}