<div>
    <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded mt-4 hover:bg-blue-600" wire:click="newTransfusionHistoryModal">Add</a>

    <x-dialog-modal wire:model="newTransfusionHistoryModalIsOpen">
        <x-slot name="title">
            {{ __('Create New Transfusion History') }}
        </x-slot>

        <x-slot name="content">
            <form wire:submit.prevent="createTransfusionHistory">
                <div class="col-span-6 sm:col-span-4">
                    <x-validation-errors class="mb-4" />
                </div>
               
                <div class="col-span-6 sm:col-span-4">
                    <x-label for="transfusion_type" value="{{ __('Transfusion Type') }}" />
                    <x-input id="transfusion_type" type="text" class="mt-1 block w-full" wire:model.defer="transfusion_type" />
                    <x-input-error for="transfusion_type" class="mt-2" />
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <x-label for="date" value="{{ __('Date') }}" />
                    <x-input id="date" type="date" class="mt-1 block w-full" wire:model.defer="date" />
                    <x-input-error for="date" class="mt-2" />
                </div>
            </form>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('newTransfusionHistoryModalIsOpen')">
                {{ __('Cancel') }}
            </x-secondary-button>   

            <x-button class="ms-3" wire:click="createTransfusionHistory" wire:loading.attr="disabled">
                {{ __('Create') }}
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
