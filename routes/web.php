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
    return view('index');
});

Route::get('data_rumah', 'App\Http\Controllers\DataRumahController@index');

Route::get('data_rumah/{id}, App\Http\Controllers\DataRumahController@show')->name('data_rumah.show');

Route::get('data_rumah/create', 'App\Http\Controllers\DataRumahController@create')->name('data_rumah.create');

Route::post('data_rumah/store', 'App\Http\Controllers\DataRumahController@store')->name('data_rumah.store');

Route::get('data_rumah/edit/{id}', 'App\Http\Controllers\DataRumahController@edit')->name('data_rumah.edit');

Route::post('data_rumah/update/{id}', 'App\Http\Controllers\DataRumahController@update')->name('data_rumah.update');

Route::post('data_rumah/delete/{id}', 'App\Http\Controllers\DataRumahController@destroy')->name('data_rumah.destroy');