<div class="p-4" wire:poll>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @forelse ($departments as $department)
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h2 class="text-lg font-bold mb-2">{{ $department->department_name }}</h2>
                <p class="text-gray-700"><strong>Department:</strong>
                    {{ $department->department_description }}</p>
                @can('edit-departments')
                    <div class="grid grid-cols-2 gap-2 mt-4">
                        @livewire('department.add-doctor-model', ['department' => $department], key('add-doctor-modal-' . $department->id))
                        {{-- <x-button wire:click="assignDoctor({{ $department->id }})">Doctors</x-button> --}}
                        @livewire('department.view-doctors-list', ['department' => $department], key('view-doctors-modal-' . $department->id))
                    </div>
                @endcan
            </div>
        @empty
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h2 class="text-lg font-bold mb-2">No Department Found</h2>
            </div>
        @endforelse
    </div>
</div>
