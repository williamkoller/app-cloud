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

Route::prefix('admin')->group(function() {
    Route::get('/home', ['as' => 'admin.home.list', 'uses' => 'HomeController@list']);
    Route::get('/home/create', ['as' => 'admin.home.create', 'uses' => 'HomeController@create'])->where('id', '[0-9]+');
    Route::get('/home/edit/{id}', ['as' => 'admin.home.edit', 'uses' => 'HomeController@edit'])->where('id', '[0-9]+');
    Route::post('/home/{id}', ['as' => 'admin.home.update', 'uses' => 'HomeController@update'])->where('id', '[0-9]+');
    Route::get('/home/delete/{id}', ['as' => 'admin.home.destroy', 'uses' => 'HomeController@destroy'])->where('id', '[0-9]+');
    Route::post('/home/', ['as' => 'admin.home.doCreate', 'uses' => 'HomeController@doCreate'])->where('id', '[0-9]+');
});
