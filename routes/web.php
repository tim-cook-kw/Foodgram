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
    return view('welcome');
});

Route::get('admin', 'HomeController@admin') ->name('admin.index');

Route::get('login', 'HomeController@login') ->name('login.index');

Route::get('register', 'HomeController@register') ->name('register.index');

Route::get('homeindex', 'HomeController@index') ->name('home.index');

Route::get('homeblog', 'HomeController@blog') ->name('blog.index');

Route::get('homerecipe', 'HomeController@recipe') ->name('recipe.index');

Route::get('homesinglerecipe', 'HomeController@singlerecipe') ->name('singlerecipe.index');