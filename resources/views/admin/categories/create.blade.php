@extends('adminlte::page')

@section('title', 'ASPIREJOBS')

@section('content_header')
<h1>Crear nueva categoría</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.categories.store']) !!}

        <div class="form group">
            {!! Form::close() !!}
        </div>

        {!! Form::close() !!}
    </div>
</div>
@stop