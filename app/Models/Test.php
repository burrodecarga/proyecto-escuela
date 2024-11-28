<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [
        'lectivo_id',
        'user_id',
        'user_name',
        'type',
        'percentage',
        'fecha',
        'result',
        'scale',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
