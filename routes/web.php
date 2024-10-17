<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TugasAkhirController;
use App\Http\Controllers\PraktekLapanganController;

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
    return redirect()->route('login');
});


Route::get('/login', [SessionController::class, 'index'])->name('login');
Route::post('/login-proses', [SessionController::class, 'login'])->name('login-proses');
//logout
Route::post('/logout', [SessionController::class, 'logout'])->name('logout');


Route::middleware(['auth.check', 'preventCache'])->prefix('admin')->group(function () {
    //dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    //Kategori
    Route::resource('/kategori', KategoriController::class);

    //prodi
    Route::resource('/prodi', ProdiController::class);

    //buku
    Route::resource('/buku', BukuController::class);

    //tugasakhir
    Route::resource('/tugasakhir', TugasAkhirController::class);

    Route::resource('/prakteklapangan', PraktekLapanganController::class);

});