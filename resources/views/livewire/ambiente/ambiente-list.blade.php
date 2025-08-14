<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-md-4">

            <div class="d-flex justify-content-between align-items-center mb-3 ">

                <form class="d-flex">

                    <input class="form-control me-4 " type="search" name="search" placeholder="Buscar por Ambiente"
                        aria-label="search " wire:model.live="search">

                    <button class="btn btn-outline-primary" type="submit">Buscar</button>

                </form>
            </div>
        </div>

        <div class="card">

            <div class="shadow rounded-3 row mb-4">

                <div class="card-header d-flex justify-content-between alingn-items-center text-white"
                    style="background-color: rgb(0, 0, 0)">

                    <h5 class="mb-0">Ambientes</h5>

                    <a href="{{ route('ambiente.create') }}" class="btn btn-primary btn-sm">

                        <i class="bi bi-plus-circle"></i>

                        Novo Ambiente

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
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Status</th>

                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse($ambientes as $ambiente)
                                <tr>
                                    <td>{{ $ambiente->nome }}</td>
                                    <td>{{ $ambiente->descricao }}</td>
                                    <td>{{ $ambiente->status }}</td>

                                    <td>

                                        <a href="{{ route('ambiente.edit', $ambiente->id) }}" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil"></i>
                                        </a>



                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Nenhum ambiente encontrado.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-3">
                    {{ $ambientes->links() }}
                </div>
            </div>

        </div>
