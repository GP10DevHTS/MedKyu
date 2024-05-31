<div>
    {{-- Trigger button for opening the edit modal --}}
    <x-secondary-button wire:click="openEditModal()" class="py-2 px-3 text-sm text-white hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</x-secondary-button>
    
    {{-- Edit doctor modal --}}
    <x-dialog-modal wire:model="isModalOpen">
        <x-slot name="title">
            Edit Doctor
        </x-slot>

        <x-slot name="content">
            {{-- Doctor name input --}}
            <div class="mb-4">
                <x-label for="name" value="Name" />
                <x-input id="name" class="block mt-1 w-full"  type="text" wire:model="name" />
                <x-input-error for="name" class="mt-2" />
            </div>

            {{-- Checkbox for selecting available days --}}
            <div class="flex flex-wrap items-center mb-4">
                @foreach(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'] as $day)
                    <label class="inline-flex items-center mr-4">
                        <input type="checkbox" name="days[]" value="{{ strtolower($day) }}" class="form-checkbox text-primary-500" wire:model="selectedDays" />
                        <span class="ml-2">{{ $day }}</span>
                    </label>
                @endforeach
            </div>
            
            {{-- Inputs for start and end times --}}
            <div class="mb-4 flex gap-2 items-center">
                <x-label for="start_time" value="Start Times" />
                <x-input id="start_time" class="block mt-1 w-60" type="time" wire:model="startTime" />
                <x-input-error for="startTime" class="mt-2" />
                
                <x-label for="end_time" value="End Times" />
                <x-input id="end_time" class="block mt-1 w-60" type="time" wire:model="endTime" />
                <x-input-error for="endTime" class="mt-2" />
            </div>
        </x-slot>

        {{-- Footer with buttons for saving and canceling --}}
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
