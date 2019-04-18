@extends('layouts.admin.main')
@section('title','Registrar Articulo')
@section('content')
<div class="container-fluid">
<div class="row">

<div class="col-md-12">
	<ol class="breadcrumb">
	  <li><a href="{{ route('admin.index') }}">Admin</a></li>
	  <li><a href="{{ route('admin.articles.index') }}">Articulos</a></li>
	  <li class="active">Crear</li>
	</ol>
	<h4 class="text-center  text-uppercase custom-title" id="recientes">registrar articulo</h4>	

	{!! Form::open(['route' => 'admin.articles.store', 'method' => 'POST', 'files' => true]) !!}
	<div class="form-group">
		<i class="fa fa-asterisk text-danger"></i>
		{!! Form::label('title','Titulo') !!}
		{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Titulo del articulo', 'require']) !!}
	</div>

	<div class="form-group">
		<i class="fa fa-asterisk text-danger"></i>
		{!! Form::label('category_id','Categoria') !!}
		{!! Form::select('category_id', $categories , null, ['class' => 'form-control select-category', 'placeholder' => 'Seleccione una cateoria...','required']) !!}
	</div>

	<div class="form-group">
		<i class="fa fa-asterisk text-danger"></i>
		{!! Form::label('content','Contenido') !!}
		{!! Form::textarea('content', null, ['class' => 'form-control textarea-content','required']) !!}
	</div>

	<div class="form-group">
		<i class="fa fa-asterisk text-danger"></i>
		{!! Form::label('tags','Etiquetas') !!}
		{!! Form::select('tags[]', $tags , null, ['class' => 'form-control select-tag', 'multiple', 'required']) !!}
	</div>

	<div class="form-group">
		<i class="fa fa-asterisk text-danger"></i>
		{!! Form::label('image', 'Imagen de Portada') !!}
		{!! Form::file('image', ['class' => 'filestyle', 'id' => 'image', 'data-buttonText' => 'Buscar...'], 'required' ) !!}
	</div>

	<!-- =====BOTONES===== -->
	<div class="form-group text-center">
		<button type="submit" class="btn btn-primary">
			<i class="fas fa-save"></i>
			Guardar
		</button>
		<button type="reset" class="btn btn-default">
			<i class="fas fa-eraser"></i>
			Limpiar
		</button>
		<a href="{{ route('admin.articles.index') }}" class="btn btn-info">
			<i class="fas fa-reply"></i>
			Atras
		</a>
	</div>
	{!! Form::close() !!}

	<div class="form-group container_help">
		<hr>
		<i class="fa fa-question-circle"></i>
		<u><b>Ayuda:</b></u> Todos los campos con <i class="fa fa-asterisk text-danger"></i> son obligatorios.

		<button class="btn btn-info btn-xs"  type="button" data-toggle="collapse" data-target="#box_help" aria-expanded="false" aria-controls="box_help">Ver mas. <i class="fa fa-question-circle"></i></button>
		
		<ul class="collapse" id="box_help">
			<li><b>Titulo:</b> Minimo: 8, Maximo 150 caracteres y debe ser único.</li>
			<li><b>Contenido:</b> Minimo: 50 caracteres.</li>
			<li><b>Etiquetas:</b> Minimo: 1 , Maximo: 5 seleccionadas.</li>
		</ul>
	</div>
</div><!--/.col-->

</div><!--/.row-->
</div><!--/.container-->
@endsection()

@section('js')
<script type="text/javascript">
	/* Plugin Chosen para los Select Personalizados*/
	$('.select-tag').chosen({
		placeholder_text_multiple: 'Seleccione un maximo de 3 tags',
		max_selected_options: 3,
		no_results_text: 'No se encontro el tag'
	});
	$('.select-category').chosen({
		placeholder_text_multiple: 'Seleccione una categoria'
	});

	/* Plugin Trumbowyg para cajas de textos largos */
	$('.textarea-content').trumbowyg();
</script>
@endsection