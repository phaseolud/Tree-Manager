<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
    <script src="{!! mix('js/app.js') !!}"></script>
</head>
<body class="font-sans antialiased">
<div class="w-full h-full min-h-screen">
    <!-- Page Content -->
    <main class="container mx-auto">
        {{ $slot }}
    </main>

    <section id="bottom-navigation" class="block fixed inset-x-0 bottom-0 z-10 border-t-2 border-green-500 bg-white shadow">
        <div id="tabs" class="flex justify-between">
            <a href="{{ route('trees') }}" class="w-full focus:text-green-500 hover:text-green-500 justify-center inline text-center pt-2 pb-2">
                <i class="fa fa-2x fa-tree"></i>
                <span class="block text-xs">Bomen</span>
            </a>

            <a href="{{route('qrscanner')}}" class="w-full focus:text-green-500 hover:text-green-500 justify-center inline text-center pt-2 pb-2">
                <i class="fa fa-2x fa-qrcode"></i>
                <span class="block text-xs">Scan</span>
            </a>

            <a href="{{ route('trees.create') }}" class="w-full focus:text-green-500 hover:text-green-500 justify-center inline text-center pt-2 pb-2">
                <i class="fa fa-2x fa-plus"></i>
                <span class="block text-xs">Voeg Toe</span>
            </a>

        </div>
    </section>
</div>
</body>
</html>
