<?php

Route::group(['middleware' => ['web']], function () {

});

Route::group(['middleware' => ['web','auth']], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/dashboard', 'Admin\DashboardController@index');
    Route::get('/admin', 'Admin\IndexController@index');

    Route::get('/doanh-thu', 'Admin\ChamCongController@index');
    Route::post('/doanh-thu/add', 'Admin\ChamCongController@add');
    Route::post('/doanh-thu/add-home', 'Admin\ChamCongController@addHome');

    Route::get('/cua-hang', 'Admin\CuaHangController@index');
    Route::post('/cua-hang/add', 'Admin\CuaHangController@add');

    Route::get('/nhan-vien', 'Admin\NhanVienController@index');
    Route::post('/nhan-vien/add', 'Admin\NhanVienController@add');

    Route::get('/dich-vu', 'Admin\DichVuController@index');
    Route::post('/dich-vu/add', 'Admin\DichVuController@add');

    Route::get('/san-pham', 'Admin\SanPhamController@index');
    Route::post('/san-pham/add', 'Admin\SanPhamController@add');

    // API
//    Route::get('/api/doanh-thu/get-data', 'Admin\ChamCongController@getData');
//    Route::post('/api/doanh-thu/add', 'Admin\ChamCongController@add');
});

Route::auth();

Route::get('/home', 'HomeController@index');

