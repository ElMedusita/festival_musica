@extends("layouts.app")


@section("contenido")
       <div class="relative flex justify-center min-h-screen py-4 bg-gray-100 items-top dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold leading-9 text-gray-900 dark:text-white">
                    <img src="https://www.resurrectionfest.es/media/Resurrection-Fest-Logo1.png">
                </h2>
                <h2>
                    <img src="https://64.media.tumblr.com/ba0325b86debbb69e57540e2aace4aaa/tumblr_orw1915Lvv1s9y3qio1_400.gif">
                    <img src="https://c.tenor.com/hpekZVJGVwUAAAAC/pastis-dj.gif" width="320" height="180">
                </h2>
                <h2 class="max-w-md mx-auto mt-3 text-xl leading-7 text-gray-500 dark:text-gray-400">
                    Registro de festejos de Resurrection Fest ©
                </h2>
                <a class="btn btn-success" href="{{ route('artistas.index') }}">Artistas</a>
                <a class="btn btn-success" href="{{ route('reservas.index') }}">Reservas</a>
                <a class="btn btn-success" href="{{ route('conciertos.index') }}">Conciertos</a>
                <a class="btn btn-success" href="{{ route('sesions.index') }}">Registro festejos</a>
            </div>
        </div>
    </div>
@endsection
