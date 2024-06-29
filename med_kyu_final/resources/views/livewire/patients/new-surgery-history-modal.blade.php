<div>
    <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded mt-4 hover:bg-blue-600" wire:click="newSurgeryHistoryModal">Add</a>

    <x-dialog-modal wire:model="newSurgeryHistoryModalIsOpen">
        <x-slot name="title">
            {{ __('Create New Surgery History') }}
        </x-slot>

        <x-slot name="content">
            <form wire:submit.prevent="createSurgeryHistory">
                <div class="col-span-6 sm:col-span-4">
                    <x-validation-errors class="mb-4" />
                </div>
               
                <div class="col-span-6 sm:col-span-4">
                    <x-label for="surgery" value="{{ __('Surgery') }}" />
                    <x-input id="surgery" type="text" class="mt-1 block w-full" wire:model.defer="surgery" />
                    <x-input-error for="surgery" class="mt-2" />
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <x-label for="date" value="{{ __('Date') }}" />
                    <x-input id="date" type="date" class="mt-1 block w-full" wire:model.defer="date" />
                    <x-input-error for="date" class="mt-2" />
                </div>
            </form>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('newSurgeryHistoryModalIsOpen')">
                {{ __('Cancel') }}
            </x-secondary-button>   

            <x-button class="ms-3" wire:click="createSurgeryHistory" wire:loading.attr="disabled">
                {{ __('Create') }}
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
