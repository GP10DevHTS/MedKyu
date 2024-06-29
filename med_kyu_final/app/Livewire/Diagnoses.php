<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Diagnosis;
use App\Models\Doctor;
use App\Models\PatientDiagnosis;
use Livewire\Attributes\Url;

class Diagnoses extends Component
{
    #[Url()]
    public $record;
    public $patientId;
    public $description;
    public $doctor_diagnosis;
    public $diagnosis_date;
    public $doctor_id;

    protected $rules = [
        'description' => 'required|string|max:255',
        'doctor_diagnosis' => 'required|string|max:255',
    ];

    public function mount($user)
    {
        $this->patientId = User::find($user)->id;
        // doctor id should be the logged in doctor
        $this->doctor_id = auth()->user()->doctor ? auth()->user()->doctor->id : null;
    }

    public function saveDiagnosis()
    {
        $this->validate();

        PatientDiagnosis::create([
            // 'patient_id' => $this->patientId,
            'doctor_id' => $this->doctor_id,
            'description' => $this->description,
            'doctor_diagnosis' => $this->doctor_diagnosis,
            'diagnosis_date' => now(),
            'clinical_record_id' => $this->record,
        ]);

        $this->description = '';

        session()->flash('message', 'Diagnosis added successfully.');
    }
    public function render()
    {
        $diagnoses = PatientDiagnosis::where('clinical_record_id', $this->record)->get();
        $doctors = Doctor::all();
        return view('livewire.diagnoses', compact('diagnoses', 'doctors'));
    }
}
