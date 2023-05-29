<?php

namespace App\Http\Livewire\Hr\Department;

use Livewire\Component;

class Index extends Component
{
    protected $listeners = ['load_department' => '$refresh'];


    public function render()
    {
        return view('livewire.hr.department.index');
    }
}
