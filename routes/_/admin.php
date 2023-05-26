<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::group(['middleware' => 'auth:admin'], function () {

    
});

Route::get('/',[AdminController::class, 'dashboard']);
Route::resource('/', AdminController::class);