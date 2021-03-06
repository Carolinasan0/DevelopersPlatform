<x-app-layout>

  @section('content')

  <div class=" flex flex-wrap flex-col md:flex-row items-center bg-one">
    <!--Left Col-->
    <div class="flex-col w-full md:w-2/5 items-center text-center">
      <h1 class="mx-30 text-center text-5xl font-serif leading-tight text-rosa sm:1xl ml-6">
        Juntos construimos grandes cosas
      </h1>

      @auth
      <!-- <a href="{{ url('categorias') }}"> -->
      <a href="{{ route('admin.vacancies.create') }}">
        <button class="mx-auto lg:mx-0 bg-two text-azul font-sans rounded-lg my-6 py-3 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          Publicar una oferta
        </button>
      </a>
      @else

      <a href="{{ url('login') }}">
        <button class="mx-auto lg:mx-0 bg-two text-azul font-sans rounded-lg my-6 py-3 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          Publicar una oferta
        </button>
      </a>
      @endauth



      @auth
      <a href="{{ url('categorias') }}">
        <button class="mx-auto lg:mx-0 bg-two text-azul font-sans rounded-lg my-6 py-3 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          Buscar una oferta
        </button>
      </a>
      @else

      <a href="{{ url('login') }}">
        <button class="mx-auto lg:mx-0 bg-two text-azul font-sans rounded-lg my-6 py-3 px-5 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          Buscar una oferta
        </button>
      </a>
      @endauth

    </div>
    <!--Right Col-->
    <div class="md:w-3/5 text-center">
      <img class="md:w-4/5 mr-8" src="{{ asset('images/imgindex.png') }}">
    </div>
  </div>

  <div class=" bg-two px-14 rounded-lg shadow-lg text-center grid lg:grid-cols-6 md:grid-cols-3 grid-cols-1 gap-8 mx-6 py-8">
    <h2 class="font-sans text-azul text-base">Filtrar por</h2>

    <div class="sidebar-widget">

      <form action="#">
        <select>
          <option value="" disabled selected hidden>Categor??a</option>
          <option value="1">Desarrollador Full-Stack</option>
          <option value="2">Desarrollador Front-End</option>
          <option value="3">Desarrollador Back-End</option>
          <option value="4">Dise??o UX/UI</option>

        </select>
      </form>
    </div>

    <div class="sidebar-widget">

      <form action="#">
        <select>
          <option value="" disabled selected hidden>Rango salarial</option>
          <option value="1">Menos de $1'000.000</option>
          <option value="2">M??s de $1'000.000</option>
          <option value="3">M??s de $2'000.000</option>
          <option value="4">M??s de $3'000.000</option>
          <option value="5">M??s de $4'000.000</option>
        </select>
      </form>

    </div>


    <div class="sidebar-widget">

      <form action="#">
        <select>
          <option value="" disabled selected hidden>Experiencia requerida</option>
          <option value="1">Sin experiencia</option>
          <option value="2">Menos de 1 a??o</option>
          <option value="3">M??s de 1 a??o</option>
          <option value="4">M??s de 2 a??os</option>
          <option value="5">M??s de 3 a??os</option>
        </select>
      </form>
    </div>


    <div class="sidebar-widget">

      <form action="#">
        <select>
          <option value="" disabled selected hidden>Ubicaci??n</option>
          <option value="1">Bogot??</option>
          <option value="2">Cundinamarca</option>
          <option value="3">Medell??n</option>

        </select>
      </form>
    </div>

    <button class="mx-auto h-9 lg:mx-0 bg-one text-rosa font-sans rounded-lg px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
      Buscar
    </button>
  </div>


  <div class="text-center sm:mx-4">
    <h1 class="font-serif tracking-wide text-3xl text-one mb-2 font-bold mt-20">Vacantes recientes</h1>
    <h3 class="font-sans text-sans text-one">Revisa los perfiles solicitados por cada empresa y ??aplica ahora!</h3>
  </div>

  <livewire:vacancy-list>
    @endsection

</x-app-layout>