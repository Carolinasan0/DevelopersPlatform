<nav class="bg-one" x-data="{open: false}">
  <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
    <div class="relative flex items-center justify-between h-16">

      <!-- Mobile menu button-->
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">

        <button x-on:click="open = true" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Abrir menú principal</span>
          <!--
            Icon when menu is closed.

            Heroicon name: outline/menu

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <!--
            Icon when menu is open.

            Heroicon name: outline/x

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">

        <!-- LOGOTIPO -->
        <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center">

          <img class="block lg:hidden h-8 w-auto" src="{{ asset('images/letrarosa.png') }}" alt="Workflow">
          <img class="hidden lg:block h-8 w-auto" src="{{ asset('images/aspirejobsrosa.png') }}" alt="Workflow">
        </a>

        <!-- MENU LG -->

        <div class="relative hidden text-center ml-6 sm:block sm:ml-6" x-data="{ open: false }">
          <div>
            <button x-on:click="open = true" type="button" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium" id="menu-button" aria-expanded="true" aria-haspopup="true">
              Categorías
            </button>
          </div>

          <div x-show="open" x-on:click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-gray-100 text-rosa ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
            <div class="space-x-4 py-1" role="none">
              <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
              <a href="{{ url('categorias') }}" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Ver todas las categorías</a>
              @foreach($categories as $category)
              <a href="{{ route('vacancy.category', $category) }}" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">{{ $category->name}}</a>
              @endforeach
            </div>
          </div>
        </div>

        <div class="card-body px-6 align-center my-2">
          <input wire:model="search" class="form-control ml-8" placeholder="Buscar">
        </div>
      </div>

      @auth

      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

        <!-- BUTTON NOTIFICATIONS -->
        <!-- <button class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                <span class="sr-only">View notifications</span> -->
        <!-- Heroicon name: outline/bell -->
        <!-- <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
                </button> -->

        <!-- PROFILE dropdown -->
        <div class="ml-3 relative" x-data="{open: false }">
          <div>
            <button x-on:click="open = true" type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
              <span class="sr-only">Abrir menú de usuario</span>
              <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">
            </button>
          </div>

          <div x-show="open" x-on:click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
            <!-- Active: "bg-gray-100", Not Active: "" -->
            <a href="{{ url('user/profile') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Mi perfil</a>

            @can('admin.home')
            <a href="{{ route('admin.home') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Dashboard</a>
            @endcan

            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2" onclick="event.preventDefault();
                            this.closest('form').submit();">
                Cerrar sesión
              </a>
            </form>
          </div>
        </div>

      </div>

      @else

      <div>
        <a href="{{ url('login') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
          Iniciar sesión</a>
        <a href="{{ route('register') }}#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
          Registro</a>
      </div>

      @endauth
    </div>
  </div>

  <!-- MENU MOBILE -->
  <div class="sm:hidden" x-show="open" x-on:click.away="open = false" id="mobile-menu">
    <div class="px-2 pt-2 pb-3 space-y-1">

      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <a href="{{ url('categorias') }}" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">
        Ver todas las categorías</a>

      <!-- <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a> -->
      @foreach($categories as $category)
      <a href="{{ route('vacancy.category', $category) }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">{{ $category->name }}</a>
      @endforeach
    </div>

  </div>
</nav>