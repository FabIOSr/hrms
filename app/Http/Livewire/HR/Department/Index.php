<?php

namespace App\Http\Livewire\Hr\Department;

use App\Models\Departamento;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    protected $listeners = ['load_department' => '$refresh'];

    public $search;

    private $pagination = 5;


    public function render()
    {
        $data = Departamento::query()->orderBy('departamento_nome','ASC');
        if($this->search):
            $this->resetPage();
            $data = $data->where('departamento_nome', 'like', '%'.$this->search.'%');
        endif;
        $data = $data->paginate($this->pagination);
        return view('livewire.hr.department.index', ['data'=> $data]);
    }
}
