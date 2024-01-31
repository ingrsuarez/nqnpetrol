<x-app-layout>
    <div class="bg-white pb-4 px-2 max-w-4xl rounded-lg shadow-lg ">
        <form class="" action="{{route('user.save')}}" method="POST">
            @csrf
              {{-- <div class="space-y-10 ">       --}}
            
            <h2 class="text-base font-semibold leading-7 text-gray-200 bg-blue-500 rounded -ml-2 -mr-2 py-2 px-2 shadow-lg">Editar usuario:</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">Complete los datos:</p>
            <input type="hidden" name="id" value="{{$user->id}}">
            <div class="mx-2 mt-4 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-8">
                <div class="sm:col-span-4 border-slate-400 border-2 rounded-lg  ">
                    
                    <div class="justify-items-stretch flex flex-wrap">
                        <span class="w-2/6 px-4 items-center flex text-base bg-gray-300 rounded-l-lg  ">Nombre</span>
                        <input type="text" name="name" id="name" autocomplete="off" required autofocus
                            class="w-4/6 flex rounded-r-md border-0 text-gray-900 shadow-sm  placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-inset focus:ring-indigo-600"
                            value="{{ucwords($user->name)}}">
                    </div>
                </div>

                <div class="sm:col-span-4">
        
                    <div class="border-slate-400 border-2 rounded-lg justify-items-stretch flex flex-wrap ">
                        <span class="w-2/6 px-4 items-center flex bg-gray-300 rounded-l-lg">Apellido</span>
                        <input type="text" name="last_name" id="last-name" autocomplete="off" required
                        class="w-4/6 flex rounded-r-md border-0 text-gray-900 shadow-sm  placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-inset focus:ring-indigo-600"
                        value="{{ucwords($user->lastName)}}">
                    </div>
                </div>
            
                <div class="sm:col-span-4">
                
                    <div class="border-slate-400 border-2 rounded-lg justify-items-stretch flex flex-wrap ">
                        <span class="w-1/5 px-2 items-center flex bg-gray-300 rounded-l-lg">DNI:</span>
                        <input type="text" name="userId" id="userId" autocomplete="off" required
                        class="w-4/5 flex rounded-r-md border-0 text-gray-900 shadow-sm  placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-inset focus:ring-indigo-600"
                        value="{{$user->userId}}">
                    </div>
                </div>
            
                <div class="sm:col-span-4">
                
                    <div class="border-slate-400 border-2 rounded-lg justify-items-stretch flex flex-wrap">
                        <span class="w-1/5 px-2 items-center flex bg-gray-300 rounded-l-lg">Email:</span>
                        <input type="email" name="email" id="email" autocomplete="off" 
                        class="w-4/5 flex rounded-r-md border-0 text-gray-900 shadow-sm  placeholder:text-gray-400 sm:text-sm focus:ring-2 focus:ring-inset focus:ring-indigo-600"
                        value="{{$user->email}}">
                    </div>
                </div>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancelar</button>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Guardar</button>
            </div>
        </form>
    </div>


    <div class="bg-white mt-2 pb-4 px-2 w-fit lg:w-fit rounded-lg shadow-lg ">
        <h2 class="text-base font-semibold leading-7 text-gray-200 bg-blue-500 rounded -ml-2 -mr-2 py-2 px-2 shadow-lg">Listado de roles:</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">Roles:</p>    

        
            @if (empty($roles[0]))
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    No existen roles!
                    <a href="" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Nuevo</a>
                </div>
            
                
            @else
                <div>
                    <table class="border-collapse border border-slate-400 table-auto mt-6 rounded">
                        <thead class="border border-slate-300">
                            <th class="bg-blue-300 px-2 border border-slate-300">Nombre</th>
                            <th class="bg-blue-300 px-2 border border-slate-300" colspan="2"></th>
        
                        </thead>
                        <tbody>
                        @foreach ($roles as $role)
                            @if($role)
                                <tr class="">
                                    <td class="px-2 border border-slate-300">{{ucwords($role->name)}}</td>
                                    <td class="px-2 py-2 border border-slate-300">
                                        @if($user->hasRole($role->name))
                                            <a href="{{route('role.detach',['role'=>$role,'user'=> $user])}}" class="rounded-md bg-red-600 mx-2 px-2 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                                Eliminar
                                            </a>
                                        @else
                                            <a href="{{route('role.attach',['role'=>$role->id,'user'=> $user])}}" class="rounded-md bg-green-600 mx-2 px-2 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                                Agregar
                                            </a>

                                        @endif
                                    </td>

                                </tr>
                            @endif
                        
                        @endforeach  
                        </tbody>
                    </table>
                </div>  
            @endif
        
    </div>

    
</x-app-layout>