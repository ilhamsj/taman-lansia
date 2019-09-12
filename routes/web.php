<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome')->with([
        'items' => \App\Article::all()
    ]);
})->name('/');

Route::resource('blog', 'BlogController');
Route::resource('user', 'UserController');
Route::resource('admin', 'AdminController');
Route::resource('article', 'ArticleController');
