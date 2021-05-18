<!-- <div class="flex items-center justify-between h-16"></div> -->
<nav class="bg-one flex items-center justify-between h-20">
    <a href="{{ route('home') }}">
        <img 
            src="{{ asset('images/aspirejobsrosa.png') }}" 
            class="h-8 mx-auto  ml-10">
    </a>
        <a href="{{ route('home') }}" class="mr-10 text-sn text-rosa">
            Categorías
        </a>
        @auth
        <a href="{{ url('dashboard') }}" class="mr-10 text-sn text-rosa">
            Mi cuenta
        </a>
        @else
        <a href="{{ url('login') }}" class="text-sn text-rosa">
            Iniciar sesión
        </a>
        <a href="{{ url('register') }}" class=" mr-10 text-sn text-rosa">
            Registro
        </a>
        @endif 
</nav>