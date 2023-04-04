<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/kategori', function () {
//     return view('kategori');
// })->middleware(['auth', 'verified'])->name('kategori');

Route::get('/kategori',[KategoriController::class, 'index'])->middleware(['auth', 'verified'])->name('kategori');

Route::get('/kategori/createkategori', function () {
    return view('createkategori');
})->middleware(['auth', 'verified'])->name('createkategori');

Route::post('/simpankategori', [KategoriController::class, 'simpan'])->middleware(['auth', 'verified']);

Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);

Route::post('/kategori/update/{id}', [KategoriController::class, 'update']);

Route::post('/kategori/delete/{id}', [KategoriController::class, 'destroy']);

// Route::get('/produk', function () {
//     return view('produk');
// })->middleware(['auth', 'verified'])->name('produk');

Route::get('/produk',[ProdukController::class, 'index'])->middleware(['auth', 'verified'])->name('produk');

// Route::get('/produk/createproduk', function () {
//     return view('createproduk');
// })->middleware(['auth', 'verified'])->name('createproduk');

Route::get('/createproduk', [ProdukController::class, 'create'])->middleware(['auth', 'verified'])->name('createproduk');

Route::post('/simpanproduk', [ProdukController::class, 'simpan'])->middleware(['auth', 'verified']);

Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);

Route::post('/produk/update/{id}', [ProdukController::class, 'update']);

Route::post('/produk/delete/{id}', [ProdukController::class, 'destroy']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
