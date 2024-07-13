<div wire:poll>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="p-6 bg-gray-100 rounded-lg shadow-lg">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($wards as $ward)
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-2">{{ $ward->name }}</h2>
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
