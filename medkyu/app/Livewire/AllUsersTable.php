<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class AllUsersTable extends Component
{
    public function render()
    {
        $users = User::with('roles')
            ->get();

        // dd($users);
        return view('livewire.all-users-table', ['users' => $users]);
    }
}
