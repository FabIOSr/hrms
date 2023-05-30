<div>
    <div wire:ignore.self class="modal fade" id="create_employee" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content modal-dialog-scrollable">

                {{-- passo 1 --}}
                @if ($currentStep == 1)
                    <div class="card shadow-none border-0">
                        <div class="card-body">
                            <strong>Passo-{{ $currentStep }} de {{ $totalStep }} / Dados Pessoais</strong>

                            <hr>

                            <form autocomplete="off">

                                <div class="form-row mt-4">
                                    <div class="form-group col-md-8">
                                        <label class="mb-0">Nome completo <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm" autocomplete="off">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label class="mb-0">Data Nascimento <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="date" class="form-control form-control-sm">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label class="mb-0">CPF <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label class="mb-0">RG <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label class="mb-0">Sexo <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <select class="form-control form-control-sm">
                                            <option selected disabled>...</option>
                                            <option>Feminino</option>
                                            <option>Masculino</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label class="mb-0">Estado Civil <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <select class="form-control form-control-sm">
                                            <option selected disabled>...</option>
                                            <option>Solteiro(a)</option>
                                            <option>Casado(a)</option>
                                            <option>Divorciado(a)</option>
                                            <option>Viúvo(a)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label class="mb-0">CEP <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>

                                    <div class="form-group col-md-8">
                                        <label class="mb-0">Logradouro <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label class="mb-0">Nº <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label class="mb-0">Bairro <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>

                                    <div class="form-group col-md-5">
                                        <label class="mb-0">Municipio <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label class="mb-0">Estado <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="mb-0">Observação</label>
                                    <textarea class="form-control" id="area_descricao" rows="2"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer py-1">
                            <button type="button" class="btn btn-sm btn-secondary"
                                data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-sm btn-outline-primary"
                                wire:click="increment">Proximo</button>
                        </div>
                    </div>
                @endif

                {{-- passo 2 --}}

                @if ($currentStep == 2)
                    <div class="card shadow-none border-0">
                        <div class="card-body">
                            <strong>Passo-{{ $currentStep }} de {{ $totalStep }} / Dados Empregaticio</strong>
                            <hr>
                            <form>
                                <div class="form-row mt-4">
                                    <div class="form-group col-md-3">
                                        <label class="mb-0">Matricula <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label class="mb-0">CTPS <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label class="mb-0">PIS <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>


                                    <div class="form-group col-md-3">
                                        <label class="mb-0">Data Admissão <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="date" class="form-control form-control-sm">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-0">Empresa <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <select id="empresa" class="form-control form-control-sm">
                                            <option selected disabled>...</option>
                                            <option>UPA São João</option>
                                            <option>UPA Cumbica</option>
                                            <option>P.A Maria Dirce</option>
                                            <option>HMCA</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label class="mb-0">Designação/Cargo <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <select id="cargo" class="form-control form-control-sm">
                                            <option selected disabled>...</option>
                                            <option>Enfermagem</option>
                                            <option>Serviço Social</option>
                                            <option>Administração</option>
                                            <option>Manutenção</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="departamento" class="mb-0">Departamento/Setor <span
                                                class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <select id="departamento" class="form-control form-control-sm">
                                            <option selected disabled>...</option>
                                            <option>Administração</option>
                                            <option>Serviço Social</option>
                                            <option>Administração</option>
                                            <option>Manutenção</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label class="mb-0">Salário <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label class="mb-0">Insalubre</label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label class="mb-0">Periculosidade</label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label class="mb-0">Escala <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <select id="cargo" class="form-control form-control-sm">
                                            <option selected disabled>...</option>
                                            <option>5x2</option>
                                            <option>12x36</option>
                                            <option>Plantonista</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label class="mb-0">Turno <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <select id="cargo" class="form-control form-control-sm">
                                            <option selected disabled>...</option>
                                            <option>Diurno</option>
                                            <option>Diurno A</option>
                                            <option>Diurno B</option>
                                            <option>Noturno </option>
                                            <option>Noturno A</option>
                                            <option>Noturno B</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label class="mb-0">Plantão</label>
                                        <select id="cargo" class="form-control form-control-sm">
                                            <option selected disabled>...</option>
                                            <option>Impar</option>
                                            <option>Par</option>
                                        </select>
                                    </div>

                                    <div class="form-group col">
                                        <label class="mb-0">Responsável <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="modal-footer py-1">
                            <button type="button" class="btn btn-sm btn-secondary"
                                data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary"
                                wire:click="decrement">Anterior</button>
                            <button type="button" class="btn btn-sm btn-outline-primary"
                                wire:click="increment">Próximo</button>
                        </div>
                    </div>
                @endif

                {{-- passo 3 --}}

                @if ($currentStep == 3)
                    <div class="card shadow-none border-0">
                        <div class="card-body">
                            <strong>Passo-{{ $currentStep }} de {{ $totalStep }} / Dados Bancário</strong>
                            <hr>
                            <form autocomplete="off">
                                <div class="form-row mt-4">
                                    <div class="form-group col-md-4">
                                        <label for="empresa" class="mb-0">Banco <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <select id="empresa" class="form-control form-control-sm">
                                            <option selected disabled>...</option>
                                            <option>001 - Banco do Brasil</option>
                                            <option>002 - Banco Bradesco</option>
                                            <option>003 - Banco Itaú</option>
                                            <option>004 - Banco Santander</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="ctps" class="mb-0">Agência <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="pis" class="mb-0">Conta Corrente <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer py-1">
                        <button type="button" class="btn btn-sm btn-secondary"
                            data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary"
                            wire:click="decrement">Anterior</button>
                        <button type="button" class="btn btn-sm btn-outline-primary"
                            wire:click="increment">Próximo</button>
                    </div>
                @endif

                {{-- passo 4 --}}

                @if ($currentStep == 4)
                    <div class="card shadow-none border-0">
                        <div class="card-body">
                            <strong>Passo-{{ $currentStep }} de {{ $totalStep }} / Dados dependentes</strong>
                            <hr>

                            <form>
                                <div class="form-row mt-4">
                                    <div class="form-group col-md-5">
                                        <label class="mb-0">Nome Completo <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label class="mb-0">Data Nascimento <span class="text-danger"
                                                title="campo obrigatório preencher">*</span></label>
                                        <input type="date" class="form-control form-control-sm">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label class="mb-0">Parentesco <span class="text-danger"
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
                                                        <i class="far fa-edit"></i>
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
                                                        <i class="fas fa-trash-alt text-danger"></i>
                                                    </a>
                                                    <a href="#"
                                                        class="btn btn-sm btn-link text-decoration-none py-0"
                                                        title="alterar">
                                                        <i class="far fa-edit"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            </form>


                        </div>
                        <div class="modal-footer py-1">
                            <button type="button" class="btn btn-sm btn-secondary"
                                data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary"
                                wire:click="decrement">Anterior</button>
                            <button type="button" class="btn btn-sm btn-outline-primary" wire:click="save">Salvar
                                informações</button>
                        </div>
                    </div>
                @endif



            </div>
        </div>
    </div>
</div>
