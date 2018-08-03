<?php

use Illuminate\Http\Request;

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



Route::group(['middleware' => 'cors'], function () {

    // Simple Test-4-Devs
    Route::get('simple', 'Api\AuthController@simple');

    // Auth this App-NOW!
    Route::post('login', 'Api\AuthController@login');

    //Protect this 'gelera'::Protection('On');
    Route::group(['middleware' => 'jwt.auth'], function () {
        Route::resource('products', 'Api\ProductsController');
        //Route::resource('times', 'Api\TimesController');
    });
});

Route::resource('times', 'Api\TimesController');
