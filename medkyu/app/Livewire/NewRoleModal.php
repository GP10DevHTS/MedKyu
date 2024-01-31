<?php

namespace App\Livewire;

use Livewire\Component;

class NewRoleModal extends Component
{
    public $isModalOpen = false;
    public function render()
    {
        
        return view('livewire.new-role-modal',[
            'allPermissions'=>\Spatie\Permission\Models\Permission::all(),
        ]);
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
