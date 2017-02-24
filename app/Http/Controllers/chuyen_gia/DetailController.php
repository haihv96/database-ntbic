<?php

namespace App\Http\Controllers\chuyen_gia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\tinh_thanh_pho;
use App\hoc_vi;

class DetailController extends Controller
{
    
    
    protected function index($link)
    {
        $tt = tinh_thanh_pho::all();
        $hv = hoc_vi::all();
        /*
            $data_chinh dữ liệu trong bảng chuyen_gia_khcn
            $data_phu1 dữ liệu cong_trinh_nghien_cuu của chuyên gia đó 
            $data_phu2 dữ liệu ket_qua_nghien_cuu của chuyên gia đó 
        */
        $data_chinh = DB::table('chuyen_gia_khcn')->select('ho_va_ten','hoc_vi','nam_sinh','chuyen_nganh','co_quan','huong_nghien_cuu','link_anh','Sl_congTrinh_baiBao','tinh_thanh')->where('linkid',$link)->get();
        
        $data_phu1 = DB::table('chuyen_gia_khcn')->join('cong_trinh_nghien_cuu','cong_trinh_nghien_cuu.id_profile','=','chuyen_gia_khcn.id')->select('cong_trinh_nghien_cuu.content')->where('linkid',$link)->get();
        
        $data_phu2 = DB::table('chuyen_gia_khcn')->join('ket_qua_nghien_cuu','ket_qua_nghien_cuu.id_profile','=','chuyen_gia_khcn.id')->select('ket_qua_nghien_cuu.content')->where('linkid',$link)->get();
        
        
        
        
        echo "<pre>";
        print_r($data_chinh);
        print_r($data_phu1);
        print_r($data_phu2);
        //echo $data[0]->huong_nghien_cuu;// mảng gồm các đối tượng có thể gắn biến sau nếu cần 
        echo "</pre>";
        
    }
    
}
