<?php

namespace App\Livewire\Dashboard;

use App\Models\Patient;
use App\Models\User;
use Livewire\Component;

class TotalStaffMembers extends Component
{
    public function render()
    {
        return view('livewire.dashboard.total-staff-members',[
            'count' => User::all()->reject(fn ($user) => Patient::where('user_id', $user->id)->exists())->count(),
        ]);
    }
}
