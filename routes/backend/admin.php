<?php
	Route::get('admin','admin\HomeController@index');
	Route::group(['prefix'=>'admin'], function(){
		Route::group(['prefix'=>'chuyen-gia'], function(){
			Route::get('/','admin\ChuyenGiaController@index');
			Route::get('tao-moi','admin\ChuyenGiaController@new');
			Route::get('xoa','admin\ChuyenGiaController@delete');
			Route::get('sua','admin\ChuyenGiaController@edit');
		});

		Route::group(['prefix'=>'doanh-nghiep'], function(){
			Route::get('/','admin\DoanhNghiepController@index');
			Route::get('tao-moi','admin\DoanhNghiepController@new');
			Route::get('xoa','admin\DoanhNghiepController@delete');
			Route::get('sua','admin\DoanhNghiepController@edit');
		});

		Route::group(['prefix'=>'san-pham'], function(){
			Route::get('/','admin\SanPhamController@index');
			Route::get('tao-moi','admin\SanPhamController@new');
			Route::get('xoa','admin\SanPhamController@delete');
			Route::get('sua','admin\SanPhamController@edit');
		});

		Route::group(['prefix'=>'de-tai-du-an-cac-cap'], function(){
			Route::get('/','admin\DtDaCacCapController@index');
			Route::get('tao-moi','admin\DtDaCacCapController@new');
			Route::get('xoa','admin\DtDaCacCapController@delete');
			Route::get('sua','admin\DtDaCacCapController@edit');
		});

		Route::group(['prefix'=>'phat-minh-sang-che'], function(){
			Route::get('/','admin\PhatMinhController@index');
			Route::get('tao-moi','admin\PhatMinhController@new');
			Route::get('xoa','admin\PhatMinhController@delete');
			Route::get('sua','admin\PhatMinhController@edit');
		});
	});
?>