<?php

namespace App\Livewire\Patients;

use Livewire\Component;
use App\Models\TransfusionHistory;
class ListTransfusionHistory extends Component
{
    public $patient_id;

    public function mount($patient)
    {
        $this->patient_id = $patient;
    }

    public function render()
    {
        $transfusionHistories = TransfusionHistory::where('patient_id', $this->patient_id)->get();
        return view('livewire.patients.list-transfusion-history', compact('transfusionHistories'));
    }
}
