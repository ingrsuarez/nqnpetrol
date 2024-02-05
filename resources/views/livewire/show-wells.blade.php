<div>
    <p class="mt-1 text-sm leading-6 text-gray-600">Listado de pozos:</p>    
    @if (empty($wells[0]))
        <div class="mt-6 flex items-center justify-end gap-x-6">
            No existen pozos con este criterio de búsqueda!
            <a href="" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Nuevo</a>
        </div>
    @else
        <div class="p-2">
            <table class="border-collapse border bg-gray-200 border-slate-400 table-auto mt-6 shadow-lg rounded-lg">
                <thead class="border border-slate-300 rounded-lg">
                    <th class="bg-blue-300 px-2 border border-slate-300">Nombre</th>
                    <th class="bg-blue-300 px-2 border border-slate-300">Cliente</th>
                    <th class="bg-blue-300 px-2 border border-slate-300">Yacimiento</th>
                    <th class="bg-blue-300 px-2 border border-slate-300">Tipo</th>
                    <th class="bg-blue-300 px-2 border border-slate-300"></th>

                </thead>
                <tbody>
                @foreach ($wells as $well)
                <tr class="">
                    <td class="px-2 border border-slate-300">{{ucwords($well->name)}}</td>
                    <td class="px-2 border border-slate-300">{{$well->client->name}}</td>                   
                    <td class="px-2 text-center border border-slate-300">{{$well->oilfield}}</td>
                    <td class="px-2 border border-slate-300">{{$well->type}}</td>
                    <td class="px-2 py-2 border border-slate-300">
                        <a href="{{route('well.edit',['well'=>$well->id])}}" class="rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Editar
                        </a>
                    </td>
                </tr>
                
                @endforeach  
                </tbody>
            </table>
        </div>  
    @endif
</div>
