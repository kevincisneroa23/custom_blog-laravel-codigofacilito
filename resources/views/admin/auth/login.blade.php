@extends('layouts.front.main')
@section('title','Login')
@section('content')
<div class="row">
<div class="col-md-6 col-md-offset-3">
		

	{!! Form::open(['route' => 'admin.auth.login', 'method' => 'POST']) !!}
	<p>Entra o <a href="{{ route('admin.auth.register') }}">Registrate</a> para guardar articulos, comentar o votar en la comunidad</p>
	<hr>	
	<div class="form-group">
		{!! Form::label('email', 'Correo Electronico') !!}
		<div class="input-group">
			<span class="input-group-addon"> <i class="fa fa-envelope-square"></i> </span>
			{!! Form::text('email', null , ['class' => 'form-control', 'placeholder' => 'correo@dominio.com', 'required']) !!}
		</div>
	</div><!--/.form-group-->
	<div class="form-group">
		{!! Form::label('password', 'Contraseña') !!}
		<div class="input-group">
			<span class="input-group-addon"> <i class="fa fa-key"></i> </span>
			{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '********', 'required']) !!}
		</div><!--/.form-group-->
	</div><!--/.form-group-->
	<div class="form-group">
		<button type="submit" class="btn btn-primary"><i class="fa fa-sign-in-alt"></i> Entrar</button>
		<a href="#" class="btn btn-default pull-right" disabled><i class="fa fa-user-shield"></i> Recuperar Contraseña</a>
	</div><!--/.form-group-->
	<hr>
	<div class="form-group">
		<a href="#" class="btn btn-primary" disabled>
			<i class="fab fa-facebook"></i> Entrar con Facebook
		</a>
		<a href="#"  class="btn btn-info">
			<i class="fab fa-twitter-square " disabled></i> Entrar con Twitter
		</a>
		<a href="{{ route('admin.auth.register') }}" class="btn btn-success">
			<i class="fa fa-home"></i>
			 Registrarse
		</a>
	</div><!--/.form-group-->	
	{!! Form::close() !!}

</div><!--/.col-->
</div><!--/.row-->	
@endsection()

