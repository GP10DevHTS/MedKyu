<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        // 'doctor_id',
        'description',
        'doctor_diagnosis',
        'diagnosis_date',
    ];
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');  
    }
    // public function doctor()
    // {
    //     return $this->belongsTo(Doctor::class, 'doctor_id');
    // }
}
