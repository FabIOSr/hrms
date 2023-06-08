@extends('layouts.adminlte')

@section('content')

@livewire('hr.department.index')
@livewire('hr.department.create')
@livewire('hr.department.update')
@livewire('hr.department.delete')

@include('scripts.scripts_geral')

@endsection
