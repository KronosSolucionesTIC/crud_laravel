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

//Rutas restaurante
Route::get('/restaurante', 'RestauranteController@index');
Route::get('/restaurante/crear', 'RestauranteController@create');
Route::get('/restaurante/{id}/edit', 'RestauranteController@edit');
Route::post('/restaurante', 'RestauranteController@store');
Route::delete('/restaurante/{id}', 'RestauranteController@destroy');
Route::patch('/restaurante/{id}', 'RestauranteController@update');
Route::get('/restaurante/listar', 'RestauranteController@show');

//Rutas reserva
Route::get('/reserva', 'ReservaController@index');
Route::get('/reserva/crear', 'ReservaController@create');
Route::get('/reserva/{id}/edit', 'ReservaController@edit');
Route::post('/reserva', 'ReservaController@store');
Route::delete('/reserva/{id}', 'ReservaController@destroy');
Route::patch('/reserva/{id}', 'ReservaController@update');
Route::get('/reserva/listar', 'ReservaController@show');