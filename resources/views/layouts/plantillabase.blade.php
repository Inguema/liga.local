<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>@yield('title')</title>
    <!-- Tailwind-css CDN  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.4.6/tailwind.min.css" />

    <nav class="bg-green-600 shadow-lg">
        <div class="container mx-auto">
            <div class="sm:flex justify-around">
                <a href="/" class="text-white text-3xl font-bold p-3">Liga Local It Academy</a>
                <ul class="text-gray-400 sm:self-center text-xl border-t sm:border-none">
                    <li class="sm:inline-block">
                        <a href="{{route('club.index')}}" class="p-3 hover:text-white">Clubs</a>
                    </li>
                    <li class="sm:inline-block">
                        <a href="{{route('equipo.index')}}" class="p-3 hover:text-white">Equipos</a>
                    </li>
                    <li class="sm:inline-block">
                        <a href="{{route('partido.index')}}" class="p-3 hover:text-white">Partidos</a>
                    </li>
                    <li class="sm:inline-block">
                        <a href="{{route('jugador.index')}}" class="p-3 hover:text-white">Jugadores</a>
                    </li>
                    @can('edit')
                        <li class="sm:inline-block">
                            <a href="{{route('user.index')}}" class="p-3 hover:text-white">Usuarios</a>
                        </li>
                    @endcan
                    @auth
                        <li class="sm:inline-block">
                            <form method="POST" action="{{ route('logout') }}" class="p-3 hover:text-white">
                                @csrf
                                <button type="submit" class="">Salir</button>
                            </form>
                        </li>
                        <li class="sm:inline-block">
                            <p>{{ auth()->user()->email }}</p>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    @if(session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
    @endif
</head>
<body>

<div class="container">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<footer class="bg-light text-center text-sm">
    <div class="ml-4 text-sm leading-7 font-semibold text-gray-900 dark:text-white">
        © 2022 Copyright:
        <a class="text-dark" href="/">liga.test</a>
    </div>
</footer>

</body>

</html>
