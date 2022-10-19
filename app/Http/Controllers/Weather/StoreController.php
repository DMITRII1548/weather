<?php

namespace App\Http\Controllers\Weather;

use App\Http\Controllers\Controller;
use App\Http\Requests\Weather\StoreRequest;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $city = $data['city'];
        
        $message = $this->service->store($city);

        if (!isset($message)) { 
            return redirect()->route('weather.index');  
        } else {
            return view('weather.create', compact('message')); 
        }
    }

}
