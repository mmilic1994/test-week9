<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emergency extends Model
{
    protected $fillable = [
        'subject',
        'description'   
    ];

    public $timestamps = false;
}
