<?php

namespace App\Livewire\Dashboard;

use App\Models\UserAttendance;
use Livewire\Component;

class PersonalAttendanceRecord extends Component
{
    public function render()
    {
        return view('livewire.dashboard.personal-attendance-record',[
            'attendances' =>  UserAttendance::where('user_id', auth()->user()->id)
                ->orderBy('login_time', 'desc')
                ->take(10)
                ->get(),
        ]);
    }
}
