
<header>
<div class="container relative z-10 max-w-screen-2xl">
<nav class="flex items-center justify-between h-20 gap-12">
    <a
        href="https://laraveldaily.com"
        class="inline-flex items-center gap-3 text-lg font-bold md:text-xl"
    >
        <div
            class="flex items-center justify-center w-8 h-8 rounded-lg shadow-lg border-y shadow-primary-700/20 bg-gradient-to-b from-primary-500 to-primary-600 border-t-primary-400 border-b-primary-700"
        >
            <img
                class="w-4 h-4"
                src="https://laraveldaily.com/img/logos/mono.svg"
                alt=""
            >
        </div>

        <span>Laravel Daily</span>
    </a>

    <ul class="items-center hidden gap-8 text-sm font-medium lg:flex">
        <li>
<a
class="transition relative h-20 inline-flex items-center text-gray-300 hover:text-white"
href="https://laraveldaily.com/courses"
>Courses</a>
</li>

        <li>
<a
class="transition relative h-20 inline-flex items-center text-gray-300 hover:text-white"
href="https://laraveldaily.com/tag/premium-tutorials"
>Premium Tutorials</a>
</li>

        <li>
<a
class="transition relative h-20 inline-flex items-center text-gray-300 hover:text-white"
href="https://laraveldaily.com/tips"
>Quick Tips</a>
</li>

        <li>
<a
class="transition relative h-20 inline-flex items-center text-gray-300 hover:text-white"
href="https://laraveldaily.com/roadmap-learning-path"
>Learning Roadmap</a>
</li>

        <div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
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
href="https://laraveldaily.com/packages"
class="flex gap-3 items-center px-4 py-3 hover:bg-gray-700 focus:outline-none focus:bg-gray-700 transition duration-150 ease-in-out"
>Packages</a>

                <a
href="https://laraveldaily.com/code-examples/projects"
class="flex gap-3 items-center px-4 py-3 hover:bg-gray-700 focus:outline-none focus:bg-gray-700 transition duration-150 ease-in-out"
>Projects</a>

                <a
href="https://laraveldaily.com/code-examples"
class="flex gap-3 items-center px-4 py-3 hover:bg-gray-700 focus:outline-none focus:bg-gray-700 transition duration-150 ease-in-out"
>Code examples</a>

                <a
href="https://laraveldaily.com/jobs/offers"
class="flex gap-3 items-center px-4 py-3 hover:bg-gray-700 focus:outline-none focus:bg-gray-700 transition duration-150 ease-in-out"
>Job offers</a>

                <a
href="https://laraveldaily.com/premium-tools"
class="flex gap-3 items-center px-4 py-3 hover:bg-gray-700 focus:outline-none focus:bg-gray-700 transition duration-150 ease-in-out"
>Premium tools</a>

                <a
href="https://laraveldaily.com/people-to-follow"
class="flex gap-3 items-center px-4 py-3 hover:bg-gray-700 focus:outline-none focus:bg-gray-700 transition duration-150 ease-in-out"
>People to Follow</a>

                <a
href="https://laraveldaily.com/webinars"
class="flex gap-3 items-center px-4 py-3 hover:bg-gray-700 focus:outline-none focus:bg-gray-700 transition duration-150 ease-in-out"
>Webinars</a>

                <a
href="https://laraveldaily.com/project-ideas"
class="flex gap-3 items-center px-4 py-3 hover:bg-gray-700 focus:outline-none focus:bg-gray-700 transition duration-150 ease-in-out"
>Project Ideas</a>

                <a
href="https://laraveldaily.com/jobs/developer-profiles"
class="flex gap-3 items-center px-4 py-3 hover:bg-gray-700 focus:outline-none focus:bg-gray-700 transition duration-150 ease-in-out"
>Developer profiles</a>
</div>
</div>
</div>

        <li>
<a
class="transition relative h-20 inline-flex items-center text-gray-300 hover:text-white"
href="https://us11.campaign-archive.com/home/?u=a459401212599a54203d036ee&id=91c1337873" target="_blank"
>Newsletter</a>
</li>

        <li>
<a
class="transition relative h-20 inline-flex items-center text-gray-300 hover:text-white"
href="https://laraveldaily.com/pricing"
>Pricing</a>
</li>

                            <li>
