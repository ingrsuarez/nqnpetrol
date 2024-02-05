
<x-app-layout>
    
    <div class="flex flex-col justify-start bg-gray-300">
        @livewire('show-wells',['wells'=>$wells, 'clients'=>$clients])
    </div>

</x-app-layout>