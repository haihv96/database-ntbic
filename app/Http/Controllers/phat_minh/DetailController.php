<?php

namespace App\Http\Controllers\phat_minh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function index($link)
    {
        $data = DB::table('bang_phat_minh_sang_che')->join('linh_vuc_san_pham','bang_phat_minh_sang_che.linh_vuc_khcn','=','linh_vuc_san_pham.id')->join('loai_phat_minh_sang_che','loai_phat_minh_sang_che.id','=','bang_phat_minh_sang_che.loai_phat_minh_sang_che')->select('ten','sobang_kyhieu','ngay_cong_bo','ngay_cap','chu_so_huu_chinh','tac_gia','diem_noi_bat','mota_sangche_phatminh_giaiphap','noidung_cothe_chuyengiao','thitruong_ungdung','hinh_anh_minh_hoa','linh_vuc_san_pham.linh_vuc','loai_phat_minh_sang_che.loai_phat_minh_sang_che')->where('link',$link)->get();
        
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
