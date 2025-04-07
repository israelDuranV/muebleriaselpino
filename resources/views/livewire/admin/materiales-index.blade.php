<div class="card">
    <div class="card-header">
        {{$search}}
        <input wire:model.live="search" type="text" class="form-control" placeholder="Ingresa el nombre de un material"/>
    </div>
    @if ($materiales->count())
 
            <div class="card-body">
                {{$materiales}}
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
                @foreach ($materiales as $materiale)
                    <tr>
                        <td>{{$materiale->materiales_id}}</td>
                        <td>{{$materiale->material}}</td>
                        <td>{{$materiale->descripcion}}</td>
                        <td width="10px">
                            <a class="btn btn-primary" href="{{route("admin.materiales.edit", $materiale)}}">Editar</a>
                        </td>
                        <td width="10px">
                            
                            <form action="{{route('admin.materiales.destroy', $materiale)}}" method="POST">
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
    {{$materiales->links()}}
   </div>
   @else
   <div class="card-body">
       <strong>No hay ningún registro..</strong>
   </div>

    @endif

</div>
