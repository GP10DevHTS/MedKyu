<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmergencyContact extends Model
{
    use HasFactory;
    protected $fillable = [
    //    'student_id',
       'relationship',
       'address',
       'contact_name',
       'contact_number',
       'contact_email',
    ];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    
    

}
