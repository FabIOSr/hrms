<?php

namespace App\Http\Livewire\Hr\Department;

use Livewire\Component;

class Delete extends Component
{
    protected $listeners = ['deleteConfirm'];

    public string $ID;

    public function deleteConfirm($ID)
    {
        $this->ID  = $ID;
        $this->dispatchBrowserEvent('deleteModal');
    }

    
    public function delete()
    {
        $this->emit('load_department');
        $this->dispatchBrowserEvent('closeModal',['delete']);
    }

    
    public function render()
    {
        return view('livewire.hr.department.delete');
    }
}
