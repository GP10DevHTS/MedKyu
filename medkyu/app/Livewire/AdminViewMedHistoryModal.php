<?php

namespace App\Livewire;

use App\Models\MedicalInformation;
use Livewire\Component;
use App\Models\User;

class AdminViewMedHistoryModal extends Component
{
    public $viewMoreModal = false;
    public $medicalHistory;
    public $userId;
    // public function mount($userId){
    //     $this->userId = $userId;
    //     $this->medicalHistory = MedicalInformation::where('student_id', $this->userId)->get();
       

    //    }
    public function render()
    {
        return view('livewire.admin-view-med-history-modal');
    }

    public function openViewMore()
    {
        $this->viewMoreModal = true;
    }

    public function closeMoreModal()
    {
        $this->viewMoreModal = false;
    }
}
