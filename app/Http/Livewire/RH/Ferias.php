<?php

namespace App\Http\Livewire\RH;

use Livewire\Component;

class Ferias extends Component
{
    public function render()
    {
        return view('livewire.r-h.ferias')->extends('layouts.adminlte');
    }
}
