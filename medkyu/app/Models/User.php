<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;


use App\Models\EmergencyContact;
use App\Models\MedicalInformation;
use App\Models\InsuranceInformation;
use App\Models\HealthCareInformation;
use App\Models\Availabilities;
use App\Models\Prescriptions;
use App\Models\LabTest;



class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function emergency_contacts(){
        return $this->hasMany(EmergencyContact::class, 'student_id');
    }

    public function student()
    {
        return $this->belongsTo(User::class);
    }
    public function doctor()
    {
        return $this->belongsTo(User::class);
    }
    public function insurance_information()
    {
        return $this->hasMany(InsuranceInformation::class, 'student_id');
    }
    // public function insurance_informations()
    // {
    //     return $this->hasMany(InsuranceInformation::class, 'student_id');
    // }
    public function medical_history()
    {
        return $this->hasMany(MedicalInformation::class, 'student_id');
    }
    public function availability()
    {
        return $this->hasMany(Availabilities::class, 'doctor_id');
    }
    
    public function lab_tests()
    {
        return $this->hasMany(LabTest::class,'patient_id');
    }

    public function prescriptions()
    {
        return $this->hasMany(Prescription::class, 'patient_id');
    }
    
    public function emergency_contact()
    {
        return $this->hasMany(EmergencyContact::class, 'student_id');
    }
}
