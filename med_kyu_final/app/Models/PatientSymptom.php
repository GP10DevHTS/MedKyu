<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientSymptom extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'description',
        'clinical_record_id',
        'created_by',
    ];
}
