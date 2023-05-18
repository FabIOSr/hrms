<div>
    <div class="row pt-3">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex">
                    <h6 class="m-0">Lista de férias agendadas</h6>
                    <a href="#" class="btn btn-sm btn-link text-decoration-none py-0 float-right" data-toggle="modal"
                        data-target="#ferias" title="agendar ferias">
                        <i class="fas fa-plus"></i>
                    </a>
                </div>
                <div class="card-body p-0">
                    <table class="table-sm table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Periodo</th>
                                <th>Dias</th>
                                <th>Ações disponíveis</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Fábio Ramos</td>
                                <td>18 abr a 18 Mai 2024</td>
                                <td>30d</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn-link text-decoration-none py-0"
                                            title="exlcuir">
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
                                <td>Paulo Henrique Ganso</td>
                                <td>01 Jul a 01 Ago 2024</td>
                                <td>30d</td>
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

    <div class="modal fade" id="ferias" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="staticBackdropLabel">Agendamento de ferias</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="situacao">Funcionário <span class="text-danger"
                                    title="campo obrigatório preencher">*</span></label>
                            <select class="form-control form-control-sm" id="situacao">
                                <option selected>Selecione</option>
                                <option>Fabio Ramos</option>
                                <option>Paulo Henrique Ganso</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cargo">Data saída</label>
                            <input type="date" class="form-control form-control-sm" id="cargo"
                                placeholder="Ex:. 0323211565">
                        </div>
                        <div class="form-group">
                            <label for="cargo">Data retorno</label>
                            <input type="date" class="form-control form-control-sm" id="cargo"
                                placeholder="Ex:. 0323211565">
                        </div>
                        <div class="form-group">
                            <label for="area_descricao">Observação</label>
                            <textarea class="form-control" id="area_descricao" rows="4"></textarea>
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
</div>

@push('_js')
    <script>
        window.addEventListener('closeModal', e => {
            $('#').modal('hide');
        })
        window.addEventListener('updateModal', e => {
            $('#cargo').modal('show');
        })
    </script>
@endpush
