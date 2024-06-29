<?php

namespace App\Livewire;

use App\Models\ClinicalRecord;
use App\Models\Doctor;
use App\Models\PatientTreatment;
use Livewire\Component;
use App\Models\Treatment;
use App\Models\User;
use Livewire\Attributes\Url;

class Treatments extends Component
{
    public $patientId;
    #[Url()]
    public $record;
    public $name;
    public $description;
    public $type;
    public $dosage;
    public $frequency;
    public $start_date;
    public $duration;
    public $prescribed_by;

    public $clinicalRecord;

    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'type' => 'nullable|string',
        'dosage' => 'nullable|string',
        'frequency' => 'nullable|string',
        'start_date' => 'nullable|date',
        'duration' => 'nullable|string',
        'prescribed_by' => 'required|exists:doctors,id',
    ];

    public function mount($user)
    {
        $this->patientId = User::find($user)->id;
        $this->start_date = date('Y-m-d H:i:s');
        $this->prescribed_by = auth()->user()->doctor ? auth()->user()->doctor->id : null;

        $this->clinicalRecord = ClinicalRecord::withTrashed()->find($this->record);
    }

    public function saveTreatment()
    {
        $this->validate();

        PatientTreatment::create([
            'clinical_record_id' => $this->record,
            'name' => $this->name ?? null,
            'description' => $this->description ?? null,
            'type' => $this->type ?? null,
            'dosage' => $this->dosage ?? null,
            'duration' => $this->duration ?? null,
            'frequency' => $this->frequency ?? null,
            'start_date' => $this->start_date ?? null,
            'prescribed_by' => $this->prescribed_by,
        ]);

        $this->resetInputFields();
        noty()->addSuccess('Treatment added successfully.');
        // session()->flash('message', 'Treatment added successfully.');
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->description = '';

    }
    public function render()
    {
        $treatments = PatientTreatment::withTrashed()->where('clinical_record_id', $this->record)->get();
        $doctors = Doctor::all();
        return view('livewire.treatments', compact('treatments', 'doctors'));
    }

    public function terminateTreatment($id){
        $treatment = PatientTreatment::find($id);
        $treatment->delete();
        noty()->addSuccess('Treatment terminated successfully');        
    }
}
