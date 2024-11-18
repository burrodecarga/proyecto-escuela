<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'section_id'
    ];


    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function video()
    {
        return $this->hasOne(Video::class);
    }


    public function pdfs()
    {
        return $this->hasMany(Pdf::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
