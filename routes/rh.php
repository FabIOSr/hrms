<?php
use App\Http\Livewire\RH\{
    Cargo,
    Departamento,
    Ferias,
    Funcionario,
};

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'rh',
    'middleware' => 'auth'
], function(){
    Route::get('/departamento', Departamento::class)->name('rh_departamento');
    Route::get('/cargo', Cargo::class)->name('rh_cargo');
    Route::get('/ferias', Ferias::class)->name('rh_ferias');
    Route::get('/funcionario', Funcionario::class)->name('rh_funcionario');
});