<div>
    {{-- Success is as dangerous as failure. --}}
    <x-button wire:click="openTestResultForm">Add Lab Test</x-button>

    <x-dialog-modal wire:model="testResultForm_isOpen">
        <x-slot name="title">
            {{ __('Add Lab Test Result') }}
        </x-slot>

        <x-slot name="content">
            <x-form-section submit="">
                <x-slot name="title">
                    {{ __('Add Lab Test Result') }}
                </x-slot>

                <x-slot name="description">
                    {{ __('Add a new lab test result.') }}
                </x-slot>

                <x-slot name="form">
                    <div class="col-span-6">
                        <x-label for="result" value="{{ __('Result') }}" />
                        <x-input id="result" type="text" class="mt-1 block w-full" wire:model.defer="result" />
                        <x-input-error for="result" class="mt-2" />
                    </div>
                </x-slot>

                
            </x-form-section>

        </x-slot>

        <x-slot name="footer">
            <x-action-message on="saved" class="mr-3">
                {{ __('Saved.') }}
            </x-action-message>

            <x-button class="ms-2" wire:click="saveTestResult">
                {{ __('Save') }}
            </x-button>

            <x-secondary-button class="ms-2" wire:click="closeTestResultForm" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>
        </x-slot>

    </x-dialog-modal>
                
</div>
