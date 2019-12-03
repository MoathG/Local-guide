<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public function  guide ()
    {
       return   $this->belongsToMany('App\Guide');
    }
}
