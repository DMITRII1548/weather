<?php

namespace App\Http\Controllers\Weather;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke(City $city)
    {
        $city->delete();

        return redirect()->route('weather.index');
    }

}
