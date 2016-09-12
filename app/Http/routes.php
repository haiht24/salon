<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/admin', 'Admin\IndexController@index');
    Route::get('/cham-cong', 'Admin\ChamCongController@index');

    // API
    Route::get('/api/cham-cong/get-data', 'Admin\ChamCongController@getData');
    Route::post('/api/cham-cong/add', 'Admin\ChamCongController@add');
});

Route::group(['middleware' => ['web','auth']], function () {

});

Route::auth();

Route::get('/home', 'HomeController@index');

