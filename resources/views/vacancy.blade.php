<x-app-layout>

   @section('content')
   <div class="text-center">
      <h1 class="font-serif tracking-wide text-3xl text-one mb-2 font-bold mt-10">Detalle de la vacante</h1>
   </div>

   <div class="bg-gray-100 text-left grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-4 mt-8 mx-20 pb-10">
      <div class="col-span-1">
         <img src="{{ $vacancy->user->avatar }}" class="rounded-full mr-2 h-14 w-14 mb-6 mt-8">
         <h1 class="text-azul font-serif text-2xl mb-8">{{ $vacancy->name }}</h1>
         <div class="mb-6">
            <p class="font-bold font-sans text-azul">Experiencia requerida: </p>
            {{ $vacancy->experience->experience }}
         </div>
         <div class="mb-6">
            <p class="font-bold font-sans text-azul">Rango salarial: </p>
            {{ $vacancy->salary->salary }}
         </div>
         <div class="mb-6">
            <p class="font-bold font-sans text-azul">Descripción de la vacante: </p>
            {{ $vacancy->description }}
         </div>
      </div>

      <div class="col-span-1 lg:mt-40 lg:ml-10">
         <div class="mb-6">
            <p class="font-bold font-sans text-azul">Tecnologías requeridas: </p>
            @foreach($vacancy->tecnologies as $tecnology)
            <a class="inline-block px-3 h-6 bg-gray-600 text-white rounded-full">{{$tecnology->name}}</a>
            @endforeach
         </div>
         <div class="mb-6">
            <p class="font-bold font-sans text-azul">Ubicación: </p>
            {{ $vacancy->country->long_description}}
         </div>
         <div class="mb-6">
            <p class="font-bold font-sans text-azul">Fecha límite: </p>
            {{ $vacancy->end }}
         </div>

         @if (Auth::user()->hasRole('Desarrollador'))
         <!-- Role -> Desarrollador -> mostrar alerta de aplicado. -->
         <button class="mx-auto lg:mx-0 bg-three text-white font-sans rounded-lg my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            ¡Quiero aplicar!
         </button>
         @elseif (Auth::user()->hasRole('Desarrollador'))
         <a href="{{ url('login') }}">
            <button class="mx-auto lg:mx-0 bg-three text-white font-sans rounded-lg my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
               Inicia sesión para aplicar.
            </button>
         </a>
         @elseif (Auth::user()->hasRole('Reclutador'))
         <a href="{{ url('login') }}">
            <button class="mx-auto lg:mx-0 bg-three text-white font-sans rounded-lg my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
               Ver candidatos.
            </button>
         </a>
         @endif
      </div>
   </div>

   <!-- <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 mt-8 mx-8 py-8">
      @foreach($vacancy->similar() as $vacancy)
      <x-vacancy-card :vacancy="$vacancy" />
      @endforeach
   </div> -->
   @endsection

</x-app-layout>