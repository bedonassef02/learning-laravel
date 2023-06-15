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


Route::group([
    'prefix' => 'posts',
    'namespace' => '\App\Http\Controllers',
], function () {
    Route::get('create', 'PostController@create');
    Route::post('store', 'PostController@store')->name('posts.store');
    Route::get('/', 'PostController@index')->name('posts.index');
    Route::get('{id}/edit', 'PostController@edit')->name('posts.edit');
    Route::put('{id}/update', 'PostController@update')->name('posts.update');
    Route::delete('{id}/delete', 'PostController@destroy')->name('posts.destroy');
    Route::get('/archive', 'PostController@archive')->name('posts.archive');
});
