@extends('layouts.master')
@section('style')
   <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/details_de_tai_du_an_cac_cap.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/sidebar.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/search_result_de_tai.css') }}">
@endsection
<!-- main-content -->
@section("content")
<div class="row">
    <div class="articles_detail col-md-9">

    <h2 class="title_pages">{{ $datas->ten_de_tai }}</h2>

    <p class="time">Cập nhật Thứ năm - 08/09/2016  16:15 

    <a class="print" href="#" target="_blank">

                <i class="glyphicon glyphicon-print"></i>

                In bài viết

    </a>

    </p>

    <table class="archives_list">

        <tbody>
        <tr>

            <td width="30" align="center">

                <strong>1.</strong>

            </td>

            <td width="150"><strong>Tên đề tài, đề án các cấp:</strong></td>

            <td>

             {{ $datas->ten_de_tai }} 

            </td>

        </tr>

        <tr>

            <td align="center">

                <strong>2.</strong>

            </td>

            <td><strong>{{ $datas->maso_kyhieu }}</strong></td>

            <td>

                TS

            </td>

          </tr>

          <tr>

            <td align="center">

                <strong>3.</strong>

            </td>

            <td><strong>Thuộc lĩnh vực KHCN</strong></td>

            <td>

                {{ $datas->linh_vuc }}

            </td>

          </tr>

          <tr>

            <td align="center">

                <strong>4.</strong>

            </td>

            <td><strong>Năm bắt đầu tài trợ</strong></td>

            <td>

                {{ $datas->nam_bat_dau }}<br><br>

            </td>

          </tr>

          <tr>

            <td align="center">

                <strong>5.</strong>

            </td>

            <td><strong>Năm kết thúc</strong></td>

            <td>

                {{ $datas->nam_ket_thuc }}

            </td>

          </tr>

          <tr>

            <td align="center">

                <strong>6.</strong>

            </td>

            <td><strong>Cơ quan chủ trì</strong></td>

            <td>

                {{ $datas->co_quan }}

            </td>

          </tr>

          <tr>

            <td align="center">

                <strong>7.</strong>

            </td>

            <td><strong>Chủ nhiệm đề tài</strong></td>
            <td>
                
            {{ $datas->chu_nhiem_detai }}

            </td>

          </tr>

        <tr>


            <td colspan="3"><strong>8. Điểm nổi bật</strong><br>

            {!! $datas->diem_noi_bat !!}
            </td>


        </tr>
        <tr>
           

            <td colspan="3."><strong>9. Mô tả chung về đề tài dự án KH&CN</strong><br>

            {!! $datas->mota_chung !!}
            </td>


        </tr>
        <tr>
           

            <td colspan="3"><strong>10. Mô tả về quy trình chuyển giao</strong><br>
            {!! $datas->mota_quytrinh_chuyengiao !!}            
            </td>
        </tr>
        <tr>
            

            <td colspan="3"><strong>11. Kết quả thự hiện và khả năng ứng dụng</strong><br>

            {!! $datas->ket_qua_thuc_hien_ung_dung !!}
            </td>
        </tr>
        <tr>
            <td colspan=3>
                    <strong>Từ khóa:</strong><a href="#">Trang chủ</a> &nbsp;&nbsp; <a href="#">Trang chủ</a>&nbsp;&nbsp;<a href="#">Trang chủ</a>&nbsp;&nbsp;<a href="#">Trang chủ</a>
                    <p align="right">
                        <a href="#"><i class="glyphicon glyphicon-print"></i> In bài viết</a>
                    </p>
            </td>
        </tr>
        <tr>
            <td colspan=3>
            <p>chỗ dành biểu tượng share>
            </p>
            </td>
        </tr>
        <tr>
            <td colspan=3 >
                <strong>
                    Các đề tài dự án khác
                </strong><br>
                
             
                <ul >
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Trang chủ</a></li>
                <ul>

            </td>

        </tr>
       
    </tbody>
    </table> 
    
</div>
    @include('details.sidebar')
</div>

@endsection
<!-- end main-content -->
@section('script')
<script type="text/javascript">
    window.onload = function() {
        document.getElementById('search_form').setAttribute('action','/de-tai-du-an-cac-cap');
    }
</script>
@endsection