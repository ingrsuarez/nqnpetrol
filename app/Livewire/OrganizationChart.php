<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Employee;
use App\Models\Job;

class OrganizationChart extends Component
{
    public $employees;
    public $job;
    public $responsibilities;

    public function mount($job)
    {
        $this->employees = Employee::all();
        
        
    }

    public function render()
    {   
        return view('livewire.organization-chart');
    }
}
