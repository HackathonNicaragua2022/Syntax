<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>MoaT</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" type="text/css" href="css/dash.css">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <div>
    @include('layouts.navigation')
</div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"
             class="bg-white overflow-hidden shadow-sm sm:rounded-lg"
                class="p-6 bg-white border-b border-gray-200">





            <button type="button" class="ml-3" href="/chat"><a>chats</a>
            </button>
        </div>
    </div>
</body>
</html>
