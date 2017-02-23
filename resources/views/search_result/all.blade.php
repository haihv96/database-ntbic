@extends('layouts.detail')

@section('style')
<link rel="stylesheet" type="text/css" href="../../css/search_result_all.css">
<link rel="stylesheet" type="text/css" href="../../css/detail.css">
@endsection

<!-- start content -->
@section('main-content')
	<div class="search-info">
		<p>Kết quả tìm kiếm : xxxxxxx trong xxxxxxxxxx giây</p>
	</div>
	<ul class="list-topic">
		<li>
			<div class="row list-box chuyen-gia">
				<br>
				<p><span class="glyphicon glyphicon-search"></span><span class="filter-name">Tìm kiếm trong dữ liệu chuyên gia Khoa học và Công Nghệ&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="glyphicon glyphicon-arrow-right see-more"></span><a href="#"  class="see-more">Xem tất cả kết quả</a></p>
				<hr>
				<ul>
					@for($i=0;$i<6;$i++)
						<li class="item">
							<span class="item-title">Tên chuyên gia KH&CN</span>
							<br>
							<span><a  class="item-link" href="#">http://linkcsdlaewhuwh.jjweheh.ahwh/uihih</a></span>
							<br>
							<p class="item-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							</p>
						</li>
					@endfor
				</ul>
				<br>
			</div>
		</li>
		<li>
			<div class="row list-box chuyen-gia">
				<br>
				<p><span class="glyphicon glyphicon-search"></span><span class="filter-name">Tìm kiếm trong dữ liệu Đề tài, dự án các cấp&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="glyphicon glyphicon-arrow-right see-more"></span><a href="#"  class="see-more">Xem tất cả kết quả</a></p>
				<hr>
				<ul>
					@for($i=0;$i<6;$i++)
						<li class="item">
							<span class="item-title">Tên chuyên gia KH&CN</span>
							<br>
							<span><a  class="item-link" href="#">http://linkcsdlaewhuwh.jjweheh.ahwh/uihih</a></span>
							<br>
							<p class="item-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							</p>
						</li>
					@endfor
				</ul>
				<br>
			</div>
		</li>
		<li>
			<div class="row list-box chuyen-gia">
				<br>
				<p><span class="glyphicon glyphicon-search"></span><span class="filter-name">Tìm kiếm trong dữ liệu Bằng phát minh, sáng chế&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="glyphicon glyphicon-arrow-right see-more"></span><a href="#"  class="see-more">Xem tất cả kết quả</a></p>
				<hr>
				<ul>
					@for($i=0;$i<6;$i++)
						<li class="item">
							<span class="item-title">Tên chuyên gia KH&CN</span>
							<br>
							<span><a  class="item-link" href="#">http://linkcsdlaewhuwh.jjweheh.ahwh/uihih</a></span>
							<br>
							<p class="item-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							</p>
						</li>
					@endfor
				</ul>
				<br>
			</div>
		</li>
		<li>
			<div class="row list-box chuyen-gia">
				<br>
				<p><span class="glyphicon glyphicon-search"></span><span class="filter-name">Tìm kiếm trong dữ liệu Sản phẩm, công nghệ mới của nước ngoài&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="glyphicon glyphicon-arrow-right see-more"></span><a href="#"  class="see-more">Xem tất cả kết quả</a></p>
				<hr>
				<ul>
					@for($i=0;$i<6;$i++)
						<li class="item">
							<span class="item-title">Tên chuyên gia KH&CN</span>
							<br>
							<span><a  class="item-link" href="#">http://linkcsdlaewhuwh.jjweheh.ahwh/uihih</a></span>
							<br>
							<p class="item-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							</p>
						</li>
					@endfor
				</ul>
				<br>
			</div>
		</li>
		<li>
			<div class="row list-box chuyen-gia">
				<br>
				<p><span class="glyphicon glyphicon-search"></span><span class="filter-name">Tìm kiếm trong dữ liệu Doanh nghiệp Khoa học và Công Nghệ&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="glyphicon glyphicon-arrow-right see-more"></span><a href="#" class="see-more">Xem tất cả kết quả</a></p>
				<hr>
				<ul>
					@for($i=0;$i<6;$i++)
						<li class="item">
							<span class="item-title">Tên chuyên gia KH&CN</span>
							<br>
							<span><a  class="item-link" href="#">http://linkcsdlaewhuwh.jjweheh.ahwh/uihih</a></span>
							<br>
							<p class="item-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							</p>
						</li>
					@endfor
				</ul>
				<br>
			</div>
		</li>
	</ul>
	
@endsection
<!-- end content -->

@section('script')
	
@endsection