<?php

use App\Http\Controllers\Weather\IndexContoller;
use App\Http\Controllers\Weather\ShowContorller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/weather', IndexContoller::class)->name('weather.index');
Route::get('/weather/{city}', ShowContorller::class)->name('weather.show');


/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/