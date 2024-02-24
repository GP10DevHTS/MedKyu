<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <x-button wire:click="openViewMore()" class="py-2 px-4 text-sm text-white hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white ml-2">More</x-button>

    <x-dialog-modal wire:model="viewMoreModal">
        <x-slot name="title">
            Medical History
        </x-slot>

        <x-slot name="content">
            <div class="container mx-auto px-4 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Livewire loop to display medical history -->
                    {{-- @foreach($medicalHistory as $history)
                    <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
                        <div class="p-6">
                            <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-2">{{ $history->patient_details }}</h2>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">{{ $history->blood_type }}</p>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">{{ $history->allergies }}</p>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">{{ $history->special_needs }}</p>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">{{ $history->created_at }}</p>
                            <!-- Action buttons here -->
                            <div class="flex justify-end">
                                <!-- Action buttons can be placed here -->
                            </div>
                        </div>
                    </div>
                    @endforeach --}}
                </div>
            {{-- </div> --}}
        </x-slot>
        <x-slot name="footer">
            <x-button wire:click="closeMoreModal()" title="Cancel">
                Close
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
