<div>
    <div class="card">

        <!-- FILTRO -->
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Buscar...">
            <!-- wire:model="search" se conecta con la función search de UsersIndex -->
        </div>

        @if($users->count())
        <!-- si encuentra coincidencia las irá mostrando si escribo algo que no existe, no arrojará resultados. -->
        <!-- TABLA DE DATOS -->
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre completo</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td width="10px">
                            <a class="btn btn-primary btn-sm" href="{{ route('admin.users.edit', $user) }}">Editar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- PAGINACIÓN. Lo hace de 15 en 15 -->
        <div class="card-footer">
            {{$users->links()}}
        </div>

        @else

        <div class="card-body">
            <strong>No existen registros</strong>
        </div>

        @endif
    </div>
</div>