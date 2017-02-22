@extends('layouts.master')
@section('style')
<script type="text/javascript" src="../../js/phan_trang.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/search_result_san_pham.css">
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
				<th>Hình ảnh</th>
				<th>Tên công nghệ, ứng dụng</th>
				<th>Lĩnh vực KH&CN</th>
				<th>Khả năng ứng dụng</th>
				<th>Cập nhật</th>
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
@endsection
<!-- end content -->
@section('script')
<script type="text/javascript">
	$(document).ready(function(){
    	$('#myTable').DataTable();
	});
</script>
	
@endsection