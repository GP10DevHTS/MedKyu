<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\InsuranceInformation;
use App\Models\User;

class AdminEditInsuranceModal extends Component
{
    public $showEditInsuranceModal = false;
    public $insuranceInformation;
    public $student_id;
    public $insurance_name;
    public $insurance_number;
    public $insurance_provider;
    public $policy_number;
    public $coverage_details;
    public $student;
    public function mount($id){
        $this->student = User::findOrFail($id);
        $this->insuranceInformation = InsuranceInformation::where('student_id', $this->student->id)->first();
        
    }

    protected $rules = [
       'insurance_name' => 'required',
       'insurance_number' => 'required',
       'insurance_provider' => 'required',
       'policy_number' => 'required',
       'coverage_details' => 'required',
    ];
    
    public function editInsuranceInformation()
    {
        $this->showEditInsuranceModal = true;
    }

    public function update()
    {
        $studentId = $this->student->id;
        // dd($studentId);
        $this->validate();
        $insurance =InsuranceInformation::updateOrCreate([
            'student_id' => $studentId,
            'insurance_name' => $this->insurance_name,
            'insurance_number' => $this->insurance_number,
            'insurance_provider' => $this->insurance_provider,
            'policy_number' => $this->policy_number,
            'coverage_details' => $this->coverage_details,
        ]);
        $this->dispatch('alert' , [
            'title' => 'success',
            'message' => 'Insurance Information Updated.',
            'icon' => 'success'
        ]);
        // reset fields
        $this->insurance_name = '';
        $this->insurance_number = '';
        $this->insurance_provider = '';
        $this->policy_number = '';
        $this->coverage_details = '';
        // $this->showEditInsuranceModal = false;
        
       
    }

    public function render()
    {
        return view('livewire.admin-edit-insurance-modal');
    }

    
    
}
