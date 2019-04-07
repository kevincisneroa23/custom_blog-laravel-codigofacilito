@extends('layouts.admin.main')
@section('title', 'Listar')
@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-12">

<ol class="breadcrumb">
  <li><a href="#">Admin</a></li>
  <li><a href="#">Usuarios</a></li>
  <li class="active">Listar</li>
</ol>
<h4 class="text-center custom-title" id="recientes">LISTADO DE USUARIOS</h4>	

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
		<?php for ($i=0; $i < 5 ; $i++) {  ?>
			<tr>
			<td> ID</td>
			<td> Nombre</td>
			<td> Correo</td>
			<td> Tipo </td>
			<td>
				<a href="{{ route('admin.users.edit', 'id' ) }}" class="btn btn-warning">  
					<i class="fas fa-edit"></i> 
				</a>

				<a href="{{ route('admin.users.destroy', 'id') }}" class="btn btn-danger" onclick="return confirm('Esta segura de eliminarlo')"> 
					<i class="fas fa-trash-alt"></i>
				</a>
			</td>
			</tr>
		<?php } ?>
	</tbody>
</table>

</div><!--/.col-->
</div><!--/.row-->
</div><!--/.container-->
@endsection()