<?php

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

Route::prefix('q1')->group(function () {
    Route::get('/calculadora', 'CalculadoraController@form');
    Route::get('/calcular', 'CalculadoraController@calculate');
});

Route::prefix('q3')->group(function () {
    Route::get('/voos', 'VoosController@form');
    Route::get('/buscar', 'VoosController@search');
});