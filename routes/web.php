<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/posts', PostController::class);

Route::post('/comments', [CommentController::class, 'store'])->name('comments.create');
Route::delete('/comments/{id}', [CommentController::class, 'destroy'])->name('comment.destroy');
