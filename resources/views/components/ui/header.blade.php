<header class="flex items-center justify-between px-6 py-4">
    <a href="{{ route('home') }}" class="text-2xl font-medium cursor-pointer">My<span class="font-bold">Tasks</span>
    </a>

    <div class="flex items-center gap-6">
        <a href="{{ route('task.index') }}" class="flex items-center gap-2 hover:font-semibold">
            <i class="ri-kanban-view"></i>
            Quadro de Tarefas
        </a>
    </div>

    <x-ui.avatar srcImg='https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp' />
</header>
