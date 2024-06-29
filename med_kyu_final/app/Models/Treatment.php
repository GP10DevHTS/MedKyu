<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'name',
        'description',
        'treatment_date',

    ];
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
