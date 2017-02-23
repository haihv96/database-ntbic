<?php

namespace App\Http\Controllers\doanh_nghiep;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\doanh_nghiep_khcn;

class SearchController extends Controller
{
	public function getSearch(Request $request) {
		/*Truyền vào text và các option*/
		$text_search = $request->text_search;
		$tim_theo = $request->tim_theo;
		$linh_vuc_khcn = $request->linh_vuc_khcn;
		$tinh_thanh_pho = $request->tinh_thanh_pho;
		$xep_hang = $request->xep_hang;

		/*
			Tìm theo: Truyền vào 1 số nguyên
			1: Tên doanh nghiệp
			2: Sản phẩm KHCN
			3: Công nghệ nổi bật
			4: Hướng nghiên cứu
		*/
		if ($tim_theo == 1) {
			$result = doanh_nghiep_khcn::where('ten_doanh_nghiep','LIKE','%'.$text_search.'%')->get();
		} else if ($tim_theo == 2) {
			$result = doanh_nghiep_khcn::where('san_pham_khcn','LIKE','%'.$text_search.'%')->get();
		} else if ($tim_theo == 3) {
			$result = doanh_nghiep_khcn::where('cong_nghe_noi_bat','LIKE','%'.$text_search.'%')->get();
		} else if ($tim_theo == 4) {
			$result = doanh_nghiep_khcn::where('huong_nghien_cuu_khcn','LIKE','%'.$text_search.'%')->get();
		} else {
			$result = doanh_nghiep_khcn::where('ten_doanh_nghiep','LIKE','%'.$text_search.'%')->orWhere('san_pham_khcn','LIKE','%'.$text_search.'%')->orWhere('cong_nghe_noi_bat','LIKE','%'.$text_search.'%')->orWhere('huong_nghien_cuu_khcn','LIKE','%'.$text_search.'%')->orWhere('ma_so_doanh_nghiep','LIKE','%'.$text_search.'%')->orWhere('dia_chi','LIKE','%'.$text_search.'%')->orWhere('email','LIKE','%'.$text_search.'%')->orWhere('ten_dai_dien','LIKE','%'.$text_search.'%')->orWhere('nganh_nghe_kinh_doanh','LIKE','%'.$text_search.'%')->orWhere('phone','LIKE','%'.$text_search.'%')->orWhere('fax','LIKE','%'.$text_search.'%')->get();
		}

		/*
			Tìm theo tỉnh thành phố: Truyền vào 1 số nguyên ứng với id trong bảng tinh_thanh_pho
		*/
		if($tinh_thanh_pho != 0) {
			$result = $result->where('tinh_thanh_pho',$tinh_thanh_pho);
		}

		/*
			Tìm theo lĩnh vực KHCN: Truyền vào 1 số nguyên ứng với id trong bảng linh_vuc_san_pham
		*/
		if($linh_vuc_khcn != 0) {
			$result = $result->where('linh_vuc',$linh_vuc_khcn);
		}

		/*
			Tìm theo xếp hạng: truyền vào 1 kí tự ứng với giá trị cột xep_hang_trinh_do_khcn trong bảng doanh_nghiep_khcn
		*/
		if($xep_hang != 'Xếp hạng') {
			$result = $result->where('xep_hang_trinh_do_khcn',$xep_hang);
		}

		return $result;
	}
}