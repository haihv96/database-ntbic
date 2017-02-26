@extends('layouts.master')
@section('style')
<script type="text/javascript" src="public/js/phan_trang.js"></script>
<link rel="stylesheet" type="text/css" href="public/css/search_result_doanh_nghiep.css">
<link rel="stylesheet" type="text/css" href="public/css/phan_trang.css">
@endsection

<!-- start content -->
@section('content')
	<div class="row col-md-12 filter-row">
				<div class="filter">
					<ul class="list-search-filter">
						<li>
							<select name='tim_theo'>
							  <option value="0">Tìm theo</option>
							  <option value="1">Tên doanh nghiệp</option>
							  <option value="2">Sản phẩm KHCN</option>
							  <option value="3">Công nghệ nổi bật</option>
							  <option value="4">Hướng nghiên cứu</option>
							</select>
						</li>
						<li>
							<select name='linh_vuc_khcn'>
							  <option value="0">Lĩnh vực KH&CN</option>
							  @foreach($linh_vuc as $lv)
							  <option value="{{$lv->id}}">{{$lv->linh_vuc}}</option>
							  @endforeach
							</select>
						</li>
						<li>
							<select name='tinh_thanh_pho'>
							  <option value="0">Tỉnh, thành phố</option>
							  @foreach($tinh_thanh as $tinh)
							  <option value="{{$tinh->id}}">{{$tinh->tinh_thanh_pho}}</option>
							  @endforeach
							</select>
						</li>
						<li>
							<select name='xep_hang'>
							  <option value="Xếp hạng">Xếp hạng</option>
							  <option value="A">A</option>
							  <option value="B">B</option>
							  <option value="C">C</option>
							</select>
						</li>
					</ul>
				</div>
	</div>


	<!-- main content, display result -->
	@section('main-content')
	<div class="row col-md-12 div-content">
		<div class="search-info">
		<p>Kết quả tìm kiếm : xxxxxxx trong xxxxxxxxxx giây</p>
		</div>
		<table class="dataTable table-hover table-responsive" id="myTable">
			<thead class="head-dataTable">
				<th class="no"></th>
				<th class="anh_logo">Logo</th>
				<th class="name">Tên doanh nghiệp/ tổ chức</th>
				<th class="linh_vuc">Lĩnh vực KH&CN</th>
				<th class="tru_so">Trụ sở</th>
				<th class="tinh_thanh">Tỉnh, thành phố</th>
				<th class="rank">Xếp hạng</th>
			</thead>
			<tbody>
				@foreach($doanh_nghiep as $dn)
					<tr>
						<td></td>
						<td><img src="{{$dn->logo}}" alt="logo" class="logo_doanh_nghiep"></td>
						<td><a href="doanh-nghiep/{{$dn->link}}" class="ten_doanh_nghiep">{{$dn->ten_doanh_nghiep}}</a></td>
						<td>{{$dn->linh_vuc}}</td>
						<td>{{$dn->dia_chi}}</td>
						<td>{{$dn->tinh_thanh_pho}}</td>
						<td>{{$dn->xep_hang_trinh_do_khcn}}</td>
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