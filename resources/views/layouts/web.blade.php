<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aspirejobs</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
       @include('header')
        <main>
            <div>
                @yield('content')
            </div>
        </main>

        @include('footer')
    </body>
    </html>