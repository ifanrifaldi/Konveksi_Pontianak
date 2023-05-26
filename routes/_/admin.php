<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\JenisProdukController;
use App\Http\Controllers\Admin\ProdukController;

Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/', [AdminController::class, 'dashboard']);

    Route::resource('admin', AdminController::class);

    Route::resource('jenis-produk', JenisProdukController::class);

    Route::resource('produk', ProdukController::class);

    Route::resource('berita', BeritaController::class);
});

