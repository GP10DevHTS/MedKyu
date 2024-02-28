<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class AllUsersTable extends Component
{
    public function render()
    {
        
        $users = User::role('student')->get(); 
        return view('livewire.all-users-table', ['users' => $users]);
    }
    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
    }
}
