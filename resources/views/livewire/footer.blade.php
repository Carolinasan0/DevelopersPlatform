<footer class="footer bg-one relative pt-1 border-b-2 border-blue-700">
    <div class="container mx-auto px-6">

        <div class="sm:flex sm:mt-8">
            <div class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between">
                <div class="flex flex-col">
                    <span class="font-serif text-rosa uppercase mb-2"><a href="{{ route('home') }}">ASPIREJOBS</a></span>
                    <span class="my-2 text-rosa text-md">Somos una empresa independiente</br> en donde ayudamos a desarrolladoras/es</br> a encontrar el trabajo que sempre han querido,</br> y a reclutadoras/es a encontrar personas con</br> todo el potencial y profesionalismo para sus proyectos.</span>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-rosa uppercase mt-4 md:mt-0 mb-2">Contáctenos</span>
                    <span class="my-2 text-rosa text-md">Atenderemos cualquier PQRS</br> al correo electrónico: aspire@jobs.com</span>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-gray-700 uppercase mt-4 md:mt-0 mb-2">Categorías</span>
                    @foreach($categories as $category) 
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">{{ $category->name}}</a>
                     @endforeach

                </div>
            </div>
        </div>
    </div>
    <div class="bg-three mx-auto px-6">
        <div class="mt-16 flex flex-col items-center">
            <div class="sm:w-2/3 text-center py-6">
                <p class="text-sm text-rosa font-sans mb-2">
                    Copyright &copy; 2021 <a href="{{ route('home') }}">ASPIREJOBS.</a> Todos los derechos reservados.
                </p>
            </div>
        </div>
    </div>
</footer>
