<!-- resources/views/livewire/view-permission.blade.php -->

<div>
    <button wire:click="openModal()">Edit</button>

    <x-dialog-modal wire:model="isModalOpen">
        <x-slot name="title">
            Edit Permission
        </x-slot>
        <x-slot name="content">
            <p class="text-red-600 font-bold">Warning: Editing this permission will have irreversible consequences. This action cannot be undone.</p>
            
            <div>
                <label for="newPermissionName">New Permission Name</label>
                <input type="text" wire:model.defer="newPermissionName" id="newPermissionName">
                @error('newPermissionName') <span>{{ $message }}</span> @enderror
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-button wire:click="updatePermission" title="Save changes">Save</x-button>
            <x-button wire:click="closeModal" title="Cancel">Cancel</x-button>
        </x-slot>
    </x-dialog-modal>
</div>
