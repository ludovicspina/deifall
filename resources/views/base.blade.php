<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Deifall</title>
    <link rel="icon" href="{{asset('images/deifall.png')}}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased bg-[#f6eee3]">
<div class="border border-b pb-4 mb-4 border-neutral-600">

    <div class="flex flex-col items-center">
        <div class="text-2xl font-semibold">Deifall</div>
        <div class="font-semibold">Medieval - Fantasy - Steampunk</div>
    </div>
    <div class="lg:flex lg:justify-center lg:gap-6 gap-1  grid grid-cols-3 text-center items-center">
        <a class="hover:underline border border-black lg:border-none {{ request()->is('/') ? 'text-blue-600':'' }}" href="{{ route('home') }}">Accueil</a>
        <a class="hover:underline border border-black lg:border-none{{ request()->is('society') ? 'text-blue-600':'' }}" href="{{ route('society') }}">Societé</a>
        <a class="hover:underline border border-black lg:border-none{{ request()->is('technology') ? 'text-blue-600':'' }}"
           href="{{ route('technology') }}">Technologie</a>
        <a class="hover:underline border border-black lg:border-none{{ request()->is('classes') ? 'text-blue-600':'' }}" href="{{ route('classes') }}">Classes</a>
            <a class="hover:underline border border-black lg:border-none{{ request()->is('races') ? 'text-blue-600':'' }}"
               href="{{ route('races') }}">Races</a>
            <a class="hover:underlin border border-black lg:border-none{{ request()->is('magic') ? 'text-blue-600':'' }}"
               href="{{ route('magic') }}">Magie</a>
        <a class="hover:underline border border-black lg:border-none{{ request()->is('divinity') ? 'text-blue-600':'' }}" href="{{ route('divinity') }}">Divinités</a>
        <a class="hover:underline border border-black lg:border-none{{ request()->is('character_creator') ? 'text-blue-600':'' }}"
           href="{{ route('character_creator') }}">Créateur</a>
    </div>
    @if(Auth::check())
        <div class="flex justify-center gap-6">

            <a class="hover:underline border border-black lg:border-none {{ request()->is('gm/main') ? 'text-blue-600':'' }}"
               href="{{ route('gm-main') }}">Main</a>
            <a class="hover:underline border border-black lg:border-none {{ request()->is('adventures/create') ? 'text-blue-600':'' }}"
               href="{{ route('adventures.create') }}">C Adventure</a>
            <a class="hover:underline border border-black lg:border-none {{ request()->is('items/create') ? 'text-blue-600':'' }}"
               href="{{ route('items.create') }}">C Items</a>


            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

            <a class="hover:underline border border-black lg:border-none text-red-700" href="{{ route('logout') }}"
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
