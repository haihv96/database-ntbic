<?php

namespace App\Http\Controllers\chuyen_gia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    
    //về phần chuyên gia khcn mô hình CSDL em thấy chưa rõ anh Hải xem giúp em nhé
    //vì chuyên gia có người có người thì không có công trình nghiên cứu hoặc kết quả nghiên cứu có thể anh cân nhắc tính chuyện này có nên thêm hàm mới để lấy dữ liệu 2 bảng kia hay là cùng hiển thị hết trên 1 trang 
    protected function index($link)
    {
        $data = DB::table('chuyen_gia_khcn')->select('ho_va_ten','hoc_vi','nam_sinh','chuyen_nganh','co_quan','huong_nghien_cuu','link_anh','Sl_congTrinh_baiBao','tinh_thanh')->where('linkid',$link)->get();
       
        echo "<pre>";
        print_r($data);
        //echo $data[0]->huong_nghien_cuu;// mảng gồm các đối tượng có thể gắn biến sau nếu cần 
        echo "</pre>";
    }
    
}
