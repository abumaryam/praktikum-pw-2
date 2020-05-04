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
| Lokasi file routes/web.php
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/depan/awal','DepanController@awal');
Route::get('/depan/latihan','DepanController@latihan');
Route::get('/depan/cobaform','DepanController@cobaForm');
Route::get('/depan/prosesform','DepanController@prosesForm')->name('proses-form'); //cara memanggil namanya nanti di view dengan menggunakan route('proses-form') 
Route::get('/depan/cobatangkap/{kelurahan}','DepanController@cobaTangkap');
Route::get('/depan/muncul-prodi','DepanController@munculkanProdi');

Route::get('/mahasiswa/tambah','MahasiswaController@tambahMahasiswa');
Route::get('/mahasiswa/index','MahasiswaController@index')->name('mahasiswa-index');
Route::get('/mahasiswa/detail/{id}','MahasiswaController@detail')->name('mahasiswa-detail'); // memanggilnya di view dengan menggunakan route('mahasiswa-detail',['id'=>$id])
Route::post('/mahasiswa/perbaharui/{id}','MahasiswaController@perbaharui')->name('mahasiswa.perbaharui');
Route::delete('/mahasiswa/hapus/{id}','MahasiswaController@hapus')->name('mahasiswa.hapus');
Route::post('/mahasiswa/simpan','MahasiswaController@simpanMahasiswa')->name('mahasiswa.simpan');
Route::get('/mahasiswa/ubah/{id}','MahasiswaController@ubah')->name('mahasiswa.ubah');
