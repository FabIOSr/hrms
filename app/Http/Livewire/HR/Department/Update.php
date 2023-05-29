<?php

namespace App\Http\Livewire\Hr\Department;

use Livewire\Component;

class Update extends Component
{
    protected $listeners = ['edit'];

    public string $name = 'Department Name';
    public int $status = 1;
    public string $cc= '16065656';

    public function edit($id)
    {
        $this->dispatchBrowserEvent('updateModal');
    }

    public function update()
    {
        //dd('here');
        $this->emit('load_department');
        $this->dispatchBrowserEvent('closeModal', ['update']);
        
    }

    public function render()
    {
        return view('livewire.hr.department.update');
    }
}
