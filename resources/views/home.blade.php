<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<!-- style -->
  	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
  	<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/master.css') }}">
  	<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/home.css') }}">
  	<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/responsive.css') }}">
  	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script>
        function initialize() {
            var myLatlng = new google.maps.LatLng(21.0197929,105.8563363);
            var mapOptions = {
                zoom: 9,
                center: myLatlng
            };
 
            var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
 
            var contentString = "<table><tr><th>Trung tâm ươm tạo Công nghệ và Doanh nghiệp Khoa học Công nghệ- Viện ứng dụng công nghệ: 25 Lê Thánh Tông</td></tr></table>";
 
            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });
 
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: 'Trung tâm ươm tạo Công nghệ và Doanh nghiệp Khoa học Công nghệ- Viện ứng dụng công nghệ'
            });
            infowindow.open(map, marker);
        }
 
        google.maps.event.addDomListener(window, 'load', initialize);
 
 
    </script>
    <script>
	$(document).ready(function(){
	    $(".dropdown-toggle").dropdown();
	});
</script>

	@yield('style')
	<!-- end style -->
</head>
<body>
	<div class="app">
		<nav class="navbar page-navbar" style="margin-bottom: 0px;border-radius:0px;">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle menu-hidden-btn" data-toggle="collapse" data-target="#myNavbar">
		        <span class="glyphicon glyphicon-align-justify"></span>                      
		      </button>
		      <a class="navbar-brand" href="/"><span class="logo">NTBIC</span></a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav navbar-right">
		      	<li><a href="#">Tra cứu thông tin</a></li>
		      	<li><a href="#">Hướng dẫn sử dụng</a></li>
		        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Đăng nhập</a></li>
		        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Đăng ký</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>
		<!-- end navbar top -->

		{{-- banner --}}

		<div class="top-banner" >
			<div class="inner" >
				<div class="inner1"> <strong>Ngân hàng thông tin Khoa học và Công nghệ</strong> </div>
				<form class="search-form " method="GET" action="">
					<fieldset>
		                <div class="input-group">
						

		                	<input id="text_search" type="text" class="form-control input-lg" placeholder="Tìm kiếm..." name="query">
		                		
			                <div class="input-group-btn" style="background: none;">
	                                    
	                                    <a href="#" class="btn-dropdown btn-inverse dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="background-color: #fff; color: black; padding: 6px 12px; text-decoration: none;">
	                                    <span id="nangcao">Nâng cao </span>
	                                    <span class="glyphicon glyphicon-chevron-down" style="top: 3px;color: #777777; padding: 5px;"></span></a>
	                                    <ul id="select_search" class="dropdown-menu" role="menu">
                                        <li><input type="radio" name="type-search" value="tat-ca"> Tất cả các dữ liệu KH&CN</li>
                                        <li><input type="radio" name="type-search" value="chuyen-gia"> Dữ liệu chuyên gia KH&CN </li>
                                        <li><input type="radio" name="type-search" value="de-tai-du-an-cac-cap"> Dữ liệu đề tài, dự án KH&CN</li>
                                        <li><input type="radio" name="type-search" value="phat-minh"> Dữ liệu bằng phát minh, sáng chế</li>
                                        <li><input type="radio" name="type-search" value="san-pham"> Dữ liệu sản phẩm, ứng dụng<br> KH&CN</li>
                                        <li><input type="radio" name="type-search" value="doanh-nghiep"> Dữ liệu doanh nghiệp KH&CN</li>
                                        <li class="divider" style="padding: 1px;"></li>
                                        <li><p>Tips: Để tìm kiếm thông tin trong <br>ngân hàng dữ liệu KH&CN bạn cần<br> lựa chọn một trong các thành phần<br> bên trên</p></li>
                                    </ul>
	                        </div>   
			               		
		               		
		               		<div id="search_home" class="input-group-btn">
			                        <a href="javascript:;" class="btn submit">
			                            <span class="glyphicon glyphicon-search search1"></span>
			                            <span id="timkiem"> Tìm kiếm </span>
			                        </a>
			                    	
	                        </div>
                        </div>
	               	</fieldset>
	               <div>
						<h3 class="inner2">

							Hiện đang có <span class="num_c">23,550</span> chuyên gia; 

						    <span class="num_c">22,810</span> đề tài, dự án các cấp; 

						    <span class="num_c">3,448</span> bằng phát minh, sáng chế, giải pháp hữu ích; 

						    <span class="num_c">9,766</span> doanh nghiệp ứng dụng công nghệ;

						    <span class="num_c">68</span> quỹ đầu tư, hỗ trợ cho khoa học và công nghệ;

						    <span class="num_c">446</span> trung tâm, viện nghiên cứu trong cơ sở dữ liệu

						</h3>
					</div>
        		</form>
			</div>
		</div>
		<!-- container -->
		<div class="container">
			<div class="w3-content w3-padding" style="max-width:1564px">

			  <!-- Danh mục -->
			  <div class="w3-container w3-padding-32" id="projects">
			    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-12">Danh mục </h3>
			  </div>

			  <div class="w3-row-padding">
			    <div class="w3-col l2 m4 w3-margin-bottom">
			      	<div class="w3-display-container">
			        	<div class="w3-display-topleft w3-padding">Dữ liệu chuyên gia</div>
			        	<a href="#"><img src="https://www.w3schools.com/w3images/house4.jpg" alt="House" class="anh"></a>
			      	</div>
			    </div>
			    <div class="w3-col l2 m4 w3-margin-bottom">
			      	<div class="w3-display-container">
			        	<div class="w3-display-topleft w3-padding">Dữ liệu đề tài, dự án</div>
			        	<a href="#"><img src="https://www.w3schools.com/w3images/house4.jpg" alt="House" ></a>
			      	</div>
			    </div>
			    <div class="w3-col l2 m4 w3-margin-bottom">
			      	<div class="w3-display-container">
			        	<div class="w3-display-topleft w3-padding">Bằng phát minh và sáng chế</div>
			        	<a href="#"><img src="https://www.w3schools.com/w3images/house4.jpg" alt="House" ></a>
			     	</div>
			    </div>
			    <div class="w3-col l2 m4 w3-margin-bottom">
			      	<div class="w3-display-container">
			        	<div class="w3-display-topleft w3-padding">Sản phẩm và ứng dụng</div>
			        	<a href=""><img src="https://www.w3schools.com/w3images/house4.jpg" alt="House" ></a>
			      	</div>
			    </div>
			    <div class="w3-col l2 m4 w3-margin-bottom">
			      	<div class="w3-display-container">
			        	<div class="w3-display-topleft w3-padding">Sản phẩm và ứng dụng</div>
			        	<a href=""><img src="https://www.w3schools.com/w3images/house4.jpg" alt="House" ></a>
			      	</div>
			    </div>
			    <div class="w3-col l2 m4 w3-margin-bottom">
			      	<div class="w3-display-container">
			        	<div class="w3-display-topleft w3-padding">Sản phẩm và ứng dụng</div>
			        	<a href=""><img src="https://www.w3schools.com/w3images/house4.jpg" alt="House" ></a>
			      	</div>
			    </div>
			  </div>
			</div>


			<!--chuyengia -->

			<div class="w3-content w3-padding" style="max-width:1564px">

			  <!-- Danh mục -->
			  	<div class="w3-container w3-padding-32" id="projects">
				    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-12">Chuyên gia hàng đầu về Khoa học và công nghệ</h3>
				</div>

				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				    <!-- Indicators -->
				    <!-- Wrapper for slides -->
				    <div class="carousel-inner" role="listbox">
				      	<div class="item active">
				            <div class="w3-col l3 m6 w3-margin-bottom">
							    <span class="span_v">
							    	<a href="http://khoahoctot.vn/profiles/nguyen-lan-dung-14366.html" title="GS.TS.Nguyễn Lân Dũng">

									<img src="https://www.w3schools.com/w3images/house4.jpg" class="img1"><br>

									<strong style="font-size: 15px; padding-top: 5%;padding-left: 12%;">GS.TS.Nguyễn Lân Dũng</strong>

									</a>

									<ul class="ul_listloop">
										<li><a href="#" title="Giáo sư Nguyễn Lân Dũng chia sẻ về cây Hibiscus">Giáo sư Nguyễn Lân Dũng chia sẻ về cây Hibiscus</a></li>
										<li><a href="http://khoahoctot.vn/scientist/gs-nguyen-lan-dung-di-nuoc-ngoai-hoc-trong-cay-nguoi-ta-cuoi-cho-401.html" title="GS Nguyễn Lân Dũng: ″Đi nước ngoài học trồng cây người ta cười cho″">GS Nguyễn Lân Dũng: ″Đi nước ngoài học trồng cây...</a></li>
									</ul>

								</span>
							</div>
							<div class="w3-col l3 m6 w3-margin-bottom">
							    <span class="span_v">
							    	<a href="http://khoahoctot.vn/profiles/nguyen-lan-dung-14366.html" title="GS.TS.Nguyễn Lân Dũng">

									<img src="https://www.w3schools.com/w3images/house4.jpg" class="img1"><br>

									<strong style="font-size: 15px; padding-top: 5%;padding-left: 12%;">GS.TS.Nguyễn Lân Dũng</strong>

									</a>

									<ul class="ul_listloop">
										<li><a href="#" title="Giáo sư Nguyễn Lân Dũng chia sẻ về cây Hibiscus">Giáo sư Nguyễn Lân Dũng chia sẻ về cây Hibiscus</a></li>
										<li><a href="http://khoahoctot.vn/scientist/gs-nguyen-lan-dung-di-nuoc-ngoai-hoc-trong-cay-nguoi-ta-cuoi-cho-401.html" title="GS Nguyễn Lân Dũng: ″Đi nước ngoài học trồng cây người ta cười cho″">GS Nguyễn Lân Dũng: ″Đi nước ngoài học trồng cây...</a></li>
									</ul>

								</span>
							</div>
						    <div class="w3-col l3 m6 w3-margin-bottom" id="thongtin1">
						      	<span class="span_v">
							    	<a href="http://khoahoctot.vn/profiles/nguyen-lan-dung-14366.html" title="GS.TS.Nguyễn Lân Dũng">

									<img src="https://www.w3schools.com/w3images/house4.jpg" class="img1"><br>

									<strong style="font-size: 15px; padding-top: 5%;padding-left: 12%;">GS.TS.Nguyễn Lân Dũng</strong>

									</a>

									<ul class="ul_listloop">
										<li><a href="#" title="Giáo sư Nguyễn Lân Dũng chia sẻ về cây Hibiscus">Giáo sư Nguyễn Lân Dũng chia sẻ về cây Hibiscus</a></li>
										<li><a href="http://khoahoctot.vn/scientist/gs-nguyen-lan-dung-di-nuoc-ngoai-hoc-trong-cay-nguoi-ta-cuoi-cho-401.html" title="GS Nguyễn Lân Dũng: ″Đi nước ngoài học trồng cây người ta cười cho″">GS Nguyễn Lân Dũng: ″Đi nước ngoài học trồng cây...</a></li>
									</ul>

								</span>
						    </div>
						    <div class="w3-col l3 m6 w3-margin-bottom" id="thongtin2">
						      	<span class="span_v">
							    	<a href="http://khoahoctot.vn/profiles/nguyen-lan-dung-14366.html" title="GS.TS.Nguyễn Lân Dũng">

									<img src="https://www.w3schools.com/w3images/house4.jpg" class="img1"><br>

									<strong style="font-size: 15px; padding-top: 5%;padding-left: 12%;">GS.TS.Nguyễn Lân Dũng</strong>

									</a>

									<ul class="ul_listloop">
										<li><a href="#" title="Giáo sư Nguyễn Lân Dũng chia sẻ về cây Hibiscus">Giáo sư Nguyễn Lân Dũng chia sẻ về cây Hibiscus</a></li>
										<li><a href="http://khoahoctot.vn/scientist/gs-nguyen-lan-dung-di-nuoc-ngoai-hoc-trong-cay-nguoi-ta-cuoi-cho-401.html" title="GS Nguyễn Lân Dũng: ″Đi nước ngoài học trồng cây người ta cười cho″">GS Nguyễn Lân Dũng: ″Đi nước ngoài học trồng cây...</a></li>
									</ul>

								</span>
						    </div>
						</div>


						<div class="item">
				            <div class="w3-col l3 m6 w3-margin-bottom">
							    <span class="span_v">
							    	<a href="http://khoahoctot.vn/profiles/nguyen-lan-dung-14366.html" title="GS.TS.Nguyễn Lân Dũng">

									<img src="https://www.w3schools.com/w3images/house4.jpg" class="img1"><br>

									<strong style="font-size: 15px; padding-top: 5%;padding-left: 12%;">GS.TS.Nguyễn Lân Dũng</strong>

									</a>

									<ul class="ul_listloop">
										<li><a href="#" title="Giáo sư Nguyễn Lân Dũng chia sẻ về cây Hibiscus">Giáo sư Nguyễn Lân Dũng chia sẻ về cây Hibiscus</a></li>
										<li><a href="http://khoahoctot.vn/scientist/gs-nguyen-lan-dung-di-nuoc-ngoai-hoc-trong-cay-nguoi-ta-cuoi-cho-401.html" title="GS Nguyễn Lân Dũng: ″Đi nước ngoài học trồng cây người ta cười cho″">GS Nguyễn Lân Dũng: ″Đi nước ngoài học trồng cây...</a></li>
									</ul>

								</span>
							</div>
						    <div class="w3-col l3 m6 w3-margin-bottom" >
						      	<span class="span_v">
							    	<a href="http://khoahoctot.vn/profiles/nguyen-lan-dung-14366.html" title="GS.TS.Nguyễn Lân Dũng">

									<img src="https://www.w3schools.com/w3images/house4.jpg" class="img1"><br>

									<strong style="font-size: 15px; padding-top: 5%;padding-left: 12%;">GS.TS.Nguyễn Lân Dũng</strong>

									</a>

									<ul class="ul_listloop">
										<li><a href="#" title="Giáo sư Nguyễn Lân Dũng chia sẻ về cây Hibiscus">Giáo sư Nguyễn Lân Dũng chia sẻ về cây Hibiscus</a></li>
										<li><a href="http://khoahoctot.vn/scientist/gs-nguyen-lan-dung-di-nuoc-ngoai-hoc-trong-cay-nguoi-ta-cuoi-cho-401.html" title="GS Nguyễn Lân Dũng: ″Đi nước ngoài học trồng cây người ta cười cho″">GS Nguyễn Lân Dũng: ″Đi nước ngoài học trồng cây...</a></li>
									</ul>

								</span>
						    </div>
						    <div class="w3-col l3 m6 w3-margin-bottom" id="thongtin3">
						      	<span class="span_v">
							    	<a href="http://khoahoctot.vn/profiles/nguyen-lan-dung-14366.html" title="GS.TS.Nguyễn Lân Dũng">

									<img src="https://www.w3schools.com/w3images/house4.jpg" class="img1"><br>

									<strong style="font-size: 15px; padding-top: 5%;padding-left: 12%;">GS.TS.Nguyễn Lân Dũng</strong>

									</a>

									<ul class="ul_listloop">
										<li><a href="#" title="Giáo sư Nguyễn Lân Dũng chia sẻ về cây Hibiscus">Giáo sư Nguyễn Lân Dũng chia sẻ về cây Hibiscus</a></li>
										<li><a href="http://khoahoctot.vn/scientist/gs-nguyen-lan-dung-di-nuoc-ngoai-hoc-trong-cay-nguoi-ta-cuoi-cho-401.html" title="GS Nguyễn Lân Dũng: ″Đi nước ngoài học trồng cây người ta cười cho″">GS Nguyễn Lân Dũng: ″Đi nước ngoài học trồng cây...</a></li>
									</ul>

								</span>
						    </div>
						     <div class="w3-col l3 m6 w3-margin-bottom" id="thongtin4">
						      	<span class="span_v">
							    	<a href="http://khoahoctot.vn/profiles/nguyen-lan-dung-14366.html" title="GS.TS.Nguyễn Lân Dũng">

									<img src="https://www.w3schools.com/w3images/house4.jpg" class="img1"><br>

									<strong style="font-size: 15px; padding-top: 5%;padding-left: 12%;">GS.TS.Nguyễn Lân Dũng</strong>

									</a>

									<ul class="ul_listloop">
										<li><a href="#" title="Giáo sư Nguyễn Lân Dũng chia sẻ về cây Hibiscus">Giáo sư Nguyễn Lân Dũng chia sẻ về cây Hibiscus</a></li>
										<li><a href="http://khoahoctot.vn/scientist/gs-nguyen-lan-dung-di-nuoc-ngoai-hoc-trong-cay-nguoi-ta-cuoi-cho-401.html" title="GS Nguyễn Lân Dũng: ″Đi nước ngoài học trồng cây người ta cười cho″">GS Nguyễn Lân Dũng: ″Đi nước ngoài học trồng cây...</a></li>
									</ul>

								</span>
						    </div>
						</div>
				    </div>


				    <!-- Left and right controls -->
				    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="width:0%">
				      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				      <span class="sr-only">Previous</span>
				    </a>
				    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="width:0%">
				      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				      <span class="sr-only">Next</span>
				    </a>

				</div>
			</div>	

			{{--Các công nghệ tiên tiến trên thế giới--}}


			<div class="w3-content w3-padding" style="max-width:1564px">

			  <!-- Danh mục -->
			  <div class="w3-container w3-padding-32" id="projects">
			    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-12">Các công nghệ tiên tiến trên thể giới </h3>
			     <span class="fr"><a title="Cá nhân" href="/?com=products&amp;fun=search&amp;q=" target="_self" class="viewmore"><i class="fa fa-angle-double-right"></i> Xem thêm</a></span>
			  </div>

			  <div class="w3-row-padding">
			    <div class="w3-col l3 m6 w3-margin-bottom">
			      	<p style="font-size:14px; padding-bottom:10px"><a href="/products/che-pham-sinh-hoc-trong-canh-tac-che-ca-phe-ho-tieu-o-tay-nguyen-113.html" style="color:#09C"><strong style="font-size: 15px;">Chế phẩm sinh học trong canh tác chè, cà phê, hồ tiêu ở Tây Nguyên</strong></a></p>

            		<p >Cập nhât <strong style="font-size: 14px;">14/10/2016</strong></p>

            		<p >Thuộc <strong style="font-size: 14px;">Công nghệ sinh học</strong></p>

            		<p >Thông qua việc thực hiện Đề tài “Nghiên cứu phát triển và ứng dụng một số chế phẩm có nguồn gốc sinh...</p>
			    </div>
			    <div class="w3-col l3 m6 w3-margin-bottom">
			      	<p style="font-size:14px; padding-bottom:10px"><a href="/products/che-pham-sinh-hoc-trong-canh-tac-che-ca-phe-ho-tieu-o-tay-nguyen-113.html" style="color:#09C"><strong style="font-size: 15px;">Chế phẩm sinh học trong canh tác chè, cà phê, hồ tiêu ở Tây Nguyên</strong></a></p>

            		<p >Cập nhât <strong style="font-size: 14px;">14/10/2016</strong></p>

            		<p >Thuộc <strong style="font-size: 14px;">Công nghệ sinh học</strong></p>

            		<p >Thông qua việc thực hiện Đề tài “Nghiên cứu phát triển và ứng dụng một số chế phẩm có nguồn gốc sinh...</p>
			    </div>
			    <div class="w3-col l3 m6 w3-margin-bottom">
			      	<p style="font-size:14px; padding-bottom:10px"><a href="/products/che-pham-sinh-hoc-trong-canh-tac-che-ca-phe-ho-tieu-o-tay-nguyen-113.html" style="color:#09C"><strong style="font-size: 15px;">Chế phẩm sinh học trong canh tác chè, cà phê, hồ tiêu ở Tây Nguyên</strong></a></p>

            		<p >Cập nhât <strong style="font-size: 14px;">14/10/2016</strong></p>

            		<p >Thuộc <strong style="font-size: 14px;">Công nghệ sinh học</strong></p>

            		<p >Thông qua việc thực hiện Đề tài “Nghiên cứu phát triển và ứng dụng một số chế phẩm có nguồn gốc sinh...</p>
			    </div>
			    <div class="w3-col l3 m6 w3-margin-bottom">
			      	<p style="font-size:14px; padding-bottom:10px"><a href="/products/che-pham-sinh-hoc-trong-canh-tac-che-ca-phe-ho-tieu-o-tay-nguyen-113.html" style="color:#09C"><strong style="font-size: 15px;">Chế phẩm sinh học trong canh tác chè, cà phê, hồ tiêu ở Tây Nguyên</strong></a></p>

            		<p >Cập nhât <strong style="font-size: 14px;">14/10/2016</strong></p>

            		<p >Thuộc <strong style="font-size: 14px;">Công nghệ sinh học</strong></p>

            		<p >Thông qua việc thực hiện Đề tài “Nghiên cứu phát triển và ứng dụng một số chế phẩm có nguồn gốc sinh...</p>

			    </div>
			  </div>
			</div>



		{{-- 	đối tác --}}

			<div class="w3-content w3-padding" style="max-width:1564px">

			  <!-- Danh mục -->
			  	<div class="w3-container w3-padding-32" id="projects">
				    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-12">Đối tác</h3>
				</div>

				<div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: auto;">
				    <!-- Indicators -->
				    <!-- Wrapper for slides -->
				    <div class="carousel-inner" role="listbox">
				      	<div class="item active">
				            <div class="w3-col l2 m4  w3-margin-bottom">
							    <span class="span_v">
							    	<a href="http://khoahoctot.vn/profiles/nguyen-lan-dung-14366.html" title="GS.TS.Nguyễn Lân Dũng">

									<img src="https://www.w3schools.com/w3images/house4.jpg" class="img2"><br>

									<span>Đại học thái nguyên</span>

									</a>

								</span>
							</div>
							<div class="w3-col l2 m4  w3-margin-bottom">
							    <span class="span_v">
							    	<a href="http://khoahoctot.vn/profiles/nguyen-lan-dung-14366.html" title="GS.TS.Nguyễn Lân Dũng">

									<img src="https://www.w3schools.com/w3images/house4.jpg" class="img2"><br>

									<span>Đại học thái nguyên</span>

									</a>

								</span>
							</div>
						    <div class="w3-col l2 m4  w3-margin-bottom">
						      	<span class="span_v">
							    	<a href="http://khoahoctot.vn/profiles/nguyen-lan-dung-14366.html" title="GS.TS.Nguyễn Lân Dũng">

									<img src="https://www.w3schools.com/w3images/house4.jpg" class="img2"><br>

									<span>Đại học thái nguyên</span>

									</a>

								</span>
						    </div>
						    <div class="w3-col l2 m4  w3-margin-bottom">
						      	<span class="span_v">
							    	<a href="http://khoahoctot.vn/profiles/nguyen-lan-dung-14366.html" title="GS.TS.Nguyễn Lân Dũng">

									<img src="https://www.w3schools.com/w3images/house4.jpg" class="img2"><br>

									<span>Đại học thái nguyên</span>

									</a>

								</span>
						    </div>
						    <div class="w3-col l2 m4  w3-margin-bottom">
						      	<span class="span_v">
							    	<a href="http://khoahoctot.vn/profiles/nguyen-lan-dung-14366.html" title="GS.TS.Nguyễn Lân Dũng">

									<img src="https://www.w3schools.com/w3images/house4.jpg" class="img2"><br>

									<span>Đại học thái nguyên</span>

									</a>

								</span>
						    </div>
						    <div class="w3-col l2 m4  w3-margin-bottom">
						      	<span class="span_v">
							    	<a href="http://khoahoctot.vn/profiles/nguyen-lan-dung-14366.html" title="GS.TS.Nguyễn Lân Dũng">

									<img src="https://www.w3schools.com/w3images/house4.jpg" class="img2"><br>

									<span>Đại học thái nguyên</span>

									</a>

								</span>
						    </div>
						</div>


						<div class="item">
				            <div class="w3-col l2 m4  w3-margin-bottom">
							    <span class="span_v">
							    	<a href="http://khoahoctot.vn/profiles/nguyen-lan-dung-14366.html" title="GS.TS.Nguyễn Lân Dũng">

									<img src="https://www.w3schools.com/w3images/house4.jpg" class="img2"><br>

									<span>Đại học thái nguyên</span>

									</a>

								</span>
							</div>
							 <div class="w3-col l2 m4  w3-margin-bottom">
							    <span class="span_v">
							    	<a href="http://khoahoctot.vn/profiles/nguyen-lan-dung-14366.html" title="GS.TS.Nguyễn Lân Dũng">

									<img src="https://www.w3schools.com/w3images/house4.jpg" class="img2"><br>

									<span>Đại học thái nguyên</span>

									</a>

								</span>
							</div>
							 <div class="w3-col l2 m4  w3-margin-bottom">
							    <span class="span_v">
							    	<a href="http://khoahoctot.vn/profiles/nguyen-lan-dung-14366.html" title="GS.TS.Nguyễn Lân Dũng">

									<img src="https://www.w3schools.com/w3images/house4.jpg" class="img2"><br>

									<span>Đại học thái nguyên</span>

									</a>

								</span>
							</div>
						    <div class="w3-col l2 m4  w3-margin-bottom">
						      	<span class="span_v">
							    	<a href="http://khoahoctot.vn/profiles/nguyen-lan-dung-14366.html" title="GS.TS.Nguyễn Lân Dũng">

									<img src="https://www.w3schools.com/w3images/house4.jpg" class="img2"><br>

									<span>Đại học thái nguyên</span>

									</a>

								</span>
						    </div>
						    <div class="w3-col l2 m4  w3-margin-bottom">
						      	<span class="span_v">
							    	<a href="http://khoahoctot.vn/profiles/nguyen-lan-dung-14366.html" title="GS.TS.Nguyễn Lân Dũng">

									<img src="https://www.w3schools.com/w3images/house4.jpg" class="img2"><br>

									<span>Đại học thái nguyên</span>

									</a>

								</span>
						    </div>
						     <div class="w3-col l2 m4 w3-margin-bottom">
						      	<span class="span_v">
							    	<a href="http://khoahoctot.vn/profiles/nguyen-lan-dung-14366.html" title="GS.TS.Nguyễn Lân Dũng">

									<img src="https://www.w3schools.com/w3images/house4.jpg" class="img2"><br>

									<p>Đại học thái nguyên</p>

									</a>

								</span>
						    </div>
						</div>
				    </div>


				    <!-- Left and right controls -->
				    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="width:0%">
				      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				      <span class="sr-only">Previous</span>
				    </a>
				    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="width:0%">
				      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				      <span class="sr-only">Next</span>
				    </a>

				</div>
			</div>	


			<div class="w3-content w3-padding" style="max-width:1564px" >
				<div class="w3-container w3-padding-32" id="projects">
				    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-12">Tin tức </h3>
				</div>
				<div class="col-lg-6">
					<div class="fl">

						<div class="clearfix newstop">
							<p style="font-size:14px;"><a href="/products/che-pham-sinh-hoc-trong-canh-tac-che-ca-phe-ho-tieu-o-tay-nguyen-113.html" style="color:#09C"><strong style="font-size: 15px;">Tin tức phổ biến</strong></a></p>
							     

							   <ul class="ul_listloop fr" style="padding-top: 0px;">

							 

							    <li><a title="Tháp Eiffel - Niềm tự hào của người Pháp" href="/articles/thap-eiffel-niem-tu-hao-cua-nguoi-phap-2720.html">Tháp Eiffel - Niềm tự hào của người Pháp</a></li>

							 

							    <li><a title="&quot;Con đường Mặt trời&quot; dành cho xe đạp độc nhất vô nhị tại Hàn Quốc" href="/articles/con-duong-mat-troi-danh-cho-xe-dap-doc-nhat-vo-nhi-tai-han-quoc-2719.html">"Con đường Mặt trời" dành cho xe đạp độc nhất vô nhị tại Hàn Quốc</a></li>

							 

							    <li><a title="7 vật thể lớn nhất con người từng phóng vào không gian" href="/articles/7-vat-the-lon-nhat-con-nguoi-tung-phong-vao-khong-gian-2718.html">7 vật thể lớn nhất con người từng phóng vào không gian</a></li>

							 

							    <li><a title="Năm ánh sáng là gì? Một năm ánh sáng bằng bao nhiêu km?" href="/articles/nam-anh-sang-la-gi-mot-nam-anh-sang-bang-bao-nhieu-km-2717.html">Năm ánh sáng là gì? Một năm ánh sáng bằng bao nhiêu km?</a></li>

							 

							    <li><a title="Xe bay cá nhân đầu tiên trên thế giới thử nghiệm thành công" href="/articles/xe-bay-ca-nhan-dau-tien-tren-the-gioi-thu-nghiem-thanh-cong-2716.html">Xe bay cá nhân đầu tiên trên thế giới thử nghiệm thành công</a></li>

							 

							    <li><a title="13 năm nữa con người thọ trung bình 90 tuổi" href="/articles/13-nam-nua-con-nguoi-tho-trung-binh-90-tuoi-2715.html">13 năm nữa con người thọ trung bình 90 tuổi</a></li>

							 

							    <li><a title="Tin cực vui cho bệnh nhân ung thư cần xạ trị" href="/articles/tin-cuc-vui-cho-benh-nhan-ung-thu-can-xa-tri-2714.html">Tin cực vui cho bệnh nhân ung thư cần xạ trị</a></li>

							 

							    <li><a title="Phẫu thuật thắt dạ dày giúp điều trị bệnh tiểu đường tuýp 2" href="/articles/phau-thuat-that-da-day-giup-dieu-tri-benh-tieu-duong-tuyp-2-2713.html">Phẫu thuật thắt dạ dày giúp điều trị bệnh tiểu đường tuýp 2</a></li>

							    

							</ul>

						</div>

					</div>
				</div>
				<div class="col-lg-6">
					<!-- Add Google Maps -->
					<div id="map_canvas"></div>

				</div>
			</div>

		</div>
		<div class="row div-footer">
			<div class="container">
				<div class="col-md-3 display-block">
					<ul>
						<li><a href="#">Dữ liệu chuyên gia KH&CN</a></li>
						<li><a href="#">Dữ liệu đề tài, dự án KH&CN các cấp</a></li>
						<li><a href="#">Dữ liệu phát minh, sáng chế, giải pháp</a></li>
						<li><a href="#">Dữ liệu sản phẩm, công nghệ mới</a></li>
					</ul>
				</div>
				<div class="col-md-3 display-block">
					<ul>
						<li><a href="#">Dữ liệu doanh nghiệp KH&CN</a></li>
						<li><a href="#">Văn phòng đại diện tại nước ngoài</a></li>
						<li><a href="#">Hướng dẫn sử dụng</a></li>
						<li><a href="#">Giới thiệu về NTBIC</a></li>
					</ul>
				</div>
				<div class="col-md-3 display-block">
					<p>LIÊN HỆ:</p>
					<p>Trung tâm ươm tạo Công nghệ và Doanh nghiệp Khoa học Công nghệ- Viện ứng dụng công nghệ</p>
					<p>Địa chỉ: 25- Lê Thánh Tông- Hoàn Kiếm- Hà Nội</p>
					<p>Hotline: 0439336570</p>
					<p>Email: info@ntbic.com</p>
					<p>Facebook:</p>
				</div>
				<div class="col-md-3 display-block">
					Google map
				</div>
			</div>
		</div>
	</div>

	<!-- script -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="{{ URL::asset('public/js/my_script.js') }}"></script>
</body>
</html>
