<?php

use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('articles', [\App\Http\Controllers\ArticleController::class, 'index'])->name('articles.index');
Route::get('articles/{id}', [\App\Http\Controllers\ArticleController::class, 'show'])->name('articles.show');

Route::get('authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('authors/{id}', [AuthorController::class, 'show'])->name('authors.show');

require __DIR__.'/auth.php';
