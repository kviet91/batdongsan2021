<?php

use Illuminate\Support\Facades\Route;

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


// HomeController index
Route::get('/', 'HomeController@index');

//ProjectController
route::get('/du-an', 'ProjectController@index')->name('indexProjects');
// single post Project
route::get('/single-post','ProjectController@singlePost')->name('singlePostProject');
// vi tri ha tang - Project
route::get('/vi-tri-ha-tang', 'ProjectController@viTriHaTang')->name('viTriHaTang');

// DanhbaController index. 

Route::get('/nha-moi-gioi', 'DanhbaController@index')->name('nhamoigioi');


//TintucController
Route::get('/tin-tuc', 'TintucController@index');
Route::get('/tin-thi-truong', 'TintucController@tinthitruong');
Route::get('/phan-tich','TintucController@phantich');
Route::get('/chinh-sach','TintucController@chinhsach');
Route::get('/quy-hoach','TintucController@quyhoach');
Route::get('/bds-the-gioi','TintucController@bdsthegioi');
Route::get('/tai-chinh-chung-khoan-bds','TintucController@taichinhbds');




//NhadatbanController -----TAI ANH
Route::get('/nha-dat-ban', 'NhadatbanController@index')->name('nha_dat_ban');
Route::get('/ban-can-ho-chung-cu', 'NhadatbanController@ban_can_ho_chung_cu')->name('ban_can_ho_chung_cu');
Route::get('/ban-nha-rieng', 'NhadatbanController@ban_nha_rieng')->name('ban_nha_rieng');
Route::get('/ban-biet-thu-lien-ke', 'NhadatbanController@ban_biet_thu')->name('ban_biet_thu');
Route::get('/ban-nha-mat-pho', 'NhadatbanController@ban_nha_mat_pho')->name('ban_nha_mat_pho');
Route::get('/ban-dat-nen-du-an', 'NhadatbanController@ban_dat_nen')->name('ban_dat_nen');
Route::get('/ban-dat', 'NhadatbanController@ban_dat')->name('ban_dat');
Route::get('/ban-trang-trai-khu-nghi-duong', 'NhadatbanController@ban_trang_trai')->name('ban_trang_trai');
Route::get('/ban-kho-nha-xuong', 'NhadatbanController@ban_kho_nha_xuong')->name('ban_kho_nha_xuong');
Route::get('/ban-loai-bat-dong-san-khac', 'NhadatbanController@bat_dong_san_khac')->name('bat_dong_san_khac');
Route::get('/nha-dat-ban-bien-hoa-city', 'NhadatbanController@bien_hoa_city')->name('bien_hoa_city');


//NhadatchothueController ----TAI ANH
Route::get('/nha-dat-cho-thue', 'NhadatchothueController@index')->name('nha_dat_cho_thue');
Route::get('/cho-thue-can-ho-chung-cu', 'NhadatchothueController@cho_thue_can_ho')->name('cho_thue_can_ho');
Route::get('/cho-thue-nha-rieng', 'NhadatchothueController@cho_thue_nha_rieng')->name('cho_thue_nha_rieng');
Route::get('/cho-thue-nha-mat-pho', 'NhadatchothueController@cho_thue_nha_mat_pho')->name('cho_thue_nha_mat_pho');
Route::get('/cho-thue-nha-tro-phong-tro', 'NhadatchothueController@cho_thue_nha_tro')->name('cho_thue_nha_tro');
Route::get('/cho-thue-van-phong', 'NhadatchothueController@cho_thue_van_phong')->name('cho_thue_van_phong');
Route::get('/cho-thue-cua-hang-ki-ot', 'NhadatchothueController@cho_thue_cua_hang')->name('cho_thue_cua_hang');
Route::get('/cho-thue-kho-nha-xuong-dat', 'NhadatchothueController@cho_thue_nha_kho')->name('cho_thue_nha_kho');
Route::get('/cho-thue-loai-bat-dong-san-khac', 'NhadatchothueController@cho_thue_bds_khac')->name('cho_thue_bds_khac');



//singlepost (chưa sửa được redirect)
Route::get('/nha-moi-gioi cong-ty-tnhh-dich-vu-bds-giga-real', 'DanhbaController@singlepost1');

//Doanh nghiep
Route::get('/doanh-nghiep', 'DanhbaController@index1')->name('doanhnghiep');

//Noi-ngoaithat
Route::get('/noi-ngoai-that', 'NoingoaithatController@index');

//Canmuacanthue route

Route::get('/can-mua-can-thue', 'BuyerSellerController@index')->name('buyerseller');
Route::get('/nha-dat-can-thue', 'BuyerSellerController@seller')->name('seller');
Route::get('/nha-dat-can-mua', 'BuyerSellerController@buyer')->name('buyer');


//Phong Thuy
Route::get('/phong-thuy', 'PhongThuyController@index')->name('phongthuy');
Route::get('/phong-thuy-toan-canh', 'PhongThuyController@index1')->name('phongthuytoancanh');
Route::get('/tu-van-phong-thuy', 'PhongThuyController@index2')->name('tuvanphongthuy');
Route::get('/phong-thuy-nha-o', 'PhongThuyController@index3')->name('phongthuynhao');
Route::get('/phong-thuy-van-phong', 'PhongThuyController@index4')->name('phongthuyvanphong');
Route::get('/phong-thuy-theo-tuoi', 'PhongThuyController@index5')->name('phongthuytheotuoi');

