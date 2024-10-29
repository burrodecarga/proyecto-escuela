<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    const FOTO = '/img/schools/foto.png';
    const SCHOOL = '/img/schools/school.jpg';

    protected $fillable = [
        'name',
        'slug',
        'nit',
        'dane',
        'logo',
        'image',
    ];

    protected $attributes = [
        'logo' => self::FOTO,
        'image' => self::SCHOOL,
    ];

    public function sedes()
    {
        return $this->hasMany(Sede::class);
    }
}
