<div class="card">
    <div class="card-header">
        {{$search}}
        <input wire:model.live="search" type="text" class="form-control" placeholder="Ingresa el nombre de un departamento"/>
    </div>
    @if ($departamentos->count())
 
            <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Descripción</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departamentos as $departamento )
                    <tr>
                        <td>{{$departamento->departamento_id}}</td>
                        <td>{{$departamento->departamento}}</td>
                        <td>{{$departamento->descripcion}}</td>
                        <td width="10px">
                            <a class="btn btn-primary" href="{{route("admin.departamentos.edit", $departamento)}}">Editar</a>
                        </td>
                        <td width="10px">
                            
                            <form action="{{route('admin.departamentos.destroy', $departamento)}}" method="POST">
                                @csrf
                                @method("delete")
                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
   <div class="card-footer">
    {{$departamentos->links()}}
   </div>
   @else
   <div class="card-body">
       <strong>No hay ningún registro..</strong>
   </div>

    @endif

</div>
