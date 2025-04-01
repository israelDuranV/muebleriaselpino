@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
	<h1>Index blade</h1>
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
		@can('admin.roles.create')
			<a class="btn btn-secondary btn-sm float-right" 
				href="{{route('admin.roles.create')}}">Nuevo Rol
			</a>
		@endcan
		<div class="card-body">
			<table class="table table-stri">
				<thead>
					<tr>
						<th>Id</th>
						<th>Rol</th>
						<th colspan="2"></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($roles as $role )
						<tr>
							<td>{{$role->id}}</td>
							<td>{{$role->name}}</td>
							<td width="10px">
								@can('admin.roles.edit')
								<a href="{{route("admin.roles.edit",$role)}}" class="btn btn-info">Editar</a>
								@endcan
							</td>
							<td width="10px">
								@can('admin.roles.destroy')
									<form action="{{route("admin.roles.destroy",$role)}}" method="POST">
										@csrf
										@method('DELETE')
										<input type="submit" class="btn btn-danger">
									</form>
								@endcan
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@stop

@section('css')
	<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
	<script> console.log('Hi!'); </script>
@stop