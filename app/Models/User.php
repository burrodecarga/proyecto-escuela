<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;

class User extends Authenticatable
{
    use HasApiTokens;

    /** @use HasFactory<\Database\Factories\UserFactory> */
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

    const MENOR = 9;
    const MEDIO = 17;
    const MAYOR = 18;

    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'phone',
        'gender',
        'birthdate',
        'rol',
        'confirmed',
        'active',
        'cedula',
        'parent_id',
        'last_name',
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
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    protected $dates = [
        'created_at',
        'updated_at',
        'birthdate',
        // your other new column
    ];

    protected $attributes = [];


    public function getAge()
    {
        $this->birthdate->diff($this->attributes['dob'])
            ->format('%y years, %m months and %d days');
    }

    public function age()
    {
        return Carbon::parse($this->attributes['birthdate'])->age;
    }

    public function is_minor()
    {
        $edad = Carbon::parse($this->attributes['birthdate'])->age;
        return $edad > self::MENOR;
    }

    public function role_type()
    {
        $edad = Carbon::parse($this->attributes['birthdate'])->age;

        if ($edad <= self::MENOR) {
            $role = 'student-basic';
        } elseif ($edad > self::MENOR and $edad <= self::MEDIO) {
            $role = 'student-basic';
        } else {
            $role = 'student-high';
        }

        return $role;
    }



    public function coordina()
    {
        return $this->belongsToMany(Sede::class);
    }
}
