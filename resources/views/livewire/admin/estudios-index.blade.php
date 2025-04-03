<div class="card">
    <div class="card-header">
        {{$search}}
        <input wire:model.live="search" type="text" class="form-control" placeholder="Ingresa el estudio"/>
    </div>
    @if ($estudios->count())
 
            <div class="card-body">
                {{$estudios}}
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estudios as $estudio )
                    <tr>
                        <td>{{$estudio->id}}</td>
                        <td>{{$estudio->name}}</td>
                        <td width="10px">
                            <a class="btn btn-primary" href="{{route("admin.estudios.edit", $estudio)}}">Editar</a>
                        </td>
                        <td width="10px">
                            
                            <form action="{{route('admin.estudios.destroy', $estudio)}}" method="POST">
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
    {{$estudios->links()}}
   </div>
   @else
   <div class="card-body">
       <strong>No hay ningún registro..</strong>
   </div>

    @endif

</div>
