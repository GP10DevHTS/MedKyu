<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabTest extends Model
{
    use HasFactory;

    protected $fillable = [
        'test_name',
        'sample_type',
        'result_value',
        'reference_range',
        'interpretation',
        'test_date',
    ];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }
    

}
