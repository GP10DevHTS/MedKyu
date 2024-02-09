<?php

namespace App\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Livewire\Attributes\Rule;

class NewPermissionModal extends Component
{
    public $isModalOpen = false;
    #[Rule('required|min:3|max:255|unique:permissions,name')]
    public $newPermissionName ; 
    public function render()
    {
        return view('livewire.new-permission-modal');
    }

    public function openModal()
    {
        $this->isModalOpen = true;
    }

    public function createPermission(){
        $this->validate();
        Permission::create(['name' => $this->newPermissionName, 'guard_name' => 'web']);
        $this->dispatch('alert', [
            'title' => 'success',  
            'message' => 'Permission created successfully.', 
            'icon' => 'success'
        ]);
        $this->isModalOpen = false;
        $this->newPermissionName = null;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
    }
}
