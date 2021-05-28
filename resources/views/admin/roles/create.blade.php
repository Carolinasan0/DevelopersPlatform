@extends('adminlte::page')

@section('title', 'ASPIREJOBS')

@section('content_header')
<h1>Crear nuevo rol</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">

        {!! Form::open(['route' => 'admin.roles.store', 'autocomplete' => 'off']) !!}

        @include('admin.roles.partials.form')

        <!-- BOTÓN CREAR -->
        {!! Form::submit('Crear rol', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}

    </div>
</div>
@stop