<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null,["class"=>"form-control", 
                                "placeholder"=>"Ingrese el nivel de estudio"]) !!}

    @error("name")
    <span class="text-danger">
        {{$message}}
    </span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('description', 'Descripción') !!}
    {!! Form::text('description', null,
                   ["class"=>"form-control", "placeholder"=>"Ingrese el nivel de estudio"]) !!}
</div>
