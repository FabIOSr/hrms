<div>
    <div class="row pt-3">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-between">
                        
                        <div class="col-sm-12 col-md-6">
                            <h6 class="m-0">Escala | Lista</h6>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <a href="#" class="btn btn-sm btn-link text-decoration-none py-0 float-right" data-toggle="modal"
                                data-target="#journey_create">
                                <i class="fas fa-plus"></i>
                            </a>
                        </div>                        
                        <x-search />
                        
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="responsive">
                        <table class="table-sm table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tipo</th>
                                <th>C.H.S</th>
                                <th>C.H.M</th>
                                <th>Situação</th>
                                <th>Ações disponíveis</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jornada as $j)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $j->jornada }}</td>
                                <td>{{ $j->carga_horaria_semanal }}</td>
                                <td>{{ $j->carga_horaria_mensal }}</td>
                                <td>{{ strtoupper($j->situacao) }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#"  wire:click="$emit('deleteConfirm',{{ $j->id }})" class="btn btn-sm btn-link text-decoration-none py-0"
                                            title="exlcuir">
                                            <i class="fas fa-trash-alt text-danger"></i>
                                        </a>
                                        <a href="#" wire:click="edit(1)"
                                            class="btn btn-sm btn-link text-decoration-none py-0" title="alterar">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
