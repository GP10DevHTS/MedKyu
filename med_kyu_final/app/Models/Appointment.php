<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'patient_id', 
        'department_id', 
        'start_time',
         'end_time',
         'status',
         'reason',
         'cancel_reason',
        ];

        public function doctor(){
            return $this->belongsTo(Doctor::class,'doctor_id');
        }

        public function patient(){
            return $this->belongsTo(Patient::class,'patient_id');
        }

        public function department(){
            return $this->belongsTo(Department::class,'department_id');
        }
}
