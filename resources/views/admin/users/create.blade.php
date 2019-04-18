@extends('layouts.admin.main')
@section('title','Crear')
@section('content')
<div class="container-fluid">
<div class="row">

<div class="col-md-6 col-md-offset-3">
	<ol class="breadcrumb">
	  <li><a href="{{ route('admin.index') }}">Admin</a></li>
	  <li><a href="{{ route('admin.users.index') }}">Usuarios</a></li>
	  <li class="active">Crear</li>
	</ol>
	<h4 class="text-center  text-uppercase custom-title" id="recientes">registrar usuario</h4>	

	{!! Form::open(['route' => 'admin.users.store','method' => 'POST', 'files' => true]) !!}
	<div class="form-group">
		<i class="fa fa-asterisk text-danger"></i>
		{!! Form::label('name','Nombre') !!}
		<div class="input-group">
		<span class="input-group-addon"><i class="fas fa-user"></i></span>
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre Completo', 'required']) !!}
		</div>
	</div>

	<div class="form-group">
		<i class="fa fa-asterisk text-danger"></i>
		{!! Form::label('email','Correo Electronico') !!}
		<div class="input-group">
		<span class="input-group-addon"><i class="fas fa-envelope"></i></span>
		{!! Form::email('email',null, ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required']) !!}
		</div>
	</div>

	<div class="form-group">
		<i class="fa fa-asterisk text-danger"></i>
		{!! Form::label('password','Contraseña') !!}
		<div class="input-group">
		<span class="input-group-addon"><i class="fas fa-key"></i></span>
		{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '************', 'required']) !!}
		</div>
	</div>

	<div class="form-group">
		<i class="fa fa-asterisk text-danger"></i>
		{!! Form::label('type', 'Tipo') !!}
		<div class="input-group"> 
		<span class="input-group-addon"><i class="fas fa-user-friends"></i></span>
		{!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una opcion...', 'required']) !!}
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
		<a href="{{ route('admin.users.index') }}" class="btn btn-info">
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
			<li><b>Nombre:</b> Minimo: 4, Maximo 120 caracteres.</li>
			<li><b>Correo:</b> Minimo: 4, Maximo 100 caracteres, Ej: correo@gmail.com .</li>
			<li><b>Contraseña:</b> Minimo: 4 , Maximo: 250 caracteres.</li>
		</ul>
	</div>
</div><!--/.col-->

</div><!--/.row-->
</div><!--/.container-->
@endsection
