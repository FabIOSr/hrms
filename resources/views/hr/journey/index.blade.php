@extends('layouts.adminlte')

@section('content')

@livewire('hr.journey.index')
@livewire('hr.journey.create')
@livewire('hr.journey.update')
@livewire('hr.journey.delete')
    
@endsection

@push('_js')
    <script>
        window.addEventListener('closeModal', e => {
            $('#'+e.detail).modal('hide');
        })
        window.addEventListener('updateModal', e => {
            $('#update').modal('show');
        })
        window.addEventListener('deleteModal', e => {
            $('#delete').modal('show');
        })
    </script>
@endpush