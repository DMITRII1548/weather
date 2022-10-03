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
        $this->appid = '';

        $this->lon = 76.889709;
        $this->lat = 43.238949;

        $this->units = 'metric';
    }
    
    public function __invoke()
    {
        $import = new ImportWeatherDataClient;
        $response = $import->client->request('GET', '?appid=' . $this->appid . '&lat=' . $this->lat . '&lon=' . $this->lon . '&units=');
        $data = json_decode($response->getBody()->getContents());

        dd($data->main->temp - 270);
    }

}
