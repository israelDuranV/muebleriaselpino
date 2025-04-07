@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
	<h1>Crear material</h1>
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
			{!! Form::open(['route'=>'admin.materiales.store']) !!}
			@include("admin.materiales.partials.form")
			{!! Form::submit("Crear materiales",["class"=>"btn btn-primary"]) !!}
			{!! Form::close()!!}
		</div>
	</div>
@stop

@section('css')
	<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
	document.getElementById('name').addEventListener('keyup', (e) => {
        let slug = String(e.target.value)
            .normalize('NFKD') // split accented characters into their base characters and diacritical marks
            .replace(/[\u0300-\u036f]/g, '') // remove all the accents, which happen to be all in the \u03xx UNICODE block.
            .trim() // trim leading or trailing whitespace
            .toLowerCase()
            .replace(/[^a-z0-9-]/g, '-')
            .replace(/-+/g, '-')
            .replace(/(^-|-$)/, '');
        document.getElementById('slug').value = slug;
    });
	</script>
	@stop