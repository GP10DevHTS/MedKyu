<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\LabTest;
use App\Models\PatientLabTest;
use App\Models\User;
use Livewire\Attributes\Url;
use App\Models\ClinicalRecord;

class LabTests extends Component
{
    public $patientId;
    #[Url()]
    public $record;
    public $lab_test_id;
    public $clinicalRecord;

    protected $rules = [
        'lab_test_id' => 'required|exists:lab_tests,id',
        // 'result' => 'required|string|max:255',
    ];

    public function mount($user)
    {
        $this->patientId = User::find($user)->id;
        $this->clinicalRecord = ClinicalRecord::withTrashed()->find($this->record);
    }

    public function saveLabTest()
    {
        $this->validate();

        PatientLabTest::create([
            'clinical_record_id' => $this->record,
            'lab_test_id' => $this->lab_test_id,
            'created_by' => auth()->user()->id,
        ]);

        $this->resetInputFields();

        session()->flash('message', 'Lab test added successfully.');
    }

    private function resetInputFields()
    {
        $this->lab_test_id = '';
        // $this->result = '';
    }
    public function render()
    {
        $labTests = LabTest::get();
        return view('livewire.lab-tests', compact('labTests'));
    }
}
