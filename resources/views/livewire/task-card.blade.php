<div>
    <li wire:click="toggleModal"
        class="card-task p-1 rounded-2xl group flex justify-between w-[18.75rem] h-[12rem]  items-center cursor-pointer hover:scale-105 transition-all duration-300 ease-linear">
        <div class="w-full h-full border border-dashed shadow card bg-base-100 border-slate-700 shadow-slate-700">
            <div class="card-body">
                <h2 class="card-title">
                    <div class="badge badge-secondary">{{ $this->task->service_name }}</div>
                </h2>
                <p class="text-sm text-slate-400/90">{{ $this->task->title }}</p>
                <div class="card-actions">
                    <div class="flex items-center justify-between flex-1">
                        <div class="flex items-center">
                            <span class="text-xs">
                                {{ $task->created_at->diffForHumans() }}
                                <i class="ri-calendar-todo-line"></i>
                            </span>
                        </div>
                        <div class="flex items-center justify-between gap-4">
                            <span class="flex gap-1 text-slate-500">
                                1
                                <i class="ri-attachment-line"></i>
                            </span>
                            <span class="flex gap-1 text-slate-500">
                                <i class="ri-chat-1-line"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>

    <x-ui.modal>
        <h1>{{ $task->title }}</h1>
    </x-ui.modal>

</div>
