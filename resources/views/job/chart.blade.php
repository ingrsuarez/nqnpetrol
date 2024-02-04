<x-app-layout>
    <div class="w-fit p-6 lg:p-8 bg-white border-b border-gray-200">
           

        <!-- component -->
        @livewire('organization-chart',['employees'=>$employees, 'job'=>$job, 'responsibilities'=>$responsibilities])


    </div>
    <div class="p-2 container mt-4 mx-auto text-center bg-slate-100">
        @isset($jobs)
            <table class="border-collapse border border-slate-400 table-auto px-2 rounded">
                <thead class="border border-slate-300">
                    <th class="bg-blue-300 px-2 border border-slate-300">Puesto</th>
                    <th class="bg-blue-300 px-2 border border-slate-300">Responsabilidades</th>
                    <th class="bg-blue-300 px-2 border border-slate-300">Integrantes</th>
                </thead>
                <tbody>
                @foreach ($jobs as $job)
                <tr class="">
                    <td class="px-2 border border-slate-300"><strong>{{ucwords($job->name)}}</strong></td>
                    <td class="px-2 border border-slate-300 text-left">{{$job->responsibilities}}</td>
                    <td class="px-2 border border-slate-300">
                        @foreach($job->employees as $employee)
                                {{ucwords($employee->name.' '.$employee->lastName)." - "}}    
                        @endforeach
                    </td>
                </tr>
                
                @endforeach  
                </tbody>
            </table>
        @endisset
         
    </div>
</x-app-layout>