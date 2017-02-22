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
				<th>No.</th>
				<th>Ảnh</th>
				<th>Họ và tên</th>
				<th>Cơ quan công tác</th>
				<th>Lĩnh vực nghiên cứu</th>
				<th>Tỉnh thành</th>
			</thead>
			<tbody>
				@for($i=0;$i<200;$i++)
					<tr>
						<td>{{$i+1}}</td>
						<td><img src="#" alt="ảnh"></td>
						<td><a href="#" class="ten_chuyen_gia">Trần Duy Minh</a></td>
						<td>ntbic</td>
						<td>cnttah jaejhj najeh jaieuwi hewuy hewyeu hhw hh euyweu hwuewyg whuhwuh hfuwhuh uhfuwhu</td>
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