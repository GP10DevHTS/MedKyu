<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'blood_type',
        'height',
        'weight',
        'medical_history',
        'allergies',
        'current_medications',
        'special_needs',
        'chronical_illnesses',
    ];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function insurance_informations()
    {
        return $this->hasMany(InsuranceInformation::class, 'student_id');
    }
}
