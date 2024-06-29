<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <x-button wire:click="openAddDoctorModal">Add Doctor</x-button>

    <x-dialog-modal wire:model="addDoctorModal_isOpen">

        <x-slot name="title">
            {{ $department->department_name }}
        </x-slot>

        <x-slot name="content">
            <x-form-section submit="">
                <x-slot name="title">
                    {{ __('Add Doctor') }}
                </x-slot>

                <x-slot name="description">
                    {{ __('Add a new doctor.') }}
                </x-slot>

                <x-slot name="form">
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
                </x-slot>
            </x-form-section>
        </x-slot>

        <x-slot name="footer">
            <x-button wire:click="addDoctor" wire:loading.attr="disabled">
                {{ __('Add') }}
            </x-button>

            <x-secondary-button wire:click="closeAddDoctorModal" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>
        </x-slot>
    </x-dialog-modal>

</div>
