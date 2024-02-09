<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <x-button class="float-right" wire:click="openModal()" title="Add new permission">Add New Role</x-button>

    <x-dialog-modal wire:model="isModalOpen">
        <x-slot name="title">
            Add New Role
        </x-slot>
        <x-slot name="content">
            <div>
                <x-label for="newRoleName" :value="__('New Role Name')" />
                <x-input id="newRoleName" class="block mt-1 w-full" type="text" wire:model.defer="newRoleName" autofocus />
                <x-input-error for="newRoleName" class="mt-2" />
            </div>
            {{-- <div>
                <h2 class="text-lg font-bold">This role can</h2>
            </div> --}}
            {{-- <div>
                @forelse ($allPermissions as $permission)
                    
                    <div class="flex space-x-2">
                        <x-checkbox wire:click="togglePermission({{ $permission->id }})" value="{{ $permission->name }}" label="{{ $permission->name }}" />
                            <x-label for="newRoleName" value="{{ $permission->name }}" /> 
                    </div>
                    
                @empty
                    <p>No permissions found</p>
                @endforelse
            </div> --}}
        </x-slot>
        <x-slot name="footer">
            <x-button class="mr-2" wire:click="createRole" title="Save changes">Save</x-button>
            <x-button wire:click="closeModal" title="Cancel">Cancel</x-button>
        </x-slot>
    </x-dialog-modal>
</div>
