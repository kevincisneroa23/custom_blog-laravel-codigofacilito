<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Blog1 | @yield('title','Blog')</title>
	<link rel="stylesheet" href="{{ asset('css/index.css') }}">
	<link rel="stylesheet" href="{{ asset('fonts/font-awesome/css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
</head>
<body>
<div id="main_container" class="container-fluid">
	
	<header id="main_header">
		@include('layouts.front.nav')
	</header><!--/#main_header-->

	<div id="main_content">
		<div class="container-fluid">
		<div class="row">
			<div class="col-md-9" id="article_container">
				@yield('content')
			</div>
			<div class="col-md-3" id="aside_container">
				@include('layouts.front.aside')
			</div>
		</div><!--/.row-->
		</div><!--/.container-->
	</div><!--/#main_content-->

	<footer  id="main_footer">
		@include('layouts.partials.footer')
	</footer><!--/#main_footer-->

	<script type="text/javascript" src="{{ asset('plugins/jquery/jquery-2.1.4.js') }}"></script>
	<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

</div><!--/#main_container-->
</body>
</html>
