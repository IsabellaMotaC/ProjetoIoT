<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-md-4">

            <div class="d-flex justify-content-between align-items-center mb-3 ">

                <form class="d-flex">

                    <input class="form-control me-4 " type="search" name="search" placeholder="Buscar por Sensor"
                        aria-label="search " wire:model.live="search">

                    <button class="btn btn-outline-primary" type="submit">Buscar</button>

                </form>
            </div>
        </div>

        <div class="card">

            <div class="shadow rounded-3 row mb-4">

                <div class="card-header d-flex justify-content-between alingn-items-center text-white"
                    style="background-color: rgb(0, 0, 0)">

                    <h5 class="mb-0">Sensores</h5>

                    <a href="{{ route('sensor.create') }}" class="btn btn-primary btn-sm">

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
                                <th>ID</th>
                                <th>Código</th>
                                <th>Tipo</th>
                                <th>Status</th>
                                <th>Descrição</th>
                                <th>Status</th>

                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse($sensor as $s)
                                <tr>
                                    <td>{{ $s->id }}</td>
                                    <td>{{ $s->descricao }}</td>
                                    <td>{{ $s->status }}</td>

                                    <td>

                                        <a href="{{ route('sensor.edit', $s->id) }}" class="btn btn-sm btn-warning">
                                            <i class="bi bi-pencil"></i>
                                        </a>



                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Nenhum sensor encontrado.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

               
            </div>

        </div>