@extends('layouts.front.main')
@section('title','Registro')
@section('content')

<div class="col-md-6 col-md-offset-3">
	<ol class="breadcrumb">
	  <li><a href="{{ route('front.index') }}">Invitado</a></li>
	  <li class="active">Registrar</li>
	</ol>
	<h4 class="text-center  text-uppercase custom-title" id="recientes">Registrar Miembro</h4>	

	{!! Form::open(['route' => 'admin.auth.register','method' => 'POST', 'files' => true]) !!}
	<div class="form-group">
		{!! Form::label('name','Nombre') !!}
		<div class="input-group">
		<span class="input-group-addon"><i class="fas fa-user"></i></span>
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre Completo', 'required']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('email','Correo Electronico') !!}
		<div class="input-group">
		<span class="input-group-addon"><i class="fas fa-envelope"></i></span>
		{!! Form::email('email',null, ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required']) !!}
		</div>
	</div>

	<div class="form-group">
		{!! Form::label('password','Contraseña') !!}
		<div class="input-group">
		<span class="input-group-addon"><i class="fas fa-key"></i></span>
		{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '************', 'required']) !!}
		</div>
	</div>


	<div class="form-group">
		{!! Form::label('img_perfil', 'Imagen de Perfil') !!}
		{!! Form::file('img_perfil', ['class' => 'filestyle', 'id' => 'img_perfil', 'data-buttonText' => 'Buscar...']) !!}
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
		<a href="{{ route('front.index') }}" class="btn btn-info">
			<i class="fas fa-reply"></i>
			Atras
		</a>
	</div>
	{!! Form::close() !!}
</div><!--/.col-->

@endsection()