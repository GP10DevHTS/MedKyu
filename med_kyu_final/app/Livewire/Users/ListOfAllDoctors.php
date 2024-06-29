<?php

namespace App\Livewire\Users;

use App\Models\Doctor;
use App\Models\User;
use Livewire\Component;

class ListOfAllDoctors extends Component
{
    public $search = '';
    public $perPage = 10;
    public $orderBy = 'id';
    public $orderAsc = true;
    public $selectedUsers = [];

    public function render()
    {

        return view('livewire.users.list-of-all-doctors', [
            'users' => User::whereIn('id', Doctor::pluck('user_id'))
                ->search($this->search)

                ->orderBy('id', 'asc')
                ->paginate($this->perPage)
        ]);
    }
    
    public function openUserProfile($user_id){
        $user = User::find($user_id);
        if ($user) {
            $this->redirectRoute('users.profile', ['user' => $user->id], navigate: true);
        }
    }
}
