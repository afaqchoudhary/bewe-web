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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'prefix' => 'auth/v1'
], function () {
    Route::get('getallcountries', 'Api\ApiController@getAllCountries');
    Route::post('createuser', 'Api\ApiController@createUser');
    Route::group([
        'middleware' => 'auth:api'
    ], function () {
        Route::post('updateprofile', 'Api\ApiController@updateProfile');
    });
});

