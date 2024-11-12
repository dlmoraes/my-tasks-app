<div class='flex flex-col gap-4 mt-16 max-sm:w-full max-xs:w-full'>
    <span class="text-xl font-semibold">Fale aí o que você quer...</span>

    <div class="flex items-center justify-center w-[32rem] max-sm:w-full max-xs:w-full">
        <label class="flex items-center w-full gap-2 group input input-bordered input-primary">
            <input wire:loading.attr="disabled" wire:model='search' type="text" class="grow"
                wire:keydown.enter="loadServices"
                placeholder="Digita aqui e tecle Enter, que já te mostro as opções..." />
            <i class="group-focus-within:text-primary ri-search-2-line"></i>
        </label>
    </div>


    <div class="flex justify-center">
        <div wire:loading class="loader-animate">
        </div>
    </div>

    <div
        class="relative {{ count($this->services) ? 'show-element' : 'hidden-element' }} transition-all duration-300 ease-linear">
        <div class="absolute flex flex-col gap-4 top-10">
            <div class="flex items-center justify-center">
                <h1 class="font-medium">O que encontrei...</h1>
            </div>
            <div class="h-[15rem] border border-primary rounded-box overflow-y-auto">
                <div class="flex items-center justify-center w-[40rem]">
                    <ul class="menu mb-6 bg-base-100 z-[1] w-full p-2 gap-3">
                        @foreach ($this->services as $service)
                            <li>
                                <a href="{{ route('task.create', $service) }}">
                                    <i class="ri-links-line"></i>
                                    <span>{{ $service->name }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
