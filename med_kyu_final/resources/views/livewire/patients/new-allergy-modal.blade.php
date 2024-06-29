<div>
    <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded mt-4 hover:bg-blue-600" wire:click="newAllergyModal">Add</a>
    <x-dialog-modal wire:model="newAllergyModalIsOpen">
        <x-slot name="title">
            {{ __('Create New Allergy') }}
        </x-slot>

        <x-slot name="content">
            <form wire:submit.prevent="createAllergy">
                <div class="col-span-6 sm:col-span-4">
                    <x-validation-errors class="mb-4" />
                </div>
               
                <div class="col-span-6 sm:col-span-4">
                    <x-label for="allergy" value="{{ __('Allergy') }}" />
                    <x-input id="allergy" type="text" class="mt-1 block w-full" wire:model.defer="allergy" />
                    <x-input-error for="allergy" class="mt-2" />
                </div>
            </form>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('newAllergyModalIsOpen')">
                {{ __('Cancel') }}
            </x-secondary-button>   

            <x-button class="ms-3" wire:click="createAllergy" wire:loading.attr="disabled">
                {{ __('Create') }}
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
