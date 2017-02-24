<?php

Route::get('/de-tai-du-an-cac-cap','de_tai_du_an_cac_cap\SearchController@getSearch');
?>

<?php
Route::get('/chuyen-gia','chuyen_gia\SearchController@getSearch');

Route::get('/san-pham','san_pham\SearchController@getSearch');

Route::get('/phat-minh','phat_minh\SearchController@getSearch');

Route::get('/doanh-nghiep','doanh_nghiep\SearchController@getSearch');
?>