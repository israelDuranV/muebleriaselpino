<div class="form-group">
    {!! Form::label('material', 'Nombre') !!}
    {!! Form::text('material', null,["class"=>"form-control", 
                                "placeholder"=>"Ingrese el nombre del material"]) !!}

    @error("name")
    <span class="text-danger">
        {{$message}}
    </span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('descripcion', 'Descripción') !!}
    {!! Form::text('descripcion', null,["class"=>"form-control", "placeholder"=>"Ingrese la descripcion del material"]) !!}
</div>
