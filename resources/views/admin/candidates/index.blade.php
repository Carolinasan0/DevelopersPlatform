@extends('adminlte::page')

@section('title', 'ASPIREJOBS')

@section('content_header')
<h1>Lista de candidatos</h1>
@stop

@section('content')
@livewire('admin.candidates-index')
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop