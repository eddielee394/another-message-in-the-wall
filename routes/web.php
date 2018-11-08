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

//Auth Routes
Auth::routes(['verify' => true]);

//Resource Routes
Route::resource('posts', 'PostsController');

//View Routes
Route::get('/dashboard', 'DashboardController@index')->middleware('verified');
