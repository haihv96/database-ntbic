<?php
	// $db_connect = new mysqli('localhost','root','hoanghai','ntbic');
	// if(!$db_connect){
	// 	echo "lỗi kết nối cơ sở dữ liệu";
	// }
	// $web = 'http://evatruyen.com/';
	// $tmp = $db_connect->query("SET NAMES 'UTF8'");
	// $tmp = $db_connect->query("SET character_set_client=utf8");
	// $tmp = $db_connect->query("SET character_set_connection=utf8");
	// date_default_timezone_set('Asia/Ho_Chi_Minh');

	// $result = $db_connect->query("SELECT * FROM doanh_nghiep_khcn");
	// $list_tinh = array();
	// while($tmp = $result->fetch_array(MYSQLI_ASSOC)){
	// 	if(!file_exists(substr($tmp['logo'],1))){
	// 		$id = $tmp['id'];
	// 		$db_connect->query("UPDATE doanh_nghiep_khcn SET logo='/storage/app/public/media/doanh-nghiep/default.jpg' WHERE id='$id'");
	// 	}
	// }
?>
 <?php
	$db_connect = new mysqli('localhost','root','hoanghai','ntbic');
	if(!$db_connect){
		echo "lỗi kết nối cơ sở dữ liệu";
	}
	$web = 'http://evatruyen.com/';
	$tmp = $db_connect->query("SET NAMES 'UTF8'");
	$tmp = $db_connect->query("SET character_set_client=utf8");
	$tmp = $db_connect->query("SET character_set_connection=utf8");
	date_default_timezone_set('Asia/Ho_Chi_Minh');

	$result = $db_connect->query("SELECT * FROM chuyen_gia_khcn");
	$list_tinh = array();
	while($tmp = $result->fetch_array(MYSQLI_ASSOC)){
		$co_quan = $tmp['co_quan'];
		$pos = strpos($co_quan,'. ');
		$id = $tmp['id'];

		$co_quan_cong_tac = substr($co_quan,0,$pos);
		$dia_chi_co_quan = substr($co_quan,$pos+2);
		// $link_anh = substr(
		// $mo_ta,
		// strpos($mo_ta,'/storage/app/public/media/spkhcn/'),
		// strpos($mo_ta,'" style=') - strpos($mo_ta,'/storage/app/public/media/spkhcn/'));
		$db_connect->query("UPDATE chuyen_gia_khcn SET co_quan='$co_quan_cong_tac', dia_chi_co_quan='$dia_chi_co_quan' WHERE id='$id'");
	}
?>
