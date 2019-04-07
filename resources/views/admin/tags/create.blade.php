@extends('layouts.admin.main')
@section('title','Crear')
@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-6 col-md-offset-3">
<ol class="breadcrumb">
  <li><a href="{{ route('admin.index') }}">Admin</a></li>
  <li><a href="{{ route('admin.tags.index') }}">Etiquetas</a></li>
  <li class="active">Crear</li>
</ol>
<h4 class="text-center text-uppercase custom-title" id="recientes">Registro de Etiquetas</h4>	

{!! Form::open(['route' => 'admin.tags.store', 'method' => 'POST']) !!}

	<div class="form-group">
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
		<a href="{{ route('admin.tags.index') }}" class="btn btn-info">
			<i class="fas fa-reply"></i>
			Atras
		</a>
	</div>
		
{!! Form::close() !!}

</div><!--/.col-->
</div><!--/.row-->
</div><!--/.container-->
@endsection
