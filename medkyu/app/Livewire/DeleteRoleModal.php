<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;



class DeleteRoleModal extends Component
{
    public $isModalOpen = false;

    #[Rule(['required', 'string', 'current_password:web'])]
    public $password = '';

    public $role;


    public function mount($role)
    {
        $this->role = $role;
    }

    public function confirmDelete()
    {
        // Additional logic to check password or any other conditions
        $this->isModalOpen = true;
    }

    public function deleteRole()
    {
        $this->validate();
        $this->role->delete(); 
        $this->dispatch('alert' , [
            'title' => 'success',
            'message' => 'Role deleted successfully.',
            'icon' => 'success'
        ]);
        $this->closeModal();

        // redirect to roles
        return redirect()->route('roles.list');
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
