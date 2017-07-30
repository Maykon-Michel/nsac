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
    return view('index');
});

Route::get('boletim', function () {
    return view('boletim');
});

Route::get('corpodocente', function () {
    return view('corpodocente');
});

Route::get('graficos', function () {
    return view('graficos');
});

Route::get('mural', function () {
    return view('mural');
});

Route::get('ocorrencias', function () {
    return view('ocorrencias');
});

Route::get('perfil', function () {
    return view('perfil');
});