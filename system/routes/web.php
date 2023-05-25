<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\AuthController;

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

Route::prefix('admin')->group(function(){
    include "_/admin.php";
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


Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'LoginProses']);
Route::get('logout', [AuthController::class, 'logout']);