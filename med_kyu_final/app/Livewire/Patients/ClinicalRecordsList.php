<?php

namespace App\Livewire\Patients;

use App\Models\ClinicalRecord;
use App\Models\Patient;
use Livewire\Component;

class ClinicalRecordsList extends Component
{
    public $patient;

    public function mount($patient)
    {
        try {
            $this->patient = Patient::findOrFail($patient);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            abort(404, 'The specified patient does not exist.');
        }
    }

    public function render()
    {
        return view('livewire.patients.clinical-records-list',[
            'clinicalRecords' => ClinicalRecord::withTrashed()->where('patient_id', $this->patient->id)->orderBy('created_at', 'desc')->get()
        ]);
    }

    public function closeRecord($id){
        ClinicalRecord::findOrFail($id)->delete();
        noty()->addSuccess('Status Updated');
        $this->dispatch('refreshList');
    }
}
