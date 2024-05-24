<div>
    {{-- Stop trying to control. --}}
    <x-form-section submit="update">
        <x-slot name="title">
            Edit Emergency Contact
        </x-slot>
        <x-slot name="description">
            Edit an existing emergency contact.
        </x-slot>
        <<x-slot name="form">
            <div class="col-span-6 sm:col-span-4">
            <x-validation-errors class="mb-4" />
            </div>
            <div class="col-span-6 sm:col-span-4">
                <x-label for="relationship" value="Relationship" />
                <x-input id="relationship" class="block mt-1 w-full" type="text" wire:model.defer="relationship" />
                <x-input-error for="relationship" class="mt-2" />
            </div>
        
            <div class="col-span-6 sm:col-span-4">
                <x-label for="address" value="Address" />
                <x-input id="address" class="block mt-1 w-full" type="text" wire:model.defer="address" />
                <x-input-error for="address" class="mt-2" />
            </div>
        
            <div class="col-span-6 sm:col-span-4">
                <x-label for="contact_name" value="Contact Name" />
                <x-input id="contact_name" class="block mt-1 w-full" type="text" wire:model.defer="contact_name" />
                <x-input-error for="contact_name" class="mt-2" />
            </div>
        
            <div class="col-span-6 sm:col-span-4">
                <x-label for="contact_number" value="Contact Number" />
                <x-input id="contact_number" class="block mt-1 w-full" type="number" wire:model.defer="contact_number" />
                <x-input-error for="contact_number" class="mt-2" />
            </div>
        
            <div class="col-span-6 sm:col-span-4">
                <x-label for="contact_email" value="Contact Email" />
                <x-input id="contact_email" class="block mt-1 w-full" type="email" wire:model.defer="contact_email" />
                <x-input-error for="contact_email" class="mt-2" />
            </div>
        </x-slot>
        
        <x-slot name="actions">
            <x-action-message on="saved">
                Saved.
            </x-action-message>
            <x-button>
                Save
            </x-button>
        </x-slot>
    </x-form-section>
</div>
