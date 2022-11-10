<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profilcontroller;
use App\Http\Controllers\bagiancontroller;
use App\Http\Controllers\jeniscontroller;
use App\Http\Controllers\AdministrasiC;
use App\Http\Controllers\BagianC;
use App\Http\Controllers\KebutuhanC;
use App\Http\Controllers\PegawaiC;
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

Route::resource('bagian', bagiancontroller::class);
Route::resource('profil', profilcontroller::class);
Route::resource('jenis', jeniscontroller::class);

// route for table RSUD
Route::get('/administrasi', [AdministrasiC::class, 'index']);
Route::post('/administrasi/tambah', [AdministrasiC::class, 'tambah'])->name('administrasi.tambah');
Route::post('/administrasi/update', [AdministrasiC::class, 'update'])->name('administrasi.update');
Route::get('/administrasi/destroy', [AdministrasiC::class, 'destroy'])->name('administrasi.destroy');

Route::get('/bagian', [BagianC::class, 'index']);
Route::post('/bagian/tambah', [BagianC::class, 'tambah'])->name('bagian.tambah');
Route::post('/bagian/update', [BagianC::class, 'update'])->name('bagian.update');
Route::get('/bagian/destroy/{id}', [BagianC::class, 'destroy'])->name('bagian.destroy');

Route::get('/kebutuhan', [KebutuhanC::class, 'index']);
Route::post('/kebutuhan/tambah', [KebutuhanC::class, 'tambah'])->name('kebutuhan.tambah');
Route::post('/kebutuhan/update', [KebutuhanC::class, 'update'])->name('kebutuhan.update');
Route::get('/kebutuhan/destroy/{id}', [KebutuhanC::class, 'destroy'])->name('kebutuhan.destroy');

Route::get('/pegawai', [PegawaiC::class, 'index']);
Route::post('/pegawai/tambah', [PegawaiC::class, 'tambah'])->name('pegawai.tambah');
Route::post('/pegawai/update', [PegawaiC::class, 'update'])->name('pegawai.update');
Route::get('/pegawai/destroy/{id}', [PegawaiC::class, 'destroy'])->name('pegawai.destroy');