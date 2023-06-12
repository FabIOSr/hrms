<div>
    <div class="modal fade bg-secondary-opacity-25 py-5" data-backdrop="static" tabindex="-1" role="dialog" id="delete">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content rounded-3 shadow">
                <div class="modal-body p-4 text-center">
                    <h5 class="mb-0 text-dark fw-bold mb-2">Exclusão de Registro</h5>
                    <p class="mb-0  text-danger">Está certo de excluir este registro?.</p>
                </div>
                <div class="modal-footer flex-nowrap p-0">
                    <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0"
                        data-dismiss="modal">Cancelar</button>
                    <button type="button" wire:click="delete"
                        class="btn btn-lg  fs-6 text-decoration-none btn-link col-6 m-0 rounded-0 border-end text-danger"><strong>Excluir</strong></button>
                </div>
            </div>
        </div>
    </div>
</div>

