<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pdf extends Model
{
    use HasFactory;

    const FISICO = 1;
    const VIRTUAL = 0;

    protected $fillable = [
        'title',
        'author',
        'category',
        'isbn',
        'editorial',
        'quantity',
        'pages',
        'status',
        'course',
        'level',
        'grado',
        'extension',
        'url',
        'lesson_id',
        'grado_id'
    ];



    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
