<?php

namespace App\Http\Controllers\san_pham;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class DetailController extends Controller
{
    protected function index($link)
    {
        $data = DB::table('san_pham')->join('linh_vuc_san_pham','san_pham.linh_vuc','=','linh_vuc_san_pham.id')->select('ten_san_pham','linh_vuc_san_pham.linh_vuc','dac_diem_noi_bat','mo_ta_chung','quy_trinh_chuyen_giao','kha_nang_ung_dung')->where('link',$link)->get();
       
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
