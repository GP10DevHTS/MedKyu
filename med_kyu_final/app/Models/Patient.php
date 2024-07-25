<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'blood_group_id',
        'reg_no',
        'is_internal',
    ];

    protected static function booted()
    {
        static::creating(function ($patient) {
            if (empty($patient->reg_no)) {
                $patient->reg_no = uniqid();
                $patient->is_internal = false;
            }
        });
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bloodGroup()
    {
        return $this->belongsTo(BloodGroup::class);
    }

    public function symptoms()
    {
        return $this->hasMany(Symptom::class);
    }
}
