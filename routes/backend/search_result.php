<?php

Route::get('/de-tai-du-an-cac-cap','de_tai_du_an_cac_cap\SearchController@getSearch');
?>

<?php
Route::get('/san-pham', function() {
	return view('search_result.san_pham');
});

Route::post('/san-pham','san_pham\SearchController@getSearch');

Route::get('/bang-phat-minh', function() {
	return view('search_result.test_bang_phat_minh');
});

Route::post('/bang-phat-minh','phat_minh\SearchController@getSearch');

Route::get('/doanh-nghiep', function() {
	return view('search_result.test_doanh_nghiep');
});

Route::post('/doanh-nghiep','doanh_nghiep\SearchController@getSearch');
?>