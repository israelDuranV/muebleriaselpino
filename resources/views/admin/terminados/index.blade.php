@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
	<h1>Listado de terminados</h1>
@stop

@section('content')
<a class="btn btn-secondary btn-sm mb-1" href="{{route('admin.terminados.create')}}">Agregar Terminado</a>
@if (session('info'))
<div class="alert alert-success mt-1">
	<strong>
		{{session('info')}}
	</strong>
</div>
@endif
@livewire("admin.terminados-index")
@stop

@section('css')
	<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
	<script> console.log('Hi!'); </script>
@stop