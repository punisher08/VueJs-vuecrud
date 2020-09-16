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


Route::get('/todos', 'App\Http\Controllers\TodoController@index');
Route::post('/todo/create/', 'App\Http\Controllers\TodoController@store');
Route::delete('/todo/delete/{id}','App\Http\Controllers\TodoController@destroy');
Route::post('/todo/update/{id}','App\Http\Controllers\TodoController@update');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
