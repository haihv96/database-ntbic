@extends('layouts.master')
@section('style')
<script type="text/javascript" src="../../js/phan_trang.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/search_result_san_pham.css">
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
							  <option value="volvo">Tên sản phẩm, ứng dụng</option>
							  <option value="saab">Khả năng ứng dụng</option>
							  <option value="opel">Mô tả sản phẩm, ứng dụng</option>
							  <option value="audi">Giải quyết bài toán</option>
							  <option value="audi">Thị trường ứng dụng</option>
							</select>
						</li>
						<li>
							<select>
							  <option value="volvo">Lĩnh vực KH&CN</option>
							  <option value="volvo">Công nghệ thông tin và truyền thông</option>
							  <option value="saab">Công nghệ sinh học</option>
							  <option value="opel">Công nghệ vật liệu mới</option>
							  <option value="audi">Công nghệ chế tạo máy, tự động hóa</option>
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
				<th class="anh">Hình ảnh</th>
				<th class="name">Tên công nghệ, ứng dụng</th>
				<th class="linh_vuc">Lĩnh vực KH&CN</th>
				<th class="ung_dung">Khả năng ứng dụng</th>
				<th class="cap_nhat">Cập nhật</th>
			</thead>
			<tbody>
				@for($i=0;$i<200;$i++)
					<tr>
						<td>{{$i+1}}</td>
						<td><img src="#" alt="ảnh" class="anh_san_pham"></td>
						<td><a href="#" class="ten_san_pham">Dây chuyền làm sạch protein trong mủ cao su thiên nhiên</a></td>
						<td>Công nghệ chế tạo máy - tự động hóa</td>
						<td>Phân cỡ tôm là một khâu quan trọng trong công đoạn chế biến tôm xuất khẩu, nhằm đảm bảo nguồn nguyên liệu đạt chất lượng và độ đồng đều. Công việc này yêu cầu độ chính xác cao, nên các doanh nghiệp nước ta chủ yếu sử dụng thiết bị nhập ngoại với giá cao. Trước thực tế này, các nhà khoa học thuộc Công ty Cổ phần công nghệ QCM đã nghiên cứu, thiết kế, chế tạo thành công thiết bị phân cỡ tôm điện tử có độ chính xác cao, giá thành phù hợp, giúp doanh nghiệp giảm chi phí, góp phần tăng sức cạnh tranh cho sản phẩm thủy sản xuất khẩu của Việt Nam.</td>
						<td>14/10/2016</td>
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