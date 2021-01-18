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
Auth::routes();
Route::group(['prefix' => 'auth'], function () {


    Route::post('google', 'API\AuthController@loginGoogle');

    Route::group(['middleware' => 'auth:api'], function(){
        Route::post('me', 'API\AuthController@profile');
        Route::post('me/picture', 'API\AuthController@uploadAvatar');
    });
});
