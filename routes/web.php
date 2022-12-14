<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\KategoriController;
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

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', [DashboardController::class, 'index']);
    //route kategori
    Route::group(['prefix'=>'/kategori'], function(){
      Route::get('/', [KategoriController::class, 'index'])->name('kategori.index');
      Route::get('/create', [KategoriController::class, 'create'])->name('ketegori.create');
      Route::get('/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');

  });

});
