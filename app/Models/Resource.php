<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $fillable = [
        'name',
        'category',
        'description',
        'ubication',
        'quantity',
        'resourceable_id',
        'resourceable_type',
    ];
}
