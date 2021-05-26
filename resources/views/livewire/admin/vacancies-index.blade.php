<div class="card">

    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingrese el nombre de una vacante">
    </div>

    @if($vacancies->count())

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Estado</th>
                    <!-- <th>Candidatos</th> -->
                    <th colspan="2"></th>
                </tr>
            </thead>

            <tbody>
                @foreach($vacancies as $vacancy)
                <tr>
                    <td>{{$vacancy->id}}</td>
                    <td>{{$vacancy->name}}</td>
                    <td>{{$vacancy->status}}</td>
                    <!-- <td>$vacancy-></td> -->
                    <td with="10px">
                        <a class="btn btn-primary btn-sm" href="{{route('admin.vacancies.edit', $vacancy)}}">Editar</a>
                    </td>
                    <td with="10px">
                        <form action="{{route('admin.vacancies.destroy', $vacancy)}}" method="POST"></form>
                        @csrf
                        @method('delete')

                        <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="div card-footer">
        {{$vacancies->links()}}
    </div>
    @else
    <div class="card-body">
        <strong>No existe ningún registro...</strong>
    </div>
    @endif
</div>