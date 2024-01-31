<x-app-layout>
    
    <div class="flex flex-col justify-start">
        <div class="rounded-t border border-neutral-200 bg-color-transparent" id="accordionExample">
            <div
              class="rounded-t-lg border border-neutral-200 bg-white dark:border-neutral-600 dark:bg-neutral-800">
              <h2 class="mb-0 " id="headingOne">
                <button
                  class="bg-blue-500 group relative flex w-full items-center rounded-t-[15px] border-0  px-5 py-4 text-left text-base
                   transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none text-white"
                  
                  type="button"
                  data-te-collapse-init
                  data-te-target="#collapseOne"
                  aria-expanded="true"
                  aria-controls="collapseOne">
                  Editar Cliente
                  <span
                    class="ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white"
                    id="iconOne">
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
                id="collapseOne"
                class="!visible"
                data-te-collapse-item
                data-te-collapse-show
                aria-labelledby="headingOne"
                data-te-parent="#accordionExample">
                <div class="px-5 py-4">
                    <form class="" action="{{route('client.store')}}" method="POST">
                        @csrf                
                        {{-- <h2 class="text-base font-semibold leading-7 text-gray-200 bg-blue-500 rounded -ml-2 -mr-2 py-2 px-2 shadow-lg">Nuevo empleado:</h2> --}}
                        <p class="mt-1 text-sm leading-6 text-gray-600">Complete los datos:</p>
                    
                        <div class="mx-2 mt-4 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-8">
                            <div class="sm:col-span-5 border-slate-400 border-2 rounded-lg  ">
                                <div class="justify-items-stretch flex flex-wrap">
                                    <span class="w-1/5 px-4 items-center flex text-base bg-gray-300 rounded-l-lg  ">Razón social</span>
                                    <input type="text" name="name" id="name" autocomplete="off" required autofocus
                                        class="w-4/5 flex rounded-r-md border-0 text-gray-900 shadow-sm  placeholder:text-gray-400 sm:text-sm
                                         focus:ring-2 focus:ring-inset focus:ring-indigo-600" value="{{ucwords($client->name)}}">
                                </div>
                            </div>
                    
                            <div class="sm:col-span-3">
                                <div class="border-slate-400 border-2 rounded-lg justify-items-stretch flex flex-wrap ">
                                    <span class="w-1/5 px-2 items-center flex bg-gray-300 rounded-l-lg">CUIT:</span>
                                    <input type="text" name="company_id" id="company_id" autocomplete="off" required
                                    class="w-4/5 flex rounded-r-md border-0 text-gray-900 shadow-sm  placeholder:text-gray-400 
                                    sm:text-sm focus:ring-2 focus:ring-inset focus:ring-indigo-600" value="{{ucwords($client->company_id)}}">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="border-slate-400 border-2 rounded-lg justify-items-stretch flex flex-wrap">
                                    <span class="w-2/5 px-2 items-center flex bg-gray-300 rounded-l-lg">Categoría:</span>
                                    <select id="category" name="category" autocomplete="off" class="w-3/5 flex rounded-r-md border-0 text-gray-900 shadow-sm  placeholder:text-gray-400 h-full focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                                        <option value="">Ninguno</option>
                                        <option value="oil and gas">Oil and Gas</option> 
                                        <option value="service">Servicio técnico</option>   
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                            
                                <div class="border-slate-400 border-2 rounded-lg justify-items-stretch flex flex-wrap">
                                    <span class="w-1/5 px-2 items-center flex bg-gray-300 rounded-l-lg">Iva:</span>
                                    <input type="text" name="iva" id="iva" autocomplete="off" 
                                    class="w-4/5 flex rounded-r-md border-0 text-gray-900 shadow-sm  placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                                </div>
                            </div>
                            <div class="sm:col-span-4">
                            
                                <div class="border-slate-400 border-2 rounded-lg justify-items-stretch flex flex-wrap">
                                    <span class="w-1/5 px-2 items-center flex bg-gray-300 rounded-l-lg">Email:</span>
                                    <input type="email" name="email" id="email" autocomplete="off" 
                                    class="w-4/5 flex rounded-r-md border-0 text-gray-900 shadow-sm  placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                                </div>
                            </div>
        
                            <div class="sm:col-span-3">
                            
                                <div class="border-slate-400 border-2 rounded-lg justify-items-stretch flex flex-wrap">
                                    <span class="w-1/4 px-4 items-center flex bg-gray-300 rounded-l-lg">Dirección:</span>
                                    <input type="text" name="address" id="address" autocomplete="off" 
                                    class="w-3/4 flex rounded-r-md border-0 text-gray-900 shadow-sm  placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                                </div>
                            </div>
        
                            <div class="sm:col-span-3">
                                <div class="border-slate-400 border-2 rounded-lg justify-items-stretch flex flex-wrap">
                                    <span class="w-1/3 px-4 items-center flex bg-gray-300 rounded-l-lg">Teléfono:</span>
                                    <input type="text" name="phone" id="phone" autocomplete="off" 
                                    class="w-2/3 flex rounded-r-md border-0 text-gray-900 shadow-sm  placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                                </div>
                            </div>
                            
                            <div class="sm:col-span-2">
                                <div class="border-slate-400 border-2 rounded-lg justify-items-stretch flex flex-wrap">
                                    <span class="w-2/6 px-4 items-center flex bg-gray-300 rounded-l-lg">Ciudad:</span>
                                    <input type="text" name="city" id="city" autocomplete="off" 
                                    class="w-2/3 flex rounded-r-md border-0 text-gray-900 shadow-sm  placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                                </div>
                            </div>
        
                            <div class="sm:col-span-3">
                                <div class="border-slate-400 border-2 rounded-lg justify-items-stretch flex flex-wrap">
                                <span class="w-2/6 px-4 items-center flex bg-gray-300 rounded-l-lg">Provincia:</span>
                                <input type="text" name="province" id="province" autocomplete="off" 
                                    class="w-2/3 flex rounded-r-md border-0 text-gray-900 shadow-sm  placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                                </div>
                            </div>
                            <div class="sm:col-span-3">
                                <div class="border-slate-400 border-2 rounded-lg justify-items-stretch flex flex-wrap">
                                    <span class="w-2/5 px-4 items-center flex bg-gray-300 rounded-l-lg">Código postal:</span>
                                    <input type="text" name="postal_code" id="postal_code" autocomplete="off" 
                                    class="w-3/5 flex rounded-r-md border-0 text-gray-900 shadow-sm  placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <div class="border-slate-400 border-2 rounded-lg justify-items-stretch flex flex-wrap">
                                    <span class="w-1/3 px-2 items-center flex bg-gray-300 rounded-l-lg">Estado:</span>
                                    <select id="status" name="status" autocomplete="off" class="w-2/3 flex rounded-r-md border-0 text-gray-900 shadow-sm  placeholder:text-gray-400 h-full focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                                        <option value="active">Activo</option> 
                                        <option value="inactive">Inactivo</option>   
                                    </select>
                                </div>
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

        </div>
    </div>
    
    <script>
        var accordion1 = document.getElementById('headingOne');
        var collapse1 = document.getElementById('collapseOne');
        var iconRotate1 = document.getElementById('iconOne');
        
        accordion1.addEventListener("click",function(){
            collapse1.classList.toggle("hidden");
            iconRotate1.classList.toggle("rotate-[-0deg]");
        });

        var accordion2 = document.getElementById('headingTwo');
        var collapse2 = document.getElementById('collapseTwo');
        var iconRotate2 = document.getElementById('iconTwo');
        
        accordion2.addEventListener("click",function(){
            collapse2.classList.toggle("hidden");
            iconRotate2.classList.toggle("rotate-[-0deg]");
        });
    </script>
</x-app-layout>