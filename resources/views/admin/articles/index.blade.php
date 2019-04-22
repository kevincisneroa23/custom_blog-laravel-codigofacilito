@extends('layouts.admin.main')
@section('title','Listar')
@section('content')
<div class="container-fluid">
<div class="row">

<div class="col-md-12">
	<ol class="breadcrumb">
	  <li><a href="{{ route('admin.index') }}">Admin</a></li>
	  <li><a href="{{ route('admin.articles.index') }}">Articles</a></li>
	  <li class="active">Crear</li>
	</ol>
	<h4 class="text-center text-uppercase custom-title" id="recientes">Listado de articulos</h4>
</div><!--/.col-->

<div class="col-md-6">
	<div class="form-group">
		<a href="{{ route('admin.articles.create') }}" class="btn btn-primary">
			<i class="fa fa-newspaper"></i>
			Crear nueva articulo
		</a>
	</div><!--/.form-group-->
</div><!--/.col-->

<div class="col-md-6">
	<div class="form-group">
	<!-- ====BUSCADOR ARTICULOS==== -->
	{!! Form::open(['route' => 'admin.articles.index', 'method' => 'get', 'class' => 'pull-right']) !!}
	<div class="input-group">
		{!! Form::text('searchArticle', $searchArticle , ['class' => 'form-control', 'placeholder' => 'Buscar articulo por titulo', 'required', 'aria-describedby' => 'search']) !!}
		<span class="input-group-btn">
			<button type="submit" class="btn btn-default" id="search">
				<i class="fas fa-search"></i>
			</button>
			<a href="{{ route('admin.articles.index') }}" class="btn btn-default" >
				<i class="fas fa-eraser"></i>
			</a>
		</span>
	</div>
	{!! Form::close() !!}
	<!-- ====/BUSCADOR ARTICULOS==== -->
	</div><!--/.form-group-->
</div><!--/.col-->


<div class="col-md-12">
	<table class="table table-striped table-hover table-responsive custom-table">
	<thead>
		<tr>
			<th>ID</th>
			<th class="col-md-6">Titulo</th>
			<th>Categoria</th>
			<th>Usuario</th>
			<th>Opciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($articles as $article)
		<tr>
			<td>{{ $article->id }}</td>
			<td>{{ $article->title }}</td>
			<td>{{ $article->category->name }}</td>
			<td>{{ $article->user->name }}</td>
			<td>
				<!-- Large modal -->
				<button type="button" class="btn btn-info hidden" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fas fa-eye"></i></button>

				<a href="{{ route('admin.articles.edit', $article->id ) }}" class="btn btn-warning">
					<i class="fas fa-edit"></i>
				</a>
				{!! Form::open(['route' => ['admin.articles.destroy', $article->id ], 'method' => 'DELETE', 'class' => 'inline-block']) !!}
				<button type="submit" class="btn btn-danger" onclick="return confirm('¿Esta seguro de eliminarlo?')">
					<i class="fas fa-trash"></i>
				</button>
				{!! Form::close() !!}
			</td>
		</tr>
		@endforeach()
	</tbody>
	</table>
</div><!--/.col-->

</div><!--/.row-->
</div><!--/.container-->

<!-- =====VENTANA MODAL ===== -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
	<div class="container-fluid">
	<div class="row">

	<div class="col-md-12">
		<h4 class="text-center  text-uppercase custom-title" id="recientes">Detalle de articulo</h4>	
		<div class="form-group">
			{!! Form::label('title','Titulo') !!}
			{!! Form::text('title', null, ['disabled', 'class' => 'form-control', 'placeholder' => 'Titulo del articulo', 'require']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('category_id','Categoria') !!}
			{!! Form::select('category_id', ['0' => 'Programacion', '1' => 'Diseño'] , null, ['disabled', 'class' => 'form-control select-category', 'placeholder' => 'Seleccione una cateoria...','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('content','Contenido') !!}
			{!! Form::textarea('content', null, ['disabled', 'class' => 'form-control textarea-content','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('tags','Etiquetas') !!}
			{!! Form::select('tags[]', ['0' => 'Programacion', '1' => 'Diseño'] , null, ['disabled', 'class' => 'form-control select-tag', 'id' => 'select-show-tag', 'multiple', 'required']) !!}
		</div>
	</div><!--/.col-->

	</div><!--/.row-->
	</div><!--/.container-->
    </div><!--/.modal-content-->
  </div>
</div>

@endsection()

@section('js')
<script type="text/javascript">
	/* Plugin Chosen para los Select Personalizados*/
	$('#select-show-tag').chosen({
		placeholder_text_multiple: 'Seleccione un maximo de 3 tags',
		max_selected_options: 3,
		no_results_text: 'No se encontro el tag',
        width: "100%" /*<---SOLUCION  PROBLEMA CHOSEN EN MODAL BOOTSTRAP*/
	});

	$('.select-category').chosen({
		placeholder_text_multiple: 'Seleccione una categoria',
		width: "100%"/*<---SOLUCION  PROBLEMA CHOSEN EN MODAL BOOTSTRAP*/
	});
</script>
@endsection