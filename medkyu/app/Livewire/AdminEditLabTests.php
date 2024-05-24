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
    public function mount($id){
        $this->student = User::findOrFail($id);
    }
    public function update(){
        $studentId = $this->student->id;
        $this->validate([
            'test_name' => 'required',
            // 'patient_id' => 'required',
            'sample_type' => 'required',
            'result_value' => 'required',
            'test_date' => 'required',
            'reference_range' => 'required',
            'interpretation' => 'required',
        ]);
        
        $labtest =LabTest::updateorCreate([
            'test_name' => $this->test_name,
            'patient_id' => $studentId,
            'sample_type' => $this->sample_type,
            'result_value' => $this->result_value,
            'test_date' => $this->test_date,
            'reference_range' => $this->reference_range,
            'interpretation' => $this->interpretation,
        ]);
        dd($labtest);
    }

    public function render()
    {
        return view('livewire.admin-edit-lab-tests');
    }
}
