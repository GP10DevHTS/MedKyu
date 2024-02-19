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
}
