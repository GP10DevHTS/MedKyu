<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

    <x-button title="delete this role" wire:click="confirmDelete" class="bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-200 dark:focus:ring-red-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">
        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
        </svg>
    </x-button>

    <x-dialog-modal wire:model="isModalOpen"  >
        <x-slot name="title">
            Confirm Delete
        </x-slot>
        <x-slot name="content">
            <p class="text-red-600 font-bold">Warning: Deleting this role will have irreversible consequences. This action cannot be undone.</p>
            <p class="text-red-600 font-bold">Please confirm with App Key</p>
            <input type="password" wire:model="password" placeholder="Enter your password" class="mt-2 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:ring focus:border-blue-300 dark:bg-gray-800 dark:text-white">
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click='closeModal' wire:loading.attr="disabled">
                Nevermind
            </x-secondary-button>
            <x-button mode="delete" wire:click="deleteRole" wire:loading.attr="disabled">
                Delete
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
