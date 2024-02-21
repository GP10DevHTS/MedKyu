<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class UsersDetailsCard extends Component
{
    public $userId;
    public $user;
    public $showUserDetailsModal = false;

    public function mount(User $user){
        $this->user = $user;
    }
    

    public function render()
    {
        // $user = User::first();
        return view('livewire.users-details-card');
    }

    public function viewUserDetails()
    {
        $this->showUserDetailsModal = true;
    }
}
