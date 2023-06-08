<?php

namespace App\Http\Livewire\Hr\Journey;

use Livewire\Component;

class Create extends Component
{
    public $tipo;
    public $chs;

    public function store()
    {
        $rules = [
            'tipo' => 'required|min:3',
            // 'chs' => 'required|numeric|max:2'
        ];

        $messages = [
            'tipo.required' => 'O campo tipo é obrigatório',
            'tipo.min' => 'O campo tipo deve conter ao menos 3 caracteres',
            'chs.required' => 'O campo carga horária semanal é obrigatório',
            'chs.numeric' => 'Somente números é permitido',
            // 'chs.min' => 'O campo deve conter ao menos 2 caracteres numéricos',
            'chs.max' => 'O campo deve conter ao menos 2 caracteres numéricos',
        ];

        $this->resetValidation();

        $this->validate($rules, $messages);

        $this->resetUI();

        $this->emit('created', ["journey_create", "Excelente, registro foi adicionado!"]);
    }

    public function resetUI()
    {
        $this->reset();
        $this->resetErrorBag();
        $this->resetValidation();
    }
    public function render()
    {
        return view('livewire.hr.journey.create');
    }
}
