<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/admin', 'Admin\IndexController@index');
    Route::get('/doanh-thu', 'Admin\ChamCongController@index');
    Route::get('/cua-hang', 'Admin\CuaHangController@index');

    // API
    Route::get('/api/doanh-thu/get-data', 'Admin\ChamCongController@getData');
    Route::post('/api/doanh-thu/add', 'Admin\ChamCongController@add');
});

Route::group(['middleware' => ['web','auth']], function () {

});

Route::auth();

Route::get('/home', 'HomeController@index');

