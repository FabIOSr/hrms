<?php

namespace App\Http\Livewire\Hr\Department;

use App\Models\Departamento;
use Livewire\Component;

class Update extends Component
{
    protected $listeners = ['edit'];

    public string $name='';
    public $status=null;
    public $c_custo = null;
    public $selected_id=0;

    public function edit($id)
    {
        $dept = Departamento::find($id);
        //dd($dept);
        $this->name = $dept->departamento_nome;
        $this->c_custo = $dept->centro_custo;
        $this->status = $dept->situacao;
        $this->selected_id = $dept->id;

        $this->dispatchBrowserEvent('updateModal');
    }

    public function update()
    {
        $rules = [
            'name' => "required|min:3|unique:departamento,departamento_nome,{$this->selected_id}",
            'status' => 'required|not_in:choose'
        ];
        $messages = [
            'name.required' => 'Nome do departamento é obrigatório',
            'name.min' => 'é necessário um minimo de 3 caracteres',
            'name.unique' => 'Departamento já existe na base de dados',
            'name.alpha' => 'O campo nome departamento deve conter apenas letras.',
            'status.not_in' => 'Selecione um valor válido',
        ];

        $this->validate($rules,$messages);
        $dept = Departamento::find($this->selected_id);
        //dd($dept);

        $dept->departamento_nome = $this->name;
        $dept->centro_custo = $this->c_custo;
        $dept->situacao = $this->status;
        $dept->save();

        $this->emit('load_department');
        $this->dispatchBrowserEvent('closeModal', ['update']);
        
    }

    public function resetUI()
    {
        $this->reset();
        $this->resetErrorBag();
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.hr.department.update');
    }
}
