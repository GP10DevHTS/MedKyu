<div class="p-4">
    <div class="text-center mb-4">
        <h2 class="text-2xl font-semibold">Doctor's Availability Calendar</h2>
    </div>

    <div class="grid grid-cols-7 gap-4">
        {{-- Days of the week --}}
        <div class="font-bold text-center">Sun</div>
        <div class="font-bold text-center">Mon</div>
        <div class="font-bold text-center">Tue</div>
        <div class="font-bold text-center">Wed</div>
        <div class="font-bold text-center">Thu</div>
        <div class="font-bold text-center">Fri</div>
        <div class="font-bold text-center">Sat</div>

        {{-- Empty cells for days before the start of the month --}}
        @for($i = 0; $i < $startDayOfWeek; $i++)
            <div class="p-4 border"></div>
        @endfor

        {{-- Days of the month --}}
        @foreach($daysInMonth as $day)
            <div class="p-4 border">
                <div class="text-center font-bold">{{ $day }}</div>
                
                {{-- Display availability slots for each day --}}
                @foreach($availabilitySlots->where('available_date', $currentYearMonth . '-' . str_pad($day, 2, '0', STR_PAD_LEFT)) as $slot)
                    <div class="mt-2 p-2 bg-green-200 rounded text-xs text-center">
                        {{ Carbon\Carbon::parse($slot->available_time)->format('H:i') }}
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>

    {{-- No availabilities message --}}
    @if($availabilitySlots->isEmpty())
        <div class="mt-4 text-center text-red-500">
            No availabilities set
        </div>
    @endif
</div>
