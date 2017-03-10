@extends('admin.layouts.layout')
@section('sidebar')
    <li class="active"><a href="/"> <i class="icon-custom-home"></i> <span
                    class="title">Tổng quan</span></span> </a>

    </li>

    <li class=""><a href="javascript:;"> <i class="fa fa-user"></i> <span class="title">Quản lý người dùng</span></a>
    </li>
    <li class=""><a href="javascript:;"> <i class="fa fa-group"></i>  <span
                    class="title">Quản Lý Dữ Liệu</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
            <li><a href="{{ URL::asset('admin/chuyen-gia') }}"> Chuyên Gia KH&CN </a></li>
            <li><a href="{{ URL::asset('admin/san-pham') }}"> Sản Phẩm KH&CN</a></li>
            <li><a href="{{ URL::asset('admin/phat-minh-sang-che') }}"> Phát Minh - Sáng Chế</a></li>
            <li><a href="{{ URL::asset('admin/de-tai-du-an-cac-cap') }}"> Đề tài Dự án Các cấp</a></li>
            <li><a href="{{ URL::asset('admin/doanh-nghiep') }}"> Doanh Nghiệp KH&CN</a></li>
        </ul>
    </li>

@endsection
@section('script')
    <script type="text/javascript" src="/public/js/faculty/faculty.js"></script>
    <script type="text/javascript" src="/public/js/faculty/faculty_duong.js"></script>
    <script type="text/javascript" src="/public/js/faculty/faculty_hung.js"></script>
    <script type="text/javascript" src="/public/js/faculty/faculty_newstudent.js"></script>
@endsection