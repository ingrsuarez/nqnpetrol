<?php

namespace App\Livewire;

use Livewire\Component;

class ShowWells extends Component
{
    public $wells;
    public $clients;

    public function render()
    {
        return view('livewire.show-wells');
    }
}
