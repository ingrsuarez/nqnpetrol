<x-app-layout>
    
    <div class="flex flex-col bg-transparent justify-start">
        <div class="bg-color-transparent" id="accordionExample">
            <div
              class="rounded-t-[14px] bg-white">
              <h2 class="mb-0 " id="headingOne">
                <button
                  class="bg-blue-500 group relative flex w-full items-center rounded-t-[15px] border-0  px-5 py-4 text-left text-base
                   transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none text-white"
                  
                  type="button"
                  data-te-collapse-init
                  data-te-target="#collapseOne"
                  aria-expanded="true"
                  aria-controls="collapseOne">
                  
                <svg 
                    height="50px" 
                    width="50px" 
                    fill="none"
                    stroke-width="3"
                    stroke="currentColor" 
                    version="1.2" 
                    
                    
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
                <span class="ml-8 text-lg">
                    Nuevo Pozo
                </span>
                
                  <span
                    class="ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white"
                    >

                    <svg
                      id="iconOne"
                      
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="h-6 w-6">
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                  </span>
                </button>
              </h2>
              <div
                id="collapseOne"
                class="!visible"
                data-te-collapse-item
                data-te-collapse-show
                aria-labelledby="headingOne"
                data-te-parent="#accordionExample">
                
                <div class="px-5 py-4">
                    <form class="" action="{{route('well.store')}}" method="POST">
                        @csrf                
                        {{-- <h2 class="text-base font-semibold leading-7 text-gray-200 bg-blue-500 rounded -ml-2 -mr-2 py-2 px-2 shadow-lg">Nuevo empleado:</h2> --}}
                        <p class="mt-1 text-sm leading-6 text-gray-600">Datos del pozo:</p>
                        
                        <div class="mx-2 mt-4 flex flex-wrap">
                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex focus-within:ring-2 focus-within:ring-indigo-600">
                                <span class="w-fit px-2 items-center flex text-base bg-gray-300 rounded-l-lg  ">Nombre:</span>
                                <input type="text" name="name" id="name" autocomplete="off" required autofocus
                                    class="w-full rounded-r-md border-0 text-gray-900 placeholder:text-gray-400 
                                    sm:text-sm focus:ring-0">
                            </div>
                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex focus-within:ring-2 focus-within:ring-indigo-600">
                                <span class="w-fit px-2 items-center flex bg-gray-300 rounded-l-lg">Yacimiento:</span>
                                <input type="text" name="oilfield" id="oilfield" required
                                class="w-full flex rounded-r-md border-0 text-gray-900 shadow-sm  placeholder:text-gray-400 
                                sm:text-sm focus:ring-0">
                            </div>
                            <div class="m-2 h-fit border-slate-400 border-2 rounded-lg justify-items-stretch flex focus-within:ring-2 focus-within:ring-indigo-600">
                                <span class="w-fit px-2 items-center flex bg-gray-300 rounded-l-lg">Cliente:</span>
                                <select id="client_id" name="client_id" autocomplete="off" class="w-full h-fit flex rounded-r-md border-0 
                                text-gray-900 shadow-sm  placeholder:text-gray-400 focus:ring-0" required>
                                    <option disabled selected value="">Seleccionar</option>
                                    @foreach ($clients as $client)
                                        <option value="{{$client->id}}">{{$client->name}}</option>
                                    @endforeach   
                                </select>
                            </div>
                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex focus-within:ring-2 focus-within:ring-indigo-600">
                                <span class="w-fit px-2 items-center flex bg-gray-300 rounded-l-lg">Ubicación:</span>
                                <input type="text" name="location" id="location" 
                                class="w-full rounded-r-md border-0 text-gray-900 shadow-sm  placeholder:text-gray-400 sm:text-sm">
                            </div>


                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex focus-within:ring-2 focus-within:ring-indigo-600">
                                <span class="w-fit px-2 items-center flex bg-gray-300 rounded-l-lg">Batería:</span>
                                <input type="text" name="battery" id="battery" autocomplete="off" 
                                class="w-full flex rounded-r-md border-0 text-gray-900 shadow-sm  placeholder:text-gray-400 
                                sm:text-sm">
                            </div>


                        </div>


                        <p class="mt-8 text-sm leading-6 text-gray-600">Datos de producción:</p>
                        <div class="mx-2 mt-4 flex flex-wrap">
                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex focus-within:ring-2 focus-within:ring-indigo-600">
                                <span class="w-fit px-2 items-center flex bg-gray-300 rounded-l-lg">Agua:</span>
                                <input type="number" step="0.1" name="water" id="water" autocomplete="off" 
                                class="w-fit rounded-r-md border-0 text-gray-900 shadow-sm  
                                placeholder:text-gray-400 sm:text-sm focus:ring-0">

                                <select id="water_units" name="water_units" class="w-fit rounded-r-md border-0 outline-0 
                                text-gray-900  placeholder:text-gray-400 h-fit focus:ring-0">
                                    
                                    <option value="m3/día" selected>m3/día</option>
                                    <option value="bbl/día">BBL/día</option>
                                    
                                    
                                </select>
                            </div>

                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex focus-within:ring-2 focus-within:ring-indigo-600">
                                <span class="w-fit px-2 items-center flex bg-gray-300 rounded-l-lg">Petroleo (m3/día):</span>
                                <input type="text" name="oil" id="oil" autocomplete="off" 
                                class="w-fit rounded-r-md border-0 text-gray-900 shadow-sm  placeholder:text-gray-400 
                                sm:text-sm focus:ring-0">
                                <select id="oil_units" name="oil_units" class="w-fit rounded-r-md border-0 outline-0 
                                text-gray-900  placeholder:text-gray-400 h-fit focus:ring-0 focus:border-0 focus:outline-0">
                                    
                                    <option value="m3/día" selected>m3/día</option>
                                    <option value="bbl/día">BBL/día</option>
                                    
                                    
                                </select>
                            </div>
                        
                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex focus-within:ring-2 focus-within:ring-indigo-600">
                                <span class="w-fit px-4 items-center flex bg-gray-300 rounded-l-lg">Gas (m3/día):</span>
                                <input type="text" name="gas" id="gas" autocomplete="off" 
                                class="w-fit rounded-r-md border-0 text-gray-900 shadow-sm  
                                placeholder:text-gray-400 sm:text-sm focus:ring-0 focus:ring-indigo-600">

                                <select id="oil_units" name="oil_units" class="w-fit rounded-r-md border-0 outline-0 
                                text-gray-900  placeholder:text-gray-400 h-fit focus:ring-0 focus:border-0 focus:outline-0">
                                    
                                    <option value="m3/día" selected>m3/día</option>
                                    <option value="bbl/día">BBL/día</option>
                                    
                                    
                                </select>
                            </div>

                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex">
                                <span class="w-fit px-2 items-center flex bg-gray-300 rounded-l-lg">Densidad del agua (kg/m^3):</span>
                                <input type="text" name="water_density" id="water_density" autocomplete="off" 
                                class="w-fit flex rounded-r-md border-0 text-gray-900 shadow-sm  placeholder:text-gray-400
                                 sm:text-sm focus:ring-2 focus:ring-indigo-600">
                            </div>
                        
                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex">
                                <span class="w-fit px-2 items-center flex bg-gray-300 rounded-l-lg">Densidad del petroleo (deg/API):</span>
                                <input type="text" name="oil_density" id="oil_density" autocomplete="off" 
                                class="w-fit rounded-r-md border-0 text-gray-900 shadow-sm  placeholder:text-gray-400
                                 sm:text-sm focus:ring-2 focus:ring-indigo-600">
                            </div>
                        
                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex">
                                <span class="w-fit px-2 items-center flex bg-gray-300 rounded-l-lg">Gravedad específica del gas:</span>
                                <input type="text" name="gas_gravity" id="gas_gravity" autocomplete="off" 
                                class="w-fit flex rounded-r-md border-0 text-gray-900 shadow-sm  
                                placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-indigo-600">
                            </div>

                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex">
                                <span class="w-fit px-2 items-center flex bg-gray-300 rounded-l-lg">Viscocidad del fluido (cp):</span>
                                <input type="text" name="viscocity" id="viscocity" autocomplete="off" 
                                class="w-fit flex rounded-r-md border-0 text-gray-900 shadow-sm  
                                placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-indigo-600">
                            </div>
                            
                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex">
                                <span class="w-fit px-4 items-center flex bg-gray-300 rounded-l-lg">%Co2:</span>
                                <input type="text" name="co2" id="co2" autocomplete="off" 
                                class="w-fit rounded-r-md border-0 text-gray-900 shadow-sm  
                                placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-indigo-600">
                            </div>

                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex">
                                <span class="w-fit px-4 items-center flex bg-gray-300 rounded-l-lg">%N2:</span>
                                <input type="text" name="n2" id="n2" autocomplete="off" 
                                class="w-fit rounded-r-md border-0 text-gray-900 shadow-sm  
                                placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-indigo-600">
                            </div>

                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex">
                                <span class="w-fit px-4 items-center flex bg-gray-300 rounded-l-lg">%H2S:</span>
                                <input type="text" name="h2s" id="h2s" autocomplete="off" 
                                class="w-fit rounded-r-md border-0 text-gray-900 shadow-sm  
                                placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-indigo-600">
                            </div>

                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex">
                                <span class="w-fit px-4 items-center flex bg-gray-300 rounded-l-lg">%C1:</span>
                                <input type="text" name="c1" id="c1" autocomplete="off" 
                                class="w-fit rounded-r-md border-0 text-gray-900 shadow-sm  
                                placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-indigo-600">
                            </div>

                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex">
                                <span class="w-fit px-4 items-center flex bg-gray-300 rounded-l-lg">%C2:</span>
                                <input type="text" name="c2" id="c2" autocomplete="off" 
                                class="w-fit rounded-r-md border-0 text-gray-900 shadow-sm  
                                placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-indigo-600">
                            </div>

                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex">
                                <span class="w-fit px-4 items-center flex bg-gray-300 rounded-l-lg">%NC:</span>
                                <input type="text" name="nc" id="nc" autocomplete="off" 
                                class="w-fit rounded-r-md border-0 text-gray-900 shadow-sm  
                                placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-indigo-600">
                            </div>

        
                        </div>
                        <p class="mt-8 text-sm leading-6 text-gray-600">Sistema de bombeo:</p>
                        <div class="mx-2 mt-4 flex flex-wrap">
                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex">
                                <span class="w-fit px-2 items-center flex bg-gray-300 rounded-l-lg">Tipo de bombeo:</span>
                                <select id="type" name="type" autocomplete="off" class="w-fit rounded-r-md border-0 
                                text-gray-900 shadow-sm  placeholder:text-gray-400 h-fit focus:ring-2 focus:ring-indigo-600">
                                    <option disabled selected value="">Seleccionar</option>
                                    <option value="Rod Pump">Rod Pump</option>
                                    <option value="Flowing Well Gas">Flowing Well (Gas)</option>
                                    <option value="Flowing Well Oil">Flowing Well (Oil)</option>
                                    <option value="Gas Lift">Gas Lift</option>
                                    <option value="Electrical Submersible Pump">Electrical Submersible Pump</option>
                                    <option value="Plunger Lift">Plunger Lift</option>
                                    <option value="Plunger Lift with Gas Lift Assambly">Plunger Lift with Gas Lift Assambly</option>
                                    <option value="Progressive Cavity Pump">Progressive Cavity Pump</option>
                                    <option value="Jet Pump">Jet Pump</option>
                                    
                                </select>
                            </div>
                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex">
                                <span class="w-fit px-2 items-center flex bg-gray-300 rounded-l-lg">Diámetro de la barra pulida:</span>
                                <input type="text" name="rod_diameter" id="rod_diameter" autocomplete="off" 
                                class="w-fit border-0 text-gray-900 shadow-sm  
                                placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-indigo-600">
                                <span class="text-gray-900 border-4">[in]</span>
                            </div>
                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex">
                                <span class="w-fit px-2 items-center flex bg-gray-300 rounded-l-lg">Longitud barra pulida:</span>
                                <input type="text" name="rod_length" id="rod_length" autocomplete="off" 
                                class="w-fit border-0 text-gray-900 shadow-sm  
                                placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-indigo-600">
                                <span class="text-gray-900 border-4">[ft]</span>
                            </div>
                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex">
                                <span class="w-fit px-2 items-center flex bg-gray-300 rounded-l-lg">Motor:</span>
                                <select id="motor_type" name="motor_type" autocomplete="off" class="w-fit rounded-r-md border-0 
                                text-gray-900 shadow-sm  placeholder:text-gray-400 h-fit focus:ring-2 focus:ring-indigo-600">
                                    <option disabled selected value="">Seleccionar</option>
                                    <option value="electric">Eléctrico</option>
                                    <option value="combustion">Combustión</option>
                                </select>
                            </div>
                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex">
                                <span class="w-fit px-2 items-center flex bg-gray-300 rounded-l-lg">Potencia:</span>
                                <input type="text" name="motor_power" id="motor_power" autocomplete="off" 
                                class="w-fit border-0 text-gray-900 shadow-sm  
                                placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-indigo-600">
                                <span class="text-gray-900 border-4">[HP]</span>
                            </div>
                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex">
                                <span class="w-fit px-2 items-center flex bg-gray-300 rounded-l-lg">Largo promedio de junta:</span>
                                <input type="text" name="average_joint" id="average_joint" autocomplete="off" 
                                class="w-fit border-0 text-gray-900 shadow-sm  
                                placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-indigo-600">
                                <span class="text-gray-900 border-4">[mts]</span>
                            </div>
                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex">
                                <span class="w-fit px-2 items-center flex bg-gray-300 rounded-l-lg">Profundidad de la bomba:</span>
                                <input type="text" name="pump_depth" id="pump_depth" autocomplete="off" 
                                class="w-fit border-0 text-gray-900 shadow-sm  
                                placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-indigo-600">
                                <span class="text-gray-900 border-4">[mts]</span>
                            </div>

                        </div>

                        <p class="mt-8 text-sm leading-6 text-gray-600">Marcadores de fondo:</p>
                        <div class="mx-2 mt-4 flex flex-wrap">
                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex">
                                <span class="w-fit px-2 items-center flex bg-gray-300 rounded-l-lg">Packer:</span>
                                <input type="text" name="packer" id="packer" autocomplete="off" 
                                class="w-fit border-0 rounded-r-md text-gray-900 shadow-sm  
                                placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-indigo-600">
                                <span class="text-gray-900 border-4">[mts]</span>
                            </div>
                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex">
                                <span class="w-fit px-2 items-center flex bg-gray-300 rounded-l-lg">Bridge plug:</span>
                                <input type="text" name="bridge_plug" id="bridge_plug" autocomplete="off" 
                                class="w-fit border-0 rounded-r-md text-gray-900 shadow-sm  
                                placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-indigo-600">
                                <span class="text-gray-900 border-4">[mts]</span>
                            </div>
                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex">
                                <span class="w-fit px-2 items-center flex bg-gray-300 rounded-l-lg">Ancla de tubería:</span>
                                <input type="text" name="tubing_anchor" id="tubing_anchor" autocomplete="off" 
                                class="w-fit border-0 rounded-r-md text-gray-900 shadow-sm  
                                placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-indigo-600">
                                <span class="text-gray-900 border-4">[mts]</span>
                            </div>
                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex">
                                <span class="w-fit px-2 items-center flex bg-gray-300 rounded-l-lg">Seating nipple:</span>
                                <input type="text" name="seating_nipple" id="seating_nipple" autocomplete="off" 
                                class="w-fit border-0 rounded-r-md text-gray-900 shadow-sm  
                                placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-indigo-600">
                                <span class="text-gray-900 border-4">[mts]</span>
                            </div>
                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex">
                                <span class="w-fit px-2 items-center flex bg-gray-300 rounded-l-lg">Pulgback:</span>
                                <input type="text" name="plugback" id="plugback" autocomplete="off" 
                                class="w-fit border-0 rounded-r-md text-gray-900 shadow-sm  
                                placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-indigo-600">
                                <span class="text-gray-900 border-4">[mts]</span>
                            </div>

                        </div>

                        <p class="mt-8 text-sm leading-6 text-gray-600">Unidad de superficie:</p>
                        <div class="mx-2 mt-4 flex flex-wrap">
                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex">
                                <span class="w-fit px-2 items-center flex bg-gray-300 rounded-l-lg">Fabricante:</span>
                                <input type="text" name="manufacturer_unit" id="manufacturer_unit" autocomplete="off" 
                                class="w-fit border-0 rounded-r-md text-gray-900 shadow-sm  
                                placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-indigo-600">
                                
                            </div>
                            <div class="m-2 border-slate-400 border-2 rounded-lg justify-items-stretch flex">
                                <span class="w-fit px-2 items-center flex bg-gray-300 rounded-l-lg">Designación API:</span>
                                <input type="text" name="api_unit" id="api_unit" autocomplete="off" 
                                class="w-fit border-0 rounded-r-md text-gray-900 shadow-sm  
                                placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-indigo-600">
                               
                            </div>


                        </div>

                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancelar</button>
                            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white 
                            shadow-lg hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 
                            focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Guardar
                            </button>
                        </div>
                    </form>
                </div>
              </div>
            </div>
            {{-- Listado de clientes --}}
            {{-- <div
              class=" bg-white dark:border-neutral-600 dark:bg-neutral-800">
                <h2 class="mb-0" id="headingTwo">
                <button
                class="bg-blue-500 group relative flex w-full items-center border-0  px-5 py-4 text-left text-base
                transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none text-white"
                    type="button"
                    data-te-collapse-init
                    data-te-collapse-collapsed
                    data-te-target="#collapseTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo">
                    Listado de clientes
                    <span
                    class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 
                    ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 
                    group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 
                    dark:group-[[data-te-collapse-collapsed]]:fill-white" id="iconTwo">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-6 w-6">
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                    </span>
                </button>
                </h2>
                <div
                id="collapseTwo"
                class="!visible hidden"
                data-te-collapse-item
                aria-labelledby="headingTwo"
                data-te-parent="#accordionExample">
                    <div class="px-5 py-4">
                        @livewire('show-wells',['wells'=>$clients])
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    
    <script>
        var accordion1 = document.getElementById('headingOne');
        var collapse1 = document.getElementById('collapseOne');
        var iconRotate1 = document.getElementById('iconOne');
        
        accordion1.addEventListener("click",function(){
            collapse1.classList.toggle("hidden");
            iconRotate1.classList.toggle("rotate-180");
        });

        // var accordion2 = document.getElementById('headingTwo');
        // var collapse2 = document.getElementById('collapseTwo');
        // var iconRotate2 = document.getElementById('iconTwo');
        
        // accordion2.addEventListener("click",function(){
        //     collapse2.classList.toggle("hidden");
        //     iconRotate2.classList.toggle("rotate-180");
        // });
    </script>
</x-app-layout>