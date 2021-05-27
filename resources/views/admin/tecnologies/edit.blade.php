@extends('adminlte::page')

@section('title', 'ASPIREJOBS')

@section('content_header')
<h1>Editar tecnología</h1>
@stop

@section('content')

@if(session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif

<div class="card">
    <div class="card-body">
        {!! Form::model($tecnology, ['route' => ['admin.tecnologies.update', $tecnology], 'method' => 'put']) !!}

        @include('admin.tecnologies.partials.form')

        {!! Form::submit('Actualizar tecnología', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

<script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
    });
</script>

@endsection