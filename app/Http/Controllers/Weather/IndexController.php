<?php

namespace App\Http\Controllers\Weather;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    
    public function __invoke()
    {
        $number = 0;
        $cities = City::all();
        
        return view('weather.index', compact('cities', 'number'));
    }

}
