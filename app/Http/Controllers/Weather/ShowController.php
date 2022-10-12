<?php

namespace App\Http\Controllers\Weather;

use App\Components\ImportWeatherDataClient;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Services\Weather\WeatherService;
use Illuminate\Http\Request;

class ShowController extends Controller
{

    public function __invoke(int $cityId)
    {
        $city = City::find($cityId);
        $weatherService = new WeatherService;

        $data = $weatherService->show($city);

        $city = $city->city;
        $temperature = $data->main->temp;
        $weather = $data->weather[0]->main;
        $windSpeed = $data->wind->speed;

        return view('weather.show', compact('city', 'temperature', 'weather', 'windSpeed'));
    }

}
