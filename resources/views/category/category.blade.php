@extends('layouts.web')

@section('content')

<div class="text-center">
  <h1 class="font-serif tracking-wide text-3xl text-one mb-2 font-bold mt-20">Categorías</h1>
  <h3 class="font-sans text-base text-one">Revisa cuál es tu perfil, encuentra una vacante y ¡aplica ahora!</h3>
</div>

<livewire:category-list>

  @endsection