<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <x-button wire:click="openEditRoleModal">
        <svg class="w-6 h-6 text-gray-600" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
            viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2"
                d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
        </svg><span class="ml-1 text-white">Edit</span>
    </x-button>

    <x-dialog-modal wire:model="editRoleModal_isOpen">

        <x-slot name="title">
            {{ __('Edit Role') }}
        </x-slot>

        <x-slot name="content">
            <x-form-section submit="">
                <x-slot name="title">
                    {{ __('Edit Role') }}
                </x-slot>

                <x-slot name="description">
                    {{ __('Edit a role for your users.') }}
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
            <x-button class="mr-3" wire:loading.attr="disabled" wire:click="updateRole">
                {{ __('Save') }}
            </x-button>
            <x-secondary-button wire:click="closeEditRoleModal" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>
        </x-slot>

    </x-dialog-modal>
</div>
