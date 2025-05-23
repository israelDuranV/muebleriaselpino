@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
	<h1>Editar material</h1>
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
			{!! Form::model($materiale, ['route'=>['admin.materiales.update',$materiale], 'method'=>'put']) !!}
			@include("admin.materiales.partials.form")
			{!! Form::submit("Editar material",["class"=>"btn btn-primary"]) !!}
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