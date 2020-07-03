<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',function (){
    return view('auth/login', ['title' => 'Sigadget']);
});

Auth::routes();
Route::get('/main', 'PhotosController@index');
//routes category
Route::get('/home', 'HomeController@index');
Route::get('/category', 'CategoryController@index');
Route::get('/category/create', 'CategoryController@create');
Route::post('/category', 'CategoryController@store');
Route::get('/category/{id}/edit', 'CategoryController@edit');
Route::patch('/category/{id}', 'CategoryController@update');
Route::delete('/category/{id}', 'CategoryController@destroy');

//routes post
Route::get('/post', 'PostController@index');
Route::get('/post/create', 'PostController@create');
Route::post('/post', 'PostController@store');
Route::get('/post/{id}/edit', 'PostController@edit');
Route::patch('/post/{id}', 'PostController@update');
Route::delete('/post/{id}', 'PostController@destroy');

//routes photos
Route::get('/photos', 'PhotosController@index');
Route::get('/photos/create', 'PhotosController@create');
Route::post('/photos', 'PhotosController@store');
Route::get('/photos/{id}/edit', 'PhotosController@edit');
Route::patch('/photos/{id}', 'PhotosController@update');
Route::delete('/photos/{id}', 'PhotosController@destroy');

//routes album
Route::get('/album', 'AlbumController@index');
Route::get('/album/create', 'AlbumController@create');
Route::post('/album', 'AlbumController@store');
Route::get('/album/{id}/edit', 'AlbumController@edit');
Route::patch('/album/{id}', 'AlbumController@update');
Route::delete('/album/{id}', 'AlbumController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
