<?php

namespace App\Http\Controllers\chuyen_gia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    
    //về phần chuyên gia khcn mô hình CSDL em thấy chưa rõ anh Hải xem giúp em nhé
    protected function index($link)
    {
        $data = DB::table('chuyen_gia_khcn')->join('ket_qua_nghien_cuu','','=','')->join('cong_trinh_nghien_cuu','','=','')->select('ten_san_pham','linh_vuc_san_pham.linh_vuc','dac_diem_noi_bat','mo_ta_chung','quy_trinh_chuyen_giao','kha_nang_ung_dung')->where('link',$link)->get();
       
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
