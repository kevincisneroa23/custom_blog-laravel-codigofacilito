@extends('layouts.front.main')
@section('title', 'Articulo')
@section('content')

<div class="row">

  <!-- =====PORTADA=====-->
  <div class="portada-container">
    <div class="portada-top-extra">
      <span class="label label-primary">{{$article->category->name}}</span>

      <div class="redes pull-right">
        <span class="label label-info"><i class="fab fa-twitter"></i></span>
        <span class="label label-primary"><i class="fab fa-facebook"></i></span>
        <span class="label label-default"><i class="fas fa-envelope"></i></span>  
      </div>
    </div>
    @foreach($article->images as $image)
      <img  class="img-responsive portada-img" src="{{ asset('images/articles/'.$image->name) }}">
    @endforeach

    <h4 class="text-justify portada-caption">{{ $article->title}}</h4> 
  </div>

<div class="col-md-9">

  <!-- ===== ARTICULO ===== -->
  <i class="fa fa-user"></i>
  <strong class="text-uppercase">{{$article->user->name}}</strong>
  <span class="label custom-label pull-right"><i class="glyphicon glyphicon-time"></i> {{ $article->created_at->diffForHumans() }}</span>&nbsp;
  <span class="label custom-label pull-right"><i class="fa fa-star"></i> ? </span>
  <hr>
  <p class="text-justify">
  	{!! $article->content !!}
  </p>
  
  <hr>

  <!-- ===== AUTOR ===== -->  
  <div class="media">
    <div class="media-left media-middle">
      <a href="#">
        <img src="{{ asset('images/pruebas/autor.png') }}" class="img-circle media-object img-autor">
      </a>
    </div>
    <div class="media-body">
      <h3 class="media-heading">{{ $article->user->name }} <br><small> {{ $article->user->email }}</small></h3>
    </div>
  </div>

  <hr>

  <!-- ===== CATEGORIA Y ETIQUETAS ===== -->
  <div class="text-let custom-section">
  	<span class="category">
  	Categoria: <span class="label label-primary">{{ $article->category->name }}</span>
  	</span>
    
    <div class="redes pull-right">
        <span class="label label-info"><i class="fab fa-twitter"></i></span>
        <span class="label label-primary"><i class="fab fa-facebook"></i></span>
        <span class="label label-default"><i class="fas fa-envelope"></i></span>  
    </div>

  	<span class="tags">
  	Etiquetas: 
    @foreach($article->tags as $tag)
  	<span class="label label-default">{{ $tag->name }}</span>
    @endforeach
  	</span>
  </div><!--/.custom-section-->

  <!-- ===== RELACIONADOS  ===== -->
  <div class="row">
    <div class="col-md-12">
      <h4 class="text-center custom-title">Temas Relacionados</h4>  
    </div><!--/.col-->
    @foreach($articlesRelationados as $articleRelacionado)
    <div class="col-md-6">
      <div class="media custom-media">
        <div class="media-left">
        <a href="#">
          @foreach($articleRelacionado->images as $image2)
          <img class="media-object" src="{{ asset('images/articles/'.$image2->name) }}" alt="..." width="150" height="120">
          @endforeach
        </a>
        </div>
        <div class="media-body">
        <h4 class="media-heading"><a href="#">{{ substr($articleRelacionado->title, 0, 18) }}...</a></h4>
          <p class="text-justify">{!! substr($articleRelacionado->content, 0, 40) !!}</p>
          <div class="extra">
            <span class="badge bg-azul" title="Programacion"><i class="glyphicon glyphicon-folder-open"></i>&nbsp;&nbsp;{{ substr($articleRelacionado->category->name, 0 , 1) }}</span>  
            <span class="badge bg-azul"><i class="fa fa-star"></i> ?</span>
            <span class="badge bg-azul"><i class="glyphicon glyphicon-time"></i>{{ $articleRelacionado->created_at->diffForHumans() }}</span>
          </div><!--/.extra-->  
        </div><!--/.media-body-->
      </div><!--/.media-->
    </div><!--/.col-->
    @endforeach


  </div><!--/.row-->
  
  <!-- ===== COMENTARIOS ===== -->
  <h3 class="text-center custom-title">  ¿Te gusto? Dale  <button class="btn btn-primary">Me Gusta</button> y dejanos un comentario.
  </h3>
  <div class="panel panel-custom"  id="panel-tags">
    <div class="panel-heading">
      <h3 class="panel-title">Comentarios:</h3>

    </div>
    <div class="panel-body">
      <div class="panel panel-primary">
        <div class="panel-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        </div>
      </div>  
    </div><!--/.panel-body-->
  </div><!--/#panel-tags-->

</div><!--/.col-->  
<div class="col-md-3">
<!-- ===== ASIDE RECIENTES  ===== -->  
  @foreach($articlesRecends as $articleRecend)
    <h4 class="text-center custom-title">Recientes</h4>  
    <div class="thumbnail custom-thumbnail">
      @foreach($articleRecend->images as $image3)
        <img src="{{ asset('images/articles/'.$image3->name) }}" >
      @endforeach
      <div class="caption text-center">
        <h4><a href="{{ route('front.show.article', 'title') }}">{{ substr($articleRecend->title,0,50) }}...</a></h4>    
      </div><!--/.caption-->
      <div class="extra text-center">

        <span class="badge bg-azul" title="{{ $articleRecend->category->name }}"><i class="glyphicon glyphicon-folder-open"></i>&nbsp;&nbsp;{{ substr($articleRecend->category->name,0,1) }}
        </span>  
        <span class="badge bg-azul"><i class="glyphicon glyphicon-time"></i> {{ $articleRecend->created_at->diffForHumans() }}</span>
      </div><!--/.extra--> 
    </div><!--/.thumbnail-->
  @endforeach
</div><!--/.col-->  
</div><!--/.row-->


@endsection()