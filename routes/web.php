<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::prefix('/products')->controller(ProductController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::get('/{name}', 'show');    
});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'welcome']);