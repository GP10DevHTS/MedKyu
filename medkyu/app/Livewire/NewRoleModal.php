<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Spatie\Permission\Models\Role;

class NewRoleModal extends Component
{
    public $isModalOpen = false;

    #[Rule(['required', 'string', 'max:255', 'unique:roles,name', 'min:3'])]
    public $newRoleName = '';
    public function render()
    {
        return view('livewire.new-role-modal');
    }

    public function openModal()
    {
        $this->isModalOpen = true;
    }
    
    public function closeModal()
    {
        $this->isModalOpen = false;
    }

    public function createRole()
    {
        $this->validate();
        $role = Role::create(['name'=>$this->newRoleName,'guard_name'=>'web']);
        $this->dispatch('alert' , [
            'title' => 'success',
            'message' => 'Role created successfully.',
            'icon' => 'success'
        ]);
        $this->closeModal();
        return redirect()->route('roles.list');
        
    }
}   
