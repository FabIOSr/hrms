<?php

namespace App\Http\Livewire\RH;

use Livewire\Component;

class Funcionario extends Component
{
    public function render()
    {
        return view('livewire.r-h.funcionario')->extends('layouts.adminlte');
    }
}
