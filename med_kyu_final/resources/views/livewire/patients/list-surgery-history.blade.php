<div wire:poll>
    {{-- <h2 class="text-lg font-medium mb-4">Surgery History</h2> --}}
    
    @if ($surgeryHistories->isEmpty())
        <p class="text-gray-500">No surgery history records found.</p>
    @else
        <ul class="list-disc pl-5">
            @foreach ($surgeryHistories as $record)
                <li class="flex items-center justify-between mb-2">
                    <span>{{ $record->surgery }} (Date: {{ $record->date }})</span>
                    <div class="flex space-x-2">
                        <button class="text-blue-500 hover:underline" wire:click="edit({{ $record->id }})">Edit</button>
                        <button class="text-red-500 hover:underline" wire:click="delete({{ $record->id }})">Delete</button>
                    </div>
                </li>
            @endforeach
        </ul>
    @endif
</div>
