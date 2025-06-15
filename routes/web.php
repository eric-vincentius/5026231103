<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Controllers;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\TrafficController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KeranjangBelanjaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/selamat', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('hello', [Coba::class, 'helloworld']);

Route::get('pertama', function() {
    return view('pertama');
});

Route::get('linktree', function() {
    return view('linktree');
});

Route::get('layouting', function() {
    return view('layouting');
});

Route::get('js1', function() {
    return view('js1');
});

Route::get('bootstrap1', function() {
    return view('bootstrap1');
});

Route::get('dosen', [Coba::class, 'index']);

Route::get('kopikenangan', function() {
    return view('kopikenangan');
});

// Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('/pegawai', [PegawaiDBController::class,'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class,'tambah']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class,'edit']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class,'hapus']);
Route::get('pegawai/cari', [PegawaiDBController::class, 'cari']);


Route::post('/pegawai/store', [PegawaiDBController::class,'store']);
Route::post('/pegawai/update', [PegawaiDBController::class,'update']);

Route::get('/crud', [MobilController::class,'index']);
Route::get('/crud/tambah', [MobilController::class,'tambah']);
Route::get('/crud/edit/{id}', [MobilController::class,'edit']);
Route::get('/crud/hapus/{id}', [MobilController::class,'hapus']);
Route::get('crud/cari', [MobilController::class, 'cari']);

Route::post('/crud/store', [MobilController::class,'store']);
Route::post('/crud/update', [MobilController::class,'update']);

Route::get('/latihan2', [TrafficController::class, 'index']);

Route::get('/latihan3', [KaryawanController::class, 'index'])->name('karyawan.index');
Route::get('/karyawan/tambah', [KaryawanController::class, 'create']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::delete('/karyawan/hapus/{kodepegawai}', [KaryawanController::class, 'destroy'])->name('karyawan.destroy');

Route::get('/latihan1', [KeranjangBelanjaController::class, 'indexkeranjangbelanja']);
Route::get('/latihan1/belikeranjangbelanja/{id}', [KeranjangBelanjaController::class, 'belikeranjangbelanja']);
Route::get('/latihan1/batalkeranjangbelanja/{id}', [KeranjangBelanjaController::class, 'batalkeranjangbelanja']);
Route::post('/latihan1/storekeranjangbelanja', [KeranjangBelanjaController::class, 'storekeranjangbelanja']);
Route::post('/latihan1/updatekeranjangbelanja', [KeranjangBelanjaController::class, 'updatekeranjangbelanja']);
