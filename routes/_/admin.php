<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\JenisProdukController;
use App\Http\Controllers\Admin\MitraController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\ProsedurDesainController;
use App\Http\Controllers\Admin\ProsedurOrderController;
use App\Http\Controllers\Admin\ProsedurProduksiController;



Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/', [AdminController::class, 'dashboard']);

    Route::resource('admin', AdminController::class);

    Route::resource('jenis-produk', JenisProdukController::class);

    Route::resource('produk', ProdukController::class);
    Route::post('produk/store-galeri-produk', [ProdukController::class, 'storeGaleri']);
    Route::get('produk/delete-galeri/{galeri_produk}', [ProdukController::class, 'deleteGaleri']);

    Route::resource('blog', BlogController::class);
    Route::get('blog/{blog}/komentar', [BlogController::class, 'showKomentar']);
    Route::post('blog/store-balasan', [BlogController::class, 'storeBalasan']);

    Route::resource('profil', ProfilController::class);

    Route::resource('prosedur/desain', ProsedurDesainController::class);
    Route::resource('prosedur/order', ProsedurOrderController::class);
    Route::resource('prosedur/produksi', ProsedurProduksiController::class);

    Route::resource('galeri', GaleriController::class);
    Route::post('galeri/store-galeri', [GaleriController::class, 'galeri']);
    Route::get('galeri/delete-galeri/{galerigaleri}', [GaleriController::class,'galeriDelete']);

    Route::resource('mitra', MitraController::class);
});

