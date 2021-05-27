<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre de la tecnología']) !!}

    @error('name')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control disabled', 'placeholder' => 'Este es el slug de la tecnología', 'readonly']) !!}

    @error('slug')
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>