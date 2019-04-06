@extends('layouts.front.main')
@section('title', 'Inicio')
@section('content')


<div class="row">
<div class="col-md-9">

<div class="row">
<div class="col-md-12">
	<h4 class="text-center custom-title" id="recientes">RECIENTES</h4>	
</div>	
<!-- ===== ARTICULOS ===== -->
<div class="col-md-4">
<div class="thumbnail custom-thumbnail">
	<img src="{{ asset('images/pruebas/video2brain.jpg') }}" alt="...">
	<div class="caption">
	<h3><a href="{{ route('front.show.article', 'title') }}"> Thumbnail label</a></h3>		
	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. <a href="#">Ver mas...</a> </p>
	</div><!--/.caption-->
	<div class="extra">
		<span class="badge bg-azul" title="Programacion"><i class="glyphicon glyphicon-folder-open"></i>&nbsp;&nbsp;Pro</span>	
		<span class="badge bg-azul"><i class="fa fa-star"></i> 5</span>
		<span class="badge bg-azul"><i class="glyphicon glyphicon-time"></i> 1 Hora</span>
	</div><!--/.extra--> 
</div><!--/.thumbnail-->
</div><!--/.col-->
<div class="col-md-4">
<div class="thumbnail custom-thumbnail">
	<img src="{{ asset('images/pruebas/video2brain.jpg') }}" alt="...">
	<div class="caption">
	<h3><a href="#"> Thumbnail label</a></h3>								
	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. <a href="#">Ver mas...</a> </p>
	</div><!--/.caption-->
	<div class="extra">
		<span class="badge bg-azul" title="Programacion"><i class="glyphicon glyphicon-folder-open"></i>&nbsp;&nbsp;Pro</span>	
		<span class="badge bg-azul"><i class="fa fa-star"></i> 5</span>
		<span class="badge bg-azul"><i class="glyphicon glyphicon-time"></i> 1 Hora</span>
	</div><!--/.extra--> 
</div><!--/.thumbnail-->
</div><!--/.col--><div class="col-md-4">
<div class="thumbnail custom-thumbnail">
	<img src="{{ asset('images/pruebas/video2brain.jpg') }}" alt="...">
	<div class="caption">
	<h3><a href="#"> Thumbnail label</a></h3>								
	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. <a href="#">Ver mas...</a> </p>
	</div><!--/.caption-->
	<div class="extra">
		<span class="badge bg-azul" title="Programacion"><i class="glyphicon glyphicon-folder-open"></i>&nbsp;&nbsp;Pro</span>	
		<span class="badge bg-azul"><i class="fa fa-star"></i> 5</span>
		<span class="badge bg-azul"><i class="glyphicon glyphicon-time"></i> 1 Hora</span>
	</div><!--/.extra--> 
</div><!--/.thumbnail-->
</div><!--/.col-->

<div class="col-md-4">
<div class="thumbnail custom-thumbnail">
	<img src="{{ asset('images/pruebas/video2brain.jpg') }}" alt="...">
	<div class="caption">
	<h3><a href="#"> Thumbnail label</a></h3>								
	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. <a href="#">Ver mas...</a> </p>
	</div><!--/.caption-->
	<div class="extra">
		<span class="badge bg-azul" title="Programacion"><i class="glyphicon glyphicon-folder-open"></i>&nbsp;&nbsp;Pro</span>	
		<span class="badge bg-azul"><i class="fa fa-star"></i> 5</span>
		<span class="badge bg-azul"><i class="glyphicon glyphicon-time"></i> 1 Hora</span>
	</div><!--/.extra--> 
</div><!--/.thumbnail-->
</div><!--/.col--><div class="col-md-4">
<div class="thumbnail custom-thumbnail">
	<img src="{{ asset('images/pruebas/video2brain.jpg') }}" alt="...">
	<div class="caption">
	<h3><a href="#"> Thumbnail label</a></h3>								
	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. <a href="#">Ver mas...</a> </p>
	</div><!--/.caption-->
	<div class="extra">
		<span class="badge bg-azul" title="Programacion"><i class="glyphicon glyphicon-folder-open"></i>&nbsp;&nbsp;Pro</span>	
		<span class="badge bg-azul"><i class="fa fa-star"></i> 5</span>
		<span class="badge bg-azul"><i class="glyphicon glyphicon-time"></i> 1 Hora</span>
	</div><!--/.extra--> 
