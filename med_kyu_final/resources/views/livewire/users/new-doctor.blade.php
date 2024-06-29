<div>
    {{-- Do your work, then step back. --}}
    <x-button class="mb-4" wire:click="$set('newDoctorModal_isOpen', true)">New Doctor</x-button>

    <x-dialog-modal wire:model="newDoctorModal_isOpen">
        <x-slot name="title">
            {{ __('New Doctor') }}
        </x-slot>

        <x-slot name="content">
            <x-form-section submit="">
                <x-slot name="title">
                    {{-- {{ __('Register New Doctor') }} --}}
                </x-slot>

                <x-slot name="description">
                    {{ __('Register a new Doctor.') }}
                </x-slot>

                <x-slot name="form">
                    <div class="col-span-6 grid grid-cols-12 gap-4">
                        <div class="col-span-12">
                            <x-validation-errors class="mb-4" />
                        </div>
                        <div class="col-span-6">
                            <x-label for="name">{{ __('Full Name') }} <span class="text-rose-500">*</span></x-label>
                            <x-input type="text" wire:model="name" required />
                        </div>

                        <div class="col-span-6">
                            <x-label for="email">{{ __('Email Address') }} <span
                                    class="text-rose-500">*</span></x-label>
                            <x-input type="email" wire:model="email" required />
                        </div>

                        <div class="col-span-6">
                            <x-label for="gender">{{ __('Gender') }} <span class="text-rose-500">*</span></x-label>
                            <select
                                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                wire:model="gender" required>
                                <option value="">Select Gender</option>
                                <option value="male" {{ old('gender') === 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ old('gender') === 'female' ? 'selected' : '' }}>Female
                                </option>
                                <option value="other" {{ old('gender') === 'other' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>

                        <div class="col-span-6">
                            <x-label for="phone">{{ __('Phone Number') }} <span
                                    class="text-rose-500">*</span></x-label>
                            <x-input class="block mt-1 w-full" type="tel" wire:model="phone" />
                        </div>

                        <div class="col-span-6">
                            <x-label for="address">{{ __('Address') }} <span class="text-rose-500">*</span></x-label>
                            <x-input class="block mt-1 w-full" type="text" wire:model="address" />
                        </div>

                        <div class="col-span-6">
                            <x-label for="dob">{{ __('Date of Birth') }} <span
                                    class="text-rose-500">*</span></x-label>
                            <x-input class="block mt-1 w-full" type="date" wire:model="dob" />
                        </div>
                    </div>

                </x-slot>

            </x-form-section>
        </x-slot>

        <x-slot name="footer">

            <x-action-message class="mr-3" on="newUserRegistered">
                {{ __('Doctor Saved.') }}
            </x-action-message>

            <x-button wire:click="registerNewUser">
                {{ __('Save') }}
            </x-button>
            <x-secondary-button class="ms-3" wire:click="$set('newDoctorModal_isOpen', false)"
                wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>
        </x-slot>
    </x-dialog-modal>
</div>
