<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
   public function place()
   {
       return $this->belongsTo('App\Place');
    }

    public function  language ()
    {
     return    $this->belongsToMany('App\Language');
    }

     public function  user ()
    {
        return $this->belongsToMany('App\User');
    }

// public function  time ()
//    {
//        return $this->belongsTo('App\Reservation');
//    }



}
