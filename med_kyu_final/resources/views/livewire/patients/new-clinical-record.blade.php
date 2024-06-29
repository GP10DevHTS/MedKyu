<div class="p-4">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <x-form-section submit="">
        <x-slot name="title">
            {{ __('Add New Clinical Record') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Add a new clinical record.') }}
        </x-slot>

        <x-slot name="form">
            <div class="col-span-6 grid-cols-12 grid gap-4">
                <div class="col-span-12">
                    <x-validation-errors class="mb-4" />
                </div>
                <div class="col-span-6">
                    <x-label for="doctor_id" value="{{ __('Doctor') }}" />
                    <select wire:model="doctor_id" class="form-select block w-full mt-1">
                        <option value="">Select Doctor</option>
                        @foreach ($doctors as $doctor)
                            <option value="{{ $doctor->id }}">{{ $doctor->user->name }}</option>
                        @endforeach
                    </select>
                    <x-input-error for="doctor_id" class="mt-2" />
                </div>

                <div class="col-span-6">
                    <x-label for="department_id" value="{{ __('Department') }}" />
                    <select wire:model="department_id" class="form-select block w-full mt-1">
                        <option value="">Select Department</option>
                        @foreach ($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                        @endforeach
                    </select>
                    <x-input-error for="department_id" class="mt-2" />
                </div>

            </div>
        </x-slot>

        <x-slot name="actions">
            <x-action-message class="mr-3" on="saved">
                {{ __('Saved.') }}
            </x-action-message>

            <x-button wire:click="saveClinicalRecord">
                {{ __('Save') }}
            </x-button>
        </x-slot>
    </x-form-section>
</div>
