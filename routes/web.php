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
Route::get('/alumno','App\Http\Controllers\AlumnoController@displayform')->name('displayform');
Route::post('/create', 'App\Http\Controllers\AlumnoController@save')->name('save');
Route::get('/alumnocreate','App\Http\Controllers\AlumnoController@displayform')->name('displayform');
Route::get('/view', 'App\Http\Controllers\AlumnoController@view')->name('view');
Route::get('/view', 'App\Http\Controllers\AlumnoController@index')->name('index');
Route::get('edit/{cod_estudiante}', 'App\Http\Controllers\AlumnoController@edit')->name('edit');
Route::post('/update/{cod_estudiante}','App\Http\Controllers\AlumnoController@update')->name('update');
Route::get('/delete/{cod_estudiante}','App\Http\Controllers\AlumnoController@delete')->name('delete');
Route::get('/', function () {
    return view('welcome');
});
