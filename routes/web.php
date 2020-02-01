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

Route::get('/','UserController@index')->name('user.home');

//Admin  Route

Route::group(['prefix'=>'backend'],function (){
    Route::get('/','AdminController@home')->name('admin.home');\
    Route::get('details','DetailsController@index')->name('admin.details.index');
    Route::post('addDetails','DetailsController@addDetails')->name('admin.details.add');
});
