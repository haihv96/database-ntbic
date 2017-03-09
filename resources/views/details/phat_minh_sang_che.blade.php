@extends('layouts.master')
@section('style')
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/details_de_tai_du_an_cac_cap.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/search_result_phat_minh_sang_che.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/sidebar.css') }}">
@endsection
<!-- main-content -->
@section("content")
<div class="row">  
    <div class="articles_detail col-md-9">

        <h2 class="title_pages">{{ $datas->ten }}</h2>

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

                <td width="150"><strong> Tên sáng chế, phát minh, giải pháp</strong></td>

                <td>

                {{ $datas->ten }}

                </td>

            </tr>

            <tr>

                <td align="center">

                    <strong>2.</strong>

                </td>

                <td><strong>Số bằng,ký hiệu</strong></td>

                <td>

                  {{ $datas->sobang_kyhieu }}

                </td>

              </tr>

              <tr>

                <td align="center">

                    <strong>3.</strong>

                </td>

                <td><strong>Thuộc lĩnh vực KH&CN</strong></td>

                <td>

                    {{ $datas->linh_vuc.' ('.$datas->loai_phat_minh_sang_che.')' }}
                </td>

              </tr>

              <tr>

                <td align="center">

                    <strong>4.</strong>

                </td>

                <td><strong> Ngày công bố</strong></td>

                <td>

                   {{ $datas->ngay_cong_bo }}

                </td>

              </tr>

              <tr>

                <td align="center">

                    <strong>5.</strong>

                </td>

                <td><strong> Ngày cấp</strong></td>

                <td>

                   {{ $datas->ngay_cap }}

                </td>

              </tr>

              <tr>

                <td align="center">

                    <strong>6.</strong>

                </td>

                <td><strong> Chủ sở hữu chính</strong></td>

                <td>

                   {{ $datas->chu_so_huu_chinh }}

                </td>

              </tr>

              <tr>

                <td align="center">

                    <strong>7.</strong>

                </td>

                <td><strong> Tác giả</strong></td>
                <td>
                	{{ $datas->tac_gia }}

                </td>

              </tr>

                

            <tr>

             

                <td colspan="3"><strong>8. Điểm nổi bật</strong><br>

                {!! $datas->diem_noi_bat !!}
                </td>


            </tr>
            <tr>
             

                <td colspan="3"><strong> 9. Mô tả về sáng chế, phát minh, giải pháp</strong><br>

                {!! $datas->mota_sangche_phatminh_giaiphap !!}
                </td>


            </tr>
            <tr>
               

                <td colspan="3"><strong>10. Nội dung có thể chuyển giao</strong><br>

                {!! $datas->noidung_cothe_chuyengiao !!}
                </td>
            </tr>
            <tr>
                

                <td colspan="3"><strong>11. Thị trường ứng dụng</strong><br>

                {!! $datas->thitruong_ungdung !!}
                </td>
            </tr>
             <tr>
              

                <td colspan="3"><strong>12. Hình ảnh minh họa </strong><br>
                <img src="{{ $datas->hinh_anh_minh_hoa }}" />
                </td>
            </tr>
            <tr>
              
            </tr>
            <tr>
                <td colspan=3>
                <p>chỗ dành biểu tượng share>
                </p>
                <p align="right">
                            <a href="#"><i class="glyphicon glyphicon-print"></i> in bài viết</a>
                </p>
                </td>
            </tr>
            <tr>
                <td colspan=3 >
                    <strong>
                       Các phát minh, sáng chế khác
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
        document.getElementById('search_form').setAttribute('action','/phat-minh');
    }
</script>
@endsection