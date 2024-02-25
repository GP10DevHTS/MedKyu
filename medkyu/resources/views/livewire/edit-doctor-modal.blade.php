<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <x-secondary-button wire:click="openEditModal()" class="py-2 px-3 text-sm text-white hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</x-secondary-button>
    <x-dialog-modal wire:model="isModalOpen">
        <x-slot name="title">
            Edit Doctor
        </x-slot>

        <x-slot name="content">
            <div class="mb-4">
                <x-label for="name" value="Name" />
                <x-input id="name" class="block mt-1 w-full" type="text" wire:model="name"  />
                <x-input-error for="name" class="mt-2" />
            </div>

            {{-- add the available days --}}
            <div class="flex flex-wrap items-center mb-4">
                <label class="inline-flex items-center mr-4">
                    <input type="checkbox" name="days[]" value="monday" class="form-checkbox text-primary-500" />
                    <span class="ml-2">Monday</span>
                </label>
                <label class="inline-flex items-center mr-4">
                    <input type="checkbox" name="days[]" value="tuesday" class="form-checkbox text-primary-500" />
                    <span class="ml-2">Tuesday</span>
                </label>
                <label class="inline-flex items-center mr-4">
                    <input type="checkbox" name="days[]" value="wednesday" class="form-checkbox text-primary-500" />
                    <span class="ml-2">Wednesday</span>
                </label>
                <label class="inline-flex items-center mr-4">
                    <input type="checkbox" name="days[]" value="thursday" class="form-checkbox text-primary-500" />
                    <span class="ml-2">Thursday</span>
                </label>
                <label class="inline-flex items-center mr-4">
                    <input type="checkbox" name="days[]" value="friday" class="form-checkbox text-primary-500" />
                    <span class="ml-2">Friday</span>
                </label>
                <label class="inline-flex items-center mr-4">
                    <input type="checkbox" name="days[]" value="saturday" class="form-checkbox text-primary-500" />
                    <span class="ml-2">Saturday</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="checkbox" name="days[]" value="sunday" class="form-checkbox text-primary-500" />
                    <span class="ml-2">Sunday</span>
                </label>
            </div>
            
            <div class="mb-4 flex gap-2 items-center">
                <x-label for="start_time" value="Start Times" />
                <x-input id="start_time" class="block mt-1 w-60" type="time" wire:model="times" />
                <x-input-error for="times" class="mt-2" />
                <x-label for="end_time" value="End Times" />
                <x-input id="end_time" class="block mt-1 w-60" type="time" wire:model="times" />
                <x-input-error for="times" class="mt-2" />
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="closeModal" wire:loading.attr="disabled">
                Nevermind
            </x-secondary-button>

            <x-button class="ms-3" wire:click="updateDoctorInformation()" wire:loading.attr="disabled">
                Save
            </x-button>
        </x-slot>

    </x-dialog-modal>
</div>
