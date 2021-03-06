@extends('adminlte::page')

@section('title', 'ASPIREJOBS')

@section('content_header')
<h1>Crear nueva categoría</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.categories.store']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre de la categoría']) !!}

            @error('name')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('slug', 'Slug') !!}
            {!! Form::text('slug', null, ['class' => 'form-control disabled', 'placeholder' => 'Este es el slug de la categoría', 'readonly']) !!}

            @error('slug')
            <small class="text-danger">{{$message}}</small>
            @enderror

        </div>

        {!! Form::submit('Crear categoría', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>
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