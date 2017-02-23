@extends('layouts.master')
@section('style')
<script type="text/javascript" src="../../js/phan_trang.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/search_result_phat_minh_sang_che.css">
<link rel="stylesheet" type="text/css" href="../../css/phan_trang.css">
@endsection

<!-- start content -->
@section('content')
	<div class="row col-md-12 filter-row">
				<div class="filter">
					<ul class="list-search-filter">
						<li>
							<select>
							  <option value="volvo">Tìm theo</option>
							  <option value="volvo">Volvo</option>
							  <option value="saab">Saab</option>
							  <option value="opel">Opel</option>
							  <option value="audi">Audi</option>
							</select>
						</li>
						<li>
							<select>
							  <option value="volvo">Lĩnh vực KH&CN</option>
							  <option value="volvo">Volvo</option>
							  <option value="saab">Saab</option>
							  <option value="opel">Opel</option>
							  <option value="audi">Audi</option>
							</select>
						</li>
						<li>
							<select>
							  <option value="volvo">Loại</option>
							  <option value="volvo">Volvo</option>
							  <option value="saab">Saab</option>
							  <option value="opel">Opel</option>
							  <option value="audi">Audi</option>
							</select>
						</li>
					</ul>
				</div>
				<hr>
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
				@for($i=0;$i<200;$i++)
					<tr>
						<td>{{$i+1}}</td>
						<td><a href="#" class="ten_bang_phat_minh">Thiết bị xử lý nước nhiễm asen bằng vật liệu nano</a></td>
						<td>Công nghệ thông tin</td>
						<td>784792</td>
						<td>Dương Lê Minh</td>
						<td>22-2-2017</td>
					</tr>
				@endfor
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