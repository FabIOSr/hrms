@extends('layouts.adminlte')

@section('content')

@livewire('hr.department.index')
@livewire('hr.department.create')
@livewire('hr.department.update')
@livewire('hr.department.delete')

@endsection

@push('_js')
    <script>
        window.addEventListener('closeModal', e => {
            // console.log(e.detail);
            $('#'+e.detail).modal('hide');
        })
        window.addEventListener('updateModal', e => {
            // console.log('update');
            $('#update').modal('show');
        })
        window.addEventListener('deleteModal', e => {
            // console.log('delete');
            $('#delete').modal('show');
        })
    </script>
@endpush