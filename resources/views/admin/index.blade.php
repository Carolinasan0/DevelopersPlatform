@extends('adminlte::page')

@section('title', 'ASPIREJOBS')

@section('content_header')
<h1>¡Bienvenido/a!</h1>
@stop

@section('content')
<p>Si usted es Administrador en este panel usted podrá:</br>
    - Ver, editar y eliminar los roles.</br>
    - Ver y editar el rol de sus usuarios.</br>
    - Ver, agregar, editar y eliminar categorías.</br>
    - Ver, agregar, editar y eliminar vacantes.</br>
    - Ver, agregar, editar y eliminar tecnologías.</br>
</p>
<p>Si usted es Reclutador en este panel usted podrá:</br>
    - Ver las categorías.</br>
    - Ver las tecnologías.</br>
    - Ver, agregar, editar y eliminar vacantes.</br>
</p>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop