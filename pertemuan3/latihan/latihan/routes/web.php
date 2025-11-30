<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Contoh route untuk menampilkan view welcome
Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/about', function () {
    return view('about');
});
