<div class="card">
    <div class="card-header">
        {{$search}}
        <input wire:model.live="search" type="text" class="form-control" placeholder="Ingresa el nombre de un usuario"/>
    </div>
    @if ($users->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user )
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td width="10px">
                                    <a class="btn btn-primary" href="{{route("admin.users.edit", $user)}}">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
        <div class="card-footer">
            {{$users->links()}}
        </div>
   @else
        <div class="card-body">
            <strong>No hay ningún registro..</strong>
        </div>
    @endif

</div>