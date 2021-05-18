@extends('layouts.web')

@section('content')
<div class="text-center">    
   <h1 class="font-serif tracking-wide text-3xl col-span-2 text-one mb-2 font-bold mt-10">Detalle de la vacante</h1>
</div>

<div class="bg-white  text-left grid grid-cols-2 gap-4">
   <img 
      src="{{ $vacancy->user->avatar }}" 
      class="rounded-full mr-2 h-14 w-14 mb-6">
   <div class="col-span-1">
      <p class="text-azul font-serif text-2xl mb-8">{{ $vacancy->name }}</p>
      <p class="font-sans font-bold text-base text-azul">Experiencia requerida: </p>
           <p class="mb-6"> {{ $vacancy->experience }}</p>
      <p class="font-sans font-bold text-base text-azul">Rango salarial:</p>
           <p  class="mb-6">{{ $vacancy->salary }}</p>
      <p class="font-sans font-bold text-base text-azul">Descripción</p>
           <p  class="mb-6">{{ $vacancy->description }}</p>
   </div>
</div>
   <div  class="col-span-1">
      <p class="font-sans font-bold text-base text-azul">Fecha límite:</p>
           <p  class="mb-6">{{ $vacancy->end }}</p>
      <p class="font-sans font-bold text-base text-azul">Tecnologías requeridas:</p>
           <p  class="mb-6"> {{ $vacancy->tecnology_id }}</p>
      <button class="mx-auto lg:mx-0 bg-three text-white font-sans rounded-lg my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
         ¡Quiero aplicar!
      </button>

   </div>
@endsection

<!-- <h2 class="font-serif tracking-wide text-azul text-2xl">{{ $vacancy->name }}</h2>
           
           <p class="font-sans font-bold text-base text-azul">Experiencia requerida: </p>
           <p> {{ $vacancy->experience }}</p>
           <p class="font-sans text-base text-azul">Rango salarial:</p>
           <p>{{ $vacancy->salary }}</p>
           <p class="font-sans text-base text-azul">Descripción</p>
           <p>{{ $vacancy->description }}</p>
           <p class="font-sans text-base text-azul">Fecha límite:</p>
           <p>{{ $vacancy->end }}</p>
           <p class="font-sans text-base text-azul">Tecnologías requeridas:</p>
           <p> {{ $vacancy->tecnology_id }}</p> -->