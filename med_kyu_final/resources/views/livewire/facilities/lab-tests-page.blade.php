<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-9">
            @livewire('facilities.lab-tests-list')
        </div>

        <div class="col-span-3">
            <x-form-section submit="createLabTest">
                <x-slot name="title">
                    Create Lab Test
                </x-slot>

                <x-slot name="description">
                    Create a new lab test
                </x-slot>

                <x-slot name="form">
                    <div class="col-span-6">
                        <x-label for="name" value="{{ __('Name') }}" />
                        <x-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="name" />
                        <x-input-error for="name" class="mt-2" />
                    </div>
                </x-slot>

                <x-slot name="actions">
                    <x-button>
                        {{ __('Create') }}
                    </x-button>
                </x-slot>   
            </x-form-section>
        </div>
    </div>
</div>
