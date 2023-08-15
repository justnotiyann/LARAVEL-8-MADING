<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TestingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * TODO :
 *
 * 1. Buat halaman awal
 * 2. Edit Data
 * 3. Hapus Data
 *
 */


// CONTROLLER = PROSES LOGIC /  DAFTAR / TAMBAH EDIT HAPUS

// PROSES ROUTING / RUTE
Route::get('/', [DashboardController::class, 'index']);

Route::get('/login', [DashboardController::class, 'login']);
Route::get('/register', [DashboardController::class, 'register']);
Route::get('/dashboard', [DashboardController::class, 'dashboard']);

// logic untuk tambah data
Route::post('/tambah', [BeritaController::class, 'tambah']);

//untuk login
Route::post('/login', [AuthController::class, 'auth']);

// untuk register
Route::post('/register', [AuthController::class, 'register']);