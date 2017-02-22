@extends('layouts.master')
@section('style')
<script type="text/javascript" src="../../js/phan_trang.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/search_result_de_tai.css">
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
				<th>Tên đề tài, dự án</th>
				<th>Lĩnh vực KH&CN</th>
				<th>Mã số, ký hiệu</th>
				<th>CNĐT, tác giả</th>
				<th>Thời gian kết thúc</th>
			</thead>
			<tbody>
				@for($i=0;$i<200;$i++)
					<tr>
						<td>{{$i+1}}</td>
						<td><a href="#" class="ten_de_tai">Tên đề tài, dự án</a></td>
						<td>Công nghệ thông tin</td>
						<td>k59clc</td>
						<td>Dương Lê Minh</td>
						<td>2017-2018</td>
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