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
            <div>
                <h2 class="text-lg font-bold">This role can</h2>
            </div>
            <div>
                @forelse ($allPermissions as $permission)
                {{-- <label class="relative items-center mb-1 cursor-pointer grid grid-cols-2">
                    <input wire:click="togglePermission({{ $permission->id }})" type="checkbox" value="{{ $permission->name }}" class="sr-only " >
                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                    <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $permission->name }}</span>
                </label> --}}
            <div class="flex space-x-2">
                <x-checkbox wire:click="togglePermission({{ $permission->id }})" value="{{ $permission->name }}" label="{{ $permission->name }}" />
                    <x-label for="newRoleName" value="{{ $permission->name }}" /> 
            </div>
               
            @empty
                <p>No permissions found</p>
            @endforelse
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-button class="mr-2" wire:click="createRole" title="Save changes">Save</x-button>
            <x-button wire:click="closeModal" title="Cancel">Cancel</x-button>
        </x-slot>
    </x-dialog-modal>
</div>
