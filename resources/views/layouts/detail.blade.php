@extends('layouts.master')

<!-- content -->
@section('content')
	<div class="row">
		<div class="col-md-9 main-content">
			@yield('main-content')
		</div>
		<div class="col-md-3 right-side-bar">
			SIDEBAR
		</div>
	</div>
@endsection
<!-- end content -->