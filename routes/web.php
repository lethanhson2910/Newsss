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
Route::get('/news','NewController@index');

Route::get('home','NewController@home');

Route::get('detail','NewController@detail');

Route::get('admin/home','AdminController@index')->name('admin.index');

Route::get('admin/listnews','AdminController@list')->name('admin.list');

Route::get('admin/post','AdminController@create')->name('admin.post');
Route::post('admin/post','AdminController@store')->name('admin.post');

Route::get('admin/edit/{id}','AdminController@edit')->name('admin.edit');

Route::post('admin/edit/{id}','AdminController@update')->name('admin.edit');

Route::get('admin/delete/{id}','AdminController@delete')->name('admin.delete');
