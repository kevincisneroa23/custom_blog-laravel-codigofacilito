@extends('layouts.admin.main')
@section('title','Crear')
@section('content')
<div class="container-fluid">
<div class="row">

<div class="col-md-6 col-md-offset-3">
	<ol class="breadcrumb">
	  <li><a href="{{ route('admin.index') }}">Admin</a></li>
	  <li><a href="{{ route('admin.categories.index') }}">Categorias</a></li>
	  <li class="active">Crear</li>
	</ol>
	<h4 class="text-center text-uppercase custom-title" id="recientes">registro de categorias</h4>	

	{!! Form::open(['route' => 'admin.categories.store', 'method' => 'POST']) !!}
	<div class="form-group">
		<i class="fa fa-asterisk text-danger"></i>
		{!! Form::label('name', 'Nombre') !!}
		<div class="input-group">
		<span class="input-group-addon"><i class="fas fa-list-ul"></i></span>
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de categoria', 'required']) !!}
		</div>
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
		<a href="{{ route('admin.categories.index') }}" class="btn btn-info">
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
			<li><b>Nombre:</b> Maximo: 120 caracteres y debe ser único.</li>
		</ul>
	</div><!--container_help-->
</div><!--/.col-->

</div><!--/.row-->
</div><!--/.container-->
@endsection
