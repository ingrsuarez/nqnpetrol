<x-guest-layout>
    <!-- component -->
    <!-- This is an example component -->


    <header>
        <div class="container relative z-10 max-w-screen-2xl">
            <nav class="flex items-center justify-between h-20 gap-12">
                <a
                    href="#"
                    class="ml-4 mt-8 inline-flex items-center gap-3 text-lg font-bold md:text-xl"
                >
                    {{-- <div class="flex items-center justify-center w-20 h-20 rounded-lg shadow-lg border-y shadow-primary-700/20 bg-gradient-to-b from-primary-500 to-primary-600 border-t-primary-400 border-b-primary-700"
                        > --}}
                    <div class="w-40 flex items-center justify-center">
                        <img src="{{asset('img/06/Isologo-HIO-DEV-1536x555.png')}}" alt="">
                        {{-- <span>HIO</span> --}}
                    </div>
                    
                    <span></span>
                </a>
            
                <ul class="items-center hidden mr-32 gap-8 text-sm font-medium lg:flex">
                    <li>
                        <a
                        class="transition relative h-20 inline-flex items-center text-gray-300 hover:text-white"
                        href="#"
                        >Home</a>
                    </li>
            
                    <li>
                        <a
                        class="transition relative h-20 inline-flex items-center text-gray-300 hover:text-white"
                        href="#"
                        >Services</a>
                    </li>
            
                    <li>
                        <a
                        class="transition relative h-20 inline-flex items-center text-gray-300 hover:text-white"
                        href="#"
                        >Team</a>
                    </li>
            
                    <li>
                        
                    </li>
            
                    {{-- <div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
                        <div @click="open = ! open">
                            <button class="flex items-center text-gray-300 hover:text-white focus:text-white transition duration-150 ease-in-out">
                                <div class="capitalize">Resources</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </div>
            
                        <div x-show="open"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute z-50 mt-2 w-48 rounded-lg shadow-lg origin-top-left left-0"
                            style="display: none;"
                            @click="open = false">
                            <div class="rounded-md ring-1 ring-black ring-opacity-5 py-2 bg-gray-900">
                                <a
                                href="#"
                                class="flex gap-3 items-center px-4 py-3 hover:bg-gray-700 focus:outline-none focus:bg-gray-700 transition duration-150 ease-in-out"
                                >Packages</a>
                                
                                                <a
                                href="#"
                                class="flex gap-3 items-center px-4 py-3 hover:bg-gray-700 focus:outline-none focus:bg-gray-700 transition duration-150 ease-in-out"
                                >Projects</a>
                                
                                                <a
                                href="#"
                                class="flex gap-3 items-center px-4 py-3 hover:bg-gray-700 focus:outline-none focus:bg-gray-700 transition duration-150 ease-in-out"
                                >Code examples</a>
                                
                                                <a
                                href="#"
                                class="flex gap-3 items-center px-4 py-3 hover:bg-gray-700 focus:outline-none focus:bg-gray-700 transition duration-150 ease-in-out"
                                >Job offers</a>
                                
                                                <a
                                href="#"
                                class="flex gap-3 items-center px-4 py-3 hover:bg-gray-700 focus:outline-none focus:bg-gray-700 transition duration-150 ease-in-out"
                                >Premium tools</a>
                                
                                                <a
                                href="#"
                                class="flex gap-3 items-center px-4 py-3 hover:bg-gray-700 focus:outline-none focus:bg-gray-700 transition duration-150 ease-in-out"
                                >People to Follow</a>
                                
                                                <a
                                href="#"
                                class="flex gap-3 items-center px-4 py-3 hover:bg-gray-700 focus:outline-none focus:bg-gray-700 transition duration-150 ease-in-out"
                                >Webinars</a>
                                
                                                <a
                                href="#"
                                class="flex gap-3 items-center px-4 py-3 hover:bg-gray-700 focus:outline-none focus:bg-gray-700 transition duration-150 ease-in-out"
                                >Project Ideas</a>
                                
                                                <a
                                href="#"
                                class="flex gap-3 items-center px-4 py-3 hover:bg-gray-700 focus:outline-none focus:bg-gray-700 transition duration-150 ease-in-out"
                                >Developer profiles</a>
                            </div>
                        </div>
                    </div> --}}
        
                    <li>
                        <a
                        class="transition relative h-20 inline-flex items-center text-gray-300 hover:text-white"
                        href="#" target="_blank"
                        >News</a>
                    </li>
            
                    <li>
                        <a
                        class="transition relative h-20 inline-flex items-center text-gray-300 hover:text-white"
                        href="#"
                        >Contact</a>
                    </li>
                    
                    <li
                        role="divider"
                        class="h-4 border-l border-gray-600"
                    ></li>
             
                    {{-- <li class="-mr-2">
                        <button
                            class="font-medium text-gray-400 button button--secondary"
                            @click="$dispatch('toggle-spotlight')"
                        >
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                            <span class="pr-3 font-bold">Search</span>
                        </button>
                    </li> --}}
            
                    <li>
                        @if (Route::has('login'))
                            <div class="">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="transition relative h-20 inline-flex items-center text-gray-300 hover:text-white">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="transition relative h-20 inline-flex items-center text-gray-300 hover:text-white">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-2 transition relative h-20 inline-flex items-center text-gray-300 hover:text-white">Register</a>
                                    @endif
                                @endauth
                            </div>
                            
                        @endif
                    </li>
                    
                </ul>
        
                <button
                    type="button"
                    x-on:click="open = !open"
                    class="flex items-center justify-center gap-3 p-2 pl-3 text-sm font-medium text-gray-200 bg-gray-700 rounded lg:hidden border-b-transparent border-y border-t-gray-600"
                >
                    <span x-text="open ? 'Close' : 'Menu'">Menu</span>
            
                    <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>            
                </button>
            </nav>
        </div>
        
        <nav
        class="navbar--mobile"
        :class="open || 'hidden'"
        x-cloak
        x-transition.origin.top
        >
        <div class="border-t border-gray-700"></div>
        
        <div class="container max-w-screen-2xl">
                <ul class="py-3 font-medium space-y-1">
            <li>
        <a
        class="text-gray-300 flex p-3 w-full items-center gap-3 hover:text-white hover:bg-gray-700 rounded-xl"
        href="#"
        >Courses</a>
        </li>
        
            <li>
        <a
        class="text-gray-300 flex p-3 w-full items-center gap-3 hover:text-white hover:bg-gray-700 rounded-xl"
        href="#"
        >Quick Tips</a>
        </li>
        
            <li>
        <a
        class="text-gray-300 flex p-3 w-full items-center gap-3 hover:text-white hover:bg-gray-700 rounded-xl"
        href="#"
        >Premium Tutorials</a>
        </li>
        
            <li>
        <a
        class="text-gray-300 flex p-3 w-full items-center gap-3 hover:text-white hover:bg-gray-700 rounded-xl"
        href="#"
        >Learning Roadmap</a>
        </li>
        
            <div
        x-data="{open: false}"
        class="bg-gray-700/50 rounded-xl"
        >
        <div @click="open = ! open" class="">
        <div class="flex p-3 w-full items-center justify-between gap-3 text-gray-300 capitalize cursor-pointer hover:text-white hover:bg-gray-600" :class="{ 'rounded-t-xl': open, 'rounded-xl': !open }">
            Resources
            <div>
                <svg class="fill-current h-4 w-4" x-show="!open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
                <svg class="fill-current h-4 w-4 rotate-180" x-show="open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
            </div>
        </div>
        </div>
        
        <div x-show="open">
        <a
        class="flex px-3 py-3 w-full items-center gap-3 text-gray-300 hover:text-white hover:bg-gray-600 last:rounded-b-xl"
        href="#"
        >
        Packages
        </a>
        
                    <a
        class="flex px-3 py-3 w-full items-center gap-3 text-gray-300 hover:text-white hover:bg-gray-600 last:rounded-b-xl"
        href="#"
        >
        Projects
        </a>
        
                    <a
        class="flex px-3 py-3 w-full items-center gap-3 text-gray-300 hover:text-white hover:bg-gray-600 last:rounded-b-xl"
        href="#"
        >
        Code examples
        </a>
        
                    <a
        class="flex px-3 py-3 w-full items-center gap-3 text-gray-300 hover:text-white hover:bg-gray-600 last:rounded-b-xl"
        href="#"
        >
        Job offers
        </a>
        
                    <a
        class="flex px-3 py-3 w-full items-center gap-3 text-gray-300 hover:text-white hover:bg-gray-600 last:rounded-b-xl"
        href="#"
        >
        Premium tools
        </a>
        
                    <a
        class="flex px-3 py-3 w-full items-center gap-3 text-gray-300 hover:text-white hover:bg-gray-600 last:rounded-b-xl"
        href="#"
        >
        People to Follow
        </a>
        
                    <a
        class="flex px-3 py-3 w-full items-center gap-3 text-gray-300 hover:text-white hover:bg-gray-600 last:rounded-b-xl"
        href="#"
        >
        Webinars
        </a>
        
                    <a
        class="flex px-3 py-3 w-full items-center gap-3 text-gray-300 hover:text-white hover:bg-gray-600 last:rounded-b-xl"
        href="#"
        >
        Project Ideas
        </a>
        
                    <a
        class="flex px-3 py-3 w-full items-center gap-3 text-gray-300 hover:text-white hover:bg-gray-600 last:rounded-b-xl"
        href="#"
        >
        Developer profiles
        </a>
        </div>
        </div>
        
            <li>
        <a
        class="text-gray-300 flex p-3 w-full items-center gap-3 hover:text-white hover:bg-gray-700 rounded-xl"
        href="#" target="_blank"
        >Newsletter</a>
        </li>
        
            <li>
        <a
        class="text-gray-300 flex p-3 w-full items-center gap-3 hover:text-white hover:bg-gray-700 rounded-xl"
        href="#"
        >Pricing</a>
        </li>
        
            <div class="h-px my-2 bg-gradient-to-r from-gray-800 via-primary-400 to-gray-800"></div>
        
            
                            <li>
        <a
        class="text-gray-300 flex p-3 w-full items-center gap-3 hover:text-white hover:bg-gray-700 rounded-xl"
        href="#"
        ><svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
        </svg>                    Login</a>
        </li>
        
                <li>
                    <a
                        class="button--mobile-primary"
                        href="#"
                    >
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
        </svg>                        <span>Become a member</span>
                    </a>
                </li>
            
            
            
            
            <li>
                <div class="my-3">
                    <label class="sr-only">
                        Search
                    </label>
        
                    <button type="button" @click="$dispatch('toggle-spotlight')" class="relative flex w-full text-left items-center">
                        <div
                            class="py-3 pl-4 pr-12 text-sm transition bg-gray-700 hover:bg-gray-600 border-0 border-t border-b rounded-lg text-gray-400 grow border-t-gray-600 border-b-transparent"
                        >Search for anything: performance, services...</div>
        
                        <div
                            class="absolute flex items-center justify-center w-8 h-8 text-white rounded-md shadow-lg right-2 shadow-primary-700/30 border-y border-t-primary-400 border-b-primary-800 bg-gradient-to-b from-primary-500 to-primary-600"
                        >
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>                        </div>
                    </button>
                </div>
            </li>
        </ul>
        </div>
        </nav>
        </div>
        </header>


    <div class="rounded-b">
        {{-- <img src="img/06/fondo3.jpeg" alt="Desarrollo de software a medida" class="h-full w-full object-cover object-center"> --}}
        {{-- <h2>Servicios Oil and Gas</h2> --}}
        <section class="relative pt-16 -mt-20 overflow-hidden text-white bg-gray-800">
        
            <div class="h-20"></div>
    
            <div
                class="absolute animate-[spin_8s_linear_infinite] right-0 w-1/3 border-b rounded-full -top-1/2 aspect-square border-primary-600/30">
            </div>
    
            <div
                class="absolute animate-[spin_6s_linear_infinite] right-0 w-1/2 border-b rounded-full -top-1/2 aspect-square border-primary-600/30">
            </div>
    
            <div
                class="absolute animate-[spin_4s_linear_infinite] right-0 w-2/3 border-b rounded-full -top-1/2 aspect-square border-primary-600/30">
            </div>
    
            <div
                class="absolute animate-[spin_2s_linear_infinite] right-0 w-full border-b rounded-full -top-1/2 aspect-square border-primary-600/30">
            </div>
        
            <div class="container relative">
                <header class="flex flex-col items-center text-start">
    
                    <h3 class="mt-4 mb-16 text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold tracking-tighter max-w-[20ch]">
                        Hole In One
                    </h3>
                </header>
            </div>
        </section>
    </div>

    <div class="mx-auto my-16 max-w-2xl sm:px-6 md:grid md:max-w-7xl lg:grid-cols-3 lg:gap-x-8 md:px-8">
        
        <div class="group relative">
            <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
              <img src="img/06/fondo3.jpeg" alt="Desarrollo de software a medida" class="h-full w-full object-cover object-center">
            </div>  
            <h3 class="mt-6 text-sm text-gray-500">
              <a href="#">
                <span class="absolute inset-0"></span>
                Ecometer
              </a>
            </h3>
            <p class="text-base font-semibold text-gray-900">Mesurments field services, well optimization.</p>
          
        </div>
        <div class="group relative">
            <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
              <img src="img/06/fondo3.jpg" alt="Desarrollo de software a medida" class="h-full w-full object-cover object-center">
            </div>  
            <h3 class="mt-6 text-sm text-gray-500">
              <a href="#">
                <span class="absolute inset-0"></span>
                    Hot Oil services.
              </a>
            </h3>
            <p class="text-base font-semibold text-gray-900">Hot Oil dispatch services, water transport from field.</p>
          
        </div>
        <div class="group relative">
            <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
              <img src="img/06/image-12.jpeg" alt="Desarrollo de software a medida" class="h-full w-full object-cover object-center">
            </div>  
            <h3 class="mt-6 text-sm text-gray-500">
              <a href="#">
                <span class="absolute inset-0"></span>
                Analitycs.
              </a>
            </h3>
            <p class="text-base font-semibold text-gray-900">Data analitycs, well optimization and monitorization.</p>
          
        </div>          
          
    </div>


    <div class="bg-white py-10 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold leading-7 text-indigo-600">Oil and Gas services</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Deploy fast services.</p>
                <p class="mt-6 text-lg leading-8 text-gray-600">Customer solutions.</p>
        
            CONTACT:

            <a href="mailto:info@xnztech.dev"> info@hio.dev</a>
            </div>
       
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                                </svg>
                            </div>
                            Field services.
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Customer support.</dd>
    
                    </div>

                    <div class="relative pl-16">
                        <dt class="inline font-semibold text-gray-900">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                                </svg>
                            </div>
                          
                          Data analitycs.
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">
                            More than 20 years experienced team in field services.
                        </dd>
                    </div>

                    <div class="relative pl-16">
                        <dt class="inline font-semibold text-gray-900">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                </svg>
                            </div>
                          
                            Automation and process control.
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">
                            • RPA, 2NV. <br>
                            • Xpoc - Rockwell <br>
                            • PLC´s SCADA HITEC


                        </dd>
                    </div>

                    <div class="relative pl-16">
                        <dt class="inline font-semibold text-gray-900">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
                                </svg>
                            </div>
                          
                            Hardware solutions.
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">
                            • Design. <br>
                            • Control. <br>
                            • Events detection.


                        </dd>
                    </div>


                </dl>
            </div>
        </div>
    </div> 
    <footer class="container ml-8 pb-8">
        <img class="w-20" src="{{asset('img/06/Isologo-HIO-DEV-1536x555.png')}}" alt="">
        <p class="float-right text-orange-400"><a href="#">Back to top</a></p>
        <p>&copy; Hole in One Software Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
    
</x-guest-layout>