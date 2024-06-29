<div wire:poll>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @forelse ($wards as $ward)
                <div class="bg-white shadow-md rounded-lg p-4">
                    <h2 class="text-xl font-bold">{{ $ward->name }}</h2>
                    <p class="text-gray-600">{{ $ward->type }}</p>
                </div>
            @empty
                <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center">
                    <p class="text-gray-500">No wards available. Please create a new ward.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
