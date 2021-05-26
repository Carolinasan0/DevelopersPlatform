@extends('adminlte::page')

@section('title', 'ASPIREJOBS')

@section('content_header')
<h1>Crear nueva vacante</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.vacancies.store', 'autocomplete' => 'off']) !!}

        {!! Form::hidden('user_id', auth()->user()->id) !!}
        <!-- formhidden me crea un input oculto que recoge el id de usuario para asignarle la vacante. -->

        <!-- TÍTULO VACANTE -->
        <div class="form-group">
            {!! Form::label('name', 'Título') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título de la vacante']) !!}

            @error('name')
            <small class="text-danger">{{$message}}</small>
            @enderror

        </div>

        <!-- SLUG -->
        <div class="form-group">
            {!! Form::label('slug', 'Slug') !!}
            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Este es el slug de la vacante', 'readonly']) !!}

            @error('slug')
            <small class="text-danger">{{$message}}</small>
            @enderror

        </div>

        <!-- CATEGORÍA -->
        <div class="form-group">
            {!! Form::label('category_id', 'Categoría') !!}
            {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

            @error('category_id')
            <small class="text-danger">{{$message}}</small>
            @enderror

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

            @error('status')
            <br>
            <small class="text-danger">{{$message}}</small>
            @enderror

        </div>

        <!-- DESCRIPCIÓN -->
        <div class="form-group">
            {!! Form::label('description', 'Descripción del cargo') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}

            @error('description')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

        <!-- PAÍS -->
        <div class="form-group">
            {!! Form::label('country_id', 'País') !!}
            {!! Form::select('country_id', $countries, null, ['class' => 'form-control']) !!}

            @error('country_id')
            <small class="text-danger">{{$message}}</small>
            @enderror

        </div>

        <!-- RANGO SALARIAL -->
        <div class="form-group">
            {!! Form::label('salary_id', 'Rango salarial') !!}
            {!! Form::select('salary_id', $wages, null, ['class' => 'form-control']) !!}

            @error('salary_id')
            <small class="text-danger">{{$message}}</small>
            @enderror

        </div>

        <!-- TIPO MONEDA -->
        <div class="form-group">
            {!! Form::label('currency_id', 'Tipo de moneda') !!}
            {!! Form::select('currency_id', $currencies, null, ['class' => 'form-control']) !!}

            @error('currency_id')
            <small class="text-danger">{{$message}}</small>
            @enderror

        </div>

        <!-- TIEMPO DE EXPERIENCIA -->
        <div class="form-group">
            {!! Form::label('experience_id', 'Experiencia requerida') !!}
            {!! Form::select('experience_id', $experiences, null, ['class' => 'form-control']) !!}

            @error('experience_id')
            <small class="text-danger">{{$message}}</small>
            @enderror

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

            @error('tecnologies')
            <br>
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

        <!-- FECHA FINAL -->
        <div class="form-group">
            {!! Form::label('end', 'Fecha limite de postulación (MM/DD/AAAA)') !!}
            {!! Form::textarea('end', null, ['class' => 'form-control']) !!}

            @error('end')
            <small class="text-danger">{{$message}}</small>
            @enderror

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

    ClassicEditor
        .create(document.querySelector('#end'))
        .catch(error => {
            console.error(error);
        });
</script>

@endsection