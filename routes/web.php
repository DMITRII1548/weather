<?php

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

Route::group(['namespace' => 'App\Http\Controllers\Weather'], function() {
    Route::get('/weather', 'IndexController')->name('weather.index');
    Route::get('/weather/create', 'CreateController')->name('weather.create');
    Route::post('/weather/store', 'StoreController')->name('weather.store');
    Route::get('/weather/{city}', 'ShowController')->name('weather.show');
    Route::delete('/weather/{city}', 'DestroyController')->name('weather.destroy');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
