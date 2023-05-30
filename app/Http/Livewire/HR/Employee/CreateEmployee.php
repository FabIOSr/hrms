<?php

namespace App\Http\Livewire\Hr\Employee;

use Livewire\Component;

class CreateEmployee extends Component
{
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

    public function render()
    {
        return view('livewire.hr.employee.create-employee');
    }
}