<a
class="transition relative h-20 inline-flex items-center text-gray-300 hover:text-white"
href="https://laraveldaily.com/login"
>Login</a>
</li>
        
        <li
            role="divider"
            class="h-4 border-l border-gray-600"
        ></li>

        <li class="-mr-2">
            <button
                class="font-medium text-gray-400 button button--secondary"
                @click="$dispatch('toggle-spotlight')"
            >
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
                <span class="pr-3 font-bold">Search</span>
            </button>
        </li>

                            <li>
                <a
                    href="https://laraveldaily.com/register"
                    class="button button--primary"
                >
                    Join Premium
                </a>
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
</svg>            </button>
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
href="https://laraveldaily.com/courses"
>Courses</a>
</li>

    <li>
<a
class="text-gray-300 flex p-3 w-full items-center gap-3 hover:text-white hover:bg-gray-700 rounded-xl"
href="https://laraveldaily.com/tips"
>Quick Tips</a>
</li>

    <li>
<a
class="text-gray-300 flex p-3 w-full items-center gap-3 hover:text-white hover:bg-gray-700 rounded-xl"
href="https://laraveldaily.com/tag/premium-tutorials"
>Premium Tutorials</a>
</li>

    <li>
<a
class="text-gray-300 flex p-3 w-full items-center gap-3 hover:text-white hover:bg-gray-700 rounded-xl"
href="https://laraveldaily.com/roadmap-learning-path"
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
href="https://laraveldaily.com/packages"
>
Packages
</a>

            <a
class="flex px-3 py-3 w-full items-center gap-3 text-gray-300 hover:text-white hover:bg-gray-600 last:rounded-b-xl"
href="https://laraveldaily.com/code-examples/projects"
>
Projects
</a>

            <a
class="flex px-3 py-3 w-full items-center gap-3 text-gray-300 hover:text-white hover:bg-gray-600 last:rounded-b-xl"
href="https://laraveldaily.com/code-examples"
>
Code examples
</a>

            <a
class="flex px-3 py-3 w-full items-center gap-3 text-gray-300 hover:text-white hover:bg-gray-600 last:rounded-b-xl"
href="https://laraveldaily.com/jobs/offers"
>
Job offers
</a>

            <a
class="flex px-3 py-3 w-full items-center gap-3 text-gray-300 hover:text-white hover:bg-gray-600 last:rounded-b-xl"
href="https://laraveldaily.com/premium-tools"
>
Premium tools
</a>

            <a
class="flex px-3 py-3 w-full items-center gap-3 text-gray-300 hover:text-white hover:bg-gray-600 last:rounded-b-xl"
href="https://laraveldaily.com/people-to-follow"
>
People to Follow
</a>

            <a
class="flex px-3 py-3 w-full items-center gap-3 text-gray-300 hover:text-white hover:bg-gray-600 last:rounded-b-xl"
href="https://laraveldaily.com/webinars"
>
Webinars
</a>

            <a
class="flex px-3 py-3 w-full items-center gap-3 text-gray-300 hover:text-white hover:bg-gray-600 last:rounded-b-xl"
href="https://laraveldaily.com/project-ideas"
>
Project Ideas
</a>

            <a
class="flex px-3 py-3 w-full items-center gap-3 text-gray-300 hover:text-white hover:bg-gray-600 last:rounded-b-xl"
href="https://laraveldaily.com/jobs/developer-profiles"
>
Developer profiles
</a>
</div>
</div>

    <li>
<a
class="text-gray-300 flex p-3 w-full items-center gap-3 hover:text-white hover:bg-gray-700 rounded-xl"
href="https://us11.campaign-archive.com/home/?u=a459401212599a54203d036ee&id=91c1337873" target="_blank"
>Newsletter</a>
</li>

    <li>
<a
class="text-gray-300 flex p-3 w-full items-center gap-3 hover:text-white hover:bg-gray-700 rounded-xl"
href="https://laraveldaily.com/pricing"
>Pricing</a>
</li>

    <div class="h-px my-2 bg-gradient-to-r from-gray-800 via-primary-400 to-gray-800"></div>

    
                    <li>
<a
class="text-gray-300 flex p-3 w-full items-center gap-3 hover:text-white hover:bg-gray-700 rounded-xl"
href="https://laraveldaily.com/login"
><svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
<path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg>                    Login</a>
</li>

        <li>
            <a
                class="button--mobile-primary"
                href="https://laraveldaily.com/register"
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