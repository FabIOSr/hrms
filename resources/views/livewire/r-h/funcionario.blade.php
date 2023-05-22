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
                                        <a href="#" class="btn btn-sm btn-link text-decoration-none py-0"
                                            data-toggle="modal" data-target="#information">
                                            <i class="fas fa-info-circle"></i>
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
                                        <a href="javascript:void()"
                                            class="btn btn-sm btn-link text-decoration-none py-0" title="alterar"
                                            data-bs-toggle="modal" data-bs-target="#information">
                                            <i class="fas fa-info-circle"></i>
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
                                        <label for="inputCity" class="mb-0">Data Nascimento <span
                                                class="text-danger"
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


    <div class="modal fade" id="information3" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="card-body p-0">
                    <div class="invoice p-3 mb-3">

                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    <i class="fas fa-globe"></i> AdminLTE, Inc.
                                    <small class="float-right">Date: {{ date('d/m/Y') }}</small>
                                </h4>
                            </div>

                        </div>

                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                Dados Pessoais
                                <address>
                                    <strong>Jhon Doe</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    Telefone: (11) 12314-5432<br>
                                    Email: info@almasaeedstudio.com
                                </address>
                            </div>

                            <div class="col-sm-4 invoice-col">
                                <strong>Dados empregatícios</strong>
                                <address>
                                    <strong>Técnico de enfermagem</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    Phone: (555) 539-1037<br>
                                    Email: john.doe@example.com
                                </address>
                            </div>

                            <div class="col-sm-4 invoice-col">
                                <b>Matricula #007612</b><br>
                                <br>
                                <b>Admissão:</b> 2/22/2014<br>
                                <b>Account:</b> 968-34567
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-6 table-responsive">
                                <table class="table table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Data Nasc</th>
                                            <th>Idade</th>
                                            <th>Parentesco</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Call of Duty</td>
                                            <td>455-981-221</td>
                                            <td>1</td>
                                            <td>El snort testosterone</td>
                                        </tr>
                                        <tr>
                                            <td>Need for Speed IV</td>
                                            <td>247-925-726</td>
                                            <td>1</td>
                                            <td>Wes Anderson umami biodiesel</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="col-6 table-responsive">
                                <table class="table table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th>Periodo</th>
                                            <th>Situação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>18/12/2023 a 15/01/2024</td>
                                            <td>A vencer</td>
                                        </tr>
                                        <tr>
                                            <td>1/01/2023 a 01/02/2023</td>
                                            <td>Retirado</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-6">
                                <p class="lead">Observação:</p>
                                <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya
                                    handango imeem
                                    plugg
                                    dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                                </p>
                            </div>

                            <div class="col-6">
                                <p class="lead">Amount Due 2/22/2014</p>
                                <div class="table-responsive">
                                    <table class="table table-sm">
                                        <tbody>
                                            <tr>
                                                <th style="width:50%">Subtotal:</th>
                                                <td>$250.30</td>
                                            </tr>
                                            <tr>
                                                <th>Tax (9.3%)</th>
                                                <td>$10.34</td>
                                            </tr>
                                            <tr>
                                                <th>Shipping:</th>
                                                <td>$5.80</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>


                        <div class="row no-print">
                            <div class="col-12">
                                <a href="invoice-print.html" rel="noopener" target="_blank"
                                    class="btn btn-primary float-right"><i class="fas fa-print"></i> Print</a>
                                <button type="button" class="btn btn-secondary float-right" data-dismiss="modal"
                                    style="margin-right: 5px;">
                                    <i class="fas fa-signout"></i> Sair
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- teste --}}
    <div class="modal fade" id="information" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                
                <div class="card">
                    <div class="card-header d-flex p-0">
                        <h3 class="card-title p-3">Formulario de cadastro</h3>
                        <ul class="nav nav-pills ml-auto p-2">
                            <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Dados Pessoais</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Dados Empregaticios</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Dados Bancários</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                                    Dropdown <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" tabindex="-1" href="#">Dependentes</a>
                                    <a class="dropdown-item" tabindex="-1" href="#">Férias</a>
                                    <a class="dropdown-item" tabindex="-1" href="#">Advertências</a>
                                    <a class="dropdown-item" tabindex="-1" href="#">Atestados</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" tabindex="-1" href="#" data-dismiss="modal">Cancelar</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">
                                A wonderful serenity has taken possession of my entire soul,
                                like these sweet mornings of spring which I enjoy with my whole heart.
                                I am alone, and feel the charm of existence in this spot,
                                which was created for the bliss of souls like mine. I am so happy,
                                my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                                that I neglect my talents. I should be incapable of drawing a single stroke
                                at the present moment; and yet I feel that I never was a greater artist than now.
                            </div>
            
                            <div class="tab-pane" id="tab_2">
                                The European languages are members of the same family. Their separate existence is a myth.
                                For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                                in their grammar, their pronunciation and their most common words. Everyone realizes why a
                                new common language would be desirable: one could refuse to pay expensive translators. To
                                achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                                words. If several languages coalesce, the grammar of the resulting language is more simple
                                and regular than that of the individual languages.
                            </div>
            
                            <div class="tab-pane" id="tab_3">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                It has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                                like Aldus PageMaker including versions of Lorem Ipsum.
                            </div>
            
                        </div>
            
                    </div>
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
