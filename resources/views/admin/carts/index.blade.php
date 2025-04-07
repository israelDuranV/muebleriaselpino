@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
	<h1>Carrito de venta</h1>
@stop

@section('content')
	@foreach ($muebles as $mueble)
        {{$mueble->materiale->material}}
    @endforeach
@stop

@section('css')

@stop

@section('js')
	<script> console.log('Hi!'); </script>
@stop