<div>
    @section('title', 'Departamentos')
    {{-- @push('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Departamento</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    @endpush --}}

    <div class="row pt-3">
        <div class="col">
            <div class="card">
                <div class="card-header d-flex">
                    <h6 class="m-0">Lista de departamento</h6>
                    <a href="#" class="btn btn-sm btn-link text-decoration-none py-0 float-right" data-toggle="modal"
                        data-target="#departamento" title="novo departamento">
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
                                <td>Administração</td>
                                <td>02126156166</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn-link text-decoration-none py-0"
                                            title="exlcuir">
                                            <i class="fas fa-trash text-danger"></i>
                                        </a>
                                        <a href="#" wire:click="alterarDepartamento(1)"
                                            class="btn btn-sm btn-link text-decoration-none py-0" title="alterar">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Assistência de Enfermagem</td>
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

    <div class="modal fade" id="departamento" data-backdrop="static" data-keyboard="false" tabindex="-1"
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
                            <input type="email" class="form-control form-control-sm" id="nome_departamento"
                                placeholder="Ex:. Administração">
                        </div>
                        <div class="form-group">
                            <label for="nome_departamento">Centro de Custo</label>
                            <input type="email" class="form-control form-control-sm" id="nome_departamento"
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
</div>

@push('_js')
    <script>
        window.addEventListener('closeModal', e => {
            $('#departamento').modal('hide');
        })
        window.addEventListener('updateModal', e => {
            $('#departamento').modal('show');
        })
    </script>
@endpush
