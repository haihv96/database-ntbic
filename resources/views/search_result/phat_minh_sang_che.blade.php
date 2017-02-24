@extends('layouts.master')
@section('style')
<script type="text/javascript" src="/public/js/phan_trang.js"></script>
<link rel="stylesheet" type="text/css" href="/public/css/search_result_phat_minh_sang_che.css">
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
							  <option value="1">Tên phát minh, sáng chế, giải pháp</option>
							  <option value="2">Điểm nổi bật</option>
							  <option value="3">Tác giả</option>
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
							<select name="loai">
							  <option value="0">Loại</option>
							  @foreach($loai_phat_minh as $loai)
							  	<option value="{{$loai->id}}">{{$loai->loai_phat_minh_sang_che}}</option>
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
				<th class="name">Tên bằng phát minh, sáng chế, giải pháp hữu ích</th>
				<th class="linh_vuc">Lĩnh vực KH&CN</th>
				<th class="so_hieu">Số, ký hiệu, bằng</th>
				<th class="tac_gia">Tác giả</th>
				<th class="date">Ngày công bố</th>
			</thead>
			<tbody>
				@foreach($phat_minh as $pm)
					<tr>
						<td></td>
						<td><a href="phat-minh/{{$pm->link}}" class="ten_bang_phat_minh">{{$pm->ten}}</a></td>
						<td>{{$pm->linh_vuc}}</td>
						<td>{{$pm->sobang_kyhieu}}</td>
						<td>{{$pm->tac_gia}}</td>
						<td>{{$pm->ngay_cong_bo}}</td>
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