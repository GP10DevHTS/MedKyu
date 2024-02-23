<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\InsuranceInformation;

class AdminEditInsuranceModal extends Component
{
    public $showEditInsuranceModal = false;
    public $insuranceInformation;
    public $insuranceName;
    public $insuranceNumber;
    public $insuranceProvider;
    public $policyNumber;
    public $coverageDetails;

    protected $rules = [
        'insuranceName' => 'required',
        'insuranceNumber' => 'required',
        'insuranceProvider' => 'required',
        'policyNumber' => 'required',
        'coverageDetails' => 'required',
    ];
    
    public function editInsuranceInformation()
    {
        $this->showEditInsuranceModal = true;
    }

    public function updateInsuranceInformation()
    {
        $this->validate();
        $this->insuranceInformation->update([
            'insurance_name' => $this->insuranceName,
            'insurance_number' => $this->insuranceNumber,
            'insurance_provider' => $this->insuranceProvider,
            'policy_number' => $this->policyNumber,
            'coverage_details' => $this->coverageDetails,
        ]);
        // dd($this->insuranceInformation);
        $this->showEditInsuranceModal = false;
    }

    public function render()
    {
        return view('livewire.admin-edit-insurance-modal');
    }

    
    
}
