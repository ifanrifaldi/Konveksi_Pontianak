<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::controller(HomeController::class)->group(function () {

    Route::get('beranda', 'beranda');

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