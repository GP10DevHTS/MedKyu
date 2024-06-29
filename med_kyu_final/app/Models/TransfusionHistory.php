<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransfusionHistory extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'transfusion_type',
        'date',
    ];
}
