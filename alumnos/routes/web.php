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


//show
Route::get('/show', 'AlumnosController@show')->name('show');
Route::post('/registrar', 'AlumnosController@registrar')->name('registrar');
Route::post('/editar', 'AlumnosController@edit')->name('editar');
Route::post('/update', 'AlumnosController@update')->name('update');
