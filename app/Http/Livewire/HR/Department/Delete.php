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
        $this->emit("show-modal", "delete");
    }

    
    public function delete()
    {
        $dept = Departamento::findOrFail($this->selected_id);


        if($dept)
            $dept->delete();

        $this->emit('load_department');
        $this->emit('deleted', ["delete", "Registro removido"]);
    }

    
    public function render()
    {
        return view('livewire.hr.department.delete');
    }
}
