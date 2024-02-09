<div wire:poll>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <x-button title="edit this role" wire:click="openModal({{ $role }})" class="bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">
        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.3 4.8 2.9 2.9M7 7H4a1 1 0 0 0-1 1v10c0 .6.4 1 1 1h11c.6 0 1-.4 1-1v-4.5m2.4-10a2 2 0 0 1 0 3l-6.8 6.8L8 14l.7-3.6 6.9-6.8a2 2 0 0 1 2.8 0Z"/>
        </svg>
    </x-button>

    <x-dialog-modal wire:model="isModalOpen" style="width: 300px; height: 400px">
        <x-slot name="title">
            Edit {{$role->name}} Role
        </x-slot>
        <x-slot name="content">
            
            @forelse ($allPermissions as $permission)
                <label class="relative items-center mb-1 cursor-pointer grid grid-cols-2">
                    <input wire:click="togglePermission({{ $permission->id }})" type="checkbox" value="{{ $permission->name }}" class="sr-only peer" {{ $role->permissions->contains($permission) ? 'checked' : '' }}>
                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                    <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $permission->name }}</span>
                </label>
               
            @empty
                <p>No permissions found</p>
            @endforelse

        </x-slot>
        <x-slot name="footer">
            <x-button wire:click="grantAllPerms({{$role->id}})" class="bg-green-400 hover:bg-green-500">
                Grant All
            </x-button>
            <x-danger-button wire:click="revokeAllPerms('{{$role->id}}')" class="ml-2 mr-2">
                Revoke All
            </x-danger-button>
            <x-button title="close this page" wire:click="closeModal">
                Close
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
