<div class="form-group">
    {!! Form::label('departamento', 'Nombre') !!}
    {!! Form::text('departamento', null,["class"=>"form-control", 
                                "placeholder"=>"Ingrese el nombre del departamento"]) !!}

    @error("name")
    <span class="text-danger">
        {{$message}}
    </span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('descripcion', 'Descripción') !!}
    {!! Form::text('descripcion', null,["class"=>"form-control", "placeholder"=>"Ingrese la descripcion del departamento"]) !!}
</div>
