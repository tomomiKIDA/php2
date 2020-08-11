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
Route::group(['prefix' => 'admin'], function() {
    Route::get('profile/create', 'ProfileController@add');
    Route::get('profile/edit', 'ProfileController@edit');
});
Route::get('admin/news/create');

Route::get('/XXX', 'AAAController@bbb');
