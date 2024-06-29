<div>
    {{-- Stop trying to control. --}}
    <x-button class="w-full" wire:click="openEditProfileModal">Edit Profile</x-button>

    <x-dialog-modal wire:model="editProfileModal_isOpen">

        <x-slot name="title">
            {{-- {{ __('Edit Profile') }} --}}
        </x-slot>

        <x-slot name="content">
            <x-form-section submit="">
                <x-slot name="title">
                    {{ __('Edit Profile') }}
                </x-slot>

                <x-slot name="description">
                    {{ __('Update this account\'s profile information and email address.') }}
                </x-slot>

                <x-slot name="form">
                    <div class="col-span-6">
                        <x-validation-errors class="mb-4" />
                    </div>
                    <div class="col-span-6 grid grid-cols-12 gap-4">
                        <div class="col-span-6">
                            <x-label for="name" value="{{ __('Name') }}" />
                            <x-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="name" />
                            <x-input-error for="name" class="mt-2" />
                        </div>

                        <div class="col-span-6">
                            <x-label for="email" value="{{ __('Email') }}" />
                            <x-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="email" />
                            <x-input-error for="email" class="mt-2" />
                        </div>

                        <div class="col-span-6">
                            <x-label for="phone" value="{{ __('Phone') }}" />
                            <x-input id="phone" type="text" class="mt-1 block w-full" wire:model.defer="phone" />
                            <x-input-error for="phone" class="mt-2" />
                        </div>

                        <div class="col-span-6">
                            <x-label for="gender" value="{{ __('Gender') }}" />
                            <select
                                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                wire:model.defer="gender">
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                            <x-input-error for="gender" class="mt-2" />
                        </div>

                        <div class="col-span-6">
                            <x-label for="dob" value="{{ __('Date of Birth') }}" />
                            <x-input id="dob" type="date" class="mt-1 block w-full" wire:model.defer="dob" />
                            <x-input-error for="dob" class="mt-2" />
                        </div>

                        <div class="col-span-6">
                            <x-label for="photo" value="{{ __('Photo') }}" />
                            <x-input id="photo" type="file" class="mt-1 block w-full" wire:model.defer="photo" />
                            <x-input-error for="photo" class="mt-2" />
                        </div>

                        <div class="col-span-6">
                            <x-label for="address" value="{{ __('Address') }}" />
                            <x-input id="address" type="text" class="mt-1 block w-full"
                                wire:model.defer="address" />
                            <x-input-error for="address" class="mt-2" />
                        </div>

                        @if ($photo)
                            <div class="col-span-6">
                                <img src="{{ $photo->temporaryUrl() }}" alt="">
                            </div>
                        @else
                            <div class="col-span-6">
                                <img src="{{ $user->profile_photo_url }}" alt="">
                            </div>
                        @endif
                    </div>
                </x-slot>


            </x-form-section>

        </x-slot>
        <x-slot name="footer">
            <x-action-message class="mr-3" on="saved">
                {{ __('Saved.') }}
            </x-action-message>

            <x-button wire:loading.attr="disabled"  wire:click="updateProfileInformation">
                {{ __('Save') }}
            </x-button>

            <x-button class="ml-3" wire:click="closeEditProfileModal" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-button>
        </x-slot>
    </x-dialog-modal>

</div>
