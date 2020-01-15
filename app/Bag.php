<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bag extends Model
{
    protected $fillable = [
        'name', 'content','id_user',
    ];
}
