@extends('layouts.master')
@section('style')
<script type="text/javascript" src="public/js/phan_trang.js"></script>
<link rel="stylesheet" type="text/css" href="public/css/search_result_chuyen_gia.css">
<link rel="stylesheet" type="text/css" href="public/css/phan_trang.css">
@endsection

<!-- start content -->
@section('content')
	<div class="row col-md-12 filter-row">
				<div class="filter">
					<ul class="list-search-filter">
						<li>
							<select name = 'tim_theo'>
							  <option value="0">Tìm theo</option>
							  <option value="1">Tên nhà KH</option>
							  <option value="2">Lĩnh vực nghiên cứu</option>
							  <option value="3">Hướng nghiên cứu</option>
							  <option value="4">Cơ quan công tác</option>
							</select>
						</li>
						<li>
							<select name='tinh_thanh_pho'>
							  <option value="Tỉnh, thành phố">Tỉnh, thành phố</option>
							  @foreach($tinh_thanh as $tt)
							  <option value="{{$tt->tinh_thanh_pho}}">{{$tt->tinh_thanh_pho}}</option>
							  @endforeach
							</select>
						</li>
						<li>
							<select name="chuc_danh">
							  <option value="Chức danh">Chức danh</option>
							  @foreach($hoc_vi as $hv)
							  <option value="{{$hv->hoc_vi}}">{{$hv->hoc_vi}}</option>
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
					<th class="anh">Ảnh</th>
					<th class="name">Họ và tên</th>
					<th class="co_quan">Cơ quan công tác</th>
					<th class="linh_vuc">Lĩnh vực nghiên cứu</th>
					<th class="tinh_thanh">Tỉnh thành</th>
				</thead>
				<tbody>
					@foreach($chuyen_gia as $cg)
						<tr>
							<td></td>
							<td><img src="{{$cg->link_anh}}" alt="ảnh" class="img-responsive anh_chuyen_gia"></td>
							<td><a href="chuyen-gia/{{$cg->linkid}}" class="ten_chuyen_gia">{{$cg->hoc_vi}} {{$cg->ho_va_ten}}</a></td>
							<td>{{$cg->co_quan}}</td>
							<td>{{$cg->chuyen_nganh}}</td>
							<td>{{$cg->tinh_thanh}}</td>
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