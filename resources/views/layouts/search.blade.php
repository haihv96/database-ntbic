<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="header">
		{{-- code --}}
	</div>
	<div class="search-option">
		@yield('search-option')
		Phần này chứa thanh search và các lựa chọn nhỏ khi search. đã được khoanh vùng đen ở Requirement
	</div>
	<div class="main">
		@yield('main')
	</div>
</body>
</html>