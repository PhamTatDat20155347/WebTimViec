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

// trang chủ
Route::get('trangchu','PagesController@getTrangchu');
Route::get('gioithieu','PagesController@gioithieu');
Route::get('lienhe','PagesController@lienhe');
// đăng nhập
Route::get('dangnhap','PagesController@getDangnhap');
Route::post('dangnhap','PagesController@postDangnhap');
Route::post('dangnhap/{id}','PagesController@dangnhap2');
Route::get('xembaidang/{id}.html','PagesController@xembaidang');
Route::post('guicv/{id}','PagesController@guicv');
//đăng xuất
Route::get('baidangcongty/{id}','PagesController@baidangcongty');
Route::get('tatcavieclam','PagesController@tatcavieclam');

Route::get('dangxuat','PagesController@dangxuat');

Route::post('timkiem','PagesController@timkiem');
//dang ký
Route::get('dangky','PagesController@getdangky');
Route::post('dangky','PagesController@postdangky');

Route::post('themhoso','PagesController@posttaohoso')->name('themhoso');
// quản lí thông tin cá nhân
Route::get('hosocanhan','PagesController@getHosocanhan');
Route::post('hosocanhan','PagesController@postHosocanhan');

// hồ sơ -cv
Route::get('hosoxinviec','PagesController@getHosoxinviec');
Route::post('hosoxinviec','PagesController@postHosoxinviec');

Route::get('test','RecruitersController@getTest');
