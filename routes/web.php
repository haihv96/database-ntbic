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
    return view('home');
});
include_once 'backend/search_result.php';
include_once 'backend/detail.php';
include_once 'backend/admin.php';
Route::get('detailschuyengia', function () {
    return view('details.chuyen_gia');
});
Route::get('detailsdetaiduancaccap', function () {
    return view('details.de_tai_du_an_cac_cap');
});
Route::get('detailsphatminhsangche', function () {
    return view('details.phat_minh_sang_che');
});
Route::get('detailssanpham', function () {
    return view('details.san_pham');
});
Route::get('detailsdoanhnghiep', function () {
    return view('details.doanh_nghiep');
});