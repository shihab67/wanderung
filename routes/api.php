<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api', 'throttle:60,1')->group(function () {
    Route::get('/places', 'GeoLocationController@places')->name('places.api');
});

Route::group(['middleware' => ['cors', 'json.response', 'throttle:60,1']], function () {
    Route::post('/login', 'Auth\ApiAuthController@login')->name('login.api');
    Route::post('/signup', 'Auth\ApiAuthController@signup')->name('signup.api');
});
