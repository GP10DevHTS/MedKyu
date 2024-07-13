<div>
    <x-button class="mb-4 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300" wire:click="openViewDoctorModal">
        {{ __('View Doctors') }}
    </x-button>

    <x-dialog-modal wire:model="viewDoctorModal_isOpen">
        <x-slot name="title">
            <h2 class="text-xl font-bold text-gray-800">{{ __('View Doctors') }}</h2>
        </x-slot>

        <x-slot name="content">
            <div class="space-y-2">
                @forelse ($doctors as $doctor)
                    <div class="p-2 bg-gray-100 rounded-lg">
                        <p class="text-gray-700">{{ $doctor->user->name }}</p>
                    </div>
                @empty
                    <p class="text-gray-500">No doctors found</p>
                @endforelse
            </div>
        </x-slot>

        <x-slot name="footer">
            <div class="flex justify-end">
                <x-secondary-button class="px-4 py-2 bg-gray-600 text-green-600 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-300" wire:click="closeViewDoctorModal">
                    {{ __('Close') }}
                </x-secondary-button>
            </div>
        </x-slot>
    </x-dialog-modal>
</div>
