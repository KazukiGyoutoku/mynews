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

Route::group(['prefix' =>'admin','middleware'=>'auth'], function(){
    Route::get('news/create','Admin\NewsController@add');
    Route::post('news/create','Admin\NewsController@create');

    
    Route::get('profile/create','Admin\ProfileController@add')->middleware('auth');
    Route::post('profile/edit','Admin\ProfileController@update')->middleware('auth');
    Route::post('profile/create','Admin\profileController@create');
    
});

    //
  
    

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
