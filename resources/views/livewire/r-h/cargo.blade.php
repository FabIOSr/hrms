<div>
    <div class="row pt-3">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex">
                    <h6 class="m-0">Lista de cargo</h6>
                    <a href="#" class="btn btn-sm btn-link text-decoration-none py-0 float-right" data-toggle="modal"
                        data-target="#cargo" title="novo cargo">
                        <i class="fas fa-plus"></i>
                    </a>
                </div>
                <div class="card-body p-0">
                    <table class="table-sm table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Centro de custo</th>
                                <th>Ações disponíveis</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Assistente Administrativo</td>
                                <td>02126156166</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#" wire:click="delete"
                                            class="btn btn-sm btn-link text-decoration-none py-0" title="exlcuir">
                                            <i class="fas fa-trash text-danger"></i>
                                        </a>
                                        <a href="#" wire:click="edit(1)"
                                            class="btn btn-sm btn-link text-decoration-none py-0" title="alterar">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Auxiliar de Enfermagem</td>
                                <td>02126156161</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn-link text-decoration-none py-0"
                                            title="exlcuir">
                                            <i class="fas fa-trash text-danger"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-link text-decoration-none py-0"
                                            title="alterar">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.col-md-6 -->
    </div>

    <div class="modal fade" id="cargo" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="staticBackdropLabel">Novo cargo</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="nome_cargo">Nome Cargo <span class="text-danger"
                                    title="campo obrigatório preencher">*</span></label>
                            <input type="email" class="form-control form-control-sm" id="nome_cargo"
                                placeholder="Ex:. Administração">
                        </div>
                        <div class="form-group">
                            <label for="cargo">Centro de Custo</label>
                            <input type="email" class="form-control form-control-sm" id="cargo"
                                placeholder="Ex:. 0323211565">
                        </div>
                        <div class="form-group">
                            <label for="situacao">Situação <span class="text-danger"
                                    title="campo obrigatório preencher">*</span></label>
                            <select class="form-control form-control-sm" id="situacao">
                                <option selected>Selecione</option>
                                <option>Ativo</option>
                                <option>Inativo</option>
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
                    <button type="button" class="btn btn-primary" wire:click="save">Salvar</button>
                </div>
            </div>
        </div>
    </div>

    {{-- delete modal --}}
    <div class="modal fade bg-secondary py-5" data-backdrop="static" tabindex="-1" role="dialog" id="delete">
        <div class="modal-dialog" role="document">
          <div class="modal-content rounded-3 shadow">
            <div class="modal-body p-4 text-center">
              <h5 class="mb-0 text-dark">Enable this setting?</h5>
              <p class="mb-0 text-dark">You can always change your mind in your account settings.</p>
            </div>
            <div class="modal-footer flex-nowrap p-0">
              <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-end"><strong>Yes, enable</strong></button>
              <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0" data-dismiss="modal">No thanks</button>
            </div>
          </div>
        </div>
      </div>
</div>

@push('_js')
    <script>
        window.addEventListener('closeModal', e => {
            $('#cargo').modal('hide');
        })
        window.addEventListener('updateModal', e => {
            $('#cargo').modal('show');
        })

        window.addEventListener('deleteModal', e => {
            $('#delete').modal('show');
        })
    </script>
@endpush
