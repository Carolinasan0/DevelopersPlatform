@extends('errors::illustrated-layout')

@section('code', '404')
@section('title', __('Página no encontrada'))

@section('image')
<img src="https://image.freepik.com/free-vector/error-404-concept-landing-page_52683-12188.jpg" class="img-fluid" alt="imagen error 404">
@endsection

@section('message', __('Lo sentimos, la página que estás buscando no existe.'))