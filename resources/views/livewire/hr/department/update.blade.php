<div>
    <div wire:ignore.self class="modal fade" id="update" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="staticBackdropLabel">Novo departamento</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="nome_departamento">Nome Departamento <span class="text-danger"
                                    title="campo obrigatório preencher">*</span></label>
                            <input type="text" wire:model="name" class="form-control form-control-sm"
                                id="nome_departamento" placeholder="Ex:. Administração">
                        </div>
                        <div class="form-group">
                            <label for="nome_departamento">Centro de Custo</label>
                            <input type="text" wire:model="cc" class="form-control form-control-sm"
                                id="nome_departamento" placeholder="Ex:. 0323211565">
                        </div>
                        <div class="form-group">
                            <label for="situacao">Situação <span class="text-danger"
                                    title="campo obrigatório preencher">*</span></label>
                            <select wire:model="status" class="form-control form-control-sm" id="situacao">
                                <option selected>Selecione</option>
                                <option value="1">Ativo</option>
                                <option value="0">Inativo</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="area_descricao">Descrição</label>
                            <textarea class="form-control" id="area_descricao" rows="2"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" wire:click="update">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</div>
