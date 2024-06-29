<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <x-button wire:click="openNewRoleModal">
        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
          </svg> <span class="ml-1 text-white">{{ __('New Role') }}</span>       
    </x-button>

    <x-dialog-modal wire:model="newRoleModal_isOpen">

        <x-slot name="title">
            {{ __('Create Role') }}
        </x-slot>

        <x-slot name="content">
            <x-form-section submit="">
                <x-slot name="title">
                    {{ __('New Role') }}
                </x-slot>

                <x-slot name="description">
                    {{ __('Create a new role for your users.') }}
                </x-slot>

                <x-slot name="form">
                    <div class="col-span-6">
                        <x-label for="name" value="{{ __('Name') }}" />
                        <x-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="name" />
                        <x-input-error for="name" class="mt-2" />
                    </div>
                </x-slot>

            </x-form-section>

        </x-slot>

        <x-slot name="footer">
            <x-button class="mr-3" wire:loading.attr="disabled" wire:click="createRole">
                {{ __('Save') }}
            </x-button>
            <x-secondary-button wire:click="closeNewRoleModal" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>
        </x-slot>

    </x-dialog-modal>
</div>
