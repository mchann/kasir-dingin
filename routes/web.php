<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ProfileController;

// Login Routes
Route::get('login', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('login', [LoginController::class, 'store'])
    ->middleware('guest');

Route::post('logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

// Register Routes
Route::get('register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('register', [RegisterController::class, 'store'])
    ->middleware('guest');

// semua rout e di protect sm middleware auht
Route::middleware(['auth'])->group(function () {

    // Dashboard Routes
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Produk Routes
    Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
    Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');
    Route::get('/produk', [ProdukController::class, 'produk'])->name('produk');
    Route::get('/produk/{id}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
    Route::put('/produk/{id}', [ProdukController::class, 'update'])->name('produk.update');
    Route::delete('/produk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');
    Route::get('/produk/trashed', [ProdukController::class, 'trashed'])->name('produk.trashed');
    Route::post('/produk/{id}/restore', [ProdukController::class, 'restore'])->name('produk.restore');
    Route::delete('/produk/{id}/force-delete', [ProdukController::class, 'forceDelete'])->name('produk.forceDelete');

    // Kategori Routes
    Route::get('/kategoris', [KategoriController::class, 'kategori'])->name('kategori');
    Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
    Route::post('/kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
    Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
    Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
    Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
    Route::get('/kategori/trashed', [KategoriController::class, 'trashed'])->name('kategori.trashed');
    Route::post('/kategori/{id}/restore', [KategoriController::class, 'restore'])->name('kategori.restore');

    // Penjualan and other routes
    Route::get('penjualan', [PenjualanController::class, 'penjualan']);
    Route::get('laporan', [LaporanController::class, 'laporanKeuangan'])->name('laporan');

    // Rute untuk Manajemen Stok
    Route::get('/manajemenstok', [ProdukController::class, 'manajemenStok'])->name('manajemen.stok');
    Route::get('/manajemenstok/{id}/edit', [ProdukController::class, 'editStok'])->name('manajemen.stok.edit');
    Route::put('/manajemenstok/{id}', [ProdukController::class, 'updateStok'])->name('manajemen.stok.update');

});

// Auth Routes
require __DIR__.'/auth.php';
