<?php

namespace App\Http\Controllers\Weather;

use App\Http\Controllers\Controller;
use App\Services\Weather\WeatherService;

class BaseController extends Controller
{

    public $service;

    public function __construct(WeatherService $service)
    {
        $this->service = $service;
    }

}