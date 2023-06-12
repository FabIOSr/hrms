<?php

namespace App\Http\Livewire\Hr\Journey;

use App\Models\Jornada;
use Livewire\Component;

class Delete extends Component
{
    public $selected_id=0;

    protected $listeners = ['deleteConfirm'];


    public function deleteConfirm($id)
    {
        $this->selected_id  = $id;
        $this->emit("show-modal", "delete");
    }

    public function delete()
    {
        Jornada::find($this->selected_id)->delete();
        $this->emit('load_jornada');
        $this->emit('deleted', ["delete", "Registro removido!"]);
    }
    public function render()
    {        
        return view('livewire.hr.journey.delete');
    }
}
