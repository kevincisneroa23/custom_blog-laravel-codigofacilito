@extends('layouts.admin.main')
@section('title', 'Admin')
@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-12">

	<h1>Bienvenido <u>{{ Auth::user()->name }} </u></h1>

</div><!--/.col-->
</div><!--/.row-->
</div>
@endsection()