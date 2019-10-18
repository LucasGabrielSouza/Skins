<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skins extends Model
{
    

    protected $fillable = [
        'name',
        'float',
        'price',
        'stattrak',
        'pic',
        'description'
    ];
}
