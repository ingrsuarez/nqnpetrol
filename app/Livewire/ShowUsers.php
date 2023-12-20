<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class ShowUsers extends Component
{
    public $users;

    public function mount($users)
    {
        $this->users =  $users = User::all();
    }

    public function render()
    {
        return view('livewire.show-users');
    }
}
