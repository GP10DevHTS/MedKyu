<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function departments()
    {
        return $this->belongsToMany(Department::class, 'doctor_department', 'doctor_id', 'department_id');
    }
}
