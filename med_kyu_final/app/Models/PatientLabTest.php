<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientLabTest extends Model
{
    use HasFactory;

    protected $fillable = [
        'clinical_record_id',
        'lab_test_id',
        'result',
        'test_date',
        'done_by',
        'created_by',
    ];

    public function labTest()
    {
        return $this->belongsTo(LabTest::class);
    }
}
