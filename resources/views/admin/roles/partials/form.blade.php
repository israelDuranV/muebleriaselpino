<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null,["class"=>"form-control", "placeholder"=>"Ingrese el nombre del rol"]) !!}

@error("name")
<span class="text-danger">
    {{$message}}
</span>
@enderror
</div>
<div class="form-group">
    <h2 class="h3">
        Lista de permisos
    </h2>
    @foreach ($permissions as $permiso)
    <div>
        <label>
            {!! Form::checkbox('permissions[]', $permiso->id, null, ['class'=>'mr-1']) !!}
            {{$permiso->description}}
        </label>
    </div>
@endforeach
</div>