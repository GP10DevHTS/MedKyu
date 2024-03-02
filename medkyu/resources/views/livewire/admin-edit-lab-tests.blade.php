<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <x-form-section submit="update">
        <x-slot name="title">
            Edit Lab Test
        </x-slot>

        <x-slot name="description">
            Edit an existing lab test.
        </x-slot>

        <x-slot name="form">
            <div class="col-span-6 sm:col-span-4">
                <x-label for="test_name" value="Test Name" />
                <x-input id="test_name" class="block mt-1 w-full" type="text" wire:model.defer="test_name" />
                <x-input-error for="test_name" class="mt-2" />
            </div>
        
            <div class="col-span-6 sm:col-span-4">
                <x-label for="sample_type" value="Sample Type" />
                <x-input id="sample_type" class="block mt-1 w-full" type="text" wire:model.defer="sample_type" />
                <x-input-error for="sample_type" class="mt-2" />
            </div>
        
            <div class="col-span-6 sm:col-span-4">
                <x-label for="result_value" value="Result Value" />
                <x-input id="result_value" class="block mt-1 w-full" type="text" wire:model.defer="result_value" />
                <x-input-error for="result_value" class="mt-2" />
            </div>
        
            <div class="col-span-6 sm:col-span-4">
                <x-label for="reference_range" value="Reference Range" />
                <x-input id="reference_range" class="block mt-1 w-full" type="text" wire:model.defer="reference_range" />
                <x-input-error for="reference_range" class="mt-2" />
            </div>
        
            <div class="col-span-6 sm:col-span-4">
                <x-label for="interpretation" value="Interpretation" />
                <x-input id="interpretation" class="block mt-1 w-full" type="text" wire:model.defer="interpretation" />
                <x-input-error for="interpretation" class="mt-2" />
            </div>
        
            <div class="col-span-6 sm:col-span-4">
                <x-label for="test_date" value="Test Date" />
                <x-input id="test_date" class="block mt-1 w-full" type="date" wire:model.defer="test_date" />
                <x-input-error for="test_date" class="mt-2" />
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
