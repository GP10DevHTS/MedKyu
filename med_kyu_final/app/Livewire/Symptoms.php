<?php

namespace App\Livewire;

use App\Models\Patient;
use App\Models\PatientSymptom;
use Livewire\Component;
use App\Models\Symptom;
use App\Models\User;
use Livewire\Attributes\Url;
use App\Models\ClinicalRecord;

class Symptoms extends Component
{
    #[Url()]
    public $record;
    public $patientId;
    public $description;
    public $clinicalRecord;

    protected $rules = [
        'description' => 'required|string|max:255',
    ];

    public function mount($user)
    {
        $this->patientId = User::find($user)->id;
        $this->clinicalRecord = ClinicalRecord::withTrashed()->find($this->record);

    }

    public function saveSymptom()
    {
        $this->validate();

        PatientSymptom::create([
            // 'patient_id' => $this->patientId,
            'description' => $this->description,
            'created_by' => auth()->user()->id,
            'clinical_record_id' => $this->record,
        ]);

        $this->description = '';

        session()->flash('message', 'Symptom added successfully.');
    }

    public function render()
    {
        $symptoms = PatientSymptom::where('clinical_record_id', $this->record)->get();
        return view('livewire.symptoms',
            [
                'symptoms' => $symptoms
            ]);
    }
}
