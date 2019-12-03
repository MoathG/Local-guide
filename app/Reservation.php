<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['to', 'from', 'guides_id','user_id'];

    public $timestamps = false;

    public function guide()
    {
        return $this->belongsTo('App\Guide','guides_id');
    }

 public function user()
    {
        return $this->belongsTo('App\User');
    }


}
