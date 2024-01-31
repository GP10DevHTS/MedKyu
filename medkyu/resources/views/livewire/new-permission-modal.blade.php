<div>
    {{-- Be like water. --}}
    <x-button class="float-right" wire:click="openModal()" title="Add new permission">Add new permission</x-button>

    <x-dialog-modal wire:model="isModalOpen">
        <x-slot name="title">
            Add New Permission
        </x-slot>
        <x-slot name="content">
            <div>
                <x-label for="newPermissionName" :value="__('New Permission Name')" />
                <x-input id="newPermissionName" class="block mt-1 w-full" type="text" wire:model.defer="newPermissionName" autofocus />
                <x-input-error for="newPermissionName" class="mt-2" />
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-button class="mr-2" wire:click="createPermission" title="Save changes">Save</x-button>
            <x-button wire:click="closeModal" title="Cancel">Cancel</x-button>
        </x-slot>
    </x-dialog-modal>
</div>
