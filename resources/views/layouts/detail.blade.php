@extends('layouts.master')
@section('style')
	<link rel="stylesheet" type="text/css" href="../../css/detail.css">
@endsection
<!-- content -->
@section('content')
	<div class="row">
		<div class="col-md-9 main-content">
			@yield('main-content')
		</div>
		<div class="col-md-3 right-sidebar">
			<div class="div-sidebar">
				<h5>Đọc nhiều trong tuần</h5>
				<ul class="sidebar-list">
					@for($i=0;$i<10;$i++)
						<li>
							<div class="row sidebar-item">
								<div class="col-md-4">
									<img src="#" alt="img-default" class="img-responsive">
								</div>
								<div class="col-md-8 sidebar-item-info">
									<p>Dây chuyền làm sạch protein trong mủ cao su thiên nhiên</p>
								</div>
							</div>
						</li>
					@endfor
				</ul>
			</div>
		</div>
	</div>
@endsection
<!-- end content -->

@section('script')
@endsection