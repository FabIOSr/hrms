<?php
use App\Http\Livewire\RH\{
    Cargo,
    Departamento,
    Escala,
    Ferias,
    Funcionario,
    Plantao,
};

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'rh',
    'middleware' => 'auth'
], function(){
    Route::get('/departamento', Departamento::class)->name('rh_departamento');
    Route::get('/cargo', Cargo::class)->name('rh_cargo');
    Route::get('/ferias', Ferias::class)->name('rh_ferias');
    Route::get('/escala', Escala::class)->name('rh_escala');
    Route::get('/plantao', Plantao::class)->name('rh_plantao');
    Route::get('/funcionario', Funcionario::class)->name('rh_funcionario');
});