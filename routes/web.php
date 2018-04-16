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

// quản lí trang admin
Route::get('admin/dangnhap','UserController@getdangnhapAdmin');
Route::post('admin/dangnhap','UserController@postdangnhapAdmin');

// logout
Route::get('admin/logout','UserController@getDangXuatAdmin');

// tạo route cho admin
Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
	Route::get('droadboad','HomeController@charts');
	Route::group(['prefix'=>'user'],function(){
		Route::get('danhsach','UserController@getdanhsach');
		Route::get('sua/{id}','UserController@getSua');
		Route::post('sua/{id}','UserController@postSua');
		Route::get('them','UserController@getThem');
		Route::post('them',['as' => 'them','uses' => 'UserController@postThem']);
		Route::get('xoa/{id}','UserController@getXoa');
	});
	Route::group(['prefix'=>'post'],function(){
		Route::get('danhsach','PostController@getdanhsach');
		Route::get('sua/{id}','PostController@getSua');
		Route::post('sua/{id}','PostController@postSua');
		Route::get('them','PostController@getThem');
		Route::post('them',['as' => 'them','uses' => 'PostController@postThem']);
		Route::get('xoa/{id}','PostController@getXoa');

	});
	Route::group(['prefix'=>'category'],function(){
		Route::get('danhsach','CategoryController@getdanhsach');
		Route::get('sua/{id}','CategoryController@getSua');
		Route::post('sua/{id}','CategoryController@postSua');
		Route::get('them','CategoryController@getThem');
		Route::post('them',['as' => 'them','uses' => 'CategoryController@postThem']);
		Route::get('xoa/{id}','CategoryController@getXoa');

	});
	// Route::group(['prefix'=>'ajax'],function(){
	// 	Route::get('loaitin/{idTheLoai}','AjaxController@getLoaiTin');
	// });
});


// nhà tuyển dụng
Route::get('dangkyntd','RecruitersController@getdangkyntd');
Route::post('dangkyntd','RecruitersController@postdangkyntd');
Route::group(['prefix'=>'nhatuyendung'],function(){
	Route::get('trangchu','RecruitersController@trangchu');

	Route::get('loaitin/{id}/{TenKhongDau}.html','RecruitersController@loaitin');
	Route::get('tintuc/{id}/{TenKhongDau}.html','RecruitersController@tintuc');

	Route::get('dangnhap','RecruitersController@getdangnhap');
	Route::post('dangnhap','RecruitersController@postdangnhap');

	Route::get('dangxuat','RecruitersController@dangxuat');
	Route::get('dangxuatAll','RecruitersController@dangxuatAll');

// quản lí người dùng
	Route::get('thongtin','RecruitersController@getthongtin');
	Route::post('thongtin','RecruitersController@postthongtin');

//dang ký
	Route::get('dangky','RecruitersController@getdangky');
	Route::post('dangky','RecruitersController@postdangky');

	Route::get('danhsach','RecruitersController@danhsach');
	Route::get('baipost/{id}.html','RecruitersController@baipost');

	Route::get('them','RecruitersController@getThem');
	Route::post('them','RecruitersController@postThem');

	Route::get('sua/{id}','RecruitersController@getSua');
	Route::post('sua/{id}','RecruitersController@postSua');

	Route::get('xoa/{id}','RecruitersController@xoa');

	Route::get('danhsachcv','RecruimentController@danhsachcv');

	Route::get('xemcv/{id}','RecruimentController@xemcv');
	Route::get('chapnhancv/{iduser}/{idcv}','RecruimentController@chapnhancv');
//tìm kiếm
	Route::post('timkiem','RecruitersController@timkiem');
});