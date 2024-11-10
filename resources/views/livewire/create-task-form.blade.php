<div class="flex flex-col gap-6">
    <h1 class="text-xl font-semibold">Detalhes da nova tarefa</h1>

    <form wire:submit='save' class="px-32 space-y-2">
        <h3 class="text-sm text-pretty">Você está criando uma tarefa, para o serviço: <span
                class="font-bold">{{ $service->name }}</span></h3>

        <div class="form-control">
            <span class="label">Empresas</span>
            <div class="flex items-center gap-6">
                @foreach (\App\CompanyEnum::cases() as $company)
                    <label class="gap-2 cursor-pointer label">
                        <span class="label-text">{{ $company->value }}</span>
                        <input type="checkbox" wire:model="companies.{{ $company->value }}"
                            value="{{ $company->value }}" class="checkbox checkbox-primary" />
                    </label>
                @endforeach
            </div>
            @error('companies')
                <span class="text-error"><strong>Erro!</strong> Selecione ao menos uma empresa!</span>
            @enderror
            <span class="text-xs label">Marque as empresas que você gostaria que a gente atendesse nesse chamado.</span>
        </div>

        <label class="form-control">
            <div class="label">
                <span class="label-text">Título da tarefa</span>
            </div>
            <input wire:loading.attr="disabled" wire:model='title' type="text" placeholder="Título"
                class="input input-bordered input-primary" required />
        </label>

        <label class="form-control">
            <div class="label">
                <span class="label-text">Descrição</span>
            </div>
            <textarea wire:loading.attr="disabled" wire:model='description' class="textarea textarea-bordered textarea-primary"
                placeholder="Descrição da tarefa" rows="6" required></textarea>
            <div class="label">
                <span class="label-text-alt">Quanto maior o nível de detalhe na descrição, melhor!</span>
            </div>
        </label>



        <div class="flex justify-end gap-6">
            <a href="{{ route('home') }}" class="btn btn-outline">Voltar</a>
            <button type='submit' class="btn btn-outline btn-primary">
                Salvar
                <i class="ri-send-plane-2-line"></i>
            </button>
        </div>
    </form>
</div>
