<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['ward_id', 'name', 'capacity'];

    public function ward()
    {
        return $this->belongsTo(Ward::class);
    }

    public function patientMovements()
    {
        return $this->hasMany(PatientMovement::class);
    }
}
