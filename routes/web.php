<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\StockController;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

// Login and Register
Route::get('login', [LoginController::class,'login']);
Route::get('register', [RegisterController::class,'register']);
Route::get('dashboard', [DashboardController::class,'dashboard']);

// Routes for Produk
Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');
Route::get('/produk', [ProdukController::class, 'produk'])->name('produk');
Route::get('/produk/{id}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
Route::put('/produk/{id}', [ProdukController::class, 'update'])->name('produk.update');
Route::delete('/produk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');
Route::get('/produk/trashed', [ProdukController::class, 'trashed'])->name('produk.trashed');
Route::post('/produk/{id}/restore', [ProdukController::class, 'restore'])->name('produk.restore');
Route::delete('/produk/{id}/force-delete', [ProdukController::class, 'forceDelete'])->name('produk.forceDelete');

// Kategori
Route::get('/kategori', function () {
    $kategoris = DB::table('kategori')->get(); 
    return view('kategori', ['kategoris' => $kategoris]);
});

// Other routes
Route::get('penjualan', [PenjualanController::class,'penjualan']);
Route::get('laporan', [LaporanController::class, 'laporanKeuangan'])->name('laporan');
Route::get('stock', [StockController::class, 'stock']);