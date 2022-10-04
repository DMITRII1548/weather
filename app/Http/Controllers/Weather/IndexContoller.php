<?php

namespace App\Http\Controllers\Weather;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class IndexContoller extends Controller
{
    
    public function __invoke()
    {
        City::create();
    }

}
