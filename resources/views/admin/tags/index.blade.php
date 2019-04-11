@extends('layouts.admin.main')
@section('title', 'Listar')
@section('content')
<div class="container-fluid">
<div class="row">

<div class="col-md-12">
	<ol class="breadcrumb">
	  <li><a href="{{ route('admin.index') }}">Admin</a></li>
	  <li><a href="{{ route('admin.tags.index') }}">Etiquetas</a></li>
	  <li class="active">Listar</li>
	</ol>
	<h4 class="text-center text-uppercase custom-title" id="recientes">listado de Etiquetas <i class="fa fa-tag"></i></h4>	

	<div class="form-group">
		<a href="{{ route('admin.tags.create') }}" class="btn btn-primary">
		<i class="fa fa-tag"></i>
		Crear nueva tags
		</a>
	</div>

	<table class="table table-striped table-hover custom-table">
	<thead> 	
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Opciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($tags as $tag)
			<tr>
			<td> {{ $tag->id }} </td>
			<td> {{ $tag->name }} </td>
			<td>
				<a href="{{ route('admin.tags.edit', $tag->id ) }}" class="btn btn-warning">  
					<i class="fas fa-edit"></i> 
				</a>
				{!! Form::open(['route' => ['admin.tags.destroy', $tag->id], 'method' => 'DELETE', 'class' => 'inline-block']) !!}
				<button type="submit" class="btn btn-danger" onclick="return confirm('Esta segura de eliminarlo')"> 
					<i class="fas fa-trash-alt"></i>
				</button>
				{!! Form::open() !!}
			</td>
			</tr>
		@endforeach()
	</tbody>
	</table>
	<center>{!! $tags->render() !!}</center>
</div><!--/.col-->

</div><!--/.row-->
</div><!--/.container-->
@endsection()