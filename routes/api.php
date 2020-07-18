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
Route::get('/tercero', 'TerceroController@index');
Route::post('/tercero', 'TerceroController@store');
Route::put('/tercero', 'TerceroController@update');
Route::delete('/tercero/{id}', 'TerceroController@destroy');
