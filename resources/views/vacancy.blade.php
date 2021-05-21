<x-app-layout>

@section('content')
<div class="text-center">
   <h1 class="font-serif tracking-wide text-3xl text-one mb-2 font-bold mt-10">Detalle de la vacante</h1>
</div>

<div class="bg-gray-100 text-left grid mx-20">
   <img src="{{ $vacancy->user->avatar }}" class="rounded-full mr-2 h-14 w-14 mb-6 mt-8">
   <div class="">
      <p class="text-azul font-serif text-2xl mb-8">{{ $vacancy->name }}</p>
      <p class="font-sans font-bold text-base text-azul">Experiencia requerida: </p>
      <p class="mb-6"> {{ $vacancy->experience }}</p>
      <p class="font-sans font-bold text-base text-azul">Rango salarial:</p>
      <p class="mb-6">{{ $vacancy->salary }}</p>
      <p class="font-sans font-bold text-base text-azul">Descripción</p>
      <p class="mb-6">{{ $vacancy->description }}</p>
   </div>

   <div class="">
      <p class="font-sans font-bold text-base text-azul">Fecha límite:</p>
      <p class="mb-6">{{ $vacancy->end }}</p>
      <p class="font-sans font-bold text-base text-azul">Tecnologías requeridas:</p>
      <p class="mb-6"> {{ $vacancy->tecnology_id }}</p>
      <button class="mx-auto lg:mx-0 bg-three text-white font-sans rounded-lg my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
         ¡Quiero aplicar!
      </button>
   </div>

   <div class="grid grid-cols-2 gap-4 my-8">
      @foreach($vacancy->similar() as $vacancy)
      <x-vacancy-card :vacancy="$vacancy" />
      @endforeach
   </div>
</div>
@endsection

</x-app-layout>