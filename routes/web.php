<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\BarangController;

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
    return view('home0069');
});
Route::get('/barang0069', 'App\Http\Controllers\BarangController@tampilbarang');
Route::get('/pelanggan0069', 'App\Http\Controllers\BarangController@tampilpelanggan');
Route::get('/transaksi0069', 'App\Http\Controllers\BarangController@tampiltrans');
Route::get('/user0069', 'App\Http\Controllers\BarangController@tampiluser');
Route::get('/barang0069/barang_tambah','App\Http\Controllers\BarangController@tambahbrg');
Route::get('/pelanggan0069/pelanggan_tambah','App\Http\Controllers\BarangController@tambahplg');
Route::get('/transaksi0069/transaksi_tambah','App\Http\Controllers\BarangController@tambahtrans');
Route::get('/user0069/user_tambah','App\Http\Controllers\BarangController@tambahusr');
Route::post('/barang0069/storebrg','App\Http\Controllers\BarangController@storebrg');
Route::get('/barang0069/barang_edit/{id}','App\Http\Controllers\BarangController@editbrg');
Route::get('/pelanggan0069/pelanggan_edit/{id}','App\Http\Controllers\BarangController@editplg');
Route::get('/transaksi0069/transaksi_edit/{id}','App\Http\Controllers\BarangController@edittrans');
Route::get('/user0069/user_edit/{id}','App\Http\Controllers\BarangController@editusr');
Route::post('/barang0069/updatebrg','App\Http\Controllers\BarangController@updatebrg');
Route::get('/barang0069/deletebrg/{id}','App\Http\Controllers\BarangController@deletebrg');
Route::get('/barang0069/cari','App\Http\Controllers\BarangController@cari');
