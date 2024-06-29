<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurgeryHistory extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'surgery',
        'date',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
