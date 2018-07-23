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

Route::get('/', 'ArticlesController@index')->name('index');

Route::get('/article/{article}', 'ArticlesController@show')->name('article');

Route::get('/article/{article}/edit', 'ArticlesController@edit')->name('edit');

Route::get('/articles/create', 'ArticlesController@create')->name('create');

Route::post('/', 'ArticlesController@store')->name('store');

Route::put('/article/{article}', 'ArticlesController@update')->name('update');

Route::delete('/article/{article}', 'ArticlesController@destroy')->name('delete');




Auth::routes();




