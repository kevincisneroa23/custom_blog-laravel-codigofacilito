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
@foreach($articles as $article)
<div class="col-md-4">
<div class="thumbnail custom-thumbnail">
	@foreach($article->images as $image)
		<img src="{{ asset('images/articles/'.$image->name) }}" class="img-responsive img-article">
	@endforeach

	<div class="caption">

	<h4 class="text-ajustado"><a href="{{ route('front.show.article',str_slug($article->title, '_')) }}">
		{{ substr($article->title,0,40) }}
		<?php if(strlen($article->title) > 60) echo'...';  ?>
	</a></h4>		
	<p class="text-ajustado">
		{!! substr($article->content,0,65) !!}
		<a href="{{ route('front.show.article', 'title') }}">Ver mas...</a> 
	</p>
	</div><!--/.caption-->
	<div class="extra">
		<span class="badge bg-azul" title="Programacion">
			<i class="glyphicon glyphicon-folder-open"></i>&nbsp; 
			{{ substr($article->category->name,0,5)}}
		</span>	
		<!--<span class="badge bg-azul"><i class="fa fa-star"></i> 5</span>-->
		<span class="badge bg-azul"><i class="glyphicon glyphicon-time"></i> 
			{{ $article->created_at->diffForHumans() }}
		</span>
	</div><!--/.extra--> 
</div><!--/.thumbnail-->
</div><!--/.col-->
@endforeach()

</div><!--/.row-->


<!-- ===== PAGINACION ===== -->	
<div class="row">
<div class="col-md-12 text-center">
<center>{!! $articles->render() !!}</center>
</div><!--/.col-->
</div><!--/.row-->

<!-- ===== ARTICULOS MAS VISTO ===== -->	
<div class="row">
<div class="col-md-12">
	<h4 class="text-center custom-title" id="like">MAS GUSTADOS</h4>	
</div>

@foreach($articles as $article)
<div class="col-md-6">
	<div class="media custom-media">
		<div class="media-left">
		<a href="#">
			@foreach($article->images as $image)
			<img class="media-object" src="{{ asset('images/articles/'.$image->name) }}" alt="..." width="150">
			@endforeach
		</a>
		</div>
		<div class="media-body">
		<h4 class="media-heading"><a href="#">{{ substr($article->title,0,20) }}</a></h4>
			<p class="text-justify">{!! substr($article->content,0,40) !!}</p>
			<div class="extra">
				<span class="badge bg-azul" title="Programacion"><i class="glyphicon glyphicon-folder-open"></i>&nbsp;&nbsp;Pro</span>	
				<span class="badge bg-azul"><i class="fa fa-star"></i> 5</span>
			</div><!--/.extra-->  
		</div><!--/.media-body-->
	</div><!--/.media-->
</div><!--/.col-->
@endforeach

</div><!--/.row-->
</div><!--/.col-->
<center>{!! $articles->render() !!}</center>
<div class="col-md-3">
	<aside>
		@include('front.partials.aside')
	</aside>
</div>
</div><!--/.row-->

@endsection()

@section('js')
	<script type="text/javascript">
		$('body').scrollspy({ target: '#main_nav' })
	</script>

@endsection()