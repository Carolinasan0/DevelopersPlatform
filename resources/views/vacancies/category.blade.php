<x-app-layout>
   <div class="py-8">
      <h1 class="uppercase text-2xl text-azul font-serif text-center ">{{$category->name}}</h1>
      <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 mt-8 mx-8 py-8">
         @foreach($vacancy as $vacancy)
         <x-vacancy-card :vacancy="$vacancy" />
         @endforeach
      </div>
   </div>
</x-app-layout>