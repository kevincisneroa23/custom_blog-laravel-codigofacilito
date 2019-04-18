@extends('layouts.admin.main')
@section('title','Editar')
@section('content')
<div class="container-fluid">
<div class="row">

<div class="col-md-6 col-md-offset-3">
	<ol class="breadcrumb">
	  <li><a href="{{ route('admin.index') }}">Admin</a></li>
	  <li><a href="{{ route('admin.tags.index') }}">Etiquetas</a></li>
	  <li class="active">Editar</li>
	</ol>
	<h4 class="text-center text-uppercase custom-title" id="recientes">Actualizar Etiqueta</h4>	

	{!! Form::open(['route' => ['admin.tags.update', $tag->id],'method' => 'PUT']) !!}
	<div class="form-group">
		<i class="fa fa-asterisk text-danger"></i>
		{!! Form::label('name','Nombre') !!}
		<div class="input-group">
		<span class="input-group-addon"><i class="fas fa-list-ul"></i></span>
		{!! Form::text('name', $tag->name, ['class' => 'form-control', 'placeholder' => 'Nuevo nombre de etiqueta', 'required']) !!}
		</div>
	</div>
	
	<!-- =====BOTONES===== -->
	<div class="form-group text-center">	
		<button type="submit" class="btn btn-primary">
			<i class="fas fa-save"></i>
			Actualizar
		</button>
		<a href="{{ route('admin.tags.index') }}" class="btn btn-info">
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
			<li><b>Nombre:</b> Maximo: 25 caracteres y debe ser único.</li>
		</ul>
	</div>
</div><!--/.col-->

</div><!--/.row-->
</div><!--/.container-->
@endsection

