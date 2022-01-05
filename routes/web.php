<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// global
Auth::routes();
Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
Route::get('/user-menu', [App\Http\Controllers\UserController::class, 'menu'])->name('user.menu');
Route::get('/about', [App\Http\Controllers\UserController::class, 'about'])->name('user.about');
Route::get('/contact', [App\Http\Controllers\UserController::class, 'contact'])->name('user.contact');

// user
Route::middleware('auth')->group(function () {
    Route::get('/shop', [App\Http\Controllers\UserController::class, 'shop'])->name('user.shop');
    Route::post('/shop', [App\Http\Controllers\PesananController::class, 'store'])->name('shop.store');
});



// admin
Route::middleware('is_admin')->group(function () {
    Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.index');
    Route::resource('admin/menu', App\Http\Controllers\MenuController::class);
});