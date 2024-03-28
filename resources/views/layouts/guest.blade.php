<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        {{-- Captcha --}}
        {{-- {!! NoCaptcha::renderJs() !!} --}}
        <script src="https://www.google.com/recaptcha/api.js?render=6Lcj26YpAAAAAPgC433TFIs3dDZuBejB0_ha8Q6N"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        

        {{-- <nav x-data="{ open: false }" class="bg-[#2c4158] sm:py-4 border-b border-gray-100 shadow">
            
            <div class="px-4 sm:px-6">
                <div class="flex place-content-start">
                    <div class="shrink-0 flex">
                        <a href="{{ route('dashboard') }}">
                            <x-application-mark class="h-14 w-auto" />
                        </a>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex  lg:px-36">
                        <x-nav-link class="font-semibold text-gray-100 active:bg-slate-100" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                            Inicio
                        </x-nav-link>
                        <x-nav-link class="text-white" href="{{ route('dashboard') }}" :active="request()->routeIs('nuevoPedido')">
                            Servicios
                        </x-nav-link>
                    </div>
                </div>
            </div>
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-300 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-300 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-300 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
            
        @endif
            
        </nav> --}}

        <div class="font-sans text-gray-900 antialiased">
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif
            {{ $slot }}
        </div>

        @livewireScripts
    </body>
</html>
