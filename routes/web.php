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
Route::get('/', "AllController@show");
Route::get('/', function () {
    return view('welcome');
});
Route::get('/aboutedit', 'AboutController@show');
Route::get('/albums/{id}/destroy', 'AlbumController@destroy');
Route::get('/albums/{id}/edit', 'AlbumController@edit');
Route::post('/albums/{id}/store', 'AlbumController@store');
// Route::get('/albums/create', 'AlbumController@create')->name('album.create');
// Route::post('/albums/save', 'AlbumController@save')->name('album.save');