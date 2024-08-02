<div>

    @if (request()->routeIs('patient.clinical-records', ['user' => $user->id]))
        @livewire('patients.new-clinical-record', ['patient' => $user->patient->id], key('patient-new-clinical-record'))

        @livewire('patients.clinical-records-list', ['patient' => $user->patient->id], key('patient-clinical-records-list'))
    @elseif (request()->routeIs('patient.clinical-record.view', ['user' => $user->id]))
        @livewire('symptoms', ['user' => $user->patient->id])
        <hr>
        @livewire('diagnoses', ['user' => $user->patient->id])
        <hr>
        @livewire('lab-tests', ['user' => $user->patient->id])
        <hr>
        @livewire('treatments', ['user' => $user->patient->id])
    @endif

</div>
