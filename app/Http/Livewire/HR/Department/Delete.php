<?php

namespace App\Http\Livewire\Hr\Department;

use App\Models\Departamento;
use Livewire\Component;

class Delete extends Component
{
    protected $listeners = ['deleteConfirm'];

    public $selected_id=0;

    public function deleteConfirm($id)
    {
        $this->selected_id  = $id;
        $this->dispatchBrowserEvent('deleteModal');
    }

    
    public function delete()
    {
        $dept = Departamento::findOrFail($this->selected_id);


        if($dept)
            $dept->delete();

        $this->emit('load_department');
        $this->dispatchBrowserEvent('closeModal',['delete']);
    }

    
    public function render()
    {
        return view('livewire.hr.department.delete');
    }
}
