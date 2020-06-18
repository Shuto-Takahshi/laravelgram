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

// use Illuminate\Routing\Route;

Route::get('/', 'PostsController@index');
Route::get('/posts/new', 'PostsController@new');
Route::post('/posts', 'PostsController@store');
Route::get('/postsdelete/{post_id}', 'PostsController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users/edit', 'UsersController@edit');
Route::post('/users/update', 'UsersController@update');
Route::get('/users/{user_id}', 'UsersController@show');