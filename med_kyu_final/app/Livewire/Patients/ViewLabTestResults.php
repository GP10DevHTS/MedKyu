<?php

namespace App\Livewire\Patients;

use App\Models\PatientLabTest;
use Livewire\Attributes\Url;
use Livewire\Component;


class ViewLabTestResults extends Component
{
    #[Url()]
    public $record;

    public function render()
    {
        $patientLabTest = PatientLabTest::where('clinical_record_id', $this->record)->get();

        return view('livewire.patients.view-lab-test-results', [
            'patientLabTest' => $patientLabTest
        ]);
    }
}
