@extends('adminlte::page')

@section('title', 'ASPIREJOBS')

@section('content_header')
<h1>Editar vacante</h1>
@stop

@section('content')

@if(session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif

<div class="card">
    <div class="card-body">
        {!! Form::model($vacancy,['route' => ['admin.vacancies.update', $vacancy], 'autocomplete' => 'off', 'method' => 'put']) !!}
        <!-- con model y la variable vancacy hago que se cargue la infrmación de la vacante para poderla editar -->

        @include('admin.vacancies.partials.form')

        <!-- BOTÓN GUARDAR -->
        {!! Form::submit('Actualizar vacante', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

<script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>

<script>
    $(document).ready(function() {
        $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
    });

    // ClassicEditor
    //     .create(document.querySelector('#description'))
    //     .catch(error => {
    //         console.error(error);
    //     });

    // ClassicEditor
    //     .create(document.querySelector('#end'))
    //     .catch(error => {
    //         console.error(error);
    //     });
</script>

@endsection