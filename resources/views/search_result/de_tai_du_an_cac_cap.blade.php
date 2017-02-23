@extends('layouts.master')
@section('style')
<script type="text/javascript" src="../../js/phan_trang.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/search_result_de_tai.css">
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
							  <option value="volvo">Chuyên ngành</option>
							  <option value="volvo">Volvo</option>
							  <option value="saab">Saab</option>
							  <option value="opel">Opel</option>
							  <option value="audi">Audi</option>
							</select>
						</li>
						<li>
							<select>
							  <option value="volvo">Tỉnh, thành phố</option>
							  <option value="volvo">Volvo</option>
							  <option value="saab">Saab</option>
							  <option value="opel">Opel</option>
							  <option value="audi">Audi</option>
							</select>
						</li>
						<li>
							<select>
							  <option value="volvo">Chức danh</option>
							  <option value="volvo">Volvo</option>
							  <option value="saab">Saab</option>
							  <option value="opel">Opel</option>
							  <option value="audi">Audi</option>
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