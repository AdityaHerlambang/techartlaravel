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

Route::get('/', 'HomeController@index')->name('index');


Route::post('/create', 'PostController@create')->name('create');

Route::get('/edit/{id}', 'PostController@edit')->name('edit');
Route::put('/update/{id}', 'PostController@update')->name('update');
