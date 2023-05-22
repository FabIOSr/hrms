<?php

namespace App\Http\Livewire\RH;

use Livewire\Component;

class Cargo extends Component
{
    public string $cargo;
    public string $descricao;

    public function create()
    {
        dd('novo');
    }

    public function edit($ID)
    {
        $this->dispatchBrowserEvent('updateModal', []);
    }

    public function delete()
    {
        $this->dispatchBrowserEvent('deleteModal');
    }

    public function save()
    {
        $this->dispatchBrowserEvent('closeModal', []);
    }

    public function render()
    {
        return view('livewire.r-h.cargo')->extends('layouts.adminlte');
    }
}
