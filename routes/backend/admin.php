<?php
	Route::get('admin','admin\HomeController@index');
	Route::get('login','admin\LoginController@index');
	Route::group(['prefix'=>'admin'], function(){
		Route::group(['prefix'=>'chuyen-gia'], function(){
			Route::get('/','admin\ChuyenGiaController@index');
			Route::get('tao-moi','admin\ChuyenGiaController@new_index');
			Route::get('xoa','admin\ChuyenGiaController@delete_index');
			Route::get('sua','admin\ChuyenGiaController@edit_index');
			Route::post('tao-moi','admin\ChuyenGiaController@new_action');
			Route::post('sua','admin\ChuyenGiaController@edit_action');
		});

		Route::group(['prefix'=>'doanh-nghiep'], function(){
			Route::get('/','admin\DoanhNghiepController@index');
			Route::get('tao-moi','admin\DoanhNghiepController@new_index');
			Route::get('xoa','admin\DoanhNghiepController@delete_index');
			Route::get('sua','admin\DoanhNghiepController@edit_index');
			Route::post('tao-moi','admin\DoanhNghiepController@new_action');
			Route::post('sua','admin\DoanhNghiepController@edit_action');
		});

		Route::group(['prefix'=>'san-pham'], function(){
			Route::get('/','admin\SanPhamController@index');
			Route::get('tao-moi','admin\SanPhamController@new_index');
			Route::get('xoa','admin\SanPhamController@delete_index');
			Route::get('sua','admin\SanPhamController@edit_index');
			Route::post('tao-moi','admin\SanPhamController@new_action');
			Route::post('sua','admin\SanPhamController@edit_action');
		});

		Route::group(['prefix'=>'de-tai-du-an-cac-cap'], function(){
			Route::get('/','admin\DtDaCacCapController@index');
			Route::get('tao-moi','admin\DtDaCacCapController@new_index');
			Route::get('xoa','admin\DtDaCacCapController@delete_index');
			Route::get('sua','admin\DtDaCacCapController@edit_index');
			Route::post('tao-moi','admin\DtDaCacCapController@new_action');
			Route::post('sua','admin\DtDaCacCapController@edit_action');
		});

		Route::group(['prefix'=>'phat-minh-sang-che'], function(){
			Route::get('/','admin\PhatMinhController@index');
			Route::get('tao-moi','admin\PhatMinhController@new_index');
			Route::get('xoa','admin\PhatMinhController@delete_index');
			Route::get('sua','admin\PhatMinhController@edit_index');
			Route::post('tao-moi','admin\PhatMinhController@new_action');
			Route::post('sua','admin\PhatMinhController@edit_action');
		});
	});
?>