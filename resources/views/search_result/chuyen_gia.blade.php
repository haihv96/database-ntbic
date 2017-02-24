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
							<select>
							  <option value="volvo">Tìm theo</option>
							  <option value="volvo">Tên nhà KH</option>
							  <option value="saab">Lĩnh vực</option>
							  <option value="opel">Hướng nghiên cứu</option>
							  <option value="audi">Nơi công tác</option>
							</select>
						</li>
						<li>
							<select>
							  <option value="volvo">KH&CN</option>
							  <option value="volvo">Khoa học tự nhiên</option>
							  <option value="saab">Khoa học kỹ thuật và công nghệ</option>
							  <option value="opel">Khoa học y, dược</option>
							  <option value="audi">Khoa học nông nghiệp</option>
							  <option value="audi">Khoa học xã hội</option>
							  <option value="audi">Khoa học nhân văn</option>
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
					@for($i=0;$i<200;$i++)
						<tr>
							<td>{{$i+1}}</td>
							<td><img src="#" alt="ảnh" class="img-responsive anh_chuyen_gia"></td>
							<td><a href="#" class="ten_chuyen_gia">Trần Duy Minh</a></td>
							<td>Viện Khoa học và Công nghệ Quân sự</td>
							<td>cnttah jaejhj najeh jaieuwi hewuy hewyeu hhw hh euyweu hwuewyg whuhwuh hfuwhuh uhfuwhu</td>
							<td>ha noi</td>
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