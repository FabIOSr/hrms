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
                    <form autocomplete="off">
                        <div class="form-group">
                            <label for="departamento_nome">Nome Departamento <span class="text-danger"
                                    title="campo obrigatório preencher">*</span></label>
                            <input type="text" wire:model="name" class="form-control form-control-sm"
                                id="departamento_nome" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="centro_custo">Centro de Custo</label>
                            <input type="text" wire:model="c_custo" class="form-control form-control-sm"
                                id="centro_custo" placeholder="ex: 0323211565">
                            @error('c_custo') <span class="text-danger text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="situacao">Situação <span class="text-danger"
                                    title="campo obrigatório preencher">*</span></label>
                            <select wire:model="status" class="form-control form-control-sm" id="situacao">
                                <option value="choose">Selecione</option>
                                <option value="ATIVO">Ativo</option>
                                <option value="INATIVO">Inativo</option>
                            </select>
                            @error('status') <span class="text-danger text-sm">{{ $message }}</span> @enderror
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="resetUI">Cancelar</button>
                    <button type="button" class="btn btn-primary" wire:click="update">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</div>
