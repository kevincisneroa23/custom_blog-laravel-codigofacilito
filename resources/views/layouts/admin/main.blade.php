<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Blog | @yield('title','Blog')</title>
	<link rel="stylesheet" href="{{ asset('css/index.css') }}">
	<link rel="stylesheet" href="{{ asset('fonts/fontawesome-free-5.8.1-web/css/all.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/chosen/css/chosen.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/trumbowyg/ui/trumbowyg.css') }}">
</head>
<body>
<div id="main_container" class="container-fluid">
	
	<header id="main_header">
		@include('layouts.admin.nav')
	</header><!--/#main_header-->

	<div id="main_content">
		@include('flash::message')
	  	@include('layouts.partials.errors')
	    @yield('content')
	</div><!--/#main_content-->

	<footer  id="main_footer">
		@include('layouts.partials.footer')
	</footer><!--/#main_footer-->

	<script type="text/javascript" src="{{ asset('plugins/jquery/jquery-2.1.4.js') }}"></script>
	<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
	<script type="text/javascript" src="{{ asset('plugins/chosen/js/chosen.jquery.js')}}" ></script>
	<script type="text/javascript" src="{{ asset('plugins/trumbowyg/trumbowyg.js')}}"></script>
	<script type="text/javascript" src="{{ asset('plugins/bootstrap-filestyle/bootstrap-filestyle.js') }}"></script>
	@yield('js')

</div><!--/#main_container-->
</body>
</html>
