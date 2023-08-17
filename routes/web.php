<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TestingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// PROSES ROUTING / RUTE
Route::get('/', [DashboardController::class, 'index']);

Route::get('/login', [DashboardController::class, 'login']);
Route::get('/register', [DashboardController::class, 'register']);
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

// logic untuk tambah data
Route::post('/tambah', [BeritaController::class, 'tambah']);

//untuk login
Route::post('/login', [AuthController::class, 'login']);

// untuk register
Route::post('/register', [AuthController::class, 'register']);
