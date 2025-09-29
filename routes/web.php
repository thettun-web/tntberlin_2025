<?php

use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\WelcomeController;

Route::get('/',[\App\Http\Controllers\WelcomeController::class, 'index'])->name('home');

// Routes anyone can see
Route::get('articles', [\App\Http\Controllers\ArticleController::class, 'index'])->name('articles.index');
Route::get('authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('authors/{id}', [AuthorController::class, 'show'])->name('authors.show');

// This specific "create" route is now outside the group but still protected by auth middleware.
// It MUST be defined before the general "show" route
Route::get('articles/create', [\App\Http\Controllers\ArticleController::class, 'create'])->name('articles.create')->middleware('auth');

// This route MUST come after the specific "create" route.
Route::get('articles/{id}', [\App\Http\Controllers\ArticleController::class, 'show'])->name('articles.show');

// Routes only for logged-in users
Route::middleware('auth')->group(function () {
    Route::post('articles', [\App\Http\Controllers\ArticleController::class, 'store'])->name('articles.store');
    Route::get('articles/{id}/edit', [\App\Http\Controllers\ArticleController::class, 'edit'])->name('articles.edit');
    Route::put('articles/{id}', [\App\Http\Controllers\ArticleController::class, 'update'])->name('articles.update');
    Route::delete('articles/{id}', [\App\Http\Controllers\ArticleController::class, 'destroy'])->name('articles.destroy');
    Route::post('comments', [\App\Http\Controllers\CommentController::class, 'store'])->name('comment.store');
});

require __DIR__.'/auth.php';
