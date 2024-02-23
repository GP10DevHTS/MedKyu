<?php

namespace App\Livewire;

use App\Models\MedicalInformation;
use Livewire\Component;
use App\Models\User;

class AdminViewMedHistoryModal extends Component
{
    public $viewMoreModal = false;
    public $medicalHistory;
    public function mount(){
        //pick the selected user 
        // $user = User::find($this->selectedUserId);
        // $this->medicalHistory = MedicalInformation::where('student_id', $user->id)->get();
        // dd($this->medicalHistory);

       }
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
