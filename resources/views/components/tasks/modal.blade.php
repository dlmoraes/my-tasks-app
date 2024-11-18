@props(['task'])
<x-ui.modal :title="$task->title">
    <div class="flex flex-col gap-4">
        <div class="task-actions-modal">
            <div class="flex flex-col items-center w-full gap-6 -mt-3">
                <h1 class="text-slate-300">Ações</h1>
                <div class="flex flex-col items-center w-full gap-6">
                    <button type="button" class="btn btn-outline btn-sm">
                        <i class="ri-pencil-line"></i>
                        Editar
                    </button>
                    <button type="button" class="btn btn-outline btn-sm">
                        <i class="ri-attachment-line"></i>
                        Anexar
                    </button>
                    <button type="button" class="btn btn-outline btn-sm">
                        <i class="ri-calendar-schedule-line"></i>
                        Prazos
                    </button>
                    <button type="button" class="btn btn-outline btn-sm">
                        <i class="ri-play-line"></i>
                        Iniciar
                    </button>
                </div>
            </div>
        </div>
        <section id="users_by" class="grid items-center grid-cols-3 text-sm">
            <span class="font-semibold ">
                Situação: {{ \App\TaskStatus::getDescription('open') }}
            </span>
            <span>
                Criado Por: {{ $task->created_by }}
            </span>
            <span>
                Responsável: {{ $task->responsible_by_service }}
            </span>
        </section>
        <div class="w-full h-[1px] bg-slate-800"></div>
        <div class="flex flex-col gap-4">
            <section id="task-dates" class="grid grid-cols-3">
                <div class="flex items-center gap-2">
                    <span class="text-sm">
                        <i class="ri-calendar-todo-line"></i>
                        Criado em:
                        {{ \Carbon\Carbon::parse($task->created_at)->diffForHumans() }}
                    </span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-sm">
                        <i class="ri-calendar-todo-line"></i>
                        Prazo em:
                        {{ $task->ends_at ? \Carbon\Carbon::parse($task->ends_at)->diffForHumans() : 'Não definido' }}
                    </span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-sm">
                        <i class="ri-calendar-todo-line"></i>
                        Concluído em:
                        {{ $task->closed_on ? \Carbon\Carbon::parse($task->closed_on)->diffForHumans() : 'Não definido' }}
                    </span>
                </div>
            </section>
            <div class="w-full h-[1px] bg-slate-800"></div>
            <section id="task-companies" class="flex items-center gap-3">
                <div class="flex items-center gap-2">
                    <span class="text-sm">
                        <i class="ri-briefcase-line"></i>
                        Empresas:
                        {{ implode(', ', json_decode($task->companies)) }}

                    </span>
                </div>
            </section>
            <div class="w-full h-[1px] bg-slate-800"></div>
            <section id="task-description" class="space-y-4">
                <h1 class="text-xl font-medium">
                    <i class="ri-quote-text"></i>
                    Descrição
                </h1>
                <p class="overflow-auto text-sm h-28">
                    {{ $task->description }}
                </p>
            </section>
            <div class="w-full h-[1px] bg-slate-800"></div>
            <section id="task-comments" class="space-y-4">
                <h1 class="text-xl font-medium">
                    <i class="ri-chat-1-line"></i>
                    Comentários
                </h1>
                <button class="btn btn-outline" type="button">Carregar comentários...</button>
            </section>
        </div>
    </div>
</x-ui.modal>
