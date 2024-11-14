<div class="flex flex-col">
    <h1 class="pb-4 -mt-1 space-x-2 text-2xl font-medium">
        <i class="ri-kanban-view"></i>
        Quadro de tarefas
    </h1>

    <div
        class="flex items-start justify-between p-4 overflow-auto border border-dashed max-xs:gap-8 xs:gap-8 bg-base-300 rounded-2xl border-slate-800">
        <div class="flex flex-col gap-6">
            <header class="flex items-center justify-between">
                <h3 class="text-xl font-semibold">Na fila</h3>
                <button type="button" class="btn btn-sm btn-ghost">
                    <i class="text-xl ri-add-circle-line"></i>
                </button>
            </header>
            <ul id="group-items-1" class="flex flex-col gap-6">
                @foreach ($this->tasks as $task)
                    @if ($task->status->value == 'open')
                        <x-ui.tasks.card :task="$task" />
                    @endif
                @endforeach
            </ul>
        </div>

        <div class="flex flex-col gap-6">
            <header class="flex items-center justify-between">
                <h3 class="text-xl font-semibold">Em Andamento</h3>
                <button type="button" class="btn btn-sm btn-ghost">
                    <i class="text-xl ri-add-circle-line"></i>
                </button>
            </header>
            <ul id="group-items-2" class="flex flex-col gap-6">
                @foreach ($this->tasks as $task)
                    @if ($task->status->value == 'in-progress')
                        <x-ui.tasks.card :task="$task" />
                    @endif
                @endforeach
            </ul>
        </div>

        <div class="flex flex-col gap-6">
            <header class="flex items-center justify-between">
                <h3 class="text-xl font-semibold">Finalizado</h3>
                <button type="button" class="btn btn-sm btn-ghost">
                    <i class="text-xl ri-add-circle-line"></i>
                </button>
            </header>
            <ul id="group-items-3" class="flex flex-col gap-6">
                @foreach ($this->tasks as $task)
                    @if ($task->status->value == 'closed')
                        <x-ui.tasks.card :task="$task" />
                    @endif
                @endforeach
            </ul>

        </div>
    </div>

    <x-ui.modal>
        @if ($this->taskSelected)
            <h1>{{ $this->taskSelected->title }}</h1>
        @endif
    </x-ui.modal>
</div>
