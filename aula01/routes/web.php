<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/entrada','App\Http\Controllers\EntradaController@index');

Route::get('/usuario','App\Http\Controllers\UsuarioController@index');
