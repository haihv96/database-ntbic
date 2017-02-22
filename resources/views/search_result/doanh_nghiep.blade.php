@extends('layouts.master')
@section('style')
<script type="text/javascript" src="../../js/phan_trang.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/search_result_doanh_nghiep.css">
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
				<th>Logo</th>
				<th>Tên doanh nghiệp/ tổ chức</th>
				<th>Lĩnh vực KH&CN</th>
				<th>Trụ sở</th>
				<th>Tỉnh, thành phố</th>
			</thead>
			<tbody>
				@for($i=0;$i<200;$i++)
					<tr>
						<td>{{$i+1}}</td>
						<td><img src="#" alt="logo" class="logo_doanh_nghiep"></td>
						<td><a href="#" class="ten_doanh_nghiep">Tên doanh nghiệp/ tổ chức</a></td>
						<td>công nghệ thông tin</td>
						<td>cnttah jaejhj najeh jaieuwi hewuy hewyeu hhw hh </td>
						<td>ha noi</td>
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