</div><!--/.thumbnail-->
</div><!--/.col--><div class="col-md-4">
<div class="thumbnail custom-thumbnail">
	<img src="{{ asset('images/pruebas/video2brain.jpg') }}" alt="...">
	<div class="caption">
	<h3><a href="#"> Thumbnail label</a></h3>								
	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. <a href="#">Ver mas...</a> </p>
	</div><!--/.caption-->
	<div class="extra">
		<span class="badge bg-azul" title="Programacion"><i class="glyphicon glyphicon-folder-open"></i>&nbsp;&nbsp;Pro</span>	
		<span class="badge bg-azul"><i class="fa fa-star"></i> 5</span>
		<span class="badge bg-azul"><i class="glyphicon glyphicon-time"></i> 1 Hora</span>
	</div><!--/.extra--> 
</div><!--/.thumbnail-->
</div><!--/.col-->
</div><!--/.row-->

<!-- ===== PAGINACION ===== -->	
<div class="row">
<div class="col-md-12 text-center">
<nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</div><!--/.col-->
</div><!--/.row-->

<!-- ===== ARTICULOS MAS VISTO ===== -->	
<div class="row">
<div class="col-md-12">
	<h4 class="text-center custom-title" id="like">MAS GUSTADOS</h4>	
</div>	
<div class="col-md-6">
	<div class="media custom-media">
		<div class="media-left">
		<a href="#">
			<img class="media-object" src="{{ asset('images/pruebas/video2brain.jpg') }}" alt="..." width="150">
		</a>
		</div>
		<div class="media-body">
		<h4 class="media-heading"><a href="#">Media heading</a></h4>
			<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaincididunt.</p>
			<div class="extra">
				<span class="badge bg-azul" title="Programacion"><i class="glyphicon glyphicon-folder-open"></i>&nbsp;&nbsp;Pro</span>	
				<span class="badge bg-azul"><i class="fa fa-star"></i> 5</span>
				<span class="badge bg-azul"><i class="glyphicon glyphicon-time"></i> 1 Hora</span>
			</div><!--/.extra-->  
		</div><!--/.media-body-->
	</div><!--/.media-->
</div><!--/.col-->
<div class="col-md-6">
	<div class="media custom-media">
		<div class="media-left">
		<a href="#">
			<img class="media-object" src="{{ asset('images/pruebas/video2brain.jpg') }}" alt="..." width="150">
		</a>
		</div>
		<div class="media-body">
		<h4 class="media-heading"><a href="#">Media heading</a></h4>
			<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaincididunt.</p>
		
			<div class="extra">
				<span class="badge bg-azul" title="Programacion"><i class="glyphicon glyphicon-folder-open"></i>&nbsp;&nbsp;Pro</span>	
				<span class="badge bg-azul"><i class="fa fa-star"></i> 5</span>
				<span class="badge bg-azul"><i class="glyphicon glyphicon-time"></i> 1 Hora</span>
			</div><!--/.extra--> 
		</div><!--/.media-body-->
	</div><!--/.media-->
</div><!--/.col-->
<div class="col-md-6">
	<div class="media custom-media">
		<div class="media-left">
		<a href="#">
			<img class="media-object" src="{{ asset('images/pruebas/video2brain.jpg') }}" alt="..." width="150">
		</a>
		</div>
		<div class="media-body">
		<h4 class="media-heading"><a href="#">Media heading</a></h4>
			<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaincididunt.</p>
		
			<div class="extra">
				<span class="badge bg-azul" title="Programacion"><i class="glyphicon glyphicon-folder-open"></i>&nbsp;&nbsp;Pro</span>	
				<span class="badge bg-azul"><i class="fa fa-star"></i> 5</span>
				<span class="badge bg-azul"><i class="glyphicon glyphicon-time"></i> 1 Hora</span>
			</div><!--/.extra--> 
		</div><!--/.media-body-->
	</div><!--/.media-->
</div><!--/.col-->
<div class="col-md-6">
	<div class="media custom-media">
		<div class="media-left">
		<a href="#">
			<img class="media-object" src="{{ asset('images/pruebas/video2brain.jpg') }}" alt="..." width="150">
		</a>
		</div>
		<div class="media-body">
		<h4 class="media-heading"><a href="#">Media heading</a></h4>
			<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaincididunt.</p>
		
			<div class="extra">
				<span class="badge bg-azul" title="Programacion"><i class="glyphicon glyphicon-folder-open"></i>&nbsp;&nbsp;Pro</span>	
				<span class="badge bg-azul"><i class="fa fa-star"></i> 5</span>
				<span class="badge bg-azul"><i class="glyphicon glyphicon-time"></i> 1 Hora</span>
			</div><!--/.extra--> 
		</div><!--/.media-body-->
	</div><!--/.media-->
</div><!--/.col-->
</div><!--/.row-->

</div><!--/.col-->
<div class="col-md-3">
	<aside>
		@include('layouts.front.aside')
	</aside>
</div>
</div><!--/.row-->

@endsection()

@section('js')
	<script type="text/javascript">
		$('body').scrollspy({ target: '#main_nav' })
	</script>

@endsection()