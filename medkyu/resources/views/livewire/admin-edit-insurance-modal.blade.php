<div>
    <x-form-section submit="update">
        <x-slot name="title">
            Edit Insurance
        </x-slot>

        <x-slot name="description">
            Edit an existing insurance.
        </x-slot>

        <x-slot name="form">
            <div class="col-span-6 sm:col-span-4">
                <x-label for="insurance_name" value="Insurance Name" />
                <x-input id="insurance_name" class="block mt-1 w-full" type="text" wire:model.defer="insurance_name" />
                <x-input-error for="insurance_name" class="mt-2" />
            </div>
        
            <div class="col-span-6 sm:col-span-4">
                <x-label for="insurance_number" value="Insurance Number" />
                <x-input id="insurance_number" class="block mt-1 w-full" type="text" wire:model.defer="insurance_number" />
                <x-input-error for="insurance_number" class="mt-2" />
            </div>
        
            <div class="col-span-6 sm:col-span-4">
                <x-label for="insurance_provider" value="Insurance Provider" />
                <x-input id="insurance_provider" class="block mt-1 w-full" type="text" wire:model.defer="insurance_provider" />
                <x-input-error for="insurance_provider" class="mt-2" />
            </div>
        
            <div class="col-span-6 sm:col-span-4">
                <x-label for="policy_number" value="Policy Number" />
                <input id="policy_number" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" type="text" wire:model.defer="policy_number" />
                <x-input-error for="policy_number" class="mt-2" />
            </div>
        
            <div class="col-span-6 sm:col-span-4">
                <x-label for="coverage_details" value="Coverage Details" />
                {{-- create a text area for coverage details --}}
                <textarea id="coverage_details" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" type="text" wire:model.defer="coverage_details" ></textarea>
                <x-input-error for="coverage_details" class="mt-2" />
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
