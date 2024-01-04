<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\DetailControllerAdmin;
use App\Http\Controllers\KategoriControllerAdmin;
use App\Http\Controllers\ProdukControllerAdmin;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\ResepControllerAdmin;
use App\Http\Controllers\TransaksiControllerAdmin;
use App\Http\Controllers\UserController;

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
    return view('pages.Home');
})->name('home');

Route::resource('/login', UserController::class)->only(['index', 'show', 'edit', 'store']);

Route::resource('/produk', ProdukController::class)->only(['index', 'show', 'edit', 'store']);
Route::resource('/detail', DetailController::class)->only(['index', 'show', 'edit', 'store'])->parameters(['detail' => 'slug']);
Route::post('/auth', [UserController::class, 'authenticate'])->name('authenticate');
Route::get('/register', [UserController::class, 'register'])->name('register');


Route::group(['middleware' => ['admin']], function () {
    Route::resource('/adminProduk', ProdukControllerAdmin::class);
    Route::resource('/adminTransaksi', TransaksiControllerAdmin::class)->only(['index', 'show', 'edit', 'store']);
    Route::resource('/adminKategori', KategoriControllerAdmin::class)->only(['index', 'show', 'edit', 'store']);
    Route::resource('/adminResep', ResepControllerAdmin::class)->only(['index', 'show', 'update', 'store', 'destroy']);
    Route::resource('/adminDetail', DetailControllerAdmin::class)->only(['edit']);
});
Route::group(['middleware' => ['auth']], function () {
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    Route::resource('/cart', CartController::class)->only(['index', 'show', 'edit', 'store', 'destroy']);
    Route::resource('/resep', ResepController::class)->only(['index', 'show', 'edit', 'store']);
    Route::resource('/profile', ProfileController::class)->only(['update', 'index']);
});

Route::get('generate', function () {
    \Illuminate\Support\Facades\Artisan::call('storage:link');
    echo 'ok';
});
