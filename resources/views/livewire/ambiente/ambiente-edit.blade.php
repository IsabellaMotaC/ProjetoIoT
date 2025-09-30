<div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body class="text-bg-secondary p-3">

        <div class="container d-flex justify-content-center" style="width: 39%">
            <div class="row">

                <div class="row">


                    <div class="row align-items-center">

                        <div class="col">
                            <div class="card  bor" style="width: 30rem;" class="mb-10">
                                <div class="card-body">
                                    @if (session()->has('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dimiss="alert"
                                                aria-label="close"></button>
                                        </div>
                                    @endif
                                    <div class="card text-bg-secondary p-3">
                                        <h5 class="card-header  text-center">Editar Ambiente</h5>
                                        <div class="card-body">
                                            <div class="container mt-5">
                                                <div class="card shadow-sm">

                                                    <div class="card-body">


                                                        <div class="mb-3">
                                                            <form wire:submit.prevent="salvar">

                                                                <label for="codigo">Nome:</label>
                                                                <input type="text" class="form-control"
                                                                    id="nome" nome="nome"
                                                                    placeholder="Ex.: Sala de Aula"
                                                                    wire:model.defer="nome">
                                                                @error('nome')
                                                                    <span
                                                                        class="text-danger small">{{ $message }}</span>
                                                                @enderror
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="descricao">Descrição:</label>
                                                            <input type="text" class="form-control" id="descricao"
                                                                nome="descricao" placeholder="Ex.: Teste"
                                                                wire:model.defer="descricao">
                                                            @error('descricao')
                                                                <span class="text-danger small">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label fw-bold">status</label>
                                                            <select class="form-select" wire:model.defer="status">
                                                                <option selected>EX:</option>
                                                                <option value="1">ativo</option>
                                                                <option value="0">inativo</option>
                                                            </select>

                                                        </div>

                                                        <div>
                                                            <button type="submit"
                                                                class="btn btn-primary">Atualizar</button>
                                                            <a href="{{ route('ambiente.index') }}"
                                                                class="btn btn-danger">Cancelar</a>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
                </script>
    </body>

</div>
</div>
</div>
