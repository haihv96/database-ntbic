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
//Route::get('hihi','de_tai_du_an_cac_cap\DetailController@a');
Route::group(['prefix' => 'projects'],function () {
    Route::get('query1',function () {
        $data = DB::table('de_tai_du_an_cac_cap')->where('id',1)->get();
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    });
});
//Route::get('some','Panel\PanelControllder@a');
//Route::get('hihi','Auth\ResetPasswordController@a');