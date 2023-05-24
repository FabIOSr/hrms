<?php

namespace App\Http\Livewire\RH;

use Livewire\Component;

class Turno extends Component
{
    public function render()
    {
        return view('livewire.r-h.turno')->extends('layouts.adminlte');
    }
}
