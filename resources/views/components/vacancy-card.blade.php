<div class="bg-two shadow-lg rounded-lg text-center px-4 py-6">
    @auth
    <a href="{{ route('vacancy', $vacancy->id) }}">
        <img src="{{ $vacancy->user->avatar }}" class="rounded-full mx-auto h-16 w-16">
        <h2 class="font-serif tracking-wide text-azul text-lg">{{ $vacancy->name }}</h2>
        <p class="font-sans text-base text-azul">{{ $vacancy->experience->experience }}</p>
        <p class="font-sans text-base text-azul">{{ $vacancy->salary->salary }}</p>
        <p class="font-sans text-base text-azul">{{ $vacancy->country->long_description }}</p>
    </a>
    @else
    <a href="{{ route('login') }}">
        <img src="{{ $vacancy->user->avatar }}" class="rounded-full mx-auto h-16 w-16">
        <h2 class="font-serif tracking-wide text-azul text-lg">{{ $vacancy->name }}</h2>
        <p class="font-sans text-base text-azul">{{ $vacancy->experience->experience }}</p>
        <p class="font-sans text-base text-azul">{{ $vacancy->salary->salary }}</p>
        <p class="font-sans text-base text-azul">{{ $vacancy->country->long_description }}</p>
    </a>
    @endauth
</div>