<?php

namespace App\Http\Controllers\Weather;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    
    public function __invoke()
    {
        $message = null;

        return view('weather.create', compact('message'));
    }

}
