<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Component;
use Spatie\Permission\Models\Role;
use App\Models\User;

class AdminAddUserModal extends Component
{
    public $isModalOpen = false;

    // public $roles;

    public $name;
    public $email;
    public $password;
    public $role;

    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'role' => 'required',
    ];
    public function mount()
    {
        // $this->roles = Role::all();
        // dd($this->roles);
    }

    public function createUser()
    {
        $this->validate();
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'role' => $this->role

        ]);
        $r = Role::
        find($this->role);

        // dd($r->name);
        $user->assignRole($r->name);
        // $user->assignRole($this->role);

        // dd($user);
        $this->isModalOpen = false;
        $this->reset();
    }
    

    
        
    public function render()
    {
        return view('livewire.admin-add-user-modal', [
            'roles' => Role::all(),
        ]);
    }

    public function openCreateModal()
    {
        $this->isModalOpen = true;
    }
}
