<div>
    <div class="row pt-3">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex">
                    <h6 class="m-0">Lista de férias agendadas</h6>
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
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="card-body">
                    <h4>Formulário informções funcionário</h4>
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
                                aria-controls="custom-content-below-settings" aria-selected="false">Settings</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="custom-content-below-tabContent">
                        <div class="tab-pane fade active show" id="custom-content-below-home" role="tabpanel"
                            aria-labelledby="custom-content-below-home-tab">

                            <form>
                                <div class="form-group mt-5">
                                    <label for="cargo">Nome completo <span class="text-danger"
                                        title="campo obrigatório preencher">*</span></label>
                                    <input type="text" class="form-control form-control-sm" id="cargo"
                                        placeholder="Ex:. 0323211565">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="inputCity">Data Nascimento <span class="text-danger"
                                            title="campo obrigatório preencher">*</span></label>
                                        <input type="date" class="form-control form-control-sm" placeholder="01/05/1980">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="inputCity">CPF <span class="text-danger"
                                            title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm" placeholder="315156494898">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="inputZip">RG <span class="text-danger"
                                            title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm" placeholder="12315616546">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputState">Sexo <span class="text-danger"
                                            title="campo obrigatório preencher">*</span></label>
                                        <select id="inputState" class="form-control form-control-sm">
                                            <option selected>Selecione...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="inputCity">CEP <span class="text-danger"
                                            title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm" placeholder="00000-000">
                                    </div>

                                    <div class="form-group col-md-8">
                                        <label for="inputCity">Logradouro <span class="text-danger"
                                            title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Rua palace">
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
                                        <input type="text" class="form-control form-control-sm" placeholder="00000-000">
                                    </div>

                                    <div class="form-group col-md-5">
                                        <label for="inputCity">Municipio <span class="text-danger"
                                            title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Rua palace">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Estado <span class="text-danger"
                                            title="campo obrigatório preencher">*</span></label>
                                        <input type="text" class="form-control form-control-sm" placeholder="146">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="area_descricao">Observação</label>
                                    <textarea class="form-control" id="area_descricao" rows="4"></textarea>
                                </div>
                            </form>

                        </div>
                        <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel"
                            aria-labelledby="custom-content-below-profile-tab">
                            Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut
                            ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                            cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis
                            posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere
                            nec nunc. Nunc euismod pellentesque diam.
                        </div>
                        <div class="tab-pane fade" id="custom-content-below-messages" role="tabpanel"
                            aria-labelledby="custom-content-below-messages-tab">
                            Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat
                            augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit
                            sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut
                            velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus
                            tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet
                            sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum
                            gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt
                            eleifend ac ornare magna.
                        </div>
                        <div class="tab-pane fade" id="custom-content-below-settings" role="tabpanel"
                            aria-labelledby="custom-content-below-settings-tab">
                            Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus
                            turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis
                            vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum
                            pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet
                            urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse
                            platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                        </div>
                    </div>
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
