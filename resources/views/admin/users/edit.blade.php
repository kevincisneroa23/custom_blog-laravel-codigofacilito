@extends('layouts.admin.main')
@section('title','Editar')
@section('content')
<div class="container-fluid">
<div class="row">

<div class="col-md-6 col-md-offset-3">
	<ol class="breadcrumb">
	  <li><a href="{{ route('admin.index') }}">Admin</a></li>
	  <li><a href="{{ route('admin.users.index') }}">Usuarios</a></li>
	  <li class="active">Editar</li>
	</ol>
	<h4 class="text-center text-uppercase custom-title" id="recientes">actualizar usuario USUARIO</h4>	

	{!! Form::open(['route' => ['admin.users.update', $user->id],'method' => 'PUT', 'files' => true]) !!}
	<div class="form-group">
		<i class="fa fa-asterisk text-danger"></i>
		{!! Form::label('name','Nombre') !!}
		<div class="input-group">
		<span class="input-group-addon"><i class="fas fa-user"></i></span>
		{!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Nombre Completo', 'required']) !!}
		</div>
	</div>

	<div class="form-group">
		<i class="fa fa-asterisk text-danger"></i>
		{!! Form::label('email','Correo Electronico') !!}
		<div class="input-group">
		<span class="input-group-addon"><i class="fas fa-envelope"></i></span>
		{!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required']) !!}
		</div>
	</div>

	<div class="form-group">
		<i class="fa fa-asterisk text-danger"></i>
		{!! Form::label('type', 'Tipo') !!}
		<div class="input-group"> 
		<span class="input-group-addon"><i class="fas fa-user-friends"></i></span>
		{!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'], $user->type, ['class' => 'form-control', 'placeholder' => 'Seleccione una opcion...', 'required']) !!}
		</div>
	</div>
	<div class="form-group  text-center">
		<img src="{{ asset("images/perfiles/$user->img_perfil") }}" class="img-rounded" height="150px" width="150px">
	</div>
	<div class="form-group">
		{!! Form::label('img_perfil', 'Imagen de Perfil') !!}
		{!! Form::file('img_perfil', ['class' => 'filestyle', 'id' => 'img_perfil', 'data-buttonText' => 'Buscar...', 'data-placeholder' => "$user->img_perfil" ]) !!}
	</div>
	
	<!-- =====BOTONES===== -->
	<div class="form-group text-center">
		<button type="submit" class="btn btn-primary">
			<i class="fas fa-save"></i>
			Guardar
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

