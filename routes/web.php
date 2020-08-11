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

Route::get('/restaurante', 'RestauranteController@index');
Route::get('/restaurante/crear', 'RestauranteController@create');
Route::get('/restaurante/{id}/edit', 'RestauranteController@edit');
Route::post('/restaurante', 'RestauranteController@store');
Route::delete('/restaurante/{id}', 'RestauranteController@destroy');
Route::patch('/restaurante/{id}', 'RestauranteController@update');