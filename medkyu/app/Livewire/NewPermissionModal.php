<?php

namespace App\Livewire;

use Livewire\Component;

class NewPermissionModal extends Component
{
    public $isModalOpen = false;
    public function render()
    {
        return view('livewire.new-permission-modal');
    }

    public function openModal()
    {
        // Logic to create a new role
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
    }
}
