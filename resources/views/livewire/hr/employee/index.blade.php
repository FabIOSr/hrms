<div>
    <div class="row pt-3">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex">
                    <h6 class="m-0">Lista de colaboradores</h6>
                    <a href="#" class="btn btn-sm btn-link text-decoration-none py-0 float-right" data-toggle="modal"
                        data-target="#create_employee" title="agendar ferias">
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
                                            <i class="fas fa-trash-alt text-danger"></i>
                                        </a>
                                        <a href="#" wire:click="edit(1)"
                                            class="btn btn-sm btn-link text-decoration-none py-0" title="alterar">
                                            <i class="fas fa-edit"></i>
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
                                            <i class="fas fa-trash-alt text-danger"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-link text-decoration-none py-0"
                                            title="alterar">
                                            <i class="fas fa-edit"></i>
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
    </div>
</div>
