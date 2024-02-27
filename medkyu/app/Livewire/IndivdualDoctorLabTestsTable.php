<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\LabTest;

class IndivdualDoctorLabTestsTable extends Component
{
    public $labTests;
    // public $doctor;
    public function mount($id){
        try {
            $this->labTests = LabTest::where('doctor_id', $id)->get();
            
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
            // Handle the case where the LabTest model with the given ID doesn't exist
            // For example, you could redirect back with an error message
            return redirect()->back()->with('error', 'LabTest not found');
        }
    }
    public function render()
    {
        return view('livewire.indivdual-doctor-lab-tests-table');
    }
}
