@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
	<h1>Crear banco</h1>
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
			{!! Form::open(['route'=>'admin.bancos.store']) !!}
			@include("admin.bancos.partials.form")
			{!! Form::submit("Crear nivel de banco",["class"=>"btn btn-primary"]) !!}
			{!! Form::close()!!}
		</div>
	</div>
@stop

@section('css')
	<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop