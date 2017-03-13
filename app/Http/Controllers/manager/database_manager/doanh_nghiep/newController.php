<?php

namespace App\Http\Controllers\manager\database_manager\doanh_nghiep;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\linh_vuc_san_pham;
use App\tinh_thanh_pho;
use App\doanh_nghiep_khcn;

class newController extends Controller
{
	
     public function index() {
     	$linh_vuc = linh_vuc_san_pham::all();
     	$tinh_thanh_pho = tinh_thanh_pho::all();
     	return view('database_manager.doanh_nghiep.new')->with(['tinh_thanh'=>$tinh_thanh_pho,'linh_vuc'=>$linh_vuc]);
     }

     
}
