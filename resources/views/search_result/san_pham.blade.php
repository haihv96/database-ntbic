@extends('layouts.master')
@section('style')
<script type="text/javascript" src="public/js/phan_trang.js"></script>
<link rel="stylesheet" type="text/css" href="public/css/search_result_san_pham.css">
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
							  <option value="1">Tên sản phẩm, ứng dụng</option>
							  <option value="2">Khả năng ứng dụng</option>
							  <option value="3">Mô tả sản phẩm, ứng dụng</option>
							  <option value="4">Giải quyết bài toán</option>
							  <option value="5">Thị trường ứng dụng</option>
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
				<th class="anh">Hình ảnh</th>
				<th class="name">Tên công nghệ, ứng dụng</th>
				<th class="linh_vuc">Lĩnh vực KH&CN</th>
				<th class="ung_dung">Khả năng ứng dụng</th>
				
			</thead>
			<tbody>
				@foreach($san_pham as $sp)
					<tr>
						<td></td>
						<td><img src="#" alt="ảnh" class="anh_san_pham"></td>
						<td><a href="san-pham/{{$sp->link}}" class="ten_san_pham">{{$sp->ten_san_pham}}</a></td>
						<td>{{$sp->linh_vuc}}</td>
						<td>{{$sp->dac_diem_noi_bat}}</td>
						
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