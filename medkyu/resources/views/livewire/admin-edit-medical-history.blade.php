<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <x-form-section submit="update">
        <x-slot name="title">
            Edit Medical History
        </x-slot>
        <x-slot name="description">
            Edit an existing medical history.
        </x-slot>
        <x-slot name="form">
            <div class="col-span-6 sm:col-span-4">
                <x-label for="blood_type" value="Blood Type" />
                <x-input id="blood_type" class="block mt-1 w-full" type="text" wire:model.defer="blood_type" />
                <x-input-error for="blood_type" class="mt-2" />
            </div>
        
            <div class="col-span-6 sm:col-span-4">
                <x-label for="height" value="Height" />
                <x-input id="height" class="block mt-1 w-full" type="text" wire:model.defer="height" />
                <x-input-error for="height" class="mt-2" />
            </div>
        
            <div class="col-span-6 sm:col-span-4">
                <x-label for="weight" value="Weight" />
                <x-input id="weight" class="block mt-1 w-full" type="text" wire:model.defer="weight" />
                <x-input-error for="weight" class="mt-2" />
            </div>
        
            <div class="col-span-6 sm:col-span-4">
                <x-label for="medical_history" value="Medical History" />
                <x-input id="medical_history" class="block mt-1 w-full" type="text" wire:model.defer="medical_history" />
                <x-input-error for="medical_history" class="mt-2" />
            </div>
        
            <div class="col-span-6 sm:col-span-4">
                <x-label for="allergies" value="Allergies" />
                <x-input id="allergies" class="block mt-1 w-full" type="text" wire:model.defer="allergies" />
                <x-input-error for="allergies" class="mt-2" />
            </div>
        
            <div class="col-span-6 sm:col-span-4">
                <x-label for="current_medications" value="Current Medications" />
                <x-input id="current_medications" class="block mt-1 w-full" type="text" wire:model.defer="current_medications" />
                <x-input-error for="current_medications" class="mt-2" />
            </div>
        
            <div class="col-span-6 sm:col-span-4">
                <x-label for="special_needs" value="Special Needs" />
                <x-input id="special_needs" class="block mt-1 w-full" type="text" wire:model.defer="special_needs" />
                <x-input-error for="special_needs" class="mt-2" />
            </div>
        
            <div class="col-span-6 sm:col-span-4">
                <x-label for="chronical_illnesses" value="Chronic Illnesses" />
                <x-input id="chronical_illnesses" class="block mt-1 w-full" type="text" wire:model.defer="chronical_illnesses" />
                <x-input-error for="chronical_illnesses" class="mt-2" />
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
