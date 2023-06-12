<div>
    <div class="row pt-3">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-between">
                        <div class="col-sm-12 col-md-6">
                            <h6 class="m-0">Departamento | Lista</h6>                    
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <a href="#" class="btn btn-sm btn-link text-decoration-none py-0 float-right" data-toggle="modal"
                                data-target="#create" title="novo departamento">
                                <i class="fas fa-plus"></i>
                            </a>
                        </div>
                        <x-search />
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table-sm table table-striped table-hover mb-2">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Centro de custo</th>
                                <th>Situação</th>
                                <th>Ações disponíveis</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $dep)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="text-bold">{{ $dep->departamento_nome }}</td>
                                <td>{{ $dep->custo }}</td>
                                <td><span class="pt-1 badge badge-{{ $dep->situacao == 'ATIVO' ? 'success': 'danger' }}">{{ $dep->situacao }}</span></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#" wire:click="$emit('deleteConfirm',{{ $dep->id }})" class="btn btn-sm btn-link text-decoration-none py-0"
                                            title="exlcuir">
                                            <i class="fas fa-trash-alt text-danger"></i>
                                        </a>
                                        <a href="#" wire:click="$emit('edit',{{ $dep->id }})"
                                            class="btn btn-sm btn-link text-decoration-none py-0" title="alterar">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row justify-content-center">
                        {{ $data->links() }}
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
