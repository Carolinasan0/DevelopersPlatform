@extends('errors::illustrated-layout')

@section('code', 'Error')
@section('title', __('Acceso denegado'))

@section('image')
<img src="https://image.freepik.com/free-vector/403-error-forbidden-with-police-concept-illustration_114360-1884.jpg" class="img-fluid" alt="imagen error 404">
@endsection

@section('message', __('Lo sentimos, no tienes autorización para acceder a esta página.'))