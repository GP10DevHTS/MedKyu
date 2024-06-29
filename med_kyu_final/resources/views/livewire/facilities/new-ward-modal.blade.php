<div>
    {{-- Success is as dangerous as failure. --}}
    <x-button wire:click="openNewWardModel">New Ward</x-button>

    <x-dialog-modal wire:model="newWardModalIsOpen">
        <x-slot name="title">
            {{ __('Create New Ward') }}
        </x-slot>

        <x-slot name="content">
            
            <form wire:submit.prevent="createWard">
                <div class="col-span-6 sm:col-span-4">
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="name" />
                    <x-input-error for="name" class="mt-2" />
                </div>

                <div class="col-span-6 sm:col-span-4 mt-4">
                    <x-label for="type" value="{{ __('Type') }}" />
                    <x-input id="type" type="text" class="mt-1 block w-full" wire:model.defer="type" placeholder="e.g., ICU, General, Maternity" />
                    <x-input-error for="type" class="mt-2" />
                </div>
            </form>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="closeNewWardModel">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-button class="ml-2" wire:click="createWard">
                {{ __('Create') }}
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
