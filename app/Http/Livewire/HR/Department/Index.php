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

    private $pagination = 5;


    public function render()
    {
        $data = Departamento::orderBy('departamento_nome','ASC')->paginate($this->pagination);
        return view('livewire.hr.department.index', ['data'=> $data]);
    }
}
