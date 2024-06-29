<div wire:pollk>
    {{-- The best athlete wants his opponent at his best. --}}
    @if (!App\Models\PatientMovement::where('patient_id', $patient->id)->where('moved_out_at', null)->exists())
        @livewire('patients.new-movement-modal', ['patientId' => $patient->id])
    @endif

    @livewire('patients.movement-history-modal', ['patientId' => $patient->id])

</div>
