<?php

namespace App\Livewire\Attendance;

use App\Models\Patient;
use App\Models\User;
use App\Models\UserAttendance;
use Carbon\Carbon;
use Livewire\Component;

class AttandanceManagement extends Component
{
    public $userId;
    public $startDate;
    public $endDate;
    public $dateRange;


    public function mount() {
        $this->endDate = Carbon::today()->addDay();
        $this->startDate = $this->endDate->copy()->subDays(9); // Last 10 days including today
        for ($date = $this->startDate; $date->lte($this->endDate); $date->addDay()) {
            $this->dateRange[] = $date->copy();
        }
    }

    public function render()
    {
        
        return view('livewire.attendance.attandance-management',[
            'attendances' => UserAttendance::orderBy('login_time', 'desc')->get(),
            'staffMembers' => User::all()->reject(fn ($user) => Patient::where('user_id', $user->id)->exists()),
        ]);
    }

    public function login(){
        $user = User::find($this->userId);
        if ($user) {
            // check if user is already logged in
            if (UserAttendance::where('user_id', $user->id)->where('logout_time', null)->exists()) {
                noty()->addWarning('User is already logged in');
                return;
            }
            UserAttendance::create([
                'user_id' => $user->id,
                'login_time' => now(),
            ]);
            noty()->addSuccess('Saved');
            $this->reset(['userId']);
        }
    }

    public function logout($attendanceId){
        $attendance = UserAttendance::find($attendanceId);
        if ($attendance) {
            $attendance->update([
                'logout_time' => now(),
            ]);
            noty()->addSuccess('Saved');
        } else {
            noty()->addError('No attendance found');
        }
    }
}
