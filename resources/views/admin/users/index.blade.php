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

	<div class="form-group">
		<a href="{{ route('admin.users.create') }}" class="btn btn-primary">
			<i class="fa fa-user-plus"></i>
			Crear nuevo usuario
		</a>
	</div>

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