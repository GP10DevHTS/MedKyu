<?php

namespace App\Livewire\Dashboard;

use App\Models\Patient;
use Livewire\Component;

class NewPatientsCard extends Component
{
    public function render()
    {
        return view('livewire.dashboard.new-patients-card',[
            'count' => Patient::whereDate('created_at',date('Y-m-d'))->count(),
        ]);
    }
}
