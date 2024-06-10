<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\MainController::class, 'home'])->name('home');

Route::resource('articles', \App\Http\Controllers\ArticleController::class);
