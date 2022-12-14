<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomepageController::class, 'index']);
Route::get('/about', [HomepageController::class, 'about']);
Route::get('/kontak', [HomepageController::class, 'kontak']);
Route::get('/kategori', [HomepageController::class, 'kategori']);
Route::get('/kategori/{id}', [HomepageController::class, 'produkperkategori']);
Route::get('/produk', [HomepageController::class, 'produk']);
Route::get('/produk/{id}', [HomepageController::class, 'produkdetail']);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/', [DashboardController::class, 'index']);
    //route kategori
    Route::group(['prefix'=>'/kategori'], function(){
      Route::get('/', [KategoriController::class, 'index'])->name('kategori.index');
      Route::get('/create', [KategoriController::class, 'create'])->name('ketegori.create');
      Route::get('/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
    });

    //route produk
    Route::group(['prefix'=>'/produk'], function(){
      Route::get('/', [ProdukController::class, 'index'])->name('produk.index');
      Route::get('/create', [ProdukController::class, 'create'])->name('produk.create');
      Route::get('/show/{id}', [ProdukController::class, 'show'])->name('produk.show');
      Route::get('/edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
    });

    //route customer
    Route::group(['prefix'=>'/customer'], function(){
      Route::get('/', [CustomerController::class, 'index'])->name('customer.index');
      Route::get('/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
    });

    //route transaksi
    Route::group(['prefix'=>'/transaksi'], function(){
      Route::get('/', [TransaksiController::class, 'index'])->name('transaksi.index');
      Route::get('/show/{id}', [TransaksiController::class, 'show'])->name('transaksi.show');
      Route::get('/edit/{id}', [TransaksiController::class, 'edit'])->name('transaksi.edit');
    });

    //route profil
    Route::group(['prefix'=>'/profil'], function(){
      Route::get('/', [UserController::class, 'index'])->name('profil.index');
      Route::get('/setting', [UserController::class, 'setting'])->name('profil.setting');
    });

    //route laporan
    Route::group(['prefix'=>'/laporan'], function(){
      Route::get('/', [LaporanController::class, 'index'])->name('laporan.index');
      Route::get('/proses', [LaporanController::class, 'proses'])->name('laporan.proses');
    });

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
