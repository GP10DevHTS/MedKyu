<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserAttendance extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['user_id', 'login_time', 'logout_time'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
