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

Route::name('home')->get('/', 'HomeController@index');
Route::name('show')->get('file/{id}', 'HomeController@show')->where(['id','[0-9]+']);
Route::name('download')->get('file/{id}/download', 'HomeController@download')->where(['id','[0-9]+']);;
Route::name('create')->get('create', 'HomeController@create');
Route::name('store')->post('store', 'HomeController@store');