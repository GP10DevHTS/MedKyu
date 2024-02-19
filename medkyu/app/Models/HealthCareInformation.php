<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthCareInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'doctor_id',
        'specialty',
        'license_number',
        'contact_number',
        'email',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
