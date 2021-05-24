@extends('adminlte::page')

@section('title', 'ASPIREJOBS')

@section('content_header')

<a class="btn btn-secondary btn-sm float-right" href="{{route('admin.vacancies.create')}}">Crear nueva vacante</a>
<h1>Listado de vacantes</h1>
@stop

@section('content')
@livewire('admin.vacancies-index')
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop