<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\LabTest;
use Illuminate\Support\Facades\Auth;

class AdminEditLabTests extends Component
{
    public $student;
    public $test_name;
    public $patient_id;
    public $sample_type;
    public $result_value;
    public $test_date;
    public $reference_range;
    public $interpretation;
    public $doctor_id;
    // public $doctors;
    public function mount($id){
        $this->student = User::findOrFail($id);
    }
    public function update(){
        $studentId = $this->student->id;
        $this->validate([
            // 'patient_id' => 'required',
            'test_name' => 'required',
            'doctor_id' => 'required',
            'sample_type' => 'required',
            'result_value' => 'required | numeric',
            'test_date' => 'required ',
            'reference_range' => 'required | numeric',
            'interpretation' => 'required ',
        ]);
        
        $labtest =LabTest::updateorCreate([
            'doctor_id' => $this->doctor_id,
            'test_name' => $this->test_name,
            'patient_id' => $studentId,
            'sample_type' => $this->sample_type,
            'result_value' => $this->result_value,
            'test_date' => $this->test_date,
            'reference_range' => $this->reference_range,
            'interpretation' => $this->interpretation,
        ]);
        $this->dispatch('alert' , [
            'title' => 'success',
            'message' => 'Lab test added successfully',
            'icon' => 'success'
        ]);

    }

    public function render()
    {
        $doctors = User::role('doctor')->get();
        return view('livewire.admin-edit-lab-tests',compact('doctors'));
    }
}
