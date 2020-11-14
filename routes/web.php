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

Route::get('/', function () {
    return view('welcome');
});
// HomeController index
Route::get('/index', 'HomeController@index');

//ProjectController
route::get('/du-an', 'ProjectController@index')->name('indexProjects');
// single post Project
route::get('/single-post','ProjectController@singlePost')->name('singlePostProject');

// DanhbaController index. 

Route::get('/nha-moi-gioi', 'DanhbaController@index');



Route::get('/tin-tuc', 'TintucController@index');

//NhadatbanController -----TAI ANH
Route::get('/nha-dat-ban', 'NhadatbanController@index');
Route::get('/ban-can-ho-chung-cu', 'NhadatbanController@ban_can_ho_chung_cu');
Route::get('/ban-nha-rieng', 'NhadatbanController@ban_nha_rieng');
Route::get('/ban-biet-thu-lien-ke', 'NhadatbanController@ban_biet_thu');
Route::get('/ban-nha-mat-pho', 'NhadatbanController@ban_nha_mat_pho');
Route::get('/ban-dat-nen-du-an', 'NhadatbanController@ban_dat_nen');
Route::get('/ban-dat', 'NhadatbanController@ban_dat');
Route::get('/ban-trang-trai-khu-nghi-duong', 'NhadatbanController@ban_trang_trai');
Route::get('/ban-kho-nha-xuong', 'NhadatbanController@ban_kho_nha_xuong');
Route::get('/ban-loai-bat-dong-san-khac', 'NhadatbanController@bat_dong_san_khac');

//NhadatchothueController ----TAI ANH
Route::get('/nha-dat-cho-thue', 'NhadatchothueController@index');
Route::get('/cho-thue-can-ho-chung-cu', 'NhadatchothueController@cho_thue_can_ho');
Route::get('/cho-thue-nha-rieng', 'NhadatchothueController@cho_thue_nha_rieng');
Route::get('/cho-thue-nha-mat-pho', 'NhadatchothueController@cho_thue_nha_mat_pho');
Route::get('/cho-thue-nha-tro-phong-tro', 'NhadatchothueController@cho_thue_nha_tro');
Route::get('/cho-thue-van-phong', 'NhadatchothueController@cho_thue_van_phong');
Route::get('/cho-thue-cua-hang-ki-ot', 'NhadatchothueController@cho_thue_cua_hang');
Route::get('/cho-thue-kho-nha-xuong-dat', 'NhadatchothueController@cho_thue_nha_kho');
Route::get('/cho-thue-loai-bat-dong-san-khac', 'NhadatchothueController@cho_thue_bds_khac');



//singlepost (chưa sửa được redirect)
Route::get('/nha-moi-gioi cong-ty-tnhh-dich-vu-bds-giga-real', 'DanhbaController@singlepost1');

//Doanh nghiep
Route::get('/doanh-nghiep', 'DanhbaController@index1');

//Noi-ngoaithat
Route::get('/noi-ngoai-that', 'NoingoaithatController@index');

//Canmuacanthue route
Route::get('/can-mua-can-thue', 'BuyerSellerController@index')->name('buyerseller');
Route::get('/nha-dat-can-thue', 'BuyerSellerController@seller')->name('seller');

