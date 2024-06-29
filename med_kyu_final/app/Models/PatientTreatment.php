<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientTreatment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'clinical_record_id',
        'name',
        'description',
        'type',
        'dosage',
        'duration',
        'frequency',
        'start_date',
        // 'end_date',
        'prescribed_by',
    ];

    public function clinicalRecord()
    {
        return $this->belongsTo(ClinicalRecord::class);
    }

    public function prescribedBy()
    {
        return $this->belongsTo(Doctor::class, 'prescribed_by');
    }
}
