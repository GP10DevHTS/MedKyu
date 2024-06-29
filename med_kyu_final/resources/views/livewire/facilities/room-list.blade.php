<div wire:poll>
    {{-- Room List --}}
    <div class="mb-4">
        <x-input type="text" placeholder="Search rooms..." class="block w-full" wire:model.live.debounce="searchTerm" />
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @forelse ($rooms as $room)
            <div class="bg-white shadow-md rounded-lg p-4">
                <h2 class="text-xl font-bold">{{ $room->name }}</h2>
                <p class="text-gray-600">Ward: {{ $room->ward->name }}</p>
            </div>
        @empty
            <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center">
                <p class="text-gray-500">No rooms found. Please create a new room.</p>
            </div>
        @endforelse
    </div>
</div>
