<?php

namespace App\Livewire\Patients;

use App\Models\ClinicalRecord;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Patient;
use Livewire\Attributes\Validate;
use Livewire\Component;

class NewClinicalRecord extends Component
{
    public $patient;

    #[Validate('required|exists:patients,id')]
    public $patient_id;
    #[Validate('required|exists:doctors,id')]
    public $doctor_id;
    #[Validate('required|exists:departments,id')]
    public $department_id;
    
    public function mount($patient){
        try {
            $this->patient = Patient::findOrFail($patient);
            $this->patient_id = $patient;
            $this->doctor_id = auth()->user()->doctor ? auth()->user()->doctor->id : null;
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            abort(404, 'The specified patient or doctor does not exist.');
        }
    }
    public function render()
    {
        return view('livewire.patients.new-clinical-record',[
            'doctors' => Doctor::all(),
            'departments' => Department::all()
        ]);
    }

    public function saveClinicalRecord() {
        $this->validate();

        ClinicalRecord::create([
            'patient_id' => $this->patient->id,
            'doctor_id' => $this->doctor_id,
            'department_id' => $this->department_id
        ]);

        noty()->addSuccess('Patient clinical record created successfully');
        $this->reset(['department_id']);
    }
}
