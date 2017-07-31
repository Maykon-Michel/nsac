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

Auth::routes();
Route::get('/', 'PagesController@index');
Route::get('boletim', 'PagesController@boletim');
Route::get('corpodocente', 'PagesController@corpodocente');
Route::get('graficos', 'PagesController@graficos');
Route::get('mural', 'PagesController@mural');
Route::get('ocorrencias', 'PagesController@ocorrencias');
Route::get('perfil', 'PagesController@perfil');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
