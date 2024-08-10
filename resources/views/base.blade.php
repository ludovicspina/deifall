<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased bg-[#f6eee3]">
<div class="border border-b pb-4 mb-4 border-neutral-600">

    <div class="flex flex-col items-center">
        <div class="text-2xl font-semibold">Monde de Cactema</div>
        <div class="font-semibold">Medieval - Fantasy - Steampunk</div>
    </div>
    <div class="flex justify-center gap-6">
        <a class="hover:underline {{ request()->is('/') ? 'text-blue-600':'' }}" href="{{ route('home') }}">Accueil</a>
        <a class="hover:underline {{ request()->is('society') ? 'text-blue-600':'' }}" href="{{ route('society') }}">Societé</a>
        <a class="hover:underline {{ request()->is('technology') ? 'text-blue-600':'' }}"
           href="{{ route('technology') }}">Technologie</a>
        <a class="hover:underline {{ request()->is('classes') ? 'text-blue-600':'' }}" href="{{ route('classes') }}">Classes</a>
            <a class="hover:underline {{ request()->is('races') ? 'text-blue-600':'' }}"
               href="{{ route('races') }}">Races</a>
            <a class="hover:underline {{ request()->is('magic') ? 'text-blue-600':'' }}"
               href="{{ route('magic') }}">Magie</a>
        <a class="hover:underline {{ request()->is('divinity') ? 'text-blue-600':'' }}" href="{{ route('divinity') }}">Divinités</a>
        <a class="hover:underline {{ request()->is('character_creator') ? 'text-blue-600':'' }}"
           href="{{ route('character_creator') }}">Créateur de caractère</a>
    </div>
    @if(Auth::check())
        <div class="flex justify-center gap-6">

            <a class="hover:underline {{ request()->is('gm/main') ? 'text-blue-600':'' }}"
               href="{{ route('gm-main') }}">Main</a>
            <a class="hover:underline {{ request()->is('magic') ? 'text-blue-600':'' }}"
               href="{{ route('magic') }}">TMP</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

            <a class="hover:underline text-red-700" href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>


        </div>
    @endif

</div>
@section('content')
@show
</body>
</html>
