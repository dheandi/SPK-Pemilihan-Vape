<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HitunganController;
use App\Http\Controllers\VapeController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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
//route login
Route::get('/', [AuthController::class, 'awal']);
Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

// route dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

Route::resource('/vape', VapeController::class)->middleware('auth');
Route::get('/', [HitunganController::class, 'showForm'])->name('vape.showForm')->Middleware('guest');
Route::post('/cari-vape', [HitunganController::class, 'cari'])->name('vape.cari');
Route::get('/hitungan', [HitunganController::class, 'showForm'])->name('hitungan.showForm');


