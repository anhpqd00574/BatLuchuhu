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

Route::group(['prefix'=>'danhmuc'], function(){

        Route::get('list', 'categoriesmanagementController@danhmuc');

        Route::get('them', 'categoriesmanagementController@getthem');
        Route::post('them', 'categoriesmanagementController@postthem');

        Route::get('xoa/{id}', 'categoriesmanagementController@xoadanhmuc');
        Route::get('sua/{id}', 'categoriesmanagementController@getsua');
        Route::post('sua/{id}','categoriesmanagementController@postsua');

    });
