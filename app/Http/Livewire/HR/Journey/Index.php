<?php

namespace App\Http\Livewire\Hr\Journey;

use App\Models\Jornada;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public $search;

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listiners = ['load_jornada' => '$refresh'];
    
    public function render()
    {
        $data = Jornada::query()->orderBy('carga_horaria_semanal');
        if($this->search){
            $this->resetPage();
            $data = $data->where('jornada', 'like', '%'.$this->search.'%');
        }
        $data = $data->paginate(5);
        return view('livewire.hr.journey.index',[
            'jornada' => $data
        ]);
    }
}
