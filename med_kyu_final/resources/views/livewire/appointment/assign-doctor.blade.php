<div class="w-full">
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <x-button class="w-full" wire:click="openAssignDoctorModal">
        {{ __('Assign Doctor') }}
    </x-button>

    <x-dialog-modal wire:model="assignDoctorModal_isOpen">
        <x-slot name="title">Assign Doctor</x-slot>

        <x-slot name="content">
            <x-form-section submit="">
                <x-slot name="title">
                    {{ __('Assign Doctor') }}
                </x-slot>

                <x-slot name="description">
                    {{ __('Assign a doctor to this appointment.') }}
                </x-slot>

                <x-slot name="form">
                    <div class="col-span-6">
                        <x-label for="doctor_id" value="{{ __('Doctor') }}" />
                        <select wire:model="doctor_id" class="form-select block w-full mt-1">
                            <option value="">Select Doctor</option>
                            @foreach ($doctors as $departmentdoctor)
                                <option value="{{ $departmentdoctor->doctor->id }}">
                                    {{ $departmentdoctor->doctor->user->name }}</option>
                            @endforeach
                        </select>
                        <x-input-error for="doctor_id" class="mt-2" />
                    </div>
                </x-slot>
            </x-form-section>
        </x-slot>

        <x-slot name="footer">
            <x-button wire:click="assignDoctor" wire:loading.attr="disabled">
                {{ __('Assign') }}
            </x-button>
            <x-secondary-button wire:click="closeAssignDoctorModal">
                {{ __('Close') }}
            </x-secondary-button>
        </x-slot>
    </x-dialog-modal>
</div>
