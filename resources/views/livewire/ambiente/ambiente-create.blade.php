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
                                        <h5 class="card-header  text-center">Cadastro de Ambiente</h5>
                                        <div class="card-body">
                                            <form wire:submit.prevent="store">
                                                <div class="mb-3">
                                                    <label for="nome" class="form-label">Nome</label>

                                                    <input type="text" class="form-control" id="nome"
                                                        nome="nome" placeholder="Ex.: Nome" wire:model.defer="nome">

                                                    @error('nome')
                                                        <span class="text-danger small">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                                <div class="mb-3">
                                                    <label for="descricao">Descrição</label>
                                                    <input type="text" class="form-control" id="descricao"
                                                        nome="cpf" placeholder="Ex.: Descrição"
                                                        wire:model.defer="descricao">

                                                    @error('descricao')
                                                        <span class="text-danger small">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
                                                    <label class="form-check-label" for="radioDefault1">
                                                      Ativo
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2" checked>
                                                    <label class="form-check-label" for="radioDefault2">
                                                      Inativo
                                                    </label>
                                                  </div>

                                                <div class="mb-3">
                                                    <button type="submit" class="btn btn-success">Cadastrar</button>
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

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
                </script>
    </body>
</div>
</div>
</div>
