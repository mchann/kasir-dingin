<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\AuthController;

// Login and Register
Route::get('login', [LoginController::class,'login']);
Route::get('register', [RegisterController::class,'register']);
Route::get('dashboard', [DashboardController::class,'dashboard']);



Route::get('/register', function () {
    return view('auth.register');
});
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', function () {
    return view('auth.login');
});
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/profile', function () {
    return view('profile');
});

Route::get('/', function () {
    return view('dashboard');
});


// Produk
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
Route::get('/kategoris', [KategoriController::class, 'kategori']) ->name('kategori');
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');  
Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
Route::get('/kategori/trashed', [KategoriController::class, 'trashed'])->name('kategori.trashed');
Route::post('/kategori/{id}/restore', [KategoriController::class, 'restore'])->name('kategori.restore');


// route lain
Route::get('penjualan', [PenjualanController::class,'penjualan']);
Route::get('laporan', [LaporanController::class, 'laporanKeuangan'])->name('laporan');
Route::get('stock', [StockController::class, 'stock']);
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware('auth');
