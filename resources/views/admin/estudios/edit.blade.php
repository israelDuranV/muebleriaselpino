@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
	<h1>Editar Nivel de estudio</h1>
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
			{!! Form::model($estudio, ['route'=>['admin.estudios.update',$estudio], 'method'=>'put']) !!}
			@include("admin.estudios.partials.form")
			{!! Form::submit("Editar Nivel de estudios",["class"=>"btn btn-primary"]) !!}
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