<?php

namespace App\Livewire;

use Livewire\Component;

class DeleteRoleModal extends Component
{
    public $isModalOpen = false;
    public $password = '';

    public function confirmDelete()
    {
        // Additional logic to check password or any other conditions
        $this->isModalOpen = true;
    }

    public function deleteRole()
    {
        // Logic to delete the role
        $this->isModalOpen = false;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
    }

    
    public function render()
    {
        return view('livewire.delete-role-modal');
    }
}
