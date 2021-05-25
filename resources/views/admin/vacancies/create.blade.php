@extends('adminlte::page')

@section('title', 'ASPIREJOBS')

@section('content_header')
<h1>Crear nueva vacante</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.vacancies.store', 'autocomplete' => 'off']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Título') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título de la vacante']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('slug', 'Slug') !!}
            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Este es el slug de la vacante', 'readonly']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('category_id', 'Categoría') !!}
            {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('country_id', 'País') !!}
            {!! Form::select('country_id', $countries, null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            <p class="font-weight-bold">Tecnologías</p>

            @foreach($tecnologies as $tecnology)

            <label class="mr-2">
                {!! Form::checkbox('tecnologies[]', $tecnology->id, null) !!}
                {{$tecnology->name}}
            </label>

            @endforeach
        </div>

        <div class="form-group">
            <p class="font-weight-bold">Habilidades</p>

            @foreach($skills as $skill)

            <label class="mr-2">
                {!! Form::checkbox('skills[]', $skill->id, null) !!}
                {{$skill->name}}
            </label>

            @endforeach
        </div>



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