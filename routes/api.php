<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\BerandaController;
use App\Http\Controllers\Api\v1\DaftarBukuController;
use App\Http\Controllers\Api\v1\DaftarTugasAkhirController;
use App\Http\Controllers\Api\v1\DaftarPraktekLapanganController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/daftarbuku', [DaftarBukuController::class, 'index']);
Route::get('/daftarta', [DaftarTugasAkhirController::class, 'index']);
Route::get('/daftarpkl', [DaftarPraktekLapanganController::class, 'index']);
