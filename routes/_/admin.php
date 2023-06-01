<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BeritaController;
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

    Route::resource('berita', BeritaController::class);
    Route::get('berita/{berita}/komentar', [BeritaController::class, 'showKomentar']);

    Route::resource('profil', ProfilController::class);

    Route::resource('prosedur/desain', ProsedurDesainController::class);
    Route::resource('prosedur/order', ProsedurOrderController::class);
    Route::resource('prosedur/produksi', ProsedurProduksiController::class);

    Route::resource('galeri', GaleriController::class);

    Route::resource('mitra', MitraController::class);
});

