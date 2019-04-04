<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Blog') | Home </title>
	<link rel="stylesheet" href="{{ asset('css/index.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('fonts/font-awesome/css/font-awesome.css') }}">
</head>
<body>
<div id="main_container" class="container-fluid">
	
	<header id="main_header">
		@include('front.partials.navbar')
	</header>

	<div id="main_content">
		<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="jumbotron">
				  <h1>Hello, world!</h1>
				  <p>...</p>
				  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
				</div><!--/.jumbotron-->
			</div><!--/.col-->
		</div><!--/.row-->
		</div>
	</div><!--/#main_body-->

	<footer  id="main_footer">
		<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p>Todos los derechos reservados <span class="glyphicon glyphicon-copyright-mark"></span> 2019 | Kevin Cisnero</p>
			</div><!--/.col-->
		</div><!--/.row-->
		</div><!--/.container-->
	</footer><!--/#main_footer-->

	<script type="text/javascript" src="{{ asset('plugins/jquery/jquery-2.1.4.js') }}"></script>
	<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
	@yield('js')

</div><!--/#main_container-->
</body>
</html>