<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientDiagnosis extends Model
{
    use HasFactory;

    protected $fillable = [
        'clinical_record_id',
        'doctor_id',
        'description',
        'doctor_diagnosis',
        'diagnosis_date',
    ];

    public function doctor(){
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
}
