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

Route::group(['middleware' => 'api'], function() {
    Route::get('lancer', 'LanceController@index');
    Route::get('/lancer/{id?}', 'LanceController@lancer');
    Route::get('speaker', 'LanceController@speaker');
    Route::get('/search/all', 'LanceController@all');
    Route::get('/search/{tag?}', 'LanceController@search');
});