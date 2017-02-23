<?php

namespace App\Http\Controllers\de_tai_du_an_cac_cap;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\de_tai_du_an_cac_cap;

class SearchController extends Controller
{
	public function getSearch(Request $request) {
		/*Truyền vào text và các option*/
		$text_search = $request->text_search;
		$tim_theo = $request->tim_theo;
		$linh_vuc_khcn = $request->linh_vuc_khcn;
		$chuyen_nganh = $request->chuyen_nganh;
		$tinh_thanh_pho = $request->tinh_thanh_pho;
		$chuc_danh = $request->chuc_danh;

		/*
			Tìm theo: Truyền vào 1 số nguyên
			1: Tên đề tài, đề án
			2: CNĐT, Tác giả
			3: Mã số, ký hiệu
			4: Cơ quan chủ trì
			5: Tóm tắt nội dung 
		*/
		if($tim_theo == 1) {
			$result = de_tai_du_an_cac_cap::where('ten_de_tai','LIKE','%'.$text_search.'%')->get();
		} else if ($tim_theo == 2) {
			$result = de_tai_du_an_cac_cap::where('chu_nhiem_detai','LIKE','%'.$text_search.'%')->get();
		} else if ($tim_theo == 3) {
			$result = de_tai_du_an_cac_cap::where('maso_kyhieu','LIKE','%'.$text_search.'%')->get();
		} else if ($tim_theo == 4) {
			$result = de_tai_du_an_cac_cap::where('co_quan','LIKE','%'.$text_search.'%')->get();
		} else if ($tim_theo == 5) {
			$result = de_tai_du_an_cac_cap::where('mota_chung','LIKE','%'.$text_search.'%')->get();
		} else {
			$result = de_tai_du_an_cac_cap::where('ten_de_tai','LIKE','%'.$text_search.'%')->orWhere('chu_nhiem_detai','LIKE','%'.$text_search.'%')->orWhere('maso_kyhieu','LIKE','%'.$text_search.'%')->orWhere('co_quan','LIKE','%'.$text_search.'%')->orWhere('mota_chung','LIKE','%'.$text_search.'%')->orWhere('diem_noi_bat','LIKE','%'.$text_search.'%')->orWhere('mota_quytrinh_chuyengiao','LIKE','%'.$text_search.'%')->get();
		}

		/*
			Tìm theo chuyên ngành: Truyền vào 1 số nguyên ứng với id trong bảng chuyen_nganh_khcn
		*/
		if($chuyen_nganh != 0) {
			$result = $result->where('chuyen_nganh_khcn',$chuyen_nganh);
		}

		
		return $result;
	}
}