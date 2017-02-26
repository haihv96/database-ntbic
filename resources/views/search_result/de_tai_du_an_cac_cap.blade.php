@extends('layouts.master')
@section('style')
<script type="text/javascript" src="/public/js/phan_trang.js"></script>
<link rel="stylesheet" type="text/css" href="/public/css/search_result_de_tai.css">
<link rel="stylesheet" type="text/css" href="/public/css/phan_trang.css">
@endsection

<!-- start content -->
@section('content')
	<div class="row col-md-12 filter-row">
				<div class="filter">
					<ul class="list-search-filter">
						<li>
							<select name="tim_theo">
							  <option value="0">Tìm theo</option>
							  <option value="1">Tên đề tài, đề án</option>
							  <option value="2">CNĐT tác giả</option>
							  <option value="3">Mã số, ký hiệu</option>
							  <option value="4">Cơ quan chủ trì</option>
							  <option value="5">Tóm tắt nội dung</option>
							</select>
						</li>
						<li>
							<select name="chuyen_nganh">
							  <option value="0">Chuyên ngành</option>
							  @foreach($chuyen_nganh_khcn as $item)
							  <option value="{{$item->id}}">{{$item->ten}}</option>
							  @endforeach
							</select>
						</li>
					</ul>
				</div>
	</div>


	<!-- main content,display result -->
	@section('main-content')
	<div class="row col-md-12 div-content">
			<div class="search-info">
			<p>Kết quả tìm kiếm : xxxxxxx trong xxxxxxxxxx giây</p>
			</div>
			<table class="dataTable table-hover table-responsive" id="myTable">
				<thead class="head-dataTable">
					<th class="no"></th>
					<th class="name">Tên đề tài, dự án</th>
					<th class="linh_vuc">Lĩnh vực KH&CN</th>
					<th class="ma_so">Mã số, ký hiệu</th>
					<th class="tac_gia">CNĐT, tác giả</th>
					<th class="thoi_gian">Thời gian kết thúc</th>
				</thead>
				<tbody>
					@foreach($datas as $item)
						<tr>
							<td></td>
							<td><a href="de-tai-du-an-cac-cap/{{$item->link}}" class="ten_de_tai">{{$item->ten_de_tai}}</a></td>
							<td>{{$item->linh_vuc}}</td>
							<td>{{$item->maso_kyhieu}}</td>
							<td>{{$item->chu_nhiem_detai}}</td>
							<td>{{$item->nam_bat_dau}}-{{$item->nam_ket_thuc}}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	@show

	<!-- end main content -->
@endsection
<!-- end content -->
@section('script')
<script type="text/javascript">
	$(document).ready(function(){
    	$('#myTable').DataTable();
	});
</script>
	
@endsection