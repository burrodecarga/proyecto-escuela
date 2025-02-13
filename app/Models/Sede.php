<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    const FOTO = '/img/schools/foto.png';
    const SCHOOL = '/img/schools/school.jpg';


    protected $fillable = [
        'name',
        'nit',
        'dane',
        'slug',
        'numero',
        'school_id',
        'address',
        'department',
        'municipality',
        'email',
        'phone',
        'cell',
        'sector',
        'logo',
        'image',
    ];

    protected $attributes = [
        'logo' => self::FOTO,
        'image' => self::SCHOOL,
    ];

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function schedules()
    {
        return $this->belongsToMany(Schedule::class);
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function grados()
    {
        return $this->belongsToMany(Grado::class)->withPivot('numero', 'letra', 'id')->orderby('grado_id');
    }

    public function coordinadores()
    {
        return $this->belongsToMany(User::class);
    }

    // public function teachers()
    // {
    //     return $this->belongsToMany(Teacher::class);
    // }

    // public function students()
    // {
    //     return $this->hasMany(User::class, 'user_id');
    // }
}
