<div x-data="{ showModal: @entangle('modal') }" x-show="showModal">
    <dialog x-ref="modal"
        class="fixed inset-0 z-50 flex flex-col w-full max-w-md gap-6 p-8 text-white border rounded-lg shadow-lg">
        <div>
            <button class="btn btn-ghost transition duration-300 ease-in-out p-[8px] rounded-md"
                wire:click="$set('modal', false)">
                <i class="ri-close-line"></i>
            </button>
        </div>
        <div class="flex flex-col gap-6">
            {{ $slot }}
        </div>
    </dialog>
    <!-- Background Blur Overlay -->
    <div x-show="showModal" class="fixed inset-0 z-40 bg-black bg-opacity-50 backdrop-blur-sm"></div>
</div>
