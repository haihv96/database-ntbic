<?php

namespace App\Http\Controllers\san_pham;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\san_pham;
use App\linh_vuc_san_pham;

class SearchController extends Controller
{
	public function getSearch(Request $request) {
		/*Truyền vào text và các option*/
		$text_search = $request->text_search;
		$tim_theo = $request->tim_theo;
		$linh_vuc_khcn = $request->linh_vuc_khcn;

		/*
			Tìm theo: truyền vào 1 số nguyên
			1: Tên sản phẩm, ứng dụng
			2: Khả năng ứng dụng
			3: Mô tả sản phẩm
		*/
		if($tim_theo == 0) {
			$result = san_pham::where('ten_san_pham', 'LIKE', '%'.$text_search.'%')->get();
		} else if ($tim_theo == 1) {
			$result = san_pham::where('kha_nang_ung_dung', 'LIKE', '%'.$text_search.'%')->get();
		} else if ($tim_theo == 2) {
			$result = san_pham::where('mo_ta_chung', 'LIKE', '%'.$text_search.'%')->get();
		} else {
			$result = san_pham::where('ten_san_pham', 'LIKE', '%'.$text_search.'%')->orWhere('kha_nang_ung_dung', 'LIKE', '%'.$text_search.'%')->orWhere('mo_ta_chung', 'LIKE', '%'.$text_search.'%')->orWhere('dac_diem_noi_bat', 'LIKE', '%'.$text_search.'%')->get();
		}

		/*
			Tìm theo lĩnh vực KHCN: Truyền vào 1 số nguyên ứng với id lĩnh vực trong bảng linh_vuc_san_pham
		*/
		if ($linh_vuc_khcn != 0) {
			$result = $result->where('linh_vuc',$linh_vuc_khcn);
		}

		return $result;
	}
}