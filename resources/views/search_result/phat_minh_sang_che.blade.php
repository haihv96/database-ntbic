@extends('layouts.master')
@section('style')
<script type="text/javascript" src="../../js/phan_trang.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/search_result_phat_minh_sang_che.css">
<link rel="stylesheet" type="text/css" href="../../css/phan_trang.css">
@endsection

<!-- start content -->
@section('content')
	<div class="row col-md-12 div-content">
		<div class="search-info">
		<p>Kết quả tìm kiếm : xxxxxxx trong xxxxxxxxxx giây</p>
		</div>
		<table class="dataTable table-hover table-responsive" id="myTable">
			<thead class="head-dataTable">
				<th></th>
				<th>Tên bằng phát minh, sáng chế, giải pháp hữu ích</th>
				<th>Lĩnh vực KH&CN</th>
				<th>Số, ký hiệu, bằng</th>
				<th>Tác giả</th>
				<th>Ngày công bố</th>
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
@endsection
<!-- end content -->
@section('script')
<script type="text/javascript">
	$(document).ready(function(){
    	$('#myTable').DataTable();
	});
</script>
	
@endsection