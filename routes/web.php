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
Route::get('/barang0069', function () {
    return view('barang0069');
});
Route::get('/pelanggan0069', function () {
    return view('pelanggan0069');
});
Route::get('/transaksi0069', function () {
    return view('transaksi0069');
});
Route::get('/user0069', function () {
    return view('user0069');
});
Route::get('/barang0069/barang_tambah', function () {
    return view('barang_tambah');
});
Route::get('/pelanggan0069/pelanggan_tambah', function () {
    return view('pelanggan_tambah');
});
Route::get('/transaksi0069/transaksi_tambah', function () {
    return view('transaksi_tambah');
});
Route::get('/user0069/user_tambah', function () {
    return view('user_tambah');
});
Route::resource('barang', 'app\Http\Controllers\BarangController::class');
Route::get('/barang0069/cari','App\Http\Controllers\BarangController@cari');
