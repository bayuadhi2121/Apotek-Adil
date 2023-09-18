<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\KategoriControllerAdmin;
use App\Http\Controllers\ProdukControllerAdmin;
use App\Http\Controllers\TransaksiControllerAdmin;

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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', function () {
    return view('pages.Home');
})->name('home');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::resource('/profile', ProfileController::class)->only(['index', 'show', 'edit']);
Route::resource('/produk', ProdukController::class)->only(['index', 'show', 'edit']);
Route::resource('/cart', CartController::class)->only(['index', 'show', 'edit', 'create']);
Route::resource('/detail', DetailController::class)->only(['index', 'show', 'edit']);



Route::resource('/adminProduk', ProdukControllerAdmin::class);
Route::resource('/adminTransaksi', TransaksiControllerAdmin::class)->only(['index', 'show', 'edit', 'store']);
Route::resource('/adminKategori', KategoriControllerAdmin::class)->only(['index', 'show', 'edit', 'store']);
