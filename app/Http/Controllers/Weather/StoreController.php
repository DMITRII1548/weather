<?php

namespace App\Http\Controllers\Weather;

use App\Http\Controllers\Controller;
use App\Http\Requests\Weather\StoreRequest;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        dd($data);
    }

}
