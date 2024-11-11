<div class="flex flex-col">
    <h1 class="text-2xl font-medium -mt-1 space-x-2">
        <i class="ri-kanban-view"></i>
        Quadro de tarefas
    </h1>
    <div class="flex justify-between items-start bg-base-300 p-4 rounded-2xl border border-dashed border-slate-800">
        <div class="flex flex-col gap-6">
            <header class="flex items-center justify-between">
                <h3 class="text-xl font-semibold">Na fila</h3>
                <button type="button" class="btn btn-sm btn-ghost">
                    <i class="ri-add-circle-line text-xl"></i>
                </button>
            </header>
            <ul id="group-items-1" class="flex flex-col gap-6">
                <x-ui.tasks.card />
                <x-ui.tasks.card />
                <x-ui.tasks.card />
            </ul>
        </div>

        <div class="flex flex-col gap-6">
            <header class="flex items-center justify-between">
                <h3 class="text-xl font-semibold">Em Andamento</h3>
                <button type="button" class="btn btn-sm btn-ghost">
                    <i class="ri-add-circle-line text-xl"></i>
                </button>
            </header>
            <ul id="group-items-2" class="flex flex-col gap-6">
                <x-ui.tasks.card />
                <x-ui.tasks.card />
                <x-ui.tasks.card />
            </ul>
        </div>

        <div class="flex flex-col gap-6">
            <header class="flex items-center justify-between">
                <h3 class="text-xl font-semibold">Finalizado</h3>
                <button type="button" class="btn btn-sm btn-ghost">
                    <i class="ri-add-circle-line text-xl"></i>
                </button>
            </header>
            <ul id="group-items-3" class="flex flex-col gap-6">
                <x-ui.tasks.card />
                <x-ui.tasks.card />
                <x-ui.tasks.card />
            </ul>

        </div>
    </div>
</div>
