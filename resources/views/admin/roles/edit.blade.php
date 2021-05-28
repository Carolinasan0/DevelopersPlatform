@extends('adminlte::page')

@section('title', 'ASPIREJOBS')

@section('content_header')
<h1>Editar rol</h1>
@stop

@section('content')

@if(session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif

<div class="card">
    <div class="car-body">
        {!! Form::model($role,['route' => ['admin.roles.update', $role], 'autocomplete' => 'off', 'method' => 'put']) !!}
        <!-- con model y la variable role hago que se cargue la información del rol para poderla editar -->

        @include('admin.roles.partials.form')

        <!-- BOTÓN GUARDAR -->
        {!! Form::submit('Actualizar rol', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop