<?php

use Illuminate\Auth\Events\Login;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\StockController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [LoginController::class,'login']);
Route::get('register', [RegisterController::class,'register']);
Route::get('dashboard', [DashboardController::class,'dashboard']);
Route::get('produk', [ProdukController::class,'produk']);
Route::get('penjualan', [PenjualanController::class,'penjualan']);
Route::get('laporan', [LaporanController::class, 'laporanKeuangan'])->name('laporan');
Route::get('stock', [StockController::class, 'stock']);