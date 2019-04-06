<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Blog | @yield('title','Blog')</title>
	<link rel="stylesheet" href="{{ asset('css/index.css') }}">
	<link rel="stylesheet" href="{{ asset('fonts/font-awesome/css/font-awesome.css') }}">
	<link rel="stylesheet" href="{{ asset('fonts/fontawesome-free-5.8.1-web/css/all.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
</head>
<body>
<div id="main_container" class="container-fluid">
	
	<header id="main_header">
		@include('layouts.front.nav')
	</header><!--/#main_header-->

	<div id="main_content">
		<div class="container-fluid">
			@yield('content')
		</div><!--/.container-->
	</div><!--/#main_content-->

	<footer  id="main_footer">
		@include('layouts.partials.footer')
	</footer><!--/#main_footer-->

	<script type="text/javascript" src="{{ asset('plugins/jquery/jquery-2.1.4.js') }}"></script>
	<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
	@yield('js')
</div><!--/#main_container-->
</body>
</html>
