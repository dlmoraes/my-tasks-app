@props(['task'])
<x-ui.modal :title="$task->title">
    <div class="-mt-6 font-semibold text-md">
        Situação: {{ \App\TaskStatus::getDescription('open') }}
    </div>
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
            <p class="text-sm">
                {{ $task->description }}
            </p>
        </section>
        <div class="w-full h-[1px] bg-slate-800"></div>
    </div>
</x-ui.modal>
