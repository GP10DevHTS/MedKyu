<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class RoleUsersTable extends Component
{
    use WithPagination;

    public $role;

    public function render()
    {
        // Use the role name directly in the query to filter users
        $users = User::role($this->role->name)->paginate(10);

        // Livewire will automatically look for a view named 'livewire.role-users-table'
        return view('livewire.role-users-table', compact('users'));
    }
}
