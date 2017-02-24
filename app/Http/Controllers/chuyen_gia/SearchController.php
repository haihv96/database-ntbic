<?php

namespace App\Http\Controllers\chuyen_gia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\chuyen_gia_khcn;

class SearchController extends Controller
{
	public function getSearch(Request $request) {
		/*Truyền vào text và các option*/
		$text_search = $request->text_search;
		$tim_theo = $request->tim_theo;
		$linh_vuc_khcn = $request->linh_vuc_khcn;
		$chuc_danh = $request->chuc_danh;

		/*
			Tìm theo: Truyền vào 1 số nguyên
			1: Tên nhà KH
			2: Lĩnh vực nghiên cứu
			3: Hướng nghiên cứu
			4: Cơ quan công tác
		*/
		if ($tim_theo == 1) {
			$result = chuyen_gia_khcn::where('ho_va_ten','LIKE','%'.$text_search.'%')->select('link_anh','ho_va_ten','hoc_vi','co_quan','chuyen_nganh','tinh_thanh')->get();
		} else if ($tim_theo == 2) {
			$result = chuyen_gia_khcn::where('chuyen_nganh','LIKE','%'.$text_search.'%')->select('link_anh','ho_va_ten','hoc_vi','co_quan','chuyen_nganh','tinh_thanh')->get();
		} else if ($tim_theo == 3) {
			$result = chuyen_gia_khcn::where('huong_nghien_cuu','LIKE','%'.$text_search.'%')->select('link_anh','ho_va_ten','hoc_vi','co_quan','chuyen_nganh','tinh_thanh')->get();
		} else if ($tim_theo == 4) {
			$result = chuyen_gia_khcn::where('co_quan','LIKE','%'.$text_search.'%')->select('link_anh','ho_va_ten','hoc_vi','co_quan','chuyen_nganh','tinh_thanh')->get();
		} else {
			$result = chuyen_gia_khcn::where('ho_va_ten','LIKE','%'.$text_search.'%')->orWhere('chuyen_nganh','LIKE','%'.$text_search.'%')->orWhere('huong_nghien_cuu','LIKE','%'.$text_search.'%')->orWhere('co_quan','LIKE','%'.$text_search.'%')->orWhere('nam_sinh','LIKE','%'.$text_search.'%')->select('link_anh','ho_va_ten','hoc_vi','co_quan','chuyen_nganh','tinh_thanh')->get();
		}

		/*
			Tìm theo chức danh: truyền vào chuỗi ứng với cột hoc_vi trong bảng chuyen_gia_khcn
		*/
		if($chuc_danh != 'Chức danh') {
			$result = $result->where('hoc_vi',$chuc_danh);
		}

		return $result;
	}
}