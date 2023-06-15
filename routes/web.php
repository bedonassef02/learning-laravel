<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(\App\Http\Controllers\PostController::class)->group(function () {
    Route::get('posts/create', [\App\Http\Controllers\PostController::class, 'create']);
//Route::post('posts/store', [\App\Http\Controllers\PostController::class, 'store']);
    Route::post('posts/store', [\App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
    Route::get('posts', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
    Route::get('posts/{id}/edit', [\App\Http\Controllers\PostController::class, 'edit'])->name('posts.edit');
    Route::put('posts/{id}/update', [\App\Http\Controllers\PostController::class, 'update'])->name('posts.update');
    Route::delete('posts/{id}/delete', [\App\Http\Controllers\PostController::class, 'destroy'])->name('posts.destroy');
});
