<div>
    <!-- Sidenav -->
    <nav
    id="sidenav-8"
    class="left-0 top-16 fixed z-40 h-screen w-52 -translate-x-full overflow-hidden invisible md:visible bg-zinc-800 shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] data-[te-sidenav-hidden='false']:translate-x-0 dark:bg-zinc-800"
    data-te-sidenav-init
    data-te-sidenav-hidden="false"
    data-te-sidenav-position="absolute"
    data-te-sidenav-accordion="true">
    <ul
    class="relative m-0 list-none px-[0.2rem] pb-12"
    data-te-sidenav-menu-ref>
  
    <li class="relative pt-4">
        <button onclick="showMenuClients(true)" class="focus:outline-none focus:text-indigo-400 text-left  text-white flex justify-between items-center w-full space-x-14 ">
            <span class="px-6 text-[0.8rem] font-bold uppercase text-gray-300 dark:text-gray-400">
            CLIENTES:</span>
            <svg id="iconClients" class="transform" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 15L12 9L6 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
        <div id="menuClients" class="flex justify-start  flex-col w-full md:w-auto">

            <a class="text-gray-300 flex cursor-pointer items-center truncate rounded-[5px] px-6 py-[0.45rem] text-[0.85rem]
            data-[active=active]:bg-slate-50  data-[active=active]:text-inherit
            hover:bg-slate-50 hover:text-inherit hover:outline-none
            focus:bg-slate-50 focus:text-inherit focus:outline-none"
            data-active="{{ Route::currentRouteName()=='employee.new' ? 'active' : ''}}"
            href="{{route('client.new')}}">
                
                <span
                    class="mr-4 [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                    <svg 
                        xmlns="http://www.w3.org/2000/svg" 
                        fill="none" 
                        width="800px" 
                        height="800px" 
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor">
                        <path d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm-9-2V7H4v3H1v2h3v3h2v-3h3v-2H6zm9 4c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    </svg>
                </span>
                <span>Nuevo Cliente </span>
            </a>

            <a class="text-gray-300 flex cursor-pointer items-center truncate rounded-[5px] px-6 py-[0.45rem] text-[0.85rem]
            data-[active=active]:bg-slate-50  data-[active=active]:text-inherit
            hover:bg-slate-50 hover:text-inherit hover:outline-none hover:[&>svg]:text-gray-400
            focus:bg-slate-50 focus:text-inherit focus:outline-none"
            data-active="{{ Route::currentRouteName()=='well.dashboard' ? 'active' : ''}}"
            href="{{route('well.dashboard')}}">
                
                <span
                class="mr-4 [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-gray-500 dark:[&>svg]:text-gray-400">
                    <svg 
                        height="800px" 
                        width="800px" 
                        fill="none"
                        stroke-width="8"
                        stroke="currentColor" 
                        version="1.2" 
                        xmlns="http://www.w3.org/2000/svg" 
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="-377 383 256 256" 
                        >
                        <g>
                            <polygon fill="none" points="-258.1,479.3 -260.3,494.7 -247.3,483.7 	"/>
                            <polygon fill="none" points="-229.1,579 -234.9,539.1 -260.2,555.2 	"/>
                            <polygon fill="none" points="-237.5,520.8 -241.4,494.1 -256.4,506.8 	"/>
                            <polygon fill="none" points="-263.4,516.2 -267.7,546 -243.8,530.8 	"/>
                            <polygon fill="none" points="-200.9,562.9 -184.5,562.9 -184.5,509.8 -229.9,491 -227.7,506.5 -211.9,616 -200.9,616 	"/>
                            <polygon fill="none" points="-257.8,616 -223.8,616 -227,593.7 	"/>
                            <polygon fill="none" points="-270.1,562.4 -277.8,616 -237.9,587.1 	"/>
                            <path d="M-156.8,616v-53.2h-17v-48.6l1.3,0.6c0.7,0.3,1.3,0.4,2.1,0.4c2.1,0,4.1-1.2,5-3.3l7.6-18.4c0.6-1.3,0.6-2.8,0-4.1
                                c-0.6-1.3-1.6-2.3-2.9-2.9l-115.9-48c4.2-8.1,8-16.3,11.3-24.5c1.1-2.7-0.2-5.8-2.9-7l-45.8-19c-2.7-1.1-5.9,0.2-7,2.8
                                c-11.3,26.6-18.6,56.1-23,93.1c-0.3,2.4,1.1,4.7,3.3,5.6l19.6,8.1c2.2,0.9,4.8,0.3,6.2-1.6c8.5-10.8,15.8-20.9,22.5-31l23.2,9.6
                                l-1.1,7.9l-3.5,23.9L-289.6,616h-77.5v18.9H-133V616L-156.8,616L-156.8,616z M-237.5,520.8l-18.9-14.1l15-12.7L-237.5,520.8z
                                M-234.9,539.1l5.7,39.9l-31-23.8L-234.9,539.1z M-258.1,479.3l10.7,4.5l-12.9,10.9L-258.1,479.3z M-263.4,516.2l19.6,14.6
                                l-23.9,15.2L-263.4,516.2z M-270.1,562.4l32.2,24.7l-39.9,28.9L-270.1,562.4z M-257.8,616l30.8-22.3l3.2,22.3H-257.8z
                                M-227.7,506.5l-2.2-15.5l45.4,18.8v53.1h-16.4V616h-11L-227.7,506.5z"/>
                        </g>
                    </svg>
                </span>
                <span>Pozos</span>
            </a>


           
        </div>
    </li>   

    <li class="relative pt-4">
        <button onclick="showMenu1(true)" class="focus:outline-none focus:text-indigo-400 text-left  text-white flex justify-between items-center w-full space-x-14 ">
            <span class="px-6 text-[0.8rem] font-bold uppercase text-gray-300 dark:text-gray-400">
            RRHH:</span>
            <svg id="icon1" class="transform" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 15L12 9L6 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
        <div id="menu1" class="flex justify-start  flex-col w-full md:w-auto">

            <a class="text-gray-300 flex cursor-pointer items-center truncate rounded-[5px] px-6 py-[0.45rem] text-[0.85rem]
            data-[active=active]:bg-slate-50  data-[active=active]:text-inherit
            hover:bg-slate-50 hover:text-inherit hover:outline-none
            focus:bg-slate-50 focus:text-inherit focus:outline-none"
            data-active="{{ Route::currentRouteName()=='employee.new' ? 'active' : ''}}"
            href="{{route('employee.new')}}">
                
                <span
                    class="mr-4 [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                    <svg 
                        xmlns="http://www.w3.org/2000/svg" 
                        fill="none" 
                        width="800px" 
                        height="800px" 
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor">
                        <path d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm-9-2V7H4v3H1v2h3v3h2v-3h3v-2H6zm9 4c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    </svg>
                </span>
                <span>Nuevo empleado </span>
            </a>

            <a class="text-gray-300 flex cursor-pointer items-center truncate rounded-[5px] px-6 py-[0.45rem] text-[0.85rem]
            data-[active=active]:bg-slate-50  data-[active=active]:text-inherit
            hover:bg-slate-50 hover:text-inherit hover:outline-none
            focus:bg-slate-50 focus:text-inherit focus:outline-none"
            data-active="{{ Route::currentRouteName()=='patient.index' ? 'active' : ''}}"
            href="{{route('leave.new')}}">
                
                <span
                    class="mr-4 [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-5 w-5">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </span>
                <span>Licencias</span>
            </a>


            <a class="text-gray-300 flex cursor-pointer items-center truncate rounded-[5px] px-6 py-[0.45rem] text-[0.85rem]
            data-[active=active]:bg-slate-50  data-[active=active]:text-inherit
            hover:bg-slate-50 hover:text-inherit hover:outline-none
            focus:bg-slate-50 focus:text-inherit focus:outline-none"
            data-active="{{ Route::currentRouteName()=='positions.new' ? 'active' : ''}}"
            href="{{route('job.chart')}}">
                
                <span
                    
                    class="mr-4 [&>svg]:h-3.5 [&>svg]:w-3.5 [&>svg]:fill-gray-400 dark:[&>svg]:fill-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path
                        d="M80 104c13.3 0 24-10.7 24-24s-10.7-24-24-24S56 66.7 56 80s10.7 24 24 24zm80-24c0 32.8-19.7 61-48 73.3v87.8c18.8-10.9 40.7-17.1 64-17.1h96c35.3 0 64-28.7 64-64v-6.7C307.7 141 288 112.8 288 80c0-44.2 35.8-80 80-80s80 35.8 80 80c0 32.8-19.7 61-48 73.3V160c0 70.7-57.3 128-128 128H176c-35.3 0-64 28.7-64 64v6.7c28.3 12.3 48 40.5 48 73.3c0 44.2-35.8 80-80 80s-80-35.8-80-80c0-32.8 19.7-61 48-73.3V352 153.3C19.7 141 0 112.8 0 80C0 35.8 35.8 0 80 0s80 35.8 80 80zm232 0c0-13.3-10.7-24-24-24s-24 10.7-24 24s10.7 24 24 24s24-10.7 24-24zM80 456c13.3 0 24-10.7 24-24s-10.7-24-24-24s-24 10.7-24 24s10.7 24 24 24z" />
                    </svg>
                </span>
                <span>Organigrama </span>
            </a>


            <a class="text-gray-300 flex cursor-pointer items-center truncate rounded-[5px] px-6 py-[0.45rem] text-[0.85rem]
            data-[active=active]:bg-slate-50  data-[active=active]:text-inherit
            hover:bg-slate-50 hover:text-inherit hover:outline-none
            focus:bg-slate-50 focus:text-inherit focus:outline-none"
            data-active="{{ Route::currentRouteName()=='job.new' ? 'active' : ''}}"
            href="{{route('job.new')}}">
                
                <span
                    class="mr-4 [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-5 w-5">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </span>
                <span>Nuevo Puesto</span>
            </a>

            <a class="text-gray-300 flex cursor-pointer items-center truncate rounded-[5px] px-6 py-[0.45rem] text-[0.85rem]
            data-[active=active]:bg-slate-50  data-[active=active]:text-inherit
            hover:bg-slate-50 hover:text-inherit hover:outline-none
            focus:bg-slate-50 focus:text-inherit focus:outline-none"
            data-active="{{ Route::currentRouteName()=='positions.new' ? 'active' : ''}}"
            href="{{ route('category.new') }}">
                
                <span
                    class="mr-4 [&>svg]:h-3.5 [&>svg]:w-3.5 [&>svg]:fill-gray-400 dark:[&>svg]:fill-gray-300">
                    <svg fill="#000000" height="800px" width="800px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                    viewBox="0 0 512 512" xml:space="preserve">
                    <g>
                        <path d="M80,352c4.418,0,8-3.582,8-8v-48c0-13.233,10.767-24,24-24h136v72c0,4.418,3.582,8,8,8s8-3.582,8-8v-72h136
                            c13.233,0,24,10.767,24,24v48c0,4.418,3.582,8,8,8s8-3.582,8-8v-48c0-22.056-17.944-40-40-40H264v-24c0-4.418-3.582-8-8-8
                            s-8,3.582-8,8v24H112c-22.056,0-40,17.944-40,40v48C72,348.418,75.582,352,80,352z"/>
                        <path d="M144,208h224c4.418,0,8-3.582,8-8s-3.582-8-8-8h-8V32c0-4.418-3.582-8-8-8H160c-4.418,0-8,3.582-8,8v160h-8
                            c-4.418,0-8,3.582-8,8S139.582,208,144,208z M168,40h176v152H168V40z"/>
                        <path d="M224,120c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C232,123.582,228.418,120,224,120z"/>
                        <path d="M256,120c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C264,123.582,260.418,120,256,120z"/>
                        <path d="M288,120c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C296,123.582,292.418,120,288,120z"/>
                        <path d="M320,120c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C328,123.582,324.418,120,320,120z"/>
                        <path d="M192,120c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C200,123.582,196.418,120,192,120z"/>
                        <path d="M224,152c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C232,155.582,228.418,152,224,152z"/>
                        <path d="M256,152c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C264,155.582,260.418,152,256,152z"/>
                        <path d="M288,152c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C296,155.582,292.418,152,288,152z"/>
                        <path d="M320,152c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C328,155.582,324.418,152,320,152z"/>
                        <path d="M192,152c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C200,155.582,196.418,152,192,152z"/>
                        <path d="M328,472v-96c0-4.418-3.582-8-8-8H192c-4.418,0-8,3.582-8,8v96c-4.418,0-8,3.582-8,8s3.582,8,8,8h144c4.418,0,8-3.582,8-8
                            S332.418,472,328,472z M200,384h112v88H200V384z"/>
                        <path d="M224,400c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C232,403.582,228.418,400,224,400z"/>
                        <path d="M256,400c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C264,403.582,260.418,400,256,400z"/>
                        <path d="M288,400c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C296,403.582,292.418,400,288,400z"/>
                        <path d="M224,432c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C232,435.582,228.418,432,224,432z"/>
                        <path d="M256,432c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C264,435.582,260.418,432,256,432z"/>
                        <path d="M288,432c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C296,435.582,292.418,432,288,432z"/>
                        <path d="M224,88c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C232,91.582,228.418,88,224,88z"/>
                        <path d="M256,88c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C264,91.582,260.418,88,256,88z"/>
                        <path d="M288,88c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C296,91.582,292.418,88,288,88z"/>
                        <path d="M320,88c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C328,91.582,324.418,88,320,88z"/>
                        <path d="M192,88c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C200,91.582,196.418,88,192,88z"/>
                        <path d="M224,56c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C232,59.582,228.418,56,224,56z"/>
                        <path d="M256,56c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C264,59.582,260.418,56,256,56z"/>
                        <path d="M288,56c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C296,59.582,292.418,56,288,56z"/>
                        <path d="M320,56c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C328,59.582,324.418,56,320,56z"/>
                        <path d="M192,56c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C200,59.582,196.418,56,192,56z"/>
                        <path d="M152,472v-96c0-4.418-3.582-8-8-8H16c-4.418,0-8,3.582-8,8v96c-4.418,0-8,3.582-8,8s3.582,8,8,8h144c4.418,0,8-3.582,8-8
                            S156.418,472,152,472z M24,384h112v88H24V384z"/>
                        <path d="M48,400c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C56,403.582,52.418,400,48,400z"/>
                        <path d="M80,400c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C88,403.582,84.418,400,80,400z"/>
                        <path d="M112,400c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C120,403.582,116.418,400,112,400z"/>
                        <path d="M48,432c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C56,435.582,52.418,432,48,432z"/>
                        <path d="M80,432c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C88,435.582,84.418,432,80,432z"/>
                        <path d="M112,432c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C120,435.582,116.418,432,112,432z"/>
                        <path d="M504,472v-96c0-4.418-3.582-8-8-8H368c-4.418,0-8,3.582-8,8v96c-4.418,0-8,3.582-8,8s3.582,8,8,8h144c4.418,0,8-3.582,8-8
                            S508.418,472,504,472z M376,384h112v88H376V384z"/>
                        <path d="M400,400c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C408,403.582,404.418,400,400,400z"/>
                        <path d="M432,400c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C440,403.582,436.418,400,432,400z"/>
                        <path d="M464,400c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C472,403.582,468.418,400,464,400z"/>
                        <path d="M400,432c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C408,435.582,404.418,432,400,432z"/>
                        <path d="M432,432c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C440,435.582,436.418,432,432,432z"/>
                        <path d="M464,432c-4.418,0-8,3.582-8,8v8c0,4.418,3.582,8,8,8s8-3.582,8-8v-8C472,435.582,468.418,432,464,432z"/>
                    </g>
                    </svg>

                </span>
                <span>Categorías </span>
            </a>
        </div>
    </li>
    
    @can('role.new')
        <li class="relative pt-4">
            <button onclick="showMenu2(true)" class="focus:outline-none focus:text-indigo-400 text-left  text-white flex justify-between items-center w-full space-x-14 ">
                <span class="px-6 text-[0.8rem] font-bold uppercase text-gray-300 dark:text-gray-400">
                SISTEMA:</span>
                <svg id="icon2" class="transform rotate-180" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 15L12 9L6 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
            <div id="menu2" class="hidden flex justify-start  flex-col w-full md:w-auto">

                <a class="text-gray-300 flex cursor-pointer items-center truncate rounded-[5px] px-6 py-[0.45rem] text-[0.85rem]
                data-[active=active]:bg-slate-50  data-[active=active]:text-inherit
                hover:bg-slate-50 hover:text-inherit hover:outline-none
                focus:bg-slate-50 focus:text-inherit focus:outline-none"
                data-active="{{ Route::currentRouteName()=='role.new' ? 'active' : ''}}"
                href="{{route('role.new')}}">
                    
                    <span
                        class="mr-4 [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                        <svg 
                            xmlns="http://www.w3.org/2000/svg" 
                            fill="none" 
                            width="800px" 
                            height="800px" 
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor">
                            <path d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm-9-2V7H4v3H1v2h3v3h2v-3h3v-2H6zm9 4c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                        </svg>
                    </span>
                    <span>Nuevo Rol </span>
                </a>
                <a class="text-gray-300 flex cursor-pointer items-center truncate rounded-[5px] px-6 py-[0.45rem] text-[0.85rem]
                    data-[active=active]:bg-slate-50  data-[active=active]:text-inherit
                    hover:bg-slate-50 hover:text-inherit hover:outline-none
                    focus:bg-slate-50 focus:text-inherit focus:outline-none"
                    data-active="{{ Route::currentRouteName()=='permission.new' ? 'active' : ''}}"
                    href="{{route('permission.new')}}">
                    <span
                    class="mr-4 [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                        <svg
                        xmlns="http://www.w3.org/2000/svg" 
                                fill="none" 
                                width="800px" 
                                height="800px" 
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor">
                        <path
                            d="M16.5 6a3 3 0 00-3-3H6a3 3 0 00-3 3v7.5a3 3 0 003 3v-6A4.5 4.5 0 0110.5 6h6z" />
                        <path
                            d="M18 7.5a3 3 0 013 3V18a3 3 0 01-3 3h-7.5a3 3 0 01-3-3v-7.5a3 3 0 013-3H18z" />
                        </svg>
                    </span>
                    <span>Permisos</span>
                </a>
            
                <a class="text-gray-300 flex cursor-pointer items-center truncate rounded-[5px] px-6 py-[0.45rem] text-[0.85rem]
                    data-[active=active]:bg-slate-50  data-[active=active]:text-inherit
                    hover:bg-slate-50 hover:text-inherit hover:outline-none
                    focus:bg-slate-50 focus:text-inherit focus:outline-none"
                    data-active="{{ Route::currentRouteName()=='user.index' ? 'active' : ''}}"
                    href="{{route('user.index')}}">
                <span
                    class="mr-4 [&>svg]:h-3.5 [&>svg]:w-3.5 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="h-3.5 w-3.5">
                    <path
                        fill-rule="evenodd"
                        d="M8.25 6.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM15.75 9.75a3 3 0 116 0 3 3 0 01-6 0zM2.25 9.75a3 3 0 116 0 3 3 0 01-6 0zM6.31 15.117A6.745 6.745 0 0112 12a6.745 6.745 0 016.709 7.498.75.75 0 01-.372.568A12.696 12.696 0 0112 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 01-.372-.568 6.787 6.787 0 011.019-4.38z"
                        clip-rule="evenodd" />
                    <path
                        d="M5.082 14.254a8.287 8.287 0 00-1.308 5.135 9.687 9.687 0 01-1.764-.44l-.115-.04a.563.563 0 01-.373-.487l-.01-.121a3.75 3.75 0 013.57-4.047zM20.226 19.389a8.287 8.287 0 00-1.308-5.135 3.75 3.75 0 013.57 4.047l-.01.121a.563.563 0 01-.373.486l-.115.04c-.567.2-1.156.349-1.764.441z" />
                    </svg>
                </span>
                <span>Team</span>
                </a>
            </div>

        </li>
    @endcan    
    {{-- <li class="relative">
        <a
        class="flex cursor-pointer items-center truncate rounded-[5px] px-6 py-[0.45rem] text-[0.85rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
        data-te-sidenav-link-ref>
        <span
            class="mr-4 [&>svg]:h-3.5 [&>svg]:w-3.5 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
            <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-3.5 w-3.5">
            <path
                fill-rule="evenodd"
                d="M14.447 3.027a.75.75 0 01.527.92l-4.5 16.5a.75.75 0 01-1.448-.394l4.5-16.5a.75.75 0 01.921-.526zM16.72 6.22a.75.75 0 011.06 0l5.25 5.25a.75.75 0 010 1.06l-5.25 5.25a.75.75 0 11-1.06-1.06L21.44 12l-4.72-4.72a.75.75 0 010-1.06zm-9.44 0a.75.75 0 010 1.06L2.56 12l4.72 4.72a.75.75 0 11-1.06 1.06L.97 12.53a.75.75 0 010-1.06l5.25-5.25a.75.75 0 011.06 0z"
                clip-rule="evenodd" />
            </svg>
        </span>
        <span>Online code editor</span>
        </a>
    </li> --}}


        <li class="relative pt-4">
            <span
            class="px-6 py-4 text-[0.8rem] font-bold uppercase text-gray-600 dark:text-gray-400"
            >Manage</span
            >
            <a
            class="flex cursor-pointer items-center truncate rounded-[5px] px-6 py-[0.45rem] text-[0.85rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
            data-te-sidenav-link-ref>
            <span
                class="mr-4 [&>svg]:h-3.5 [&>svg]:w-3.5 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="h-3.5 w-3.5">
                <path
                    d="M12.378 1.602a.75.75 0 00-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03zM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 00.372-.648V7.93zM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 00.372.648l8.628 5.033z" />
                </svg>
            </span>
            <span>Projects</span>
            </a>
        </li>

        {{-- <li class="relative">
            <a
            class="flex cursor-pointer items-center truncate rounded-[5px] px-6 py-[0.45rem] text-[0.85rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
            data-te-sidenav-link-ref>
            <span
                class="mr-4 [&>svg]:h-3.5 [&>svg]:w-3.5 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="h-3.5 w-3.5">
                <path
                    d="M21 6.375c0 2.692-4.03 4.875-9 4.875S3 9.067 3 6.375 7.03 1.5 12 1.5s9 2.183 9 4.875z" />
                <path
                    d="M12 12.75c2.685 0 5.19-.586 7.078-1.609a8.283 8.283 0 001.897-1.384c.016.121.025.244.025.368C21 12.817 16.97 15 12 15s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.285 8.285 0 001.897 1.384C6.809 12.164 9.315 12.75 12 12.75z" />
                <path
                    d="M12 16.5c2.685 0 5.19-.586 7.078-1.609a8.282 8.282 0 001.897-1.384c.016.121.025.244.025.368 0 2.692-4.03 4.875-9 4.875s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.284 8.284 0 001.897 1.384C6.809 15.914 9.315 16.5 12 16.5z" />
                <path
                    d="M12 20.25c2.685 0 5.19-.586 7.078-1.609a8.282 8.282 0 001.897-1.384c.016.121.025.244.025.368 0 2.692-4.03 4.875-9 4.875s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.284 8.284 0 001.897 1.384C6.809 19.664 9.315 20.25 12 20.25z" />
                </svg>
            </span>
            <span>Databases</span>
            </a>
        </li>
        <li class="relative">
            <a
            class="flex cursor-pointer items-center truncate rounded-[5px] px-6 py-[0.45rem] text-[0.85rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
            data-te-sidenav-link-ref>
            <span
                class="mr-4 [&>svg]:h-3.5 [&>svg]:w-3.5 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="h-3.5 w-3.5">
                <path
                    fill-rule="evenodd"
                    d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75H12a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                    clip-rule="evenodd" />
                </svg>
            </span>
            <span>Custom domains</span>
            </a>
        </li>
        <li class="relative">
            <a
            class="flex cursor-pointer items-center truncate rounded-[5px] px-6 py-[0.45rem] text-[0.85rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
            data-te-sidenav-link-ref>
            <span
                class="mr-4 [&>svg]:h-3.5 [&>svg]:w-3.5 [&>svg]:fill-gray-400 dark:[&>svg]:fill-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path
                    d="M80 104c13.3 0 24-10.7 24-24s-10.7-24-24-24S56 66.7 56 80s10.7 24 24 24zm80-24c0 32.8-19.7 61-48 73.3v87.8c18.8-10.9 40.7-17.1 64-17.1h96c35.3 0 64-28.7 64-64v-6.7C307.7 141 288 112.8 288 80c0-44.2 35.8-80 80-80s80 35.8 80 80c0 32.8-19.7 61-48 73.3V160c0 70.7-57.3 128-128 128H176c-35.3 0-64 28.7-64 64v6.7c28.3 12.3 48 40.5 48 73.3c0 44.2-35.8 80-80 80s-80-35.8-80-80c0-32.8 19.7-61 48-73.3V352 153.3C19.7 141 0 112.8 0 80C0 35.8 35.8 0 80 0s80 35.8 80 80zm232 0c0-13.3-10.7-24-24-24s-24 10.7-24 24s10.7 24 24 24s24-10.7 24-24zM80 456c13.3 0 24-10.7 24-24s-10.7-24-24-24s-24 10.7-24 24s10.7 24 24 24z" />
                </svg>
            </span>
            <span>Repositories</span>
            </a>
        </li>
        <li class="relative">
            <a
            class="flex cursor-pointer items-center truncate rounded-[5px] px-6 py-[0.45rem] text-[0.85rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
            data-te-sidenav-link-ref>
            <span
                class="mr-4 [&>svg]:h-3.5 [&>svg]:w-3.5 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="h-3.5 w-3.5">
                <path
                    fill-rule="evenodd"
                    d="M8.25 6.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM15.75 9.75a3 3 0 116 0 3 3 0 01-6 0zM2.25 9.75a3 3 0 116 0 3 3 0 01-6 0zM6.31 15.117A6.745 6.745 0 0112 12a6.745 6.745 0 016.709 7.498.75.75 0 01-.372.568A12.696 12.696 0 0112 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 01-.372-.568 6.787 6.787 0 011.019-4.38z"
                    clip-rule="evenodd" />
                <path
                    d="M5.082 14.254a8.287 8.287 0 00-1.308 5.135 9.687 9.687 0 01-1.764-.44l-.115-.04a.563.563 0 01-.373-.487l-.01-.121a3.75 3.75 0 013.57-4.047zM20.226 19.389a8.287 8.287 0 00-1.308-5.135 3.75 3.75 0 013.57 4.047l-.01.121a.563.563 0 01-.373.486l-.115.04c-.567.2-1.156.349-1.764.441z" />
                </svg>
            </span>
            <span>Team</span>
            </a>
        </li> --}}
        

