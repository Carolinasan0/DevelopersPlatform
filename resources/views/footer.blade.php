<div class="grid grid-cols-3 h-50 text-left">
    <div class="bg-one px-10 py-6">
        <a href="">
            <img src="{{ asset('images/aspirejobsrosa.png') }}" class="h-4 mb-4 mt-4">
            <p class="font-sans text-sm text-rosa">Somos una empresa independiente en donde ayudamos a deasrrolladoras/es a encontrar el trabajo que sempre han querido, y a reclutadoras/es a encontrar personas con todo el potencial y profesionalismo para sus proyectos.</p>
        </a>
    </div>
    <div class="bg-one shadow-lg px-4 py-6">
        <h2 class="font-serif tracking-wide text-rosa text-lg mb-4">Contáctenos</h2>
        <p class="font-sans text-sm text-rosa">Atenderemos cualquier PQRS al correo electrónico: aspire@jobs.com</p>
    </div>
    <div class="bg-one shadow-lg px-10 py-6">
        <h2 class="font-serif tracking-wide text-rosa text-lg mb-4">Categorías</h2>
        <ul class="font-sans text-rosa text-sm">
            <li><a href="{{ url('categorias') }}">Desarrollador Full-Stack</a></li>
            <li><a href="{{ url('categorias') }}">Desarrollador UX/UI</a></li>
            <li><a href="{{ url('categorias') }}">Desarrollador Front-End</a></li>
            <li><a href="{{ url('categorias') }}">Desarrollador BackEnd</a></li>
        </ul>
        </a>
    </div>
</div>


<div class="bg-three flex items-center justify-center h-8">
    <div>
        <p class="text-xs text-rosa">Copyright &copy; 2021 <a href="{{ route('home') }}">ASPIREJOBS.</a> Todos los derechos reservados.</p>
    </div>
</div>