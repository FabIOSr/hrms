@extends('layouts.adminlte')

@section('content')

@livewire('hr.employee.index')
@livewire('hr.employee.create-employee')

@endsection

@push('_js')
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
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