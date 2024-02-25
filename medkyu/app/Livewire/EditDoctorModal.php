<?php

namespace App\Livewire;

use Livewire\Component;

class EditDoctorModal extends Component
{

    public $isModalOpen = false; 
    
    public function render()
    {
        return view('livewire.edit-doctor-modal');
    }
    public function openEditModal()
    {
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
    }
}
