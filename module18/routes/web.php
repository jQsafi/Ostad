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
Route::delete('/posts/{id}/delete', 'PostController@delete');
Route::get('/posts', function () {
    return view('posts');
});
Route::get('/categories/{id}/posts', 'PostController@postsByCategory');
Route::get('/latest-posts-by-category', function () {
    return view('latest-posts-by-category');
});