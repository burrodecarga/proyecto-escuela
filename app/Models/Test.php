<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [
        'lectivo_id',
        'user_id',
        'user_name',
        'fecha',
        'lapso',
        'type',
        'percentage',
        'result',
        'final',
        'scale',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lectivo()
    {
        return $this->belongsTo(Lectivo::class);
    }
}
