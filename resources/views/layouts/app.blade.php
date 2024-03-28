<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'WELLS') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles

        {{-- Captcha --}}
        {{-- {!! NoCaptcha::renderJs() !!} --}}
        <script src="https://www.google.com/recaptcha/api.js?render=6Lcj26YpAAAAAPgC433TFIs3dDZuBejB0_ha8Q6N"></script>
        
    </head>
    <body class="font-sans antialiased bg-gray-300">
        <x-banner />

        <div class="bg-gray-300">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="h-screen">
                <div>@livewire('side-bar')</div>
                {{-- <div class="relative h-fit md:absolute md:top-20 md:ml-64 mx-2 w-fit lg:w-fit">{{ $slot }}</div> --}}
                <div class="relative h-fit bg-color-transparent md:absolute md:top-20 md:ml-64 mx-2 w-fit lg:w-3/4">{{ $slot }}</div>
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
