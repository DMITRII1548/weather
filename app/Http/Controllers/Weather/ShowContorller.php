<?php

namespace App\Http\Controllers\Weather;

use App\Components\ImportWeatherDataClient;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowContorller extends Controller
{

    private $appid;
    private $lon;
    private $lat;
    private $units;

    public function __construct()
    {
        //get appid here https://home.openweathermap.org/api_keys
        $this->appid = '5e0cfca97e33cab980e5f92f5e19927d';

        $this->lon = 76.889709;
        $this->lat = 43.238949;

        $this->units = 'metric';
    }
    
    public function __invoke()
    {
        $import = new ImportWeatherDataClient;
        $response = $import->client->request('GET', '?appid=' . $this->appid . '&lat=' . $this->lat . '&lon=' . $this->lon . '&units=' . $this->units);
        $data = json_decode($response->getBody()->getContents());

        $temperature = $data->main->temp;
        $weather = $data->weather[0]->main;
        $windSpeed = $data->wind->speed;

        return view('weather.show', compact('temperature', 'weather', 'windSpeed'));
    }

}
