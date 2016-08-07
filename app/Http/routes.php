<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/admin', 'Admin\IndexController@index');
    Route::get('/cham-cong', 'Admin\ChamCongController@index');
});

Route::group(['middleware' => ['web','auth']], function () {

});

Route::auth();

Route::get('/home', 'HomeController@index');

