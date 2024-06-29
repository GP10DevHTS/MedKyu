<div wire:poll>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="overflow-auto p-4">
        <h2 class="text-xl font-bold mb-4">Patient Movement History</h2>
        <table class="min-w-full bg-white border">
            <thead>
                <tr class="border-b">
                    <th class="py-2 px-4 text-left">Room</th>
                    <th class="py-2 px-4 text-left">Ward</th>
                    <th class="py-2 px-4 text-left">Moved In At</th>
                    <th class="py-2 px-4 text-left">Ended At</th>
                    <th class="py-2 px-4 text-left">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movementHistory as $movement)
                    <tr class="hover:bg-gray-100 border-b">
                        <td class="py-2 px-4">{{ $movement->room->name }}</td>
                        <td class="py-2 px-4">{{ $movement->room->ward->name }}</td>
                        <td class="py-2 px-4">{{ $movement->moved_in_at }}</td>
                        <td class="py-2 px-4">
                            {{ $movement->moved_out_at ? $movement->moved_out_at : 'Still in room' }}
                        </td>
                        <td class="py-2 px-4">
                            @if (!$movement->moved_out_at)
                                <x-button wire:click="endSession({{ $movement->id }})">
                                    {{ __('End Session') }}
                                </x-button>
                            @else
                                <x-button disabled class="bg-gray-400 cursor-not-allowed">
                                    {{ __('Ended') }}
                                </x-button>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if($movementHistory->isEmpty())
            <div class="text-center py-4 text-gray-500">
                No movement history available for this patient.
            </div>
        @endif
    </div>
</div>
