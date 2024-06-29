<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = [
        'department_name',
        'department_description',
    ];
    public function doctors()
    {
        return $this->hasManyThrough(Doctor::class, DoctorDepartment::class, 'department_id', 'id', 'id', 'doctor_id');
    }
}
