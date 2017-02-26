<?php

namespace App\Http\Controllers\chuyen_gia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\chuyen_gia_khcn;
use App\tinh_thanh_pho;
use App\hoc_vi;

class SearchController extends Controller
{
	public function getSearch(Request $request) {
		$tt = tinh_thanh_pho::all();
		$hv = hoc_vi::all();
		/*Truyền vào text và các option*/
		$text_search = $request->text_search;
		$tim_theo = $request->tim_theo;
		$linh_vuc_khcn = $request->linh_vuc_khcn;
		$chuc_danh = $request->chuc_danh;
		$tinh_thanh = $request->tinh_thanh_pho;

		/*
			Tìm theo: Truyền vào 1 số nguyên
			1: Tên nhà KH
			2: Lĩnh vực nghiên cứu
			3: Hướng nghiên cứu
			4: Cơ quan công tác
		*/
		if ($tim_theo == 1) {
			$result = chuyen_gia_khcn::where('ho_va_ten','LIKE','%'.$text_search.'%')->select('link_anh','ho_va_ten','hoc_vi','co_quan','chuyen_nganh','tinh_thanh','linkid','link_anh')->get();
		} else if ($tim_theo == 2) {
			$result = chuyen_gia_khcn::where('chuyen_nganh','LIKE','%'.$text_search.'%')->select('link_anh','ho_va_ten','hoc_vi','co_quan','chuyen_nganh','tinh_thanh','linkid','link_anh')->get();
		} else if ($tim_theo == 3) {
			$result = chuyen_gia_khcn::where('huong_nghien_cuu','LIKE','%'.$text_search.'%')->select('link_anh','ho_va_ten','hoc_vi','co_quan','chuyen_nganh','tinh_thanh','linkid','link_anh')->get();
		} else if ($tim_theo == 4) {
			$result = chuyen_gia_khcn::where('co_quan','LIKE','%'.$text_search.'%')->select('link_anh','ho_va_ten','hoc_vi','co_quan','chuyen_nganh','tinh_thanh','linkid','link_anh')->get();
		} else {
			$result = chuyen_gia_khcn::where('ho_va_ten','LIKE','%'.$text_search.'%')->orWhere('chuyen_nganh','LIKE','%'.$text_search.'%')->orWhere('huong_nghien_cuu','LIKE','%'.$text_search.'%')->orWhere('co_quan','LIKE','%'.$text_search.'%')->orWhere('nam_sinh','LIKE','%'.$text_search.'%')->select('link_anh','ho_va_ten','hoc_vi','co_quan','chuyen_nganh','tinh_thanh','linkid','link_anh')->get();
		}

		/*
			Tìm theo chức danh: truyền vào chuỗi ứng với cột hoc_vi trong bảng chuyen_gia_khcn
		*/
		if($chuc_danh != 'Chức danh' and $chuc_danh != '') {
			$result = $result->where('hoc_vi',$chuc_danh);
		}

		/*
			Tìm theo tỉnh, thành phố: truyền vào chuỗi ứng với cột tinh_thanh trong bảng chuyen_gia_khcn
		*/
		if($tinh_thanh != 'Tỉnh, thành phố' and $tinh_thanh != '') {
			$result = $result->where('tinh_thanh',$tinh_thanh);
		}

		return view('search_result.chuyen_gia')->with(['hoc_vi'=>$hv,'tinh_thanh'=>$tt,'chuyen_gia'=>$result]);
	}
}