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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/data_diri', 'Data_diriController@index');
Route::post('/data_diri/create', 'Data_diriController@create');


Route::get('/set_jadwal', 'Set_jadwalController@index');
Route::post('/set_jadwal/create', 'Set_jadwalController@create');


Route::get('/data_kegiatan', 'data_kegiatanController@index');
Route::post('/data_kegiatan/create', 'Set_jadwalController@create');


Route::get('laporan_pdf', 'LaporanController@pdf');