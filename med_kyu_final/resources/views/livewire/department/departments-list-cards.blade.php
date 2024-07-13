<div class="p-6 bg-gray-100 rounded-lg shadow-lg" wire:poll>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($departments as $department)
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold text-gray-800 mb-4">{{ $department->department_name }}</h2>
                <p class="text-gray-700 mb-4"><strong>Department:</strong> {{ $department->department_description }}</p>
                @can('edit-departments')
                    <div class="flex space-x-2 mt-4">
                        @livewire('department.add-doctor-model', ['department' => $department], key('add-doctor-modal-' . $department->id))
                        @livewire('department.view-doctors-list', ['department' => $department], key('view-doctors-modal-' . $department->id))
                    </div>
                @endcan
            </div>
        @empty
            <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-bold text-gray-800 mb-2">No Department Found</h2>
                    <p class="text-gray-600">Please create a new department.</p>
                </div>
            </div>
        @endforelse
    </div>
</div>
