<?php

namespace App\Livewire\Users;

use App\Models\Doctor;
use App\Models\Patient;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ListOfAllAdmin extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 10;
    public $orderBy = 'id';
    public $orderAsc = true;
    public $selectedUsers = [];

    public function render()
    {
        $patients = Patient::pluck('user_id')->toArray();
        $doctors = Doctor::pluck('user_id')->toArray();

        return view('livewire.users.list-of-all-admin', [
            'users' =>  User::whereNotIn('id', array_merge($patients, $doctors))
                ->search($this->search)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->paginate($this->perPage)
        ]);
    }

    public function openUserProfile($user_id)
    {
        $user = User::find($user_id);
        if ($user) {
            $this->redirectRoute('users.profile', ['user' => $user->id], navigate: true);
        }
    }
}
