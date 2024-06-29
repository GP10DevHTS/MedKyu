<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientMovement extends Model
{
    use HasFactory;

    protected $fillable = ['patient_id', 'room_id', 'moved_in_at', 'moved_out_at'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
