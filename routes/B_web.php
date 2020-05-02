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
    Route::get('news/create', 'Admin\NewsController@add');
});

#practice03
Route::get('XXX', 'Admin\AAAController@bbb');

#practice04
Route::get('admin/news/create', 'Admin\NewsController@add');


Route::get('admin/profile/create', 'Admin\ProfileController@add');

Route::get('admin/profile/edit', 'Admin\ProfileController@edit');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
});