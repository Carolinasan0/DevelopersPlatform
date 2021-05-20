<nav class="bg-one flex items-center justify-between h-20">
    <a href="{{ route('home') }}">
        <img src="{{ asset('images/aspirejobsrosa.png') }}" class="h-8 mx-auto  ml-10">
    </a>

    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex pr-20">
        <x-jet-nav-link href="{{ url('categorias') }}">
            {{ __('Categorías') }}
        </x-jet-nav-link>

        @auth
        <x-jet-nav-link href="{{ url('user/profile') }}">
            {{ __('Mi cuenta') }}
        </x-jet-nav-link>
        @else
        <x-jet-nav-link href="{{ url('login') }}">
            {{ __('Iniciar sesión') }}
        </x-jet-nav-link>
        <x-jet-nav-link href="{{ route('register') }}">
            {{ __('Registro') }}
        </x-jet-nav-link>
    </div>
    @endif
</nav>