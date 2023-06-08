@extends('layouts.adminlte')

@section('content')

@livewire('hr.journey.index')
@livewire('hr.journey.create')
@livewire('hr.journey.update')
@livewire('hr.journey.delete')

@include('scripts.scripts_geral')
    
@endsection