<?php

use Illuminate\Support\Facades\Route;

/* Article Controller */
Route::get('/', 'ArticleController@index');

Route::get('/articles', 'ArticleController@index');

Route::get('articles/detail/{id}', 'ArticleController@detail');

Route::get('/articles/add', 'ArticleController@add');

Route::post('/articles/add', 'ArticleController@create');

Route::get('/articles/delete/{id}', 'ArticleController@delete');


Route::get('/products', 'Product\ProductController@index');

Route::post('/comments/add', 'CommentController@create');
Route::get('/comments/delete/{id}', 'CommentController@delete');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');