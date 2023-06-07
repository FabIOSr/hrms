<div class="modal fade" id="journey_create" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="staticBackdropLabel">Jornada de trabalho</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="cargo" class="mb-0">Tipo Jornada <span class="text-danger"
                                title="campo obrigatório preencher">*</span></label>
                            <input type="text" class="form-control form-control-sm" id="cargo"
                                placeholder="Ex:. 5x2">
                        </div>
                        <div class="form-group">
                            <label for="situacao" class="mb-0">Carga Horária Semanal<span class="text-danger"
                                    title="campo obrigatório preencher">*</span></label>
                            <select class="form-control form-control-sm" id="situacao">
                                <option value="choose" selected>Selecione</option>
                                <option value="">4</option>
                                <option value="">6</option>
                                <option value="">8</option>
                                <option value="">12</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" wire:click="save">Salvar</button>
                </div>
            </div>
        </div>
    </div>
