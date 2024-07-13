<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <x-button class="mb-4 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300" wire:click="openAddDoctorModal">Add Doctor</x-button>

    <x-dialog-modal wire:model="addDoctorModal_isOpen">
        <x-slot name="title">
            <h2 class="text-xl font-bold text-gray-800">{{ $department->department_name }}</h2>
        </x-slot>

        <x-slot name="content">
            <x-form-section submit="">
                <x-slot name="title">
                    <h3 class="text-lg font-semibold text-gray-700">{{ __('Add Doctor') }}</h3>
                </x-slot>

                <x-slot name="description">
                    <p class="text-sm text-gray-600">{{ __('Add a new doctor.') }}</p>
                </x-slot>

                <x-slot name="form">
                    <div class="col-span-6 mb-4">
                        <x-label for="doctor_id" value="{{ __('Doctor') }}" class="text-gray-700 font-medium" />
                        <select wire:model="doctor_id" class="form-select block w-full mt-1 rounded-lg border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
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
            <div class="flex justify-end space-x-2">
                <x-button class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:outline-none focus:ring focus:ring-green-300" wire:click="addDoctor" wire:loading.attr="disabled">
                    {{ __('Add') }}
                </x-button>

                <x-secondary-button class="px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-300" wire:click="closeAddDoctorModal" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-secondary-button>
            </div>
        </x-slot>
    </x-dialog-modal>
</div>
