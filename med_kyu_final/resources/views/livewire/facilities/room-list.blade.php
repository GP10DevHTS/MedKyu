<div wire:poll>
    {{-- Room List --}}
    <div class="mb-6">
        <x-input type="text" placeholder="Search rooms..." class="block w-full px-4 py-2 rounded-lg border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" wire:model.live.debounce="searchTerm" />
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($rooms as $room)
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-2">{{ $room->name }}</h2>
                <p class="text-gray-600">Ward: {{ $room->ward->name }}</p>
            </div>
        @empty
            <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center">
                <p class="text-gray-500">No rooms found. Please create a new room.</p>
            </div>
        @endforelse
    </div>
</div>
