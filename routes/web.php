<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
// use App\Http\Controllers\TestController;


// Route::get('/', [TestController::class, 'index'] )->name('home');
// Route::get('about', [TestController::class, 'about'] 
// )->name('about');

Route::get('/', [PostController::class, 'index'] )->name('home');
Route::resource('posts', PostController::class);