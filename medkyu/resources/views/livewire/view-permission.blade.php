<!-- resources/views/livewire/view-permission.blade.php -->

<div>
    <button wire:click="openModal() " class="py-2 px-4 text-md text-blue-500 hover:bg-gray-100 dark:hover: dark:text-gray-200 dark:hover:text-white border-2 border-blue-500 rounded">Edit</button>

    <x-dialog-modal wire:model="isModalOpen">
        <x-slot name="title">
            Edit Permission
        </x-slot>
        <x-slot name="content">
            <p class="text-red-600 font-bold">Warning: Editing this permission will have irreversible consequences. This action cannot be undone.</p>
            
            <div>
            <x-label for="newPermissionName" :value="__('New Permission Name')" />
            <x-input id="newPermissionName" class="block mt-1 w-full" type="text" wire:model.defer="newPermissionName" autofocus />
            <x-input-error for="newPermissionName" class="mt-2" />
            </div>

        </x-slot>
        <x-slot name="footer">
            <x-button class="mr-2" wire:click="updatePermission" title="Save changes">Save</x-button>
            <x-button wire:click="closeModal" title="Cancel">Cancel</x-button>
        </x-slot>
    </x-dialog-modal>
</div>
