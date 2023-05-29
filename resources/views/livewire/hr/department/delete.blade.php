<div>
    <div class="modal fade bg-secondary py-5" data-backdrop="static" tabindex="-1" role="dialog" id="delete">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-3 shadow">
                <div class="modal-body p-4 text-center">
                    <h5 class="mb-0 text-dark">Exclusão de Registro</h5>
                    <p class="mb-0 text-dark">Está certo que realmente quer excluir este registro?.</p>
                </div>
                <div class="modal-footer flex-nowrap p-0">
                    <button type="button" wire:click="delete"
                        class="btn btn-lg  fs-6 text-decoration-none btn-link col-6 m-0 rounded-0 border-end"><strong>Excluir</strong></button>
                    <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0"
                        data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</div>