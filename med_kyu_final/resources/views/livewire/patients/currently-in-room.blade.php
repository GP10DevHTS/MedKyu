<div class="p-4 max-w-md mx-auto">
    {{-- Nothing in the world is as soft and yielding as water. --}}
    @if ($patientMovement && $patientMovement->room)
        {{-- <div class="bg-white shadow-md rounded-lg overflow-hidden"> --}}
            {{-- <div class="px-6 py-4 bg-gray-800 text-white"> --}}
                {{-- <h2 class="text-xl font-semibold">Room Information</h2> --}}
            {{-- </div> --}}
            <div class="px-6 py-4">
                <p class="text-lg text-gray-900"> <b>Room:</b> {{ $patientMovement->room->name }}</p>
                <p class="text-gray-700"> <b>Ward:</b> {{ $patientMovement->room->ward->name }}</p>
                <p class="text-gray-700">{{ $patientMovement->room->ward->type }}</p>
                <p class="text-gray-600"> <b>{{ __('Moved in at: ') }}</b> {{ Carbon\Carbon::parse($patientMovement->moved_in_at)->format('d M Y, h:i A') }}</p>
            </div>
        {{-- </div> --}}
    @else
        <div class="bg-white  rounded-lg overflow-hidden">
           
            <div class="px-6 py-4">
                <p class="text-gray-700">{{ __('Currently not in any room') }}</p>
            </div>
        </div>
    @endif
</div>
