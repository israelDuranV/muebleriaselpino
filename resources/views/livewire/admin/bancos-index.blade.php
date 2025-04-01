<div class="card">
    <div class="card-header">
        {{$search}}
        <input wire:model.live="search" type="text" class="form-control" placeholder="Ingresa el nombre de un Banco"/>
    </div>
    @if ($bancos->count())
 
            <div class="card-body">
                {{$bancos}}
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bancos as $banco )
                    <tr>
                        <td>{{$banco->banco_id}}</td>
                        <td>{{$banco->banco}}</td>
                        <td width="10px">
                            <a class="btn btn-primary" href="{{route("admin.bancos.edit", $banco)}}">Editar</a>
                        </td>
                        <td width="10px">
                            
                            <form action="{{route('admin.bancos.destroy', $banco)}}" method="POST">
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
    {{$bancos->links()}}
   </div>
   @else
   <div class="card-body">
       <strong>No hay ningún registro..</strong>
   </div>

    @endif

</div>
