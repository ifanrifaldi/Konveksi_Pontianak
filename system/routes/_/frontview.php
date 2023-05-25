<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::controller(HomeController::class)->group(function () {

    Route::get('/', 'beranda');
    // Profil
    Route::get('visimisi', 'visimisi');
    Route::get('team', 'struktur');
    // blog
    Route::get('blog', 'blog');
    Route::get('blogdetail', 'blogdetail');
    // Produk
    Route::get('kemeja', 'kemeja');
    Route::get('kaos', 'kaos');
    Route::get('jaket', 'jaket');
    Route::get('caraorder', 'caraorder');
    // Route::get('bisnis', 'bisnis');
});