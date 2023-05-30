<?php

namespace App\Http\Livewire\Hr\Employee;

use Livewire\Component;

class CreateEmployee extends Component
{
    public $nome, $sexo, $est_civil;
    public $cpf,$rg;
    public $nascimento;
    public $cep, $logradouro, $numero, $uf, $bairro, $municipio;

    public int $currentStep=1;
    public int $totalStep=4;

    public function increment()
    {
        $this->currentStep++;
        if($this->currentStep > 4){
            $this->currentStep=4;
        }
    }

    public function decrement()
    {
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep=1;
        }
    }

    public function onCancel()
    {
        $this->reset();
        $this->resetErrorBag();
        $this->resetValidation();
        $this->currentStep=1;
    // $this->dispatchBrowserEvent('closeModal', ['create_employee']);
    }
    public function render()
    {
        return view('livewire.hr.employee.create-employee');
    }
}
