<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

Route::controller(HomeController::class)->group(function () {

    Route::get('/', 'beranda');
    // Profil
    Route::get('profil', 'profil');
    // Route::get('visimisi', 'visimisi');
    // Route::get('team', 'struktur');
    // blog
    Route::get('blog', 'blog');
    Route::get('blogdetail', 'blogdetail');
    // blog
    Route::get('berita', 'berita');
    Route::get('berita-detail/{berita}', 'beritadetail');
    // Produk
    Route::get('produk/{jenis_produk}', 'show');
    // Route::get('produk/{jenis_produk}', 'view');
    Route::get('kaos', 'kaos');
    Route::get('jaket', 'jaket');
    // Cara Order
    Route::get('caraorder', 'caraorder');
    // Galery
    Route::get('galery', 'galery');
    // Route::get('bisnis', 'bisnis');

    Route::post('store-komentar', [HomeController::class, 'komen']);
    
});