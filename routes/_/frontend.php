<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

Route::controller(HomeController::class)->group(function () {

    Route::get('/', 'beranda');
    // Profil
    Route::get('visimisi', 'visimisi');
    Route::get('team', 'struktur');
    // blog
    Route::get('blog', 'blog');
    Route::get('blogdetail', 'blogdetail');
    // blog
    Route::get('berita', 'berita');
    Route::get('beritadetail/{berita}', 'beritadetail');
    // Produk
    Route::get('kemeja', 'kemeja');
    Route::get('kaos', 'kaos');
    Route::get('jaket', 'jaket');
    // Cara Order
    Route::get('caraorder', 'caraorder');
    // Galery
    Route::get('galery', 'galery');
    // Route::get('bisnis', 'bisnis');
});