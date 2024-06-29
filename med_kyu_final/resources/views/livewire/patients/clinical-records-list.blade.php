<div class="p-4" wire:poll>
    {{-- The whole world belongs to you. --}}

    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-6">Clinical Records for {{ $patient->user->name }}</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6">
            @foreach ($clinicalRecords as $record)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="px-4 py-2 bg-gray-800 text-white">
                        <h2 class="text-xl font-semibold">Department: {{ $record->department->department_name }}</h2>
                    </div>
                    <div class="px-4 py-6">
                        <h5 class="text-lg font-bold">Doctor: {{ $record->doctor->user->name }}</h5>
                        <p class="mt-2 text-gray-600">Record ID: {{ $record->id }}</p>
                        <p class="mt-2 text-gray-600">Opened At:
                            {{ $record->created_at->format('d M Y') . ' at ' . $record->created_at->format('h:i A') }}
                        </p>
                        <a href="{{ route('patient.clinical-record.view', ['user' => $patient->user->id, 'record' => $record->id]) }}"
                            class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-200">Details</a>
                        @if (is_null($record->deleted_at))
                            <x-button wire:confirm="are you sure?" class="mt-4" wire:click="closeRecord({{ $record->id }})">
                                Close File
                            </x-button>
                        @else
                            <p class="mt-4 text-red-600">Closed At:
                                {{ $record->deleted_at->format('d M Y') . ' at ' . $record->deleted_at->format('h:i A') }}
                            </p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
