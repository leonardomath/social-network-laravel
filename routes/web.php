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

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
})->name('login');

Route::post('/signup', 'UserController@postSignUp')->name('signup');

Route::post('/signin', 'UserController@postSignIn')->name('signin');

Route::get('/logout', 'UserController@getLogout')->name('logout');

Route::get('/dashboard', 'PostController@getDashboard')->middleware('auth')->name('dashboard');

Route::post('/createpost', 'PostController@postCreatePost')->name('post.create')->middleware('auth');

Route::get('/delete-post/{post_id}', 'PostController@getDeletePost')->name('post.delete')->middleware('auth');