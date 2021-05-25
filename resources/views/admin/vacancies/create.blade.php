@extends('adminlte::page')

@section('title', 'ASPIREJOBS')

@section('content_header')
<h1>Crear nueva vacante</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.vacancies.store', 'autocomplete' => 'off']) !!}

        <!-- TÍTULO VACANTE -->
        <div class="form-group">
            {!! Form::label('name', 'Título') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título de la vacante']) !!}
        </div>

        <!-- SLUG -->
        <div class="form-group">
            {!! Form::label('slug', 'Slug') !!}
            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Este es el slug de la vacante', 'readonly']) !!}
        </div>

        <!-- CATEGORÍA -->
        <div class="form-group">
            {!! Form::label('category_id', 'Categoría') !!}
            {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
        </div>

        <!-- ESTADO -->
        <div class="form-group">
            <p class="font-weight-bold">Estado</p>
            <label class="mr-2">
                {!! Form::radio('status', 'Borrador', true) !!}
                Borrador
            </label>

            <label class="mr-2">
                {!! Form::radio('status', 'Publicar') !!}
                Publicar
            </label>
        </div>

        <!-- DEACRIPCIÓN -->
        <div class="form-group">
            {!! Form::label('description', 'Descripción del cargo') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        </div>

        <!-- PAÍS -->
        <div class="form-group">
            {!! Form::label('country_id', 'País') !!}
            {!! Form::select('country_id', $countries, null, ['class' => 'form-control']) !!}
        </div>

        <!-- TECNOLOGÍAS -->
        <div class="form-group">
            <p class="font-weight-bold">Tecnologías requeridas</p>

            @foreach($tecnologies as $tecnology)

            <label class="mr-2">
                {!! Form::checkbox('tecnologies[]', $tecnology->id, null) !!}
                {{$tecnology->name}}
            </label>

            @endforeach
        </div>

        <!-- <div class="form-group">
            <p class="font-weight-bold">Habilidades</p>

            @foreach($skills as $skill)

            <label class="mr-2">
                {!! Form::checkbox('skills[]', $skill->id, null) !!}
                {{$skill->name}}
            </label>

            @endforeach
        </div> -->

        <!-- BOTÓN GUARDAR -->
        {!! Form::submit('Crear vacante', ['class' => 'btn btn-primary']) !!}

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

    ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
            console.error(error);
        });
</script>

@endsection