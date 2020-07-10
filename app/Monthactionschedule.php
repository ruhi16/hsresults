<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Monthaction;

class Monthactionschedule extends Model
{
    protected $guard = [];

    
    public function monthactions(){
        return $this->hasMany('App\Monthaction');
    }
}
