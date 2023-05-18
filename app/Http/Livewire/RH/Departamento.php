<?php

namespace App\Http\Livewire\RH;

use Livewire\Component;

class Departamento extends Component
{
    public string $departamento;
    public string $centro_custo;
    public string $title="Departamento";

    public function novoDepartamento()
    {
        dd('novo');
    }

    public function alterarDepartamento($ID)
    {
        $this->dispatchBrowserEvent('updateModal', []);
    }

    public function save()
    {
        $this->dispatchBrowserEvent('closeModal', []);
    }


    public function render()
    {
        return view('livewire.r-h.departamento')->extends('layouts.adminlte');
    }
}
