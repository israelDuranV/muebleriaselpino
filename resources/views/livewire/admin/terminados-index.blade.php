<div class="card">
    <div class="card-header">
        {{$search}}
        <input wire:model.live="search" type="text" class="form-control" placeholder="Ingresa el nombre de un terminado"/>
    </div>
    @if ($terminados->count())
 
        <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($terminados as $terminado )
                    <tr>
                        <td>{{$terminado->terminado_id}}</td>
                        <td>{{$terminado->terminado}}</td>
                        <td width="10px">
                            <a class="btn btn-primary" href="{{route("admin.terminados.edit", $terminado)}}">Editar</a>
                        </td>
                        <td width="10px">
                            
                            <form action="{{route('admin.terminados.destroy', $terminado)}}" method="POST">
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
    {{$terminados->links()}}
   </div>
   @else
   <div class="card-body">
       <strong>No hay ningún registro..</strong>
   </div>

    @endif

</div>
