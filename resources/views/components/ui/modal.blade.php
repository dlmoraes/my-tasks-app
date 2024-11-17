@props(['title'])
<div x-data="{ showModal: @entangle('modal') }" x-show="showModal">
    <dialog x-ref="modal"
        class="fixed inset-0 z-50 flex flex-col w-full max-w-screen-lg gap-6 p-8 border border-dashed rounded-lg shadow-lg border-slate-500">
        <div class="flex items-center justify-between">
            <h1 class="text-xl">
                <i class="ri-layout-horizontal-line"></i>
                {{ $title }}
            </h1>
            <button class="btn btn-ghost transition duration-300 ease-in-out p-[8px] rounded-md"
                wire:click="$set('modal', false)">
                <i class="text-xl ri-close-line"></i>
            </button>
        </div>
        {{ $slot }}
    </dialog>
    <!-- Background Blur Overlay -->
    <div x-show="showModal" class="fixed inset-0 z-40 bg-black bg-opacity-50 backdrop-blur-sm"></div>
</div>
