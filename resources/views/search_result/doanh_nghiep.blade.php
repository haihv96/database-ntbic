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
							  <option value="volvo">Tỉnh, thành phố</option>
							  <option value="volvo">Volvo</option>
							  <option value="saab">Saab</option>
							  <option value="opel">Opel</option>
							  <option value="audi">Audi</option>
							</select>
						</li>
						<li>
							<select>
							  <option value="volvo">Quận huyện, thị xã</option>
							  <option value="volvo">Volvo</option>
							  <option value="saab">Saab</option>
							  <option value="opel">Opel</option>
							  <option value="audi">Audi</option>
							</select>
						</li>
						<li>
							<select>
							  <option value="volvo">Loại hình DN</option>
							  <option value="volvo">Volvo</option>
							  <option value="saab">Saab</option>
							  <option value="opel">Opel</option>
							  <option value="audi">Audi</option>
							</select>
						</li>
						<li>
							<select>
							  <option value="volvo">Xếp hạng</option>
							  <option value="volvo">Volvo</option>
							  <option value="saab">Saab</option>
							  <option value="opel">Opel</option>
							  <option value="audi">Audi</option>
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
				@for($i=0;$i<200;$i++)
					<tr>
						<td>{{$i+1}}</td>
						<td><img src="#" alt="logo" class="logo_doanh_nghiep"></td>
						<td><a href="#" class="ten_doanh_nghiep">Tên doanh nghiệp/ tổ chức</a></td>
						<td>công nghệ thông tin</td>
						<td>cnttah jaejhj najeh jaieuwi hewuy hewyeu hhw hh </td>
						<td>ha noi</td>
						<td>--</td>
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