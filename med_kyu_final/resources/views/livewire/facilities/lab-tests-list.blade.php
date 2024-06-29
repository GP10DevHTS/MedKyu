<div wire:poll class="p-6 bg-gray-100 min-h-screen">
    {{-- Do your work, then step back. --}}
    <h1 class="text-2xl font-semibold text-center mb-6">Lab Tests List</h1>
    @forelse ($labTests as $labTest)
        <div class="bg-white shadow-md rounded-lg p-4 mb-4">
            <p class="text-lg text-gray-700">{{ $labTest->name }}</p>
        </div>
    @empty
        <p class="text-center text-gray-500">No lab tests available.</p>
    @endforelse
</div>
