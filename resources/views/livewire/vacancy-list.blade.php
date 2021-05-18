<div class="grid grid-cols-3 gap-4 mt-8 mx-10 my-6 pb-10">
    @foreach($vacancies as $vacancy)
    <div class="bg-two shadow-lg rounded-lg px-4 py-6 text-center">
        <a href="{{ route('vacancy', $vacancy->id) }}">
           <img src="{{ $vacancy->user->avatar }}" class="rounded-full mx-auto h-16 w-16">
           <h2 class="font-serif tracking-wide text-azul text-lg">{{ $vacancy->name }}</h2>
           <p class="font-sans text-base text-azul">{{ $vacancy->experience }}</p>
           <p class="font-sans text-base text-azul">{{ $vacancy->salary }}</p>
           <p class="font-sans text-base text-azul">{{ $vacancy->location }}</p>
        </a>
    </div>
    @endforeach
</div>
