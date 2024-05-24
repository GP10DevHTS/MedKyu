<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabTest extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id',
        'patient_id',
        'test_name',
        'sample_type',
        'result_value',
        'reference_range',
        'interpretation',
        'test_date',
    ];

    public function patient()
    {
        return $this->belongsTo(User::class,'patient_id');
    }

    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }
    

}
