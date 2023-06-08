@push('_js')
    <script>
        document.addEventListener('DOMContentLoaded', function(){
           livewire.on('show-modal', data => {
                $('#'+data).modal('show');
            })
           livewire.on('hide-modal', data => {
                $('#'+data).modal('hide');
            })
           livewire.on('created', data => {
                $('#'+data[0]).modal('hide');
                toastr.success(data[1])
            })
           livewire.on('updated', data => {
                $('#'+data[0]).modal('hide');
                toastr.success(data[1])
            })
           livewire.on('deleted', data => {
                $('#'+data[0]).modal('hide');
                toastr.success(data[1])
            })
           livewire.on('error', msg => {
                toastr.error(msg)
            })
        })
    </script>
@endpush