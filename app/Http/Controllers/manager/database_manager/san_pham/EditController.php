<?php

namespace App\Http\Controllers\manager\database_manager\san_pham;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\san_pham;
use App\linh_vuc_san_pham;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class EditController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->id;
        $data = DB::table('san_pham')->select('ten_san_pham','linh_vuc','dac_diem_noi_bat','mo_ta_chung','quy_trinh_chuyen_giao','kha_nang_ung_dung','anh_san_pham','link')->where('id',$id)->first();
        
    	return view('database_manager.san_pham.edit')->with(['datas'=>$data]);
    }
}
