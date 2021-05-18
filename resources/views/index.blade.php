@extends('layouts.web')

@section('content')

  <div class=" flex flex-wrap flex-col md:flex-row items-center bg-one">
        <!--Left Col-->
    <div class="flex flex-col w-full md:w-2/5 justify-center items-center text-center">
          <h1 class="mx-30 text-center text-5xl font-serif leading-tight text-rosa">
           Juntos construimos grandes cosas
          </h1>
          <button class="mx-auto lg:mx-0 bg-two text-azul font-sans rounded-lg my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            Publicar una oferta
          </button>
          <button class="mx-auto lg:mx-0 bg-two text-azul font-sans rounded-lg my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            Buscar una oferta
          </button>
    </div>
        <!--Right Col-->
    <div class="md:w-3/5 text-center">
      <img class="md:w-4/5" src="{{ asset('images/imgindex.png') }}">
    </div>
  </div>


   <div>
      <div class="flex grid-cols-4 gap-4 bg-two shadow-lg rounded-lg px-6 py-6 aling-center items-center mx-40">
          <h2 class="font-sans text-azul text-base text-center uppercase">Filtrar por</h2>
          <input class="bg-white focus:bg-white h-9  w-40 pl-3" placeholder="Categoría">
          <input class="bg-white focus:bg-white h-9  w-40 pl-3" placeholder="Rango salarial">
          <input class="bg-white focus:bg-white h-9  w-40 pl-3" placeholder="Años de experiencia">
          <input class="bg-white focus:bg-white h-9  w-40 pl-3" placeholder="Ubicación">
          <button class="mx-auto h-9 lg:mx-0 bg-one text-rosa font-sans rounded-lg px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            Buscar
          </button>
      </div>
   </div>

   <div class="text-center">
      <h1 class="font-serif tracking-wide text-3xl text-one mb-2 font-bold mt-20">Vacantes recientes</h1>
      <h3 class="font-sans text-base text-one">Revisa los perfiles solicitados por cada empresa y ¡aplica ahora!</h3>
   </div>

 <livewire:vacancy-list>
@endsection