{{-- 
    <li class="relative">
        <a
        class="flex cursor-pointer items-center truncate rounded-[5px] px-6 py-[0.45rem] text-[0.85rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
        data-te-sidenav-link-ref>
        <span
            class="mr-4 [&>svg]:h-3.5 [&>svg]:w-3.5 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
            <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-3.5 w-3.5">
            <path
                d="M16.5 6a3 3 0 00-3-3H6a3 3 0 00-3 3v7.5a3 3 0 003 3v-6A4.5 4.5 0 0110.5 6h6z" />
            <path
                d="M18 7.5a3 3 0 013 3V18a3 3 0 01-3 3h-7.5a3 3 0 01-3-3v-7.5a3 3 0 013-3H18z" />
            </svg>
        </span>
        <span>SFTP</span>
        </a>
    </li>
    <li class="relative">
        <a
        class="flex cursor-pointer items-center truncate rounded-[5px] px-6 py-[0.45rem] text-[0.85rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
        data-te-sidenav-link-ref>
        <span
            class="mr-4 [&>svg]:h-3.5 [&>svg]:w-3.5 [&>svg]:fill-gray-400 dark:[&>svg]:fill-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
            <path
                d="M487.1 425c-1.4-11.2-19-23.1-28.2-31.9-5.1-5-29-23.1-30.4-29.9-1.4-6.6 9.7-21.5 13.3-28.9 5.1-10.7 8.8-23.7 11.3-32.6 18.8-66.1 20.7-156.9-6.2-211.2-10.2-20.6-38.6-49-56.4-62.5-42-31.7-119.6-35.3-170.1-16.6-14.1 5.2-27.8 9.8-40.1 17.1-33.1 19.4-68.3 32.5-78.1 71.6-24.2 10.8-31.5 41.8-30.3 77.8.2 7 4.1 15.8 2.7 22.4-.7 3.3-5.2 7.6-6.1 9.8-11.6 27.7-2.3 64 11.1 83.7 8.1 11.9 21.5 22.4 39.2 25.2.7 10.6 3.3 19.7 8.2 30.4 3.1 6.8 14.7 19 10.4 27.7-2.2 4.4-21 13.8-27.3 17.6C89 407.2 73.7 415 54.2 429c-12.6 9-32.3 10.2-29.2 31.1 2.1 14.1 10.1 31.6 14.7 45.8.7 2 1.4 4.1 2.1 6h422c4.9-15.3 9.7-30.9 14.6-47.2 3.4-11.4 10.2-27.8 8.7-39.7zM205.9 33.7c1.8-.5 3.4.7 4.9 2.4-.2 5.2-5.4 5.1-8.9 6.8-5.4 6.7-13.4 9.8-20 17.2-6.8 7.5-14.4 27.7-23.4 30-4.5 1.1-9.7-.8-13.6-.5-10.4.7-17.7 6-28.3 7.5 13.6-29.9 56.1-54 89.3-63.4zm-104.8 93.6c13.5-14.9 32.1-24.1 54.8-25.9 11.7 29.7-8.4 65-.9 97.6 2.3 9.9 10.2 25.4-2.4 25.7.3-28.3-34.8-46.3-61.3-29.6-1.8-21.5-4.9-51.7 9.8-67.8zm36.7 200.2c-1-4.1-2.7-12.9-2.3-15.1 1.6-8.7 17.1-12.5 11-24.7-11.3-.1-13.8 10.2-24.1 11.3-26.7 2.6-45.6-35.4-44.4-58.4 1-19.5 17.6-38.2 40.1-35.8 16 1.8 21.4 19.2 24.5 34.7 9.2.5 22.5-.4 26.9-7.6-.6-17.5-8.8-31.6-8.2-47.7 1-30.3 17.5-57.6 4.8-87.4 13.6-30.9 53.5-55.3 83.1-70 36.6-18.3 94.9-3.7 129.3 15.8 19.7 11.1 34.4 32.7 48.3 50.7-19.5-5.8-36.1 4.2-33.1 20.3 16.3-14.9 44.2-.2 52.5 16.4 7.9 15.8 7.8 39.3 9 62.8 2.9 57-10.4 115.9-39.1 157.1-7.7 11-14.1 23-24.9 30.6-26 18.2-65.4 34.7-99.2 23.4-44.7-15-65-44.8-89.5-78.8.7 18.7 13.8 34.1 26.8 48.4 11.3 12.5 25 26.6 39.7 32.4-12.3-2.9-31.1-3.8-36.2 7.2-28.6-1.9-55.1-4.8-68.7-24.2-10.6-15.4-21.4-41.4-26.3-61.4zm222 124.1c4.1-3 11.1-2.9 17.4-3.6-5.4-2.7-13-3.7-19.3-2.2-.1-4.2-2-6.8-3.2-10.2 10.6-3.8 35.5-28.5 49.6-20.3 6.7 3.9 9.5 26.2 10.1 37 .4 9-.8 18-4.5 22.8-18.8-.6-35.8-2.8-50.7-7 .9-6.1-1-12.1.6-16.5zm-17.2-20c-16.8.8-26-1.2-38.3-10.8.2-.8 1.4-.5 1.5-1.4 18 8 40.8-3.3 59-4.9-7.9 5.1-14.6 11.6-22.2 17.1zm-12.1 33.2c-1.6-9.4-3.5-12-2.8-20.2 25-16.6 29.7 28.6 2.8 20.2zM226 438.6c-11.6-.7-48.1-14-38.5-23.7 9.4 6.5 27.5 4.9 41.3 7.3.8 4.4-2.8 10.2-2.8 16.4zM57.7 497.1c-4.3-12.7-9.2-25.1-14.8-36.9 30.8-23.8 65.3-48.9 102.2-63.5 2.8-1.1 23.2 25.4 26.2 27.6 16.5 11.7 37 21 56.2 30.2 1.2 8.8 3.9 20.2 8.7 35.5.7 2.3 1.4 4.7 2.2 7.2H57.7zm240.6 5.7h-.8c.3-.2.5-.4.8-.5v.5zm7.5-5.7c2.1-1.4 4.3-2.8 6.4-4.3 1.1 1.4 2.2 2.8 3.2 4.3h-9.6zm15.1-24.7c-10.8 7.3-20.6 18.3-33.3 25.2-6 3.3-27 11.7-33.4 10.2-3.6-.8-3.9-5.3-5.4-9.5-3.1-9-10.1-23.4-10.8-37-.8-17.2-2.5-46 16-42.4 14.9 2.9 32.3 9.7 43.9 16.1 7.1 3.9 11.1 8.6 21.9 9.5-.1 1.4-.1 2.8-.2 4.3-5.9 3.9-15.3 3.8-21.8 7.1 9.5.4 17 2.7 23.5 5.9-.1 3.4-.3 7-.4 10.6zm53.4 24.7h-14c-.1-3.2-2.8-5.8-6.1-5.8s-5.9 2.6-6.1 5.8h-17.4c-2.8-4.4-5.7-8.6-8.9-12.5 2.1-2.2 4-4.7 6-6.9 9 3.7 14.8-4.9 21.7-4.2 7.9.8 14.2 11.7 25.4 11l-.6 12.6zm8.7 0c.2-4 .4-7.8.6-11.5 15.6-7.3 29 1.3 35.7 11.5H383zm83.4-37c-2.3 11.2-5.8 24-9.9 37.1-.2-.1-.4-.1-.6-.1H428c.6-1.1 1.2-2.2 1.9-3.3-2.6-6.1-9-8.7-10.9-15.5 12.1-22.7 6.5-93.4-24.2-78.5 4.3-6.3 15.6-11.5 20.8-19.3 13 10.4 20.8 20.3 33.2 31.4 6.8 6 20 13.3 21.4 23.1.8 5.5-2.6 18.9-3.8 25.1zM222.2 130.5c5.4-14.9 27.2-34.7 45-32 7.7 1.2 18 8.2 12.2 17.7-30.2-7-45.2 12.6-54.4 33.1-8.1-2-4.9-13.1-2.8-18.8zm184.1 63.1c8.2-3.6 22.4-.7 29.6-5.3-4.2-11.5-10.3-21.4-9.3-37.7.5 0 1 0 1.4.1 6.8 14.2 12.7 29.2 21.4 41.7-5.7 13.5-43.6 25.4-43.1 1.2zm20.4-43zm-117.2 45.7c-6.8-10.9-19-32.5-14.5-45.3 6.5 11.9 8.6 24.4 17.8 33.3 4.1 4 12.2 9 8.2 20.2-.9 2.7-7.8 8.6-11.7 9.7-14.4 4.3-47.9.9-36.6-17.1 11.9.7 27.9 7.8 36.8-.8zm27.3 70c3.8 6.6 1.4 18.7 12.1 20.6 20.2 3.4 43.6-12.3 58.1-17.8 9-15.2-.8-20.7-8.9-30.5-16.6-20-38.8-44.8-38-74.7 6.7-4.9 7.3 7.4 8.2 9.7 8.7 20.3 30.4 46.2 46.3 63.5 3.9 4.3 10.3 8.4 11 11.2 2.1 8.2-5.4 18-4.5 23.5-21.7 13.9-45.8 29.1-81.4 25.6-7.4-6.7-10.3-21.4-2.9-31.1zm-201.3-9.2c-6.8-3.9-8.4-21-16.4-21.4-11.4-.7-9.3 22.2-9.3 35.5-7.8-7.1-9.2-29.1-3.5-40.3-6.6-3.2-9.5 3.6-13.1 5.9 4.7-34.1 49.8-15.8 42.3 20.3zm299.6 28.8c-10.1 19.2-24.4 40.4-54 41-.6-6.2-1.1-15.6 0-19.4 22.7-2.2 36.6-13.7 54-21.6zm-141.9 12.4c18.9 9.9 53.6 11 79.3 10.2 1.4 5.6 1.3 12.6 1.4 19.4-33 1.8-72-6.4-80.7-29.6zm92.2 46.7c-1.7 4.3-5.3 9.3-9.8 11.1-12.1 4.9-45.6 8.7-62.4-.3-10.7-5.7-17.5-18.5-23.4-26-2.8-3.6-16.9-12.9-.2-12.9 13.1 32.7 58 29 95.8 28.1z" />
            </svg>
        </span>
        <span>Jenkins</span>
        </a>
    </li>
    <li class="relative">
        <a
        class="flex cursor-pointer items-center truncate rounded-[5px] px-6 py-[0.45rem] text-[0.85rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
        data-te-sidenav-link-ref>
        <span
            class="mr-4 [&>svg]:h-3.5 [&>svg]:w-3.5 [&>svg]:fill-gray-400 dark:[&>svg]:fill-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
            <path
                d="M503.5 204.6L502.8 202.8L433.1 21.02C431.7 17.45 429.2 14.43 425.9 12.38C423.5 10.83 420.8 9.865 417.9 9.57C415 9.275 412.2 9.653 409.5 10.68C406.8 11.7 404.4 13.34 402.4 15.46C400.5 17.58 399.1 20.13 398.3 22.9L351.3 166.9H160.8L113.7 22.9C112.9 20.13 111.5 17.59 109.6 15.47C107.6 13.35 105.2 11.72 102.5 10.7C99.86 9.675 96.98 9.295 94.12 9.587C91.26 9.878 88.51 10.83 86.08 12.38C82.84 14.43 80.33 17.45 78.92 21.02L9.267 202.8L8.543 204.6C-1.484 230.8-2.72 259.6 5.023 286.6C12.77 313.5 29.07 337.3 51.47 354.2L51.74 354.4L52.33 354.8L158.3 434.3L210.9 474L242.9 498.2C246.6 500.1 251.2 502.5 255.9 502.5C260.6 502.5 265.2 500.1 268.9 498.2L300.9 474L353.5 434.3L460.2 354.4L460.5 354.1C482.9 337.2 499.2 313.5 506.1 286.6C514.7 259.6 513.5 230.8 503.5 204.6z" />
            </svg>
        </span>
        <span>GitLab</span>
        </a>
    </li> --}}
    </ul>
    </nav>
    <!-- Sidenav -->

    <!-- Toggler -->
    <button
    class="mt-10 inline-block rounded bg-primary px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary-800 active:shadow-lg"
    data-te-sidenav-toggle-ref
    data-te-target="#sidenav-8"
    aria-controls="#sidenav-8"
    aria-haspopup="true">
    <span class="block [&>svg]:h-5 [&>svg]:w-5 [&>svg]:text-white">
    <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24"
        fill="currentColor"
        class="h-5 w-5">
        <path
        fill-rule="evenodd"
        d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
        clip-rule="evenodd" />
    </svg>
    </span>
    </button>
    <!-- Toggler -->


    <script>
        let iconClients = document.getElementById("iconClients");
        let menuClients = document.getElementById("menuClients");
        const showMenuClients = (flag) => {
          if (flag) {
            iconClients.classList.toggle("rotate-180");
            menuClients.classList.toggle("hidden");
          }
        };

        let icon1 = document.getElementById("icon1");
        let menu1 = document.getElementById("menu1");
        const showMenu1 = (flag) => {
          if (flag) {
            icon1.classList.toggle("rotate-180");
            menu1.classList.toggle("hidden");
          }
        };

        let icon2 = document.getElementById("icon2");
        let menu2 = document.getElementById("menu2");
        const showMenu2 = (flag) => {
          if (flag) {
            icon2.classList.toggle("rotate-180");
            menu2.classList.toggle("hidden");
          }
        };



    </script>
</div>