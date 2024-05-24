<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'insurance_name',
        'insurance_number',
        'insurance_provider',
        'policy_number',
        'coverage_details',
    ];
}
