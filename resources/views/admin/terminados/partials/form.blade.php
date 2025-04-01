<div class="form-group">
    {!! Form::label('terminado', 'Nombre') !!}
    {!! Form::text('terminado', null,["class"=>"form-control", 
                                "placeholder"=>"Ingrese el nombre del terminado"]) !!}

    @error("name")
    <span class="text-danger">
        {{$message}}
    </span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('descripcion', 'Descripción') !!}
    {!! Form::text('descripcion', null,["class"=>"form-control", "placeholder"=>"Ingrese la descripcion del terminado"]) !!}
</div>
