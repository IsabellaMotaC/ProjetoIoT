<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-warning text-white">
            <h4 class="mb-0">Editar Ambiente</h4>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="update">
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" wire:model.defer="nome">
                </div>
                <div class="mb-3">
                    <label class="form-label">Descrição</label>
                    <input type="text" class="form-control" wire:model.defer="descricao">
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <input type="text" class="form-control" wire:model.defer="status">
                </div>
               
                <button class="btn btn-primary">Atualizar</button>
                <a href="{{ route('ambiente.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</div>
