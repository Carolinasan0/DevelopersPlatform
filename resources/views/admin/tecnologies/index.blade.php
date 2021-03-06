@extends('adminlte::page')

@section('title', 'ASPIREJOBS')

@section('content_header')

@can('admin.tecnologies.create')
<a class="btn btn-secondary btn-sm float-right" href="{{route('admin.tecnologies.create')}}">Agregar nueva tecnología</a>
@endcan
<h1>Listado de tecnologías</h1>
@stop

@section('content')

@if(session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif

<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th colspan="2"></th>
                </tr>
            </thead>

            <tbody>
                @foreach($tecnologies as $tecnology)
                <tr>
                    <td>{{$tecnology->id}}</td>
                    <td>{{$tecnology->name}}</td>
                    <td width="10px">
                        @can('admin.tecnologies.edit')
                        <a class="btn btn-primary btn-sm" href="{{route('admin.tecnologies.edit', $tecnology)}}">Editar</a>
                        @endcan
                    </td>
                    <td width="10px">
                        @can('admin.tecnologies.destroy')
                        <form action="{{route('admin.tecnologies.destroy', $tecnology)}}" method="POST">
                            @csrf
                            @method('delete')

                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                        </form>
                        @endcan
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop