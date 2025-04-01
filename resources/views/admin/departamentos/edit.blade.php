@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
	<h1>Editar departamento</h1>
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
			{!! Form::model($departamento, ['route'=>['admin.departamentos.update',$departamento], 'method'=>'put']) !!}
			@include("admin.departamentos.partials.form")
			{!! Form::submit("Editar departamento",["class"=>"btn btn-primary"]) !!}
			{!! Form::close()!!}
		</div>
	</div>
@stop

@section('css')
	<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>

	</script>
	@stop