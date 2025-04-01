<div class="form-group">
    {!! Form::label('banco', 'Nombre') !!}
    {!! Form::text('banco', null,["class"=>"form-control", 
                                "placeholder"=>"Ingrese el nombre del banco"]) !!}

    @error("name")
    <span class="text-danger">
        {{$message}}
    </span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('descripcion', 'Descripción') !!}
    {!! Form::text('descripcion', null,["class"=>"form-control", "placeholder"=>"Ingrese la descripcion del banco"]) !!}
</div>
