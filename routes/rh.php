<?php
use App\Http\Livewire\RH\{
    Cargo,
    Departamento,
    Escala,
    Ferias,
    Funcionario,
    Turno,
};

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'hr',
    'middleware' => 'auth'
], function(){
    Route::view('/department', 'hr\department\index')->name('rh_departamento');
    // Route::get('/department', Departamento::class)->name('rh_departamento');
    Route::get('/office', Cargo::class)->name('rh_cargo');
    Route::get('/vocation', Ferias::class)->name('rh_ferias');
    Route::get('/scale', Escala::class)->name('rh_escala');
    Route::get('/shift', Turno::class)->name('rh_turno');
    // Route::get('/employee', Funcionario::class)->name('rh_funcionario');
    Route::view('/employee', 'hr\employee\index')->name('rh_funcionario');
    Route::view('/journey', 'hr\journey\index')->name('rh_journey');
});