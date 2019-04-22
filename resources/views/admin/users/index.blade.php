@extends('layouts.admin.main')
@section('title', 'Listar')
@section('content')
<div class="container-fluid">
<div class="row">

<div class="col-md-12">
	<ol class="breadcrumb">
	  <li><a href="{{ route('admin.index') }}">Admin</a></li>
	  <li><a href="{{ route('admin.users.index') }}">Usuarios</a></li>
	  <li class="active">Listar</li>
	</ol>
	<h4 class="text-center text-uppercase custom-title" id="recientes">listado de usuarios</h4>	
</div><!--/.col-->

<div class="col-md-6">
	<div class="form-group">
		<a href="{{ route('admin.users.create') }}" class="btn btn-primary">
			<i class="fa fa-luser-plus"></i>
			Crear nuevo usuario
		</a>
	</div><!--/.form-group-->
</div><!--/.col-->

<div class="col-md-6">
	<div class="form-group">
	<!-- ====BUSCADOR ARTICULOS==== -->
	{!! Form::open(['route' => 'admin.users.index', 'method' => 'get', 'class' => 'pull-right']) !!}
	<div class="input-group">
		{!! Form::text('searchUser', $searchUser, ['class' => 'form-control', 'placeholder' => 'Buscar usuario por nombre', 'required', 'aria-describedby' => 'search']) !!}
		<span class="input-group-btn">
			<button type="submit" class="btn btn-default" id="search">
				<i class="fas fa-search"></i>
			</button>
			<a href="{{ route('admin.users.index') }}" class="btn btn-default" >
				<i class="fas fa-eraser"></i>
			</a>
		</span>
	</div>
	{!! Form::close() !!}
	<!-- ====/BUSCADOR ARTICULOS==== -->
	</div><!--/.form-group-->
</div><!--/.col-->


<div class="col-md-12">

	<table class="table table-striped table-hover custom-table">
	<thead> 	
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Tipo</th>
			<th>Opciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($users as $user)
			<tr>
			<td> {{ $user->id }} </td>
			<td> {{ $user->name }} </td>
			<td> {{ $user->email }} </td>
			<td>
				@if($user->type == 'admin' ) 
					<div class="label label-primary ">{{ $user->type }}</div>
				@else
					<div class="label label-warning ">{{ $user->type }}</div>
				@endif()
			</td>
			<td>
				<a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning">  
					<i class="fas fa-edit"></i> 
				</a>
				{!! Form::open(['route' => ['admin.users.destroy', $user->id],'method' => 'DELETE', 'class' => 'inline-block']) !!}
					<button type="submit" class="btn btn-danger" onclick="return confirm('Esta segura de eliminarlo')"> 
						<i class="fas fa-trash-alt"></i>
					</button>
				{!! Form::close() !!}
			</td>
			</tr>
		@endforeach()
	</tbody>
	</table>
	<center>{{ $users->render() }}</center>
</div><!--/.col-->

</div><!--/.row-->
</div><!--/.container-->
@endsection()