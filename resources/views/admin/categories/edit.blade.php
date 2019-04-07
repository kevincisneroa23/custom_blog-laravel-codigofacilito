@extends('layouts.admin.main')
@section('title','Editar')
@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-6 col-md-offset-3">


<ol class="breadcrumb">
  <li><a href="#">Admin</a></li>
  <li><a href="#">Categorias</a></li>
  <li class="active">Editar</li>
</ol>
<h4 class="text-center custom-title" id="recientes">ACTUALIZAR CATEGORIA</h4>	


{!! Form::open(['route' => 'admin.categories.store','method' => 'POST']) !!}

	<div class="form-group">
		{!! Form::label('name','Nombre') !!}
		<div class="input-group">
		<span class="input-group-addon"><i class="fas fa-list-ul"></i></span>
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre Completo', 'required']) !!}
		</div>
	</div>
	
	<!-- =====BOTONES===== -->
	<div class="form-group text-center">	
		<button type="submit" class="btn btn-primary">
			<i class="fas fa-save"></i>
			Actualizar
		</button>
		<a href="{{ route('admin.categories.index') }}" class="btn btn-info">
			<i class="fas fa-reply"></i>
			Atras
		</a>
	</div>

{!! Form::close() !!}

</div><!--/.col-->
</div><!--/.row-->
</div><!--/.container-->
@endsection
