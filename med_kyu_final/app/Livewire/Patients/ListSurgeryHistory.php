<?php

namespace App\Livewire\Patients;

use Livewire\Component;
use App\Models\SurgeryHistory;

class ListSurgeryHistory extends Component
{
    public $patient_id;

    public function mount($patient)
    {
        $this->patient_id = $patient;
    }
    public function render()
    {
        $surgeryHistories = SurgeryHistory::where('patient_id', $this->patient_id)->get();
        return view('livewire.patients.list-surgery-history',[
            'surgeryHistories' => $surgeryHistories
        ]);
    }
}
