<div>
    <div wire:ignore.self class="modal fade" id="journey_create" data-backdrop="static" data-keyboard="false" tabindex="-1"
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
                        <label class="mb-0">Jornada <span class="text-danger"
                                title="campo obrigatório preencher">*</span></label>
                        <input type="text" wire:model="jornada" class="form-control form-control-sm"
                            placeholder="ex: 5x2">
                        @error('jornada')
                            <span class="text-sm text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="mb-0">Carga Horária Semanal <span class="text-danger"
                                title="campo obrigatório preencher">*</span></label>
                        <input type="number" wire:model="chs"
                            {{-- oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength) @set('chs', this.value);" --}}
                            class="form-control form-control-sm" placeholder="ex: 12" maxlength="2">
                        @error('chs')
                            <span class="text-sm text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" wire:click="resetUI" wire:loading.attr="disabled" class="btn btn-secondary"
                    data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" wire:click.prevent="store">
                    <span wire:loading wire:target="store">Processando...</span>
                    <span wire:loading.remove wire:target="store">Salvar</span>
                </button>
            </div>
        </div>
    </div>
</div>
</div>
