<?php

namespace App\Livewire;

use Livewire\Component;

class ShowClients extends Component
{
    public $clients;
    
    public function render()
    {
        return view('livewire.show-clients');
    }
}
