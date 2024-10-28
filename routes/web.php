<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TodoController;

use Illuminate\Support\Facades\Route;
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [ArticleController::class, 'home'])->name('home');
    Route::get('/create', [ArticleController::class, 'create']);
    Route::post('/create', [ArticleController::class, 'store']);
    Route::get('/{article}/edit', [ArticleController::class, 'edit']);
    Route::put('/{article}/edit', [ArticleController::class, 'update']);
    Route::delete('/{article}', [ArticleController::class, 'delete']);
    Route::get('/about', [ArticleController::class, 'about'])->name('about');
    Route::get('/upload', [ArticleController::class,'uploadForm'])->name(    'upload');
    Route::post('/upload', [ArticleController::class,'upload'])->name(    'upload-img');
    Route::fallback(function () {
        return '<h1>page not found!</h1>';
    });
   
});

// todos
Route::group(['prefix'=> 'todo'], function () {

    Route::get('/', [TodoController::class,'todo'])->name('todo');
    Route::get('/create', [TodoController::class,'create' ])->name('create-todo');
    Route::post('/create', [TodoController::class, 'store'])->name('create');


});


