<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Times extends Model
{
    protected $fillable = [
        'name',
        'logo',
    ];

    protected $table = 'times';
}
