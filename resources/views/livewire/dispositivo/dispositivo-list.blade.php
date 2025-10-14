<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-md-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <form class="d-flex">
                    <input class="form-control me-4" type="search" name="search" placeholder="Buscar por Sensor"
                        aria-label="search" wire:model.live="search">
                    <button class="btn btn-outline-primary" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="shadow rounded-3 row mb-4">
            <div class="card-header d-flex justify-content-between align-items-center text-white"
                style="background-color: rgb(47, 75, 218)">
                <h5 class="mb-0">Sensores</h5>
                <a href="{{ route('sensor.create') }}" class="btn btn-light">
                    <i class="bi bi-plus-circle"></i>
                    Novo Sensor
                </a>
            </div>
        </div>

        <div class="card-body">
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Tipo</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($sensors as $sensor)
                            <tr>
                                <td>{{ $sensor->codigo }}</td>
                                <td>{{ $sensor->tipo }}</td>
                                <td class="align-middle">
                                    {{-- Exibe o status atual com base no valor numérico --}}
                                    <span class="badge {{ $sensor->status == 1 ? 'bg-success' : 'bg-secondary' }}">
                                        {{ $sensor->status == 1 ? 'Ativo' : 'Inativo' }}
                                    </span>
                                </td>
                                <td class="align-middle">
                                    {{-- Botão que alterna o status, com base no valor numérico --}}
                                    <button wire:click="toggleStatus({{ $sensor->id }})"
                                        class="btn btn-sm {{ $sensor->status == 1 ? 'btn-danger' : 'btn-success' }}">
                                        {{ $sensor->status == 1 ? 'Desativar' : 'Ativar' }}
                                    </button>

                                    <a href="{{ route('sensor.edit', $sensor->id) }}"
                                        class="btn btn-outline-primary btn-sm">
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                    <button wire:click="delete({{ $sensor->id }})"
                                        class="btn btn-outline-danger btn-sm"
                                        wire:confirm="Tem Certeza Que Deseja Excluir?">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Nenhum Sensor Encontrado</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                {{ $sensors->links() }}
            </div>
        </div>
    </div>
</div>
