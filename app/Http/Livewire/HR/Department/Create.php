<?php

namespace App\Http\Livewire\Hr\Department;

use App\Models\Departamento;
use Livewire\Component;

class Create extends Component
{
    public string $name;
    public $c_custo = null;

    public function store()
    {
        $rules = [
            'name' => 'required|min:3|unique:departamento,departamento_nome',
        ];
        $messages = [
            'name.required' => 'Nome do departamento é obrigatório',
            'name.min' => 'é necessário um minimo de 3 caracteres',
            'name.unique' => 'Departamento já existe na base de dados',
            'name.alpha' => 'O campo nome departamento deve conter apenas letras.',
        ];

        $this->validate($rules,$messages);

        Departamento::create([
            'departamento_nome' => $this->name,
            'centro_custo' => $this->c_custo,
        ]);

        $this->resetUI();

        $this->emit('load_department');
        $this->dispatchBrowserEvent('closeModal', ['create']);
    }

    private function resetUI(){
        $this->name='';
        $this->c_custo = null;
        $this->resetErrorBag();
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.hr.department.create');
    }
}
