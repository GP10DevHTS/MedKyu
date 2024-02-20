<div>
    {{-- Success is as dangerous as failure. --}}
    <x-button type="button" class="w-full md:w-auto" wire:click="openCreateModal">
        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
        </svg>
        Add User
    </x-button>

    <x-dialog-modal wire:model="isModalOpen">
        <x-slot name="title">
            Add New User
        </x-slot>
        <x-slot name="content">
            <div>
                <x-label for="name" :value="__('Name')" />
                <x-input id="name" class="block mt-1 w-full" type="text" wire:model.defer="name" autofocus />
                <x-input-error for="name" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="block mt-1 w-full" type="email" wire:model.defer="email" />
                <x-input-error for="email" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />
                <x-input id="password" class="block mt-1 w-full" type="password" wire:model.defer="password" />
                <x-input-error for="password" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" wire:model.defer="password_confirmation" />
                <x-input-error for="password_confirmation" class="mt-2" />
            </div>

            {{-- add a role which is selectable --}}
            <<div class="mt-4">
                <x-label for="role" :value="__('Role')" />
                <select id="role" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm py-2 px-3" wire:model.defer="role">
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
                <x-input-error for="role" class="mt-2" />
            </div>
            
        </x-slot>
        <x-slot name="footer">
            <x-button wire:click="$set('isModalOpen', false)" wire:loading.attr="disabled">
                Cancel
            </x-button>
            <x-button class="ms-3" wire:click="createUser" wire:loading.attr="disabled">
                Create
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
