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

Route::get('data_pelanggan', 'App\Http\Controllers\DataPelangganController@index')->name('data_pelanggan.index');

Route::get('data_pelanggan/show/{id}, App\Http\Controllers\DataPelangganController@show')->name('data_pelanggan.show');

Route::get('data_pelanggan/create', 'App\Http\Controllers\DataPelangganController@create')->name('data_pelanggan.create');

Route::post('data_pelanggan/store', 'App\Http\Controllers\DataPelangganController@store')->name('data_pelanggan.store');

Route::get('data_pelanggan/edit/{id}', 'App\Http\Controllers\DataPelangganController@edit')->name('data_pelanggan.edit');

Route::post('data_pelanggan/update/{id}', 'App\Http\Controllers\DataPelangganController@update')->name('data_pelanggan.update');

Route::post('data_pelanggan/delete/{id}', 'App\Http\Controllers\DataPelangganController@destroy')->name('data_pelanggan.destroy');


Route::get('data_rumah', 'App\Http\Controllers\DataRumahController@index')->name('data_rumah.index');

Route::get('data_rumah/show/{id}, App\Http\Controllers\DataRumahController@show')->name('data_rumah.show');

Route::get('data_rumah/create', 'App\Http\Controllers\DataRumahController@create')->name('data_rumah.create');

Route::post('data_rumah/store', 'App\Http\Controllers\DataRumahController@store')->name('data_rumah.store');

Route::get('data_rumah/edit/{id}', 'App\Http\Controllers\DataRumahController@edit')->name('data_rumah.edit');

Route::post('data_rumah/update/{id}', 'App\Http\Controllers\DataRumahController@update')->name('data_rumah.update');

Route::post('data_rumah/delete/{id}', 'App\Http\Controllers\DataRumahController@destroy')->name('data_rumah.destroy');


Route::get('booking_transaksi', 'App\Http\Controllers\DataTransaksiController@index')->name('booking_transaksi.index');

Route::get('booking_transaksi/show/{id}, App\Http\Controllers\DataTransaksiController@show')->name('booking_transaksi.show');

Route::get('booking_transaksi/create', 'App\Http\Controllers\DataTransaksiController@create')->name('booking_transaksi.create');

Route::post('booking_transaksi/store', 'App\Http\Controllers\DataTransaksiController@store')->name('booking_transaksi.store');

Route::get('booking_transaksi/edit/{id}', 'App\Http\Controllers\DataTransaksiController@edit')->name('booking_transaksi.edit');

Route::post('booking_transaksi/update/{id}', 'App\Http\Controllers\DataTransaksiController@update')->name('booking_transaksi.update');

Route::post('booking_transaksi/delete/{id}', 'App\Http\Controllers\DataTransaksiController@destroy')->name('booking_transaksi.destroy');