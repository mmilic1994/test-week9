<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{

    public function image() 
    {

        return $this->belongsToMany('App/Image', 'hero_image', 'hero_id', 'image_id');
    }

    
}
