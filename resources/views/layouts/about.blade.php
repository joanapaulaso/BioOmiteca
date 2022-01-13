<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BioOmiteca MA') }}</title>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.0.0-beta.7/chart.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body class="h-screen">
    <div class="static h-screen flex flex-wrap m-auto overflow-x-hidden">
        @include('layouts.cabecalho')
        <div class="flex w-full">
            <aside class="relative bg-gray-100">
                @include('layouts.menu')
            </aside>
            <main class="relative bg-white w-full">
                @livewire('about')
            </main>
        </div>
    </div>
    @livewireScripts
</body>
</html>
