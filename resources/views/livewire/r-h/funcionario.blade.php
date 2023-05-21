<div>
    <div class="row pt-3">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex">
                    <h6 class="m-0">Lista de colaboradores</h6>
                    <a href="#" class="btn btn-sm btn-link text-decoration-none py-0 float-right" data-toggle="modal"
                        data-target="#funcionario" title="agendar ferias">
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

    <div class="modal fade" id="funcionario" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">

                <div class="card-body">
                    <h4>Formulário informções colaborador</h4>
                    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill"
                                href="#custom-content-below-home" role="tab"
                                aria-controls="custom-content-below-home" aria-selected="true">Dados pessoais</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill"
                                href="#custom-content-below-profile" role="tab"
                                aria-controls="custom-content-below-profile" aria-selected="false">Dados
                                Profissionais</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-content-below-messages-tab" data-toggle="pill"
                                href="#custom-content-below-messages" role="tab"
                                aria-controls="custom-content-below-messages" aria-selected="false">Dados Bancario</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill"
                                href="#custom-content-below-settings" role="tab"
                                aria-controls="custom-content-below-settings"
                                aria-selected="false">Dependentes/Parentes</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="custom-content-below-tabContent">


                        <div class="tab-pane fade active show" id="custom-content-below-home" role="tabpanel"
                            aria-labelledby="custom-content-below-home-tab">

                            <form>
                                <div class="form-group mt-4">
                                    <label for="cargo" class="mb-0">Nome completo <span class="text-danger"
                                            title="campo obrigatório preencher">*</span></label>
                                    <input type="text" class="form-control form-control-sm" id="cargo"
                                        placeholder="Ex:. 0323211565">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="inputCity" class="mb-0">Data Nascimento <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="date" class="form-control form-control-sm"
                                            placeholder="01/05/1980">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="inputCity" class="mb-0">CPF <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="315156494898">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="inputZip" class="mb-0">RG <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="12315616546">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputState" class="mb-0">Sexo <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <select id="inputState" class="form-control form-control-sm">
                                            <option selected>Selecione...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="inputCity" class="mb-0">CEP <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="00000-000">
                                    </div>

                                    <div class="form-group col-md-8">
                                        <label for="inputCity" class="mb-0">Logradouro <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="Rua palace">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="inputZip" class="mb-0">Nº <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm" placeholder="146">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="inputCity" class="mb-0">Bairro <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="00000-000">
                                    </div>

                                    <div class="form-group col-md-5">
                                        <label for="inputCity" class="mb-0">Municipio <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="Rua palace">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="inputZip" class="mb-0">Estado <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm" placeholder="146">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="area_descricao" class="mb-0">Observação</label>
                                    <textarea class="form-control" id="area_descricao" rows="2"></textarea>
                                </div>
                            </form>

                        </div>


                        <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel"
                            aria-labelledby="custom-content-below-profile-tab">

                            <form>
                                <div class="form-row mt-4">
                                    <div class="form-group col-md-6">
                                        <label for="ctps" class="mb-0">CTPS <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="215611656566">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="pis" class="mb-0">PIS <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="315156494898">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="inputZip" class="mb-0">Data Admissão <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="date" class="form-control form-control-sm"
                                            placeholder="{{ date('d/m/Y') }}">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="empresa" class="mb-0">Empresa <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <select id="empresa" class="form-control form-control-sm">
                                            <option selected>Selecione...</option>
                                            <option>UPA São João</option>
                                            <option>UPA Cumbica</option>
                                            <option>P.A Maria Dirce</option>
                                            <option>HMCA</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="cargo" class="mb-0">Designação/Cargo <span
                                                class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <select id="cargo" class="form-control form-control-sm">
                                            <option selected>Selecione...</option>
                                            <option>Enfermagem</option>
                                            <option>Serviço Social</option>
                                            <option>Administração</option>
                                            <option>Manutenção</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="departamento" class="mb-0">Departamento/Setor <span
                                                class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <select id="departamento" class="form-control form-control-sm">
                                            <option selected>Selecione...</option>
                                            <option>Administração</option>
                                            <option>Serviço Social</option>
                                            <option>Administração</option>
                                            <option>Manutenção</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="inputCity">CEP <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="00000-000">
                                    </div>

                                    <div class="form-group col-md-8">
                                        <label for="inputCity">Logradouro <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="Rua palace">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Nº <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm" placeholder="146">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="inputCity">Bairro <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="00000-000">
                                    </div>

                                    <div class="form-group col-md-5">
                                        <label for="inputCity">Municipio <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="Rua palace">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Estado <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm" placeholder="146">
                                    </div>
                                </div>
                            </form>

                        </div>




                        <div class="tab-pane fade" id="custom-content-below-messages" role="tabpanel"
                            aria-labelledby="custom-content-below-messages-tab">

                            <form>
                                <div class="form-group mt-4">
                                    <label for="empresa" class="mb-0">Banco <span class="text-danger"
                                            title="campo obrigatório preencher">*</span></label>
                                    <select id="empresa" class="form-control form-control-sm">
                                        <option selected>Selecione...</option>
                                        <option>001 - Banco do Brasil</option>
                                        <option>002 - Banco Bradesco</option>
                                        <option>003 - Banco Itaú</option>
                                        <option>004 - Banco Santander</option>
                                    </select>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="ctps" class="mb-0">Agência <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="215611656566">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="pis" class="mb-0">Conta Corrente <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="315156494898">
                                    </div>

                                </div>
                            </form>


                        </div>
                        <div class="tab-pane fade" id="custom-content-below-settings" role="tabpanel"
                            aria-labelledby="custom-content-below-settings-tab">
                            <form>
                                <div class="form-row mt-4">
                                    <div class="form-group col-md-5">
                                        <label for="inputCity" class="mb-0">Nome Completo <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm"
                                            placeholder="Jhon Doe">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="dt_nasc" class="mb-0">Data Nascimento <span
                                                class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="date" class="form-control form-control-sm">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="empresa" class="mb-0">Parentesco <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <select id="empresa" class="form-control form-control-sm">
                                            <option selected>Selecione...</option>
                                            <option>Filho(a)</option>
                                            <option>Esposo(a)</option>
                                            <option>Pai/Mãe</option>
                                            <option>Outros</option>
                                        </select>
                                    </div>
                                    <div class="form-group col">
                                        <a href="#" class="btn btn-sm btn-primary pb-0 mt-4">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </form>

                            <hr>

                            <div class="card-body p-0">
                                <table class="table-sm table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nome</th>
                                            <th>Data Nascimento</th>
                                            <th>Parentesco</th>
                                            <th>Idade</th>
                                            <th>Ações disponíveis</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Fábio Ramos</td>
                                            <td>18/04/2011</td>
                                            <td>Filho</td>
                                            <td>5 Anos</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="#"
                                                        class="btn btn-sm btn-link text-decoration-none py-0"
                                                        title="exlcuir">
                                                        <i class="fas fa-trash text-danger"></i>
                                                    </a>
                                                    <a href="#" wire:click="edit(1)"
                                                        class="btn btn-sm btn-link text-decoration-none py-0"
                                                        title="alterar">
                                                        <i class="fas fa-pen"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Paulo Henrique Ganso</td>
                                            <td>01/06/2019</td>
                                            <td>Filho</td>
                                            <td>4 Anos</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="#"
                                                        class="btn btn-sm btn-link text-decoration-none py-0"
                                                        title="exlcuir">
                                                        <i class="fas fa-trash text-danger"></i>
                                                    </a>
                                                    <a href="#"
                                                        class="btn btn-sm btn-link text-decoration-none py-0"
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
                </div>
                <div class="modal-footer py-1">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-sm btn-primary" wire:click="save">Salvar</button>
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
