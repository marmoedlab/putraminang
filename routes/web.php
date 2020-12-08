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

//-------Toko--------
Route::get('/tokos', 'TokoController@index');
Route::get('/tokos/add', 'TokoController@create');
Route::post('/tokos/store', 'TokoController@store');
Route::get('/tokos/delete/{id}', 'TokoController@destroy');
Route::get('/tokos/edit/{id}', 'TokoController@edit');
Route::post('/tokos/update/{id}', 'TokoController@update');

//-------Kategori Karyawan--------
Route::get('/kategoriKaryawans', 'KategoriKaryawanController@index');
Route::get('/kategoriKaryawans/add', 'KategoriKaryawanController@create');
Route::post('/kategoriKaryawans/store', 'KategoriKaryawanController@store');
Route::get('/kategoriKaryawans/delete/{id}', 'KategoriKaryawanController@destroy');
Route::get('/kategoriKaryawans/edit/{id}', 'KategoriKaryawanController@edit');
Route::post('/kategoriKaryawans/update/{id}', 'KategoriKaryawanController@update');

//-------Karyawan--------
Route::get('/karyawans', 'karyawanController@index');
Route::get('/karyawans/add', 'karyawanController@create');
Route::post('/karyawans/store', 'karyawanController@store');
Route::get('/karyawans/delete/{id}', 'karyawanController@destroy');
Route::get('/karyawans/edit/{id}', 'karyawanController@edit');
Route::post('/karyawans/update/{id}', 'karyawanController@update');

//-------Hutang Karyawan--------
Route::get('/hutangKaryawans', 'HutangKaryawanController@index');
Route::get('/hutangKaryawans/add', 'HutangKaryawanController@create');
Route::post('/hutangKaryawans/store', 'HutangKaryawanController@store');
Route::get('/hutangKaryawans/delete/{id}', 'HutangKaryawanController@destroy');
Route::get('/hutangKaryawans/edit/{id}', 'HutangKaryawanController@edit');
Route::post('/hutangKaryawans/update/{id}', 'HutangKaryawanController@update');

//-------Pelanggan--------
Route::get('/pelanggans', 'PelangganController@index');
Route::get('/pelanggans/add', 'PelangganController@create');
Route::post('/pelanggans/store', 'PelangganController@store');
Route::get('/pelanggans/delete/{id}', 'PelangganController@destroy');
Route::get('/pelanggans/edit/{id}', 'PelangganController@edit');
Route::post('/pelanggans/update/{id}', 'PelangganController@update');

//-------DebitKredit--------
Route::get('/debitKredits', 'DebitKreditController@index');
Route::get('/debitKredits/add', 'DebitKreditController@create');
Route::post('/debitKredits/store', 'DebitKreditController@store');
Route::get('/debitKredits/delete/{id}', 'DebitKreditController@destroy');
Route::get('/debitKredits/edit/{id}', 'DebitKreditController@edit');
Route::post('/debitKredits/update/{id}', 'DebitKreditController@update');

//-------Jenis Satuan Barang--------
Route::get('/jenisSatuanBarangs', 'jenisSatuanBarangController@index');
Route::get('/jenisSatuanBarangs/add', 'jenisSatuanBarangController@create');
Route::post('/jenisSatuanBarangs/store', 'jenisSatuanBarangController@store');
Route::get('/jenisSatuanBarangs/delete/{id}', 'jenisSatuanBarangController@destroy');
Route::get('/jenisSatuanBarangs/edit/{id}', 'jenisSatuanBarangController@edit');
Route::post('/jenisSatuanBarangs/update/{id}', 'jenisSatuanBarangController@update');

//-------Kategori Karyawan--------
Route::get('/kategoriProduks', 'KategoriProdukController@index');
Route::get('/kategoriProduks/add', 'KategoriProdukController@create');
Route::post('/kategoriProduks/store', 'KategoriProdukController@store');
Route::get('/kategoriProduks/delete/{id}', 'KategoriProdukController@destroy');
Route::get('/kategoriProduks/edit/{id}', 'KategoriProdukController@edit');
Route::post('/kategoriProduks/update/{id}', 'KategoriProdukController@update');
