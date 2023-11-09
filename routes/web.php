<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LaporanPerbulanController;
use App\Http\Controllers\LaporanPertahunController;

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

Route::get('/login', [AuthController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('post-login');

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/', [HomeController::class, 'index'])->middleware('auth')->name('home_admin');
Route::get('/laporan', [LaporanController::class, 'index'])->middleware('auth')->name('laporan');
Route::post('/laporandata', [LaporanController::class, 'filter'])->middleware('auth')->name('laporandata');
Route::get('/detailcetak/{id}', [LaporanController::class, 'detail'])->middleware('auth')->name('detailcetak');
Route::get('/cetaklaporan', [LaporanController::class, 'cetakview'])->middleware('auth')->name('cetaklaporan');

Route::get('/cetaksemualaporan', [LaporanController::class, 'cetakall'])->name('cetaksemualaporan');

// Laporan Perbulan
Route::get('/laporanperbulan', [LaporanPerbulanController::class, 'index'])->middleware('auth')->name('laporanperbulan');
Route::post('/laporanperbulandata', [LaporanPerbulanController::class, 'filter'])->middleware('auth')->name('laporanperbulandata');
Route::get('/detailcetaklaporanperbulan/{id}', [LaporanPerbulanController::class, 'detail'])->middleware('auth')->name('detailcetaklaporanperbulan');


// Laporan Pertahun
Route::get('/laporanpertahun', [LaporanPertahunController::class, 'index'])->middleware('auth')->name('laporanpertahun');
Route::post('/laporanpertahundata', [LaporanPertahunController::class, 'filter'])->middleware('auth')->name('laporanpertahundata');
Route::get('/detailcetaklaporanpertahun/{id}', [LaporanPertahunController::class, 'detail'])->middleware('auth')->name('detailcetaklaporanpertahun');

