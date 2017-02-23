<?php


namespace App\Http\Controllers\de_tai_du_an_cac_cap;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function index($link)
    {
        $data = DB::table('de_tai_du_an_cac_cap')->join('chuyen_nganh_khcn','chuyen_nganh_khcn.id','=','de_tai_du_an_cac_cap.chuyen_nganh_khcn')->select('ten_de_tai','maso_kyhieu','linh_vuc','chuyen_nganh_khcn.ten','nam_bat_dau','nam_ket_thuc','co_quan','chu_nhiem_detai','diem_noi_bat','mota_chung','mota_quytrinh_chuyengiao','ket_qua_thuc_hien_ung_dung')->where('link',$link)->get();
        
        
        echo "<pre>";
        //echo $data[0]->nam_bat_dau;
        //print_r($data);
        
        echo "</pre>";
    }
}
