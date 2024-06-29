<div wire:poll>
    {{-- <h2 class="text-lg font-medium mb-4">Allergies for {{ $patient->name }}</h2> --}}
    
    @if ($allergies->isEmpty())
        <p class="text-gray-500">No allergies found for this patient.</p>
    @else
        <ul class="list-disc pl-5">
            @foreach ($allergies as $allergy)
                <li class="mb-2">{{ $allergy->allergy }}</li>
            @endforeach
        </ul>
    @endif
</div>
