@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
	<h1>Crear un nuevo rol</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
	<strong>
		{{session('info')}}
	</strong>
</div>
@endif


	<div class="card">
		<div class="card-body">
			{!! Form::model($role, ['route'=>['admin.roles.update', $role], 'method'=>'put']) !!}
			@include("admin.roles.partials.form")
			{!! Form::submit("Editar Rol",["class"=>"btn btn-primary"]) !!}
			{!! Form::close()!!}
		</div>
	</div>
@stop

@section('css')
	<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
	</script>
	@